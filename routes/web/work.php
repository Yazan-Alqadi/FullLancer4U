<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;



Route::get('/purchase/{id}', [WorkController::class, 'getMyPurchase'])->name('purchase_page');
Route::get('/{id}', [WorkController::class, 'getMyWork'])->name('work_page');
Route::get('/service/{id}', [WorkController::class, 'updateWorkService'])->name('work_update');
Route::get('/project/{id}', [WorkController::class, 'updateWorkProject'])->name('work_project_update');
