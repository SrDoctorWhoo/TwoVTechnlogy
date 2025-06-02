<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'nullable|string|max:255',
            'comentario' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('depoimentos', 'public');
        }

        Testimonial::create($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Depoimento cadastrado com sucesso!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'nullable|string|max:255',
            'comentario' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($testimonial->foto && Storage::disk('public')->exists($testimonial->foto)) {
                Storage::disk('public')->delete($testimonial->foto);
            }
            $data['foto'] = $request->file('foto')->store('depoimentos', 'public');
        }

        $testimonial->update($data);
        return redirect()->route('admin.testimonials.index')->with('success', 'Depoimento atualizado com sucesso!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->foto && Storage::disk('public')->exists($testimonial->foto)) {
            Storage::disk('public')->delete($testimonial->foto);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Depoimento excluído com sucesso!');
    }
}
