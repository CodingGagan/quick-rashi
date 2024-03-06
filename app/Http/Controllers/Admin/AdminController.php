<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->all()) {
            // $user = User::where(['email' => $request->email])->get();
            $user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            // echo '<pre>'; print_r($user); echo '<pre>'; die();

            if (Auth::check()) {
                // Auth::loginUsingId($user[0]->id);
                return redirect()->route('admin_dashboard');
            }

            Session::flash('danger', 'Entered Credentials is invalid!');
            return redirect()->back()->withInput();
        }
    }

    public function admin_dashboard(Request $request)
    {
        if ($request->ajax()) {
            $loanList = DB::table('users')
                ->join('loan_app', 'loan_app.user_id', '=', 'users.id')
                ->join('form_second',  'form_second.loan_app_id', '=', 'loan_app.id')
                ->join('documents', 'documents.loan_app_id', '=', 'loan_app.id')
                ->select('users.firstname', 'loan_app.id', 'loan_app.loan_type', 'loan_app.amount', 'loan_app.status', 'loan_app.created_at')
                ->get();

            return response()->json($loanList, 200);
        }

        return view('admin.loan_list');
    }
   
    public function user_list(Request $request)
    {
        if ($request->ajax()) {
            $userList = DB::table('users')
                // ->join('loan_app', 'loan_app.user_id', '=', 'users.id')
                // ->join('form_second',  'form_second.loan_app_id', '=', 'loan_app.id')
                // ->join('documents', 'documents.loan_app_id', '=', 'loan_app.id')
                ->select('id','firstname', 'email', 'contact', 'created_at')
                ->where([['id','>', 1]])
                ->get();

            return response()->json($userList, 200);
        }

        return view('admin.userlisting');
    }

    public function loan_details(Request $request)
    {
        if ($request->id) {
            $loan_id = $request->id;
            $loan = DB::table('loan_app')->where(['id' => $loan_id])->get();
            $loan_type = DB::table('loan_type')->where(['type' => $loan[0]->loan_type])->get();
            $current_country = DB::table('cities')->select('cities.city as city_name', 'states.name as state_name')->where(['cities.id' => $loan[0]->current_city])->join('states', 'states.id', '=', 'cities.state_id')->get();
            $user = DB::table('users')->where(['id' => $loan[0]->user_id])->get();
            $documents = DB::table('documents')->where(['loan_app_id' => $loan_id])->get();
            $second_form = DB::table('form_second')->where(['loan_app_id' => $loan_id])->get();

            // echo '<pre>'; print_r($loan); echo '<pre>'; die();
        }

        return view('admin.loan_detail', ['data' => ['loan_type' => $loan_type, 'current_country' => $current_country, 'user' => $user, 'loan' => $loan, 'document' => $documents, 'second_form' => $second_form]]);
    }

    public function update_loan_status(Request $request)
    {
        if ($request->ajax()) {
            $loanid = $request->loan_id;
            $loanstatus = $request->loan_status;

            if ($loanstatus == 3) {

                DB::table('loan_app')->where(['id' => $loanid])->update(['status' => $loanstatus, 'reason' => $request->reason]);
            } else {

                DB::table('loan_app')->where(['id' => $loanid])->update(['status' => $loanstatus]);
            }


            return response()->json([true, 'Updated'], 200);
        }
    }
}
