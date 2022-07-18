<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\NewMessage;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //


    public function send($id,Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);

        $message = $request->body;
        $user =User::where('id',$id)->first();

        Message::create([
            'body'=>$message,
            'sender_id'=>Auth::id(),
            'receiver_id'=>$id,
        ]);

        session()->flash('message', 'Message have been sent');
        event(new NewMessage(Auth::user()->full_name,$message));



        return back();
    }
}
