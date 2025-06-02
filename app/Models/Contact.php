<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // app/Models/Contact.php
    public function messages()
{
    return $this->hasMany(ChatMessage::class);
}

protected $fillable = ['nome', 'email', 'telefone', 'servico', 'mensagem'];

}
