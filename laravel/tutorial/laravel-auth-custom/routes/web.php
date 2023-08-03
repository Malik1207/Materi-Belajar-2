<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
    return view('layout');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-process', [AuthController::class, 'registerProcess'])->name('register.process');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-process', [AuthController::class, 'loginProcess'])->name('login.process');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot.password');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::prefix('user')->group(function() {
    Route::get('/verification', [AuthController::class, 'verifyEmail'])->name('verification');
    Route::post('/verification/resend-email-verification', [AuthController::class, 'resendEmailVerification'])->name('resend-email-verification');

    Route::get('/verification/success/{token}', [AuthController::class, 'verifyEmailProcess'])->name('verification.process');

    Route::middleware(['auth', 'is_email_verified', 'role:user'])->group(function(){
      Route::get('/dashboard', function(){
        return view('user.dashboard');
      })->name('user.dashboard');
    });
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function() {
      Route::get('/dashboard', function(){
        return view('admin.dashboard');
      })->name('admin.dashboard');
});
