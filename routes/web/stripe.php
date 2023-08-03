<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;



Route::get('/pay', [StripeController::class, 'index'])->name('pay');
Route::get('/checkout/{service}', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
Route::get('/success', [StripeController::class, 'success'])->name('success');
