<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    //
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember == 'on')) {
            $user = Auth::user();
            Auth::login($user);

            $request->session()->regenerate();

            return redirect()->route('home')->with('user', $user);
        } else {
            return redirect()->route('login')->with('status', 'Invalid Login');
        }
    }
}
