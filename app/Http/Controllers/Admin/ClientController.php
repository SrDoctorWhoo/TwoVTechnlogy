<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo_path' => 'required|image|mimes:jpeg,png,svg,jpg|max:2048',
        ]);

        if ($request->hasFile('logo_path')) {
            $data['logo_path'] = $request->file('logo_path')->store('clientes', 'public');
        }

        Client::create($data);
        return redirect()->route('admin.clients.index')->with('success', 'Cliente criado com sucesso!');
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo_path' => 'nullable|image|mimes:jpeg,png,svg,jpg|max:2048',
        ]);

        if ($request->hasFile('logo_path')) {
            if ($client->logo_path && Storage::disk('public')->exists($client->logo_path)) {
                Storage::disk('public')->delete($client->logo_path);
            }
            $data['logo_path'] = $request->file('logo_path')->store('clientes', 'public');
        }

        $client->update($data);
        return redirect()->route('admin.clients.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Client $client)
    {
        if ($client->logo_path && Storage::disk('public')->exists($client->logo_path)) {
            Storage::disk('public')->delete($client->logo_path);
        }
        $client->delete();
        return redirect()->route('admin.clients.index')->with('success', 'Cliente removido com sucesso!');
    }
}
