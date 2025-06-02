<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ChatMessage;
use App\Events\NewUserMessage;

class WhatsAppWebhookController extends Controller
{
    public function receive(Request $req)
    {
        $data = $req->validate([
            'number'  => 'required|string',
            'message' => 'required|string',
        ]);

        // encontra ou cria o contato
        $contact = Contact::firstOrCreate(
            ['telefone' => $data['number']],
            ['nome' => $data['number'], 'email'=>''] // você pode ajustar
        );

        // grava a mensagem vinda do user
        $chat = ChatMessage::create([
            'contact_id'=> $contact->id,
            'sender'    => 'user',
            'message'   => $data['message'],
        ]);

        // atualiza timestamp pra ordenar no painel
        $contact->touch();

        // dispara evento broadcast para atualizar a UI em tempo real
        event(new NewUserMessage($chat));

        return response()->json(['success'=>true]);
    }
}
