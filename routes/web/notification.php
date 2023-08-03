<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NotificationController::class, 'index'])->name('my_notification');
Route::get('/confirm/{id}', [NotificationController::class, 'confirm'])->name('confirm');
