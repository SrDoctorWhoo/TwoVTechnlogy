<?php

// app/Http/Controllers/Admin/BroadcastController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Contact;

class BroadcastController extends Controller
{
    public function create()
    {
        return view('admin.broadcasts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        // pega todos os números cadastrados
        $telefones = Contact::pluck('telefone')
            ->filter()
            ->map(fn($t) => "55".preg_replace('/\D/','',$t))
            ->toArray();

        foreach($telefones as $num) {
            try {
                Http::post('http://127.0.0.1:3001/send-message', [
                    'number'  => $num,
                    'message' => $data['message'],
                ])->throw();
            } catch (\Exception $e) {
                \Log::error("Falha broadcast para {$num}: {$e->getMessage()}");
            }
        }

        return redirect()->route('admin.broadcasts.create')
                         ->with('success','Broadcast enviado!');
    }
}
