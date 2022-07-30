<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\NewMessage;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    public function getContact(){

        $messages = Message::where(['sender_id' => Auth::id()])->orWhere(['receiver_id' => Auth::id()])->orderByDesc('created_at')->get();
        return view('chat_messages', compact('messages'));
    }

    public function contactMe($id){

        $user = User::where('id', $id)->first();
        return view('contact_me', compact('user'));

    }




}
