<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/password/forget', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/forget', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
