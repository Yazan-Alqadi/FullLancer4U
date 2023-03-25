<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::middleware(['guest'])->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::get('register', [RegisterController::class, 'index'])->name('register.show');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('logout', [authController::class, 'logout'])->name('logout');
Route::get('users', [UserController::class, 'index']);
Route::get('freelancers', [FreelancerController::class, 'index'])->name('freelancers.index');
Route::get('professions', [ProfessionController::class, 'index'])->name('professions.index');
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redToGoogle');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('googleCallBack');
Route::get('locale/{locale}', function ($locale) {

    session(['locale' => $locale]);
    App::setLocale($locale);
    return redirect()->back();
})->name('switchLan');  //add name to router

Route::middleware(['auth'])->group(function () {

    Route::get('service/{id}', [ProfessionController::class, 'show'])->name('more_information');

    Route::get('freelancer/sign', [FreelancerController::class, 'create'])->name('become_freelancer');
    Route::get('rate/update/{id}', [FreelancerController::class, 'updateRate'])->name('rate_me');


    Route::post('service/store', [ProfessionController::class, 'store'])->name('profession_store');
    Route::get('service/delete/{id}', [ProfessionController::class, 'destroy'])->name('service_delete');
    Route::get('service/edit/{id}', [ProfessionController::class, 'edit'])->name('edit_service');
    Route::get('service/update/{id}', [ProfessionController::class, 'update'])->name('update_service');
    Route::get('apply/service/{id}', [ProfessionController::class, 'buyService'])->name('buy_service');


    Route::get('user', [UserController::class, 'show'])->name('profile');
    Route::get('user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('profile/{id}', [UserController::class, 'profile'])->name('profile_user');
    Route::get('gallery', [UserController::class, 'gallery'])->name('gallery');


    Route::get('contact', [MessageController::class, 'getContact'])->name('contact');
    Route::get('contact-page/{id}', [MessageController::class, 'contactMe'])->name('contact_me');
    Route::get('contact-me/{id}', [MessageController::class, 'send'])->name('send_message');


    Route::get('mynotification', [NotificationController::class, 'index'])->name('my_notification');
    Route::get('confirm/{id}', [NotificationController::class, 'confirm'])->name('confirm');


    Route::get('project/{project}', [ProjectController::class, 'show'])->name('get_project');
    Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('edit_project');
    Route::post('project/update/{id}', [ProjectController::class, 'update'])->name('update_project');
    Route::get('projects/create', [ProjectController::class, 'create'])->name('create_project');
    Route::post('project/store', [ProjectController::class, 'store'])->name('project_store');
    Route::get('project/delete/{id}', [ProjectController::class, 'destroy'])->name('project_delete');
    Route::get('apply/project/{id}', [ProjectController::class, 'buyProject'])->name('buy_project');


    Route::get('skill/delete/{id}', [SkillController::class, 'destroy'])->name('skill_delete');
    Route::get('skill/post/', [SkillController::class, 'store'])->name('skill_store');

    Route::get('my_purchase/{id}', [WorkController::class, 'getMyPurchase'])->name('purchase_page');
    Route::get('my_work/{id}', [WorkController::class, 'getMyWork'])->name('work_page');
    Route::get('my_work/service/{id}', [WorkController::class, 'updateWorkService'])->name('work_update');
    Route::get('my_work/project/{id}', [WorkController::class, 'updateWorkProject'])->name('work_project_update');
    Route::get('/professions/search', [ProfessionController::class, 'search'])->name('search_service');
    Route::get('/projects/search', [ProjectController::class, 'search'])->name('search_project');

    Route::view('test', 'test');
});
