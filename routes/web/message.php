<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


Route::get('/contact', [MessageController::class, 'getContact'])->name('contact');
Route::get('/contact-page/{id}', [MessageController::class, 'contactMe'])->name('contact_me');
Route::get('/contact-me/{id}', [MessageController::class, 'send'])->name('send_message');
