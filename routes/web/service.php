<?php

use App\Http\Controllers\ProfessionController;
use Illuminate\Support\Facades\Route;



Route::post('/store', [ProfessionController::class, 'store'])->name('profession_store');
Route::get('/delete/{id}', [ProfessionController::class, 'destroy'])->name('service_delete');
Route::get('/edit/{id}', [ProfessionController::class, 'edit'])->name('edit_service');
Route::get('/update/{id}', [ProfessionController::class, 'update'])->name('update_service');
Route::get('/apply/{id}', [ProfessionController::class, 'buyService'])->name('buy_service');
Route::get('/{id}', [ProfessionController::class, 'show'])->name('more_information');
Route::get('/search', [ProfessionController::class, 'search'])->name('search_service');
