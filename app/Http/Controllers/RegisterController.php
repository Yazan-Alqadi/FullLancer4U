<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Category;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('pages.auth.register_page');
    }

    public function store(Request $request)
    {


        $validate = Validator::make($request->all(), [
            'full_name' => 'required|max:15',
            'user_name' => 'required|unique:users|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate)->withCookie(Cookie::make('email', $request->email, 5))
                ->withCookie(Cookie::make('full_name', $request->full_name, 5))
                ->withCookie(Cookie::make('user_name', $request->user_name, 5));
        }

        $input = $request->except(['_token']);


        $input['password'] = bcrypt($input['password']);
        $user = User::create([
            'full_name' => $input['full_name'],
            'user_name' => $input['user_name'],
            'email' => $input['email'],
            'password' => $input['password'],
        ]);
        event(new Registered($user));
        event(new NewMessage($user->id, 'Your Account Has Been Created', 'Please Verify Your email if you didn\'t receive verification  email  click here to resend'));
        $not = Notification::create([
            'title' => 'Your Account Has Been Created',
            'content' => 'Please Verify Your email if you didn\'t receive verification  email  click here to resend',
            'user_id' => $user->id,
            'reciver_id' => $user->id,
            'type' => 'verfication',
            're_id' => 0,
        ]);
        Auth::login($user);
        $success['token'] = $user->createToken('token')->plainTextToken;
        $success['user_name'] = $user->user_name;

        foreach (Category::all() as $category) {

            if (request($category->id) == "OK") {

                $user->category()->attach($category->id);
            }
        }


        return back();
    }
}
