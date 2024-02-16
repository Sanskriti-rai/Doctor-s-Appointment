<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShowController;

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

Route::post('/', [AppointmentController::class,'save'])->name('save.appointment');

Route::get('/doctor/login', function () {
    return view('Doctor.Auth.login');
})->name('doctor.login');

Route::get('/doctor/registration', function () {
    return view('Doctor.Auth.signup');
})->name('doctor.registration');

Route::post('/doctor/registration', [AuthController::class, 'savedoc'])->name('doctor.registration.save');

Route::get('/doctor/dashboard', function() {
    return view('dashboard');
})->name('/dashboard');

Route::get('/doctor/dashboard', [ShowController::class,'show'])->name('/dashboard');
