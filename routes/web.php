<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('about', function () {
    return view('pages/about');
})->name('about');
Route::get('business', function () {
    return view('pages/business');
})->name('business');
Route::get('education',  function () {
    return view('pages/education');
})->name('education');
Route::get('personal',  function () {
    return view('pages/personal');
})->name('personal');
Route::get('contact',  function () {
    return view('pages/contact');
})->name('contact');
Route::get('signin',  function () {
    return view('pages/signin');
})->name('signin');
Route::get('signup',  function () {
    return view('pages/signup');
})->name('signup');


Route::get('loan-form', function () {
    return view('loan.form');
})->name('loan_form');



/* Admin */
// Route::get('loan_apply', function () {
//     return view('pages.loan_application');
// })->name('loan_apply');

Route::get('user_listing', function () {
    return view('admin.userlisting');
})->name('user_listing');

/* Contact */
Route::post('submit_contact', [UserController::class, 'submit_contact'])->name('submit_contact');
Route::post('submit_register', [AuthController::class, 'submit_register'])->name('submit_register');

/* OTP Verification and send */
Route::post('/emailOtpVerification', [AuthController::class, "emailOtpVerification"]);
Route::post('generateOtp', [AuthController::class, 'sendOtpMail'])->name('otp');

/* User Side */
Route::get('user/dashboard/{id?}', [UserController::class, 'dashboard'])->name('user_dashboard');
Route::post('product/image/upload', [UserController::class, 'uploadImage'])->name('user_product_image_upload');
Route::get('/user/loans/history', [UserController::class, 'user_loan_list'])->name('user_loan_list');


/* Fetch JS API => Fetch City By State ID */
Route::get('fetchCitiesByStateId/{id}', [UserController::class, 'fetchCitiesByStateId'])->name('fetchCitiesByStateId');
Route::post('save_form_first', [UserController::class, 'save_form_first'])->name('save_form_first');
Route::post('save_form_second', [UserController::class, 'save_form_second'])->name('save_form_second');
Route::post('save_form_third', [UserController::class, 'save_form_third'])->name('save_form_third');