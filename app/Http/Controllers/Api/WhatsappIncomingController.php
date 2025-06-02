<?php

// app/Http/Controllers/Api/WhatsappIncomingController.php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Event;

class WhatsappIncomingController extends Controller
{
    public function handle(Request $request)
    {
        // validando payload
        $data = $request->validate([
            'contact_whatsapp' => 'required|string',
            'message'          => 'required|string',
            'timestamp'        => 'required|integer',
        ]);

        // encontra ou cria o contato pelo número
        $contato = Contact::firstOrCreate(
            ['whatsapp' => $data['contact_whatsapp']],
            ['nome' => $data['contact_whatsapp'], 'email'=>'','servico'=>'(via WhatsApp)','mensagem'=>'']
        );

        // persiste a nova mensagem como vinda do usuário
        $chatMsg = ChatMessage::create([
            'contact_id' => $contato->id,
            'sender'     => 'user',
            'message'    => $data['message'],
            'created_at' => now()->setTimestamp($data['timestamp']),
        ]);

        // atualiza updated_at para ordenar listas
        $contato->touch();

        // opcional: dispareum evento broadcast para atualizar a UI em tempo real
        // event(new \App\Events\NewChatMessage($chatMsg));

        return response()->json(['success'=>true]);
    }
}
