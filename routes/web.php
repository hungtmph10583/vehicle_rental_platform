<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Controller::class, 'home'])->name('frontend.home');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'handleRegister']);

// Route::get('/change-password', [ChangePasswordController::class, 'changePasswordForm'])->middleware('auth')->name('password.change');
// Route::post('/change-password', [ChangePasswordController::class, 'handleChangePassword'])->middleware('auth');

// Route::get('/forgot-password', [ResetPasswordController::class, 'forgotPasswordForm'])->name('password.forgot');
// Route::post('/forgot-password', [ResetPasswordController::class, 'handleForgotPassword']);

// Route::get('/reset-password/{token}', [ResetPasswordController::class, 'ResetPasswordForm'])->name('password.reset');
// Route::post('/reset-password/{token}', [ResetPasswordController::class, 'handleResetPassword']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');