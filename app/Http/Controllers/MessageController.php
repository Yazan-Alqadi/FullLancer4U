<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Thread;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class MessageController extends Controller
{
    //


    public function getContact()
    {

        $threads = cache()->remember('thread' . Auth::id(), 60 * 60 + 24, function () {
            return Thread::where(['sender_id' => Auth::id()])->orWhere(['receiver_id' => Auth::id()])->orderByDesc('created_at')->get();
        });
        return view('pages.chat.chats_list_page', compact('threads'));
    }

    public function contactMe($id)
    {
        $user_id = Auth::id();

        $thread = cache()->remember('thread' . $id . $user_id, 60 * 60 + 24, function () use ($id, $user_id) {
            return Thread::with(['messages' => function ($q) {
                $q->orderBy('updated_at', 'Desc');
            }])->where(function ($query) use ($id, $user_id) {
                $query->where('sender_id', '=', $id)
                    ->where('receiver_id', '=', $user_id);
            })->orWhere(function ($query) use ($id, $user_id) {
                $query->where('sender_id', '=', $user_id)
                    ->where('receiver_id', '=', $id);
            })->first();
        });

        $user = User::where('id', $id)->first();
        return view('pages.chat.chat_page', compact('user', 'thread'));
    }
}
