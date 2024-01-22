<?php

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


Route::get('loan-form', function () {
    return view('loan.form');
})->name('loan_form');
