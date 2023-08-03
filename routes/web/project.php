<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


Route::get('/create', [ProjectController::class, 'create'])->name('create_project');
Route::get('/{project}', [ProjectController::class, 'show'])->name('get_project');
Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('edit_project');
Route::post('/update/{id}', [ProjectController::class, 'update'])->name('update_project');
Route::post('/store', [ProjectController::class, 'store'])->name('project_store');
Route::get('/delete/{id}', [ProjectController::class, 'destroy'])->name('project_delete');
Route::get('/apply//{id}', [ProjectController::class, 'buyProject'])->name('buy_project');
Route::get('/search', [ProjectController::class, 'search'])->name('search_project');
