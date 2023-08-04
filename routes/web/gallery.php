<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GalleryController::class, 'index'])->name('gallery_main_page');
Route::post('/account/add', [GalleryController::class, 'storeAccounts'])->name('add_account');
Route::get('/account/get', [GalleryController::class, 'getAccounts'])->name('get_accounts');
Route::post('/post/add', [PostController::class, 'store'])->name('addpost');
Route::get('/post/get', [PostController::class, 'index'])->name('getposts');
Route::post('/comment/add/{id}', [CommentsController::class, 'store'])->name('add_comment');
Route::get('/post/delete/{post}', [PostController::class, 'destroy'])->name('delete_post');
