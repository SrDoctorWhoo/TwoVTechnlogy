<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Serviço criado com sucesso!');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'description' => 'required|string',
        ]);

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Serviço atualizado!');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Serviço excluído!');
    }
}
