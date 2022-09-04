<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username, $message, $forUserId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($forUserId, $username, $message)
    {
        //
        $this->username = $username;
        $this->message = $message;
        $this->forUserId = $forUserId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['new-message' . $this->forUserId];
    }

    public function broadcastAs()
    {
        return 'my';
    }
}
