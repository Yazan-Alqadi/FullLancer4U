<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\NewMessage;
use App\Models\Notification;
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

        Message::create([
            'body'=>$message,
            'sender_id'=>Auth::id(),
            'receiver_id'=>$id,
        ]);
        Notification::create([
            'title'=>'Message from '. Auth::user()->full_name,
            'content'=>$message,
            'user_id'=>$id,

        ]);

        session()->flash('message', 'Message have been sent');
        event(new NewMessage($id,Auth::user()->full_name,$message));



        return back();
    }
}