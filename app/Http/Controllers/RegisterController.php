<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {



        $validate =Validator::make($request->all(),[
            'full_name' => 'required|max:15',
            'user_name' => 'required|unique:users|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        if ($validate->fails()){
            return back()->withErrors($validate)->withCookie(Cookie::make('email', $request->email,5))
            ->withCookie(Cookie::make('full_name', $request->full_name,5))
            ->withCookie(Cookie::make('user_name', $request->user_name,5));
        }

        $input = $request->except(['_token']);



        $input['password'] = bcrypt($input['password']);
        $user = User::create([
            'full_name'=>$input['full_name'],
            'user_name'=>$input['user_name'],
            'email'=>$input['email'],
            'password'=>$input['password'],
        ]);
        Auth::login($user);
        $success['token'] =  $user->createToken('token')->plainTextToken;
        $success['user_name'] =  $user->user_name;

        // foreach (Category::all() as $category){
        //     if ($request->category->title=="OK"){

        //         $user->category()->attach($category->id);

        //     }
        // }


        return back();
    }
}
