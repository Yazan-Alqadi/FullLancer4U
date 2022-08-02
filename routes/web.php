<?php

use App\Events\NewMessage;
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
use App\Models\Freelancer;
use App\Models\Profession;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SkillController;
use App\Models\Message;
use App\Nova\Service;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Facades\Cache;
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
    event(new App\Events\NewMessage(1, 'Someone', 'fdfvf'));
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
Route::get('profession/{id}', [ProfessionController::class, 'show'])->name('more_information');
Route::get('profession/{id}', [HomeController::class, 'show'])->name('more_information');



Route::middleware(['auth'])->group(function () {


    Route::get('freelancer/sign', [FreelancerController::class, 'create'])->name('become_freelancer');
    Route::post('profession/store', [ProfessionController::class, 'store'])->name('profession_store');
    Route::get('service/delete/{id}', [ProfessionController::class, 'destroy'])->name('service_delete');

    Route::get('user', [UserController::class, 'show'])->name('profile');
    Route::get('user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('contact', [MessageController::class, 'getContact'])->name('contact');
    Route::get('contact-page/{id}', [MessageController::class, 'contactMe'])->name('contact_me');


    Route::get('service/edit/{id}', [ProfessionController::class, 'edit'])->name('edit_service');
    Route::get('service/update/{id}', [ProfessionController::class, 'update'])->name('update_service');

    Route::get('contact-me/{id}', [MessageController::class, 'send'])->name('send_message');

    Route::get('mynotification', [NotificationController::class, 'index'])->name('my_notification');

    Route::get('project/{id}', [ProjectController::class, 'show'])->name('get_project');
    Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('edit_project');
    Route::post('project/update/{id}', [ProjectController::class, 'update'])->name('update_project');


    Route::get('projects/create', [ProjectController::class, 'create'])->name('create_project');
    Route::post('project/store', [ProjectController::class, 'store'])->name('project_store');
    Route::get('project/delete/{id}', [ProjectController::class, 'destroy'])->name('project_delete');

    Route::get('skill/delete/{id}', [SkillController::class, 'destroy'])->name('skill_delete');
    Route::get('skill/post/', [SkillController::class, 'store'])->name('skill_store');

    Route::get('apply/service/{id}', [ProfessionController::class, 'buyService'])->name('buy_service');
    Route::get('confirm/{id}', [NotificationController::class, 'confirm'])->name('confirm');
    Route::get('apply/project/{id}', [ProjectController::class, 'buyProject'])->name('buy_project');


    Route::view('chat', 'chat_messages');
    Route::view('My-purchases', 'purchases_page');
    Route::view('My-works', 'works_page');
    Route::view('test', 'test');

    Route::get('profile/{id}', function () {
        return view('profile_user');
    })->name('profile_user');

    Route::get('my_purchase', function () {
        return view('purchases_page');
    })->name('purchase_page');


    Route::get('my_work/{id}', function ($id) {
        $user = User::find($id);
        $services = DB::table('client_service')->select(['client_service.id', 'status', 'title', 'full_name', 'client_service.updated_at'])
            ->join('professions', 'client_service.service_id', '=', 'professions.id')
            ->join('users', 'client_service.user_id', '=', 'users.id')
            ->where('freelancer_id', $user->freelancer->id)
            ->get();
        $freelancer = Freelancer::where('user_id',$id)->first();
        //dd($freelancer->projects);
        return view('works_page', compact('services','freelancer'));
    })->name('work_page');
    Route::get('my_work/update/{id}', [FreelancerController::class,'updateWork'])->name('work_update');

    Route::get('rate/update/{id}', function ($id) {
        $freelancer=Freelancer::find($id);
        $rate=0;
        if (request('rate5')=='on')
            $rate+=5;
        else if (request('rate4')=='on')
            $rate+=4;
        else if (request('rate3')=='on')
            $rate+=3;
        else if (request('rate2')=='on')
            $rate+=2;
        else if (request('rate1')=='on')
            $rate+=1;

        $freelancer->rate=$rate;
        $freelancer->save();

        return back()->with('message','You rate this service');



    })->name('rate_me');

});
