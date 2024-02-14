<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class UserController extends Controller
{
    protected $data = [];

    public function __construct()
    {
    }

    public function dashboard($id = "")
    {
        if (!Auth::check()) {
            return redirect()->route('signin');
        }
        $this->data['user_pending_loan'] = DB::table('loan_app')->where(['user_id' => Auth::user()->id])->whereIn('status', ['0', '2'])->exists();
        if ($id) {
            $getLoan = DB::table('loan_app')->where(['id' => $id])->get();
            $secondFormData = DB::table('form_second')->where(['loan_app_id' => $id])->get();
            $thirdFormData = DB::table('documents')->where(['loan_app_id' => $id])->get();
            // $current_city = $getLoan ? $getLoan[0]->current_city : "";
            $cities = DB::table('cities')->get();
            $this->data['edited_data'] = ["loan_app" => $getLoan, "second_form" => $secondFormData, "documents" => $thirdFormData, 'cities' => $cities];
            $states = DB::table('states')->where(['country_id' => 105])->get();
            // echo '<pre>'; print_r($this->data['edited_data']); echo '<pre>'; die();

            return view('pages.loan_application', ['states' => $states, 'data' => $this->data['edited_data']]);
        }
        $states = DB::table('states')->where(['country_id' => 105])->get();
        return view('pages.loan_application', ['states' => $states, 'data' => $this->data]);
    }

    public function fetchCitiesByStateId($id)
    {
        $cities = DB::table('cities')->where('state_id', $id)->get();

        return response()->json([true, 'cities' => $cities], 200);
    }

    public function user_loan_list(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('signin');
        }
        if ($request->ajax()) {
            $loanList = DB::table('users')
                ->join('loan_app', 'loan_app.user_id', '=', 'users.id')
                ->join('form_second',  'form_second.loan_app_id', '=', 'loan_app.id')
                ->join('documents', 'documents.loan_app_id', '=', 'loan_app.id')
                ->select('users.firstname', 'loan_app.id', 'loan_app.loan_type','loan_app.reason' ,'loan_app.amount', 'loan_app.status', 'loan_app.created_at')
                ->where(['user_id' => Auth::user()->id])
                ->get();

            return response()->json($loanList, 200);
        }
        $this->data['user_pending_loan'] = DB::table('loan_app')->where(['user_id' => Auth::user()->id])->whereIn('status', ['0', '2'])->exists();
        return view('pages.user_loan_list', ['data' => $this->data]);
    }

    public function save_form_first(Request $request)
    {
        $loanTable = DB::table('loan_app');

        $formFirstData = [
            "user_id" => Auth::user()->id,
            "amount" => $request->loan_amount,
            "loan_type" => $request->loantype,
            "current_add" => $request->current_address,
            "current_add_extra" => $request->current_address_2,
            "current_landmark" => $request->current_landmark,
            "current_country" => $request->current_country,
            "current_state" => $request->current_state,
            "current_pincode" => $request->current_pincode,
            "current_residence" => $request->current_res,
            "current_city" => $request->current_city,
            "per_add" => $request->permanent_address,
            "per_add_extra" => $request->permanent_address_2,
            "per_landmark" => $request->permanent_landmark,
            "per_country" => $request->permanent_country,
            "per_state" => $request->permanent_state,
            "per_city" => $request->permanent_city,
            "per_pincode" => $request->permanent_pincode,
            "per_residence" => $request->permanent_res,
        ];

        if ($request->loan_id) {
            $loanTable->where('id', $request->loan_id)->update($formFirstData);
            return response()->json([true, $request->loan_id], 200);
        } else {
            $pendingLoan = $loanTable->where(['user_id' => Auth::user()->id, 'status' => 0])->get();
            if (!$pendingLoan->isEmpty()) {
                return response()->json([false, "You have a pending loan application. Please go to loan application list."], 200);
            }
            $firstFormInsert = $loanTable->insertGetId($formFirstData);
            return response()->json([true, $firstFormInsert], 200);
        }
    }

    public function save_form_second(Request $request)
    {
        $loanTable = DB::table('loan_app');
        $form_second = DB::table('form_second');

        $pendingLoan = $loanTable->where(['user_id' => Auth::user()->id, 'id' => $request->loan_id])->get();
        if ($pendingLoan->isEmpty()) {
            return response()->json([false, "Something Went Wrong"], 200);
        }

        $pendindSecondForm = $form_second->where(['loan_app_id' => $request->loan_id])->get();
        $formSecondData = [
            'loan_app_id' => $request->loan_id,
            "work_status" => $request->work_status,
            "contact" => $request->contact,
            "alt_contact" => $request->alt_contact
        ];
        if (!$pendindSecondForm->isEmpty()) {
            $secondFormInsert = DB::table('form_second')->updateOrInsert(['loan_app_id' => $request->loan_id], [
                'loan_app_id' => $request->loan_id,
                "work_status" => $request->work_status,
                "contact" => $request->contact,
                "alt_contact" => $request->alt_contact
            ]);
        } else {
            $secondFormInsert = $form_second->insertGetId($formSecondData);
        }


        return response()->json([true, $request->loan_id], 200);
    }
    public function getCategory($file)
    {

        $pdfExtensions = ['pdf'];
        $imageExtensions = ['png', 'jpg', 'jpeg', 'gif'];

        if (in_array($file->getClientOriginalExtension(), $pdfExtensions)) {
            return 'pdf';
        } elseif (in_array($file->getClientOriginalExtension(), $imageExtensions)) {
            return 'image';
        } else {
            // Handle other file types if needed
            abort(400, 'Invalid file type. Please upload PDF or image files.');
        }
    }

    public function uploadImage(Request $request)
    {
        $file = $request->file('image');
        $category = $this->getCategory($file);
        // if ($request->is('api/*')) {
        if ($request->has('image')) {
            // $file = $request->image;
            $image_type = $request->image_type;
            $fileType = strtolower($file->getClientOriginalExtension());

            if ($image_type == 'pan_card' || $image_type == 'adhar_card_front' || $image_type == 'adhar_card_back' || $image_type == 'salary' || $image_type == 'passport') {
                // echo '<pre>'; print_r($file->getClientOriginalExtension()); echo '<pre>'; die();
                // echo '<pre>'; print_r($fileType); echo '<pre>'; die();
                if ($fileType !== 'jpg' && $fileType !== 'jpeg' && $fileType !== 'png') {
                    return response()->json([false, 'Allow file type allowed [ JPG, JPEG, PNG ].'], 200);
                }
                $resolution = getimagesize($request->image);
                $filename = $request->image->getClientOriginalName();
                $OriginalImage = Image::make($request->file('image'));
                $uniqueName = uniqid() . '_' . time() . '.' . $request->image->getClientOriginalExtension();
                $OriginalImagePath = 'uploads/loans/';
                $product_image_source = $OriginalImagePath . $uniqueName;
                $OriginalImage->save(public_path() . '/uploads/loans/' . $uniqueName);
            } else {
                if ($fileType !== 'pdf') {
                    return response()->json([false, 'Allow file type allowed [ PDF ].'], 200);
                }
                $request->file('image')->move(
                    base_path() . '/public/uploads/pdf/',
                    $request->file('image')->getClientOriginalName()
                );

                // $file->storeAs($path, 'public');

                // $file = $request->file;

                // if ($fileType !== 'pdf') {
                //     return response()->json([false, 'File type should be Pdf.'], 200);
                // }
                // $uniqueName = uniqid() . '_' . time() . '.' . $request->image->getClientOriginalExtension();
                $OriginalImagePath = 'uploads/pdf';
                $product_image_source = $OriginalImagePath . '/' . $file->getClientOriginalName();
                // $file->move(public_path() . '/uploads/loans/pdf/' . $uniqueName);
            }
            // $height = $resolution[1];
            // $width = $resolution[0];
            // // minHeight = 200, minWidth = 300, maxHeight = 4000, maxWidth = 4000
            // if ($width >= 200 && $width <= 4000 && $height >= 300 && $height <= 4000) {


            $imagesArray = [
                'loan_app_id' => $request->loan_id,
            ];
            if ($image_type == 'bank_pdf') {
                $imagesArray['bank'] = $product_image_source;
            }
            if ($image_type == 'pan_card') {
                $imagesArray['pan_card'] = $product_image_source;
            }
            if ($image_type == 'adhar_card_front') {
                $imagesArray['adhar_card_front'] = $product_image_source;
            }
            if ($image_type == 'adhar_card_back') {
                $imagesArray['adhar_card_back'] = $product_image_source;
            }
            if ($image_type == 'passport') {
                $imagesArray['photo'] = $product_image_source;
            }
            if ($image_type == 'salary') {
                $imagesArray['salary_slip'] = $product_image_source;
            }
            if ($image_type == 'financial') {
                $imagesArray['financial_doc'] = $product_image_source;
            }
            if ($image_type == 'work_exp') {
                $imagesArray['experience'] = $product_image_source;
            }

            $alreadyExist = DB::table('documents')->where(['loan_app_id' => $request->loan_id])->get();
            if (!$alreadyExist->isEmpty()) {
                DB::table('documents')->where(['loan_app_id' => $request->loan_id])->update($imagesArray);
            } else {
                $imageId = DB::table('documents')->insert($imagesArray);
            }

            return response()->json([true, $request->loan_id, $image_type, $category, '/' . $product_image_source], 200);
        }
        return response()->json([false, 'Resolution Issue'], 200);
        // }
        return response()->json([false, 'Stack Null'], 200);
        // }
    }


    public function submit_contact(Request $request)
    {
        if ($request->all()) {
            $contact_us = DB::table('contact_us');
            $contact = [
                "name" => $request->name,
                "email" => $request->email,
                "message" => $request->message
            ];
            $contact_us->insertGetId($contact);


            return redirect()->route('contact');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('signin');
    }
}
