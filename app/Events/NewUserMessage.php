<?php

// app/Events/NewUserMessage.php
namespace App\Events;
use App\Models\ChatMessage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewUserMessage implements ShouldBroadcast
{
    use InteractsWithSockets;
    public ChatMessage $message;
    public function __construct(ChatMessage $message){ $this->message = $message; }
    public function broadcastOn() { 
        return new Channel('chat.'.$this->message->contact_id);
    }
    public function broadcastWith(){
        return [
            'id'       => $this->message->id,
            'sender'   => $this->message->sender,
            'message'  => $this->message->message,
            'created'  => $this->message->created_at->format('H:i')
        ];
    }
}
