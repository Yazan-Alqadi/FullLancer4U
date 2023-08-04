<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'show'])->name('profile');
Route::get('/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/gallery/profile', [UserController::class, 'gallery_profile'])->name('gallery_profile');
Route::get('/gallery/edit', [UserController::class, 'edit_gallery_info'])->name('edit_gallery_info');
Route::post('/addImage', [UserController::class, 'addImage'])->name('addImage');
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/{id}', [UserController::class, 'profile'])->name('profile_user');
