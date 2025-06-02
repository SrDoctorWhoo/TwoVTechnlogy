<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'telefone'=> 'nullable|string|max:20',
            'servico' => 'required|string|max:255',
            'mensagem'=> 'required|string|max:2000',
        ]);

        $contato = Contact::create($validated);

        // notifica via WhatsApp
        $texto = "📩 *Nova mensagem do site* 📩\n".
                 "👤 Nome: {$contato->nome}\n".
                 "✉️ Email: {$contato->email}\n".
                 "📱 Tel: {$contato->telefone}\n".
                 "🛠️ Serviço: {$contato->servico}\n\n".
                 "{$contato->mensagem}";

        try {
            Http::post('http://127.0.0.1:3001/send-message', [
                'number'  => '5561981643467',  // seu número fixo
                'message' => $texto,
            ])->throw();

            // opcional: gravar log
            \Log::info("Notificação WhatsApp enviada para {$contato->telefone}");
        } catch (\Exception $e) {
            \Log::error("Erro ao enviar WhatsApp: ".$e->getMessage());
        }

        return redirect()->back()->with('success','Obrigado! Entraremos em contato em breve.');
    }
}
