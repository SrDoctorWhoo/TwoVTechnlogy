<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = [
        'contact_id',
        'sender',
        'message',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
