<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $cred =$request->validate( [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password] , $request-> remember=='on') ){
            $user = Auth::user();
            return redirect()->route('home')->with('user',$user);
        } else {
            return redirect()->route('login.show')->with('status', 'Invalid Login');
        }
    }
}
