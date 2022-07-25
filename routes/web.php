<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\GoogleController;
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
use App\Models\Message;
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
    event(new App\Events\NewMessage(1,'Someone','fdfvf'));
    return "Event has been sent!";
});

Route::get('/', function () {

    $freelancers = cache()->remember('free',60+60+24,function(){ return Freelancer::all();}); // DB::select('CALL topFreelancer()');
    $professions = cache()->remember('prof',60+60+24,function(){ return Profession::all();});
    $projects = cache()->remember('proj',60+60+24,function(){ return Project::all();});
    return view('auth.main_page', ['freelancers' => $freelancers, 'professions' => $professions, 'projects' => $projects]);
})->name('home');

Route::get('logout', [authController::class, 'logout'])->name('logout');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('register.show');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('users', [UserController::class, 'index']);

Route::get('freelancers', [FreelancerController::class, 'index'])->name('freelancers.index');
Route::get('professions', [ProfessionController::class, 'index'])->name('professions.index');
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redToGoogle');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('googleCallBack');
Route::get('professions/{id}', [ProfessionController::class, 'show'])->name('more_information');



Route::middleware(['auth'])->group(function () {
    Route::get('freelancer/sign', function () {
        $categories = Category::all();
        return view('become_freelancer', ['categories' => $categories]);
    })->name('become_freelancer');
    Route::post('profession/store', [ProfessionController::class, 'store'])->name('profession_store');
    Route::get('user', function () {
        $freelancer = DB::table('freelancers')->where('user_id',Auth::id())->first();
        $services=null;
        if ($freelancer!=null)
             $services = DB::table('professions')->where('freelancer_id',$freelancer->id)->get();


        return view('auth.profile_page',['services'=>$services]);
    })->name('profile');
    Route::get('user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('contact', function(){

        $messages = Message::where(['sender_id'=>Auth::id()] )->orWhere(['receiver_id'=>Auth::id()])->orderByDesc('created_at')->get();
        //dd($messages);
        return view('contact_page',compact('messages'));
    })->name('contact');
    Route::get('contact-me/{id}', function($id){
        $user = User::where('id',$id)->first();
        return view('contact_me',compact('user'));
    })->name('contact_me');


    Route::get('service/edit/{id}',[ProfessionController::class,'edit'])->name('edit_service');
    Route::get('service/update/{id}',[ProfessionController::class,'update'])->name('update_service');

    Route::post('contact-me/{id}',[MessageController::class,'send'])->name('send_message');

    Route::get('mynotification',[NotificationController::class,'index'])->name('my_notification');

    Route::get('project/{id}',[ProjectController::class,'show'])->name('get_project');


        Route::get('projects/create', [ProjectController::class, 'create'])->name('create_project');

});



