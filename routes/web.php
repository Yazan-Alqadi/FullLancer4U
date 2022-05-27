<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Freelancer;
use App\Models\Profession;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $freelancers = DB::select('CALL topFreelancer()');
    $professions = Profession::all();
    $projects = Project::all();


    return view('auth.main_page', ['freelancers' => $freelancers, 'professions' => $professions, 'projects' => $projects]);
})->name('home');

Route::get ('logout',[authController::class,'logout'])->name('logout');
Route::get('login', [LoginController::class, 'index'])->name('login.show');
Route::get('register', [RegisterController::class, 'index'])->name('register.show');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('users', [UserController::class,'index']);

Route::get('freelancers',[FreelancerController::class,'index'])->name('freelancers.index');

Route::get('user/{id}', function ($id) {

    return view('auth.profile_page');

})->name('profile');

Route::get('auth/google',[GoogleController::class,'redirectToGoogle'])->name('redToGoogle');
Route::get('auth/google/callback',[GoogleController::class,'handleGoogleCallback'])->name('googleCallBack');
