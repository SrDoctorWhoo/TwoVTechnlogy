<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    // Campos que podem ser atribuídos em massa
    protected $fillable = [
        'message',
        'sent_to',
        'sent_at',
    ];

    // Conversão automática de sent_to para array e sent_at para Carbon
    protected $casts = [
        'sent_to' => 'array',
        'sent_at' => 'datetime',
    ];
}
