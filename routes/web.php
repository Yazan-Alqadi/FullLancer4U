<?php

use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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



Route::get('opp', function () {
    event(new \App\Events\NewMessage(1, 'Someone', 'fdfvf'));
    return "Event has been sent!";
});


Route::get('/analysis', function () {
    return view('pages.main.analysis_jobs');
})->name('analysis');



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UserController::class, 'index']);
Route::get('/freelancers', [FreelancerController::class, 'index'])->name('freelancers.index');
Route::get('/professions', [ProfessionController::class, 'index'])->name('professions.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');


Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redToGoogle');


Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('googleCallBack');


Route::get('/locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
})->name('switchLan');
