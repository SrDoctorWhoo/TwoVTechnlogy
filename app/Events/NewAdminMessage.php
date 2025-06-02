<?php
namespace App\Events;

use App\Models\ChatMessage;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewAdminMessage implements ShouldBroadcast
{
    public ChatMessage $chat;
    public function __construct(ChatMessage $chat){ $this->chat = $chat; }

    public function broadcastOn()
    {
        return new PrivateChannel('chat.'.$this->chat->contact_id);
    }

    public function broadcastWith()
    {
        return [
            'id'      => $this->chat->id,
            'sender'  => 'admin',
            'message' => $this->chat->message,
            'time'    => $this->chat->created_at->format('H:i'),
        ];
    }
}
