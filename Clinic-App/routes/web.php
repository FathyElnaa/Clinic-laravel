<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('clinic.home');
});
Route::get('/history', function () {
    return view('clinic.history');
});
Route::get('/contact', function () {
    return view('clinic.contact');
});
Route::get('/login', function () {
    return view('clinic.login');
});
Route::get('/majors', function () {
    return view('clinic.majors');
});
Route::get('/register', function () {
    return view('clinic.register');
});
Route::get('/doctor', function () {
    return view('clinic.doctor');
});
Route::get('/doctor-home', function () {
    return view('clinic.doctor-home');
});
