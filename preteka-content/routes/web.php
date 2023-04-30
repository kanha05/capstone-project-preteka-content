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
    return view('layout');
});
Route::get('/contact', function () {
    return view('contactus');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::view('/payment','payment');
Route::get('/pf-page', function () {
    return view('pf-page');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/user-login', function () {
    return view('user-login');
});
Route::get('/user-signup', function () {
    return view('user-signup');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/home', function () {
    return view('homepage');
});