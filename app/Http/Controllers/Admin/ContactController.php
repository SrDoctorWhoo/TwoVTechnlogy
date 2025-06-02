<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Exibe a listagem de contatos recebidos no painel administrativo.
     */
    public function index()
    {
        $contatos = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contatos'));
    }

    /**
     * Envia uma notificação via WhatsApp para número fixo com os dados do contato recebido.
     * Este método é utilizado no controller público para cada nova submissão de formulário.
     */
    public function notificarWhatsApp(Contact $contato)
{
    // Verifica se o bot está pronto
    $status = Http::get('http://127.0.0.1:3001/status');

    if (!$status->ok() || !$status->json('ready')) {
        \Log::warning('⚠️ Cliente do WhatsApp não está pronto para enviar.');
        return;
    }

    $numero = '5561981643467'; // Número fixo

    $mensagem = "📩 *Nova mensagem recebida pelo site da Two V Technology:*\n\n"
              . "👤 *Nome:* {$contato->nome}\n"
              . "📧 *Email:* {$contato->email}\n"
              . "📱 *Telefone:* {$contato->telefone}\n"
              . "🛠️ *Serviço:* {$contato->servico}\n"
              . "💬 *Mensagem:*\n{$contato->mensagem}";

    try {
        $response = Http::post('http://127.0.0.1:3001/send-message', [
            'number' => $numero,
            'message' => $mensagem,
        ]);

        if ($response->successful()) {
            \Log::info('✅ Mensagem enviada com sucesso via WhatsApp.');
        } else {
            \Log::warning('⚠️ Falha ao enviar mensagem via WhatsApp. Resposta: ' . $response->body());
        }
    } catch (\Exception $e) {
        \Log::error('❌ Erro ao notificar via WhatsApp: ' . $e->getMessage());
    }
}

 // NOVO: painel WhatsApp
    public function whatsappDashboard()
    {
        // Telefones distintos que já nos enviaram algo
        $contacts = Contact::select('telefone')
                           ->distinct()
                           ->whereNotNull('telefone')
                           ->get();

        // Últimas 20 mensagens (você pode paginar ou filtrar por telefone)
        $recentMessages = Contact::latest()->limit(20)->get();

        return view('admin.whatsapp.dashboard', compact('contacts','recentMessages'));
    }

    // seu notificarWhatsApp() continua aqui...
}

