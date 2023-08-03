<?php

use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/delete/{id}', [SkillController::class, 'destroy'])->name('skill_delete');
Route::get('/post', [SkillController::class, 'store'])->name('skill_store');
