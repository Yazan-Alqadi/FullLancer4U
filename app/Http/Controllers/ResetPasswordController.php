<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    //


    public function showResetForm($token)
    {

        return view('pages.auth.reset_password', compact('token'));
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset($request->only(
            'email',
            'password',
            'password_confirmation',
            'token'
        ), function ($user, $password) {
            $user->forceFill([
                'password' => bcrypt($password)
            ])->save();

            // Login user
            Auth::login($user);
        });

        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('home')->with('status', 'Your password has been reset!');
        } else {
            return back()->withInput($request->only('email'))->withErrors([
                'email' => trans($status)
            ]);
        }
    }
}
