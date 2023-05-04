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
});
Route::get('/layout', function () {
    return view('frontend.layout');
});
Route::get('/contact', function () {
    return view('frontend.contactus');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/upload', function () {
    return view('frontend.upload');
});
Route::view('/payment','payment');
Route::view('/changepassword','changepassword');
Route::get('/pf-page', function () {
    return view('pf-page');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});
Route::get('/event', function () {
    return view('frontend.event');
});
Route::get('/user-login', function () {
    return view('user-login');
});
Route::get('/user-signup', function () {
    return view('user-signup');
});
Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});
Route::get('/home', function () {
    return view('frontend.homepage');
});
Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});
Route::get('/verifypassword', function () {
    return view('verifypassword');
});
Route::get('/resetpassword', function () {
    return view('resetpassword');
});
Route::get('/sharelink', function () {
    return view('sharelink');
});
Route::get('/edit_pf', function () {
    return view('edit_pf');
});