<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\NewMessage;
use App\Models\Notification;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    //


    public function send($id, Request $request)
    {

        $request->validate([
            'body' => 'required',
        ]);

        $user_id = Auth::id();

        $thread = cache()->remember('thread' . $id . $user_id, 60 * 60 + 24, function () use ($id, $user_id) {
            return Thread::with('messages')->where(function ($query) use ($id, $user_id) {
                $query->where('sender_id', '=', $id)
                    ->where('receiver_id', '=', $user_id);
            })->orWhere(function ($query) use ($id, $user_id) {
                $query->where('sender_id', '=', $user_id)
                    ->where('receiver_id', '=', $id);
            })->first();
        });


        if ($thread == null) {
            $thread = Thread::create([
                'sender_id' => Auth::id(),
                'receiver_id' => $id,
            ]);
        }


        $message = $request->body;

        $thread->updated_at = Carbon::now();
        $thread->save();

        Message::create([
            'body' => $message,
            'user_id' => Auth::id(),
            'thread_id' => $thread->id,
        ]);
        Notification::create([
            'title' => 'Message from ' . Auth::user()->full_name,
            'content' => $message,
            'user_id' => $id,
            'reciver_id' => Auth::id(),
        ]);

        event(new NewMessage($id, 'Message From ' . Auth::user()->full_name, $message));

        return back();
    }

    public function getContact()
    {

        $threads = cache()->remember('thread' . Auth::id(), 60 * 60 + 24, function () {
           return Thread::where(['sender_id' => Auth::id()])->orWhere(['receiver_id' => Auth::id()])->orderByDesc('created_at')->get();
        });
        return view('chat_messages', compact('threads'));

    }

    public function contactMe($id)
    {
        $user_id = Auth::id();

        $threads = cache()->remember('thread' . $id . $user_id, 60 * 60, function () use ($id, $user_id) {
            return Thread::with('messages')->where(function ($query) use ($id, $user_id) {
                $query->where('sender_id', '=', $id)
                    ->where('receiver_id', '=', $user_id);
            })->orWhere(function ($query) use ($id, $user_id) {
                $query->where('sender_id', '=', $user_id)
                    ->where('receiver_id', '=', $id);
            })->first();
        });

        $user = User::where('id', $id)->first();
        return view('contact_me', compact('user', 'threads'));
    }
}
