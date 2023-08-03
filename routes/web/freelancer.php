<?php

use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;



Route::get('/sign', [FreelancerController::class, 'create'])->name('become_freelancer');
Route::get('/rate/update/{id}', [FreelancerController::class, 'updateRate'])->name('rate_me');
