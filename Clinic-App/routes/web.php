<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('clinic.home');
})->name('home');
Route::get('/history', function () {
    return view('clinic.history');
});
Route::get('/contact', function () {
    return view('clinic.contact');
});
// Route::get('/login', function () {
//     return view('clinic.login');
// });
Route::get('/majors', function () {
    return view('clinic.majors');
});
// Route::get('/register', function () {
//     return view('clinic.register');
// });
Route::get('/doctor', function () {
    return view('clinic.doctor');
});
Route::get('/doctor-home', function () {
    return view('clinic.doctor-home');
});

Route::get('/register',[AuthController::class,'viewRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login',[AuthController::class,'viewlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
