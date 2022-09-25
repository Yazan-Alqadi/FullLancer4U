<?php

namespace App\Http\Livewire;

use App\Events\NewMessage;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Thread;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Chat extends Component
{
    private $thread, $user;

    public $messageBody;

    protected $rules = [
        'messageBody' => 'required',
    ];
    public function mount($thread, $user)
    {
        $this->thread = $thread;
        $this->user = $user;
    }

    public function send($id)
    {

        $this->validate();

        $this->user = User::find($id);
        $user_id = Auth::id();
        $thread = Cache::get('thread' . $id . $user_id);
        if ($thread == null) {
            $thread = Thread::create([
                'sender_id' => Auth::id(),
                'receiver_id' => $id,
            ]);
        }
        $thread->updated_at = Carbon::now();
        $thread->save();

        Message::create([
            'body' => $this->messageBody,
            'user_id' => Auth::id(),
            'thread_id' => $thread->id,
        ]);
        Notification::create([
            'title' => 'Message from ' . Auth::user()->full_name,
            'content' => $this->messageBody,
            'user_id' => $id,
            'reciver_id' => Auth::id(),
        ]);

        Cache::forget('thread' . $id . $user_id);
        event(new NewMessage($id, 'Message From ' . Auth::user()->full_name, $this->messageBody));

        $this->thread = cache()->remember('thread' . $id . $user_id, 60 * 60 + 24, function () use ($id, $user_id) {
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
    }

    public function render()
    {

        $this->messageBody = null;

        return view('livewire.chat', ['thread' => $this->thread, 'user' => $this->user]);
    }
}
