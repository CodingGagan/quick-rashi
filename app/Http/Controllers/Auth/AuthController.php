<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendOtpMail;
use App\Models\OtpLogs;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Session;
class AuthController extends Controller
{
    public function sendOtpMail(Request $request)
    {
        $email = $request->email;

        $userExistOrNot = User::where(['email' => $email])->exists();
        $userExist = User::where(['email' => $email])->get();
        // echo '<pre>'; print_r($userExist); echo '<pre>'; die();
        if (!$userExistOrNot) {
            return response()->json([false, 'User Email Does not Exist'], 200);
        } 
        if ($request->ajax()) {
            // try {
            $fetchLastOtp = OtpLogs::select('e_created_at')->where(['user_id' => $userExist[0]->id])
                ->where('e_created_at', '>=', now()->subMinutes(2))
                ->orderBy('id', 'desc')->get();
            // } catch (\Throwable $th) {
            // }

            if ($fetchLastOtp->isEmpty()) {
                // $generateOtp = generate_and_send_otp($user_id, $email, (Auth::user()->firstname . ' ' . Auth::user()->lastname));

                /* Generate and Send OTP */
                $generateOtp = random_int(1000, 9999);
                // $response = Mail::to($email)->send(new SendOtpMail($generateOtp, $email));
                try {

                    $message = "<html><head></head><body><p>Hello,</p>This is my quickrashi.com login otp '" . $generateOtp . "'</p></body></html>";
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.brevo.com/v3/smtp/email',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => '{  
                       "sender":{  
                          "name":"Quick Rashi",
                          "email":"anuradha.quickrashi@gmail.com"
                       },
                       "to":[  
                          {  
                             "email":"' . $email . '",
                             "name":"' . $email . '"
                          }
                       ],
                       "subject":"Hello Quick Rashi User",
                       "htmlContent":"' . $message . '"
                    }',
                        CURLOPT_HTTPHEADER => array(
                            'accept: application/json',
                            'api-key: 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',
                            'content-type: application/json',
                            'Cookie: __cf_bm=ecRZLNiEPDL8rRTjtNHYLmmsVAkYs54AXNJJ9L9WUi8-1706961627-1-Af7oJmbGtoj7nqd2XbZm3npH3tku6T3+LXQbaSBgGR/Jce5oFQg0a44eYdxiDRfaBmkZMueU5VXnx2I8FalDToE='
                        ),
                    ));

                    $response = curl_exec($curl);

                    curl_close($curl);
                    // echo $response;
                } catch (\Throwable $th) {
                    // echo '<pre>';
                    // print_r($th);
                    // echo '<pre>';
                    // die();
                }
                /* Generate and Send OTP */
                // $data = [
                //     'user_id' => $userExist[0]->id,
                //     'e_otp' => $generateOtp,
                //     'is_email_verified' => 2,
                //     'status' => 1,
                //     'created_at' => now(),
                //     'e_created_at' => now(),
                // ];

                $otp_log_table = new OtpLogs();
                $otp_log_table->user_id = $userExist[0]->id;
                $otp_log_table->e_otp = $generateOtp;
                $otp_log_table->is_email_verified = 2;
                $otp_log_table->status = 1;
                $otp_log_table->created_at = now();
                $otp_log_table->e_created_at = now();

                $otp_log_table->save();
                $status = "New";
                $time = date('Y-m-d H:i:s', strtotime("now"));
            } else {
                $status = "Old";
                $time = date('Y-m-d H:i:s', strtotime($fetchLastOtp[0]->e_created_at));
            }

            $startTime = new Carbon($time);
            $endTime = new Carbon(date('Y-m-d H:i:s', strtotime("now")));
            $timeRemaining = 120 - $endTime->diffInSeconds($startTime);
            return response()->json([true, $timeRemaining, $status], 200);
        }
    }

    public function submit_register(Request $request)
    {
        if ($request->all()) {
            $users = DB::table('users')->where(['email' => $request->email])->get();

            if ($users->isEmpty()) {
                $users = DB::table('users');
                $user = [
                    "salu" => $request->salu,
                    "firstname" => $request->fname,
                    "lastname" => $request->lname,
                    "contact" => $request->phone,
                    "email" => $request->email
                ];
                $idd = $users->insertGetId($user);

                Auth::loginUsingId($idd);

                return redirect()->route('user_loan_list');
            }

            Session::flash('danger', 'User is already register. Please login!');
            return redirect()->route('signin');
        }
    }


    public function emailOtpVerification(Request $request)
    {
        $email = $request->email;

        $userExist = User::where(['email' => $email])->get();
        $user_id = $userExist[0]->id;
        $otp = $request->otp;
        if ($request->ajax()) {
            try {
                $fetchLastOtp = OtpLogs::select('id', 'e_otp')->where(['user_id' => $user_id])
                    ->where('e_created_at', '>=', now()->subMinutes(2))
                    ->orderBy('id', 'desc')->get();
            } catch (\Throwable $th) {
            }
            if ($fetchLastOtp->isEmpty()) {
                $message = [false, "OTP Time Expire."];
            } else {
                if ($fetchLastOtp[0]->e_otp == $otp) {
                    $updateVerification = OtpLogs::find($fetchLastOtp[0]->id);
                    $updateVerification->is_email_verified = 1;
                    $updateVerification->e_updated_at = date('Y-m-d H:i:s', strtotime("now"));
                    $updateVerification->save();
                    Auth::loginUsingId($user_id);
                    $message = [true, "Verified."];
                } else {
                    $message = [false, "Otp Mismatched."];
                }
            }
            return response()->json($message, 200);
        }
    }
}
