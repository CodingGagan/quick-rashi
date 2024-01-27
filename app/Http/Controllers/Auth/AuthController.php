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

class AuthController extends Controller
{
    public function sendOtpMail(Request $request)
    {
        $email = $request->email;

        $userExist = User::where(['email' => $email])->get();
        if ($userExist) {
        } else {
            return response()->json([false, 'Email Id not exist'], 200);
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
                $response = Mail::to($email)->send(new SendOtpMail($generateOtp, $email));
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

            return redirect()->route('user_dashboard');
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
