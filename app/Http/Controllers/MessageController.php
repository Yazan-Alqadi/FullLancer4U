<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //
    public function sendMessageNotification($id)
    {

        $user =User::where('id',$id)->first();
        $messageData = [
            'body'=>'You recived a new message notification',
            'text'=>'You have a new message',
            'url'=>url('/'),
            'thank'=>'You have thank',

        ];
        $user->notify(new NewMessage($messageData));
    }


    public function send($id,Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);

        Message::create([
            'body'=>$request->body,
            'sender_id'=>Auth::id(),
            'receiver_id'=>$id,
        ]);

        session()->flash('message', 'Message have been sent');


        return back();
    }
}
