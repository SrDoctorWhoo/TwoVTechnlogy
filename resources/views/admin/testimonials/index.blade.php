@extends('admin.layouts.app')

@section('title', 'Depoimentos')
@section('page-title', 'Gerenciar Depoimentos')

@section('content')
<div class="mb-4 text-end">
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-success">
        <i class="fas fa-plus-circle me-1"></i> Novo Depoimento
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">
    @forelse($testimonials as $testimonial)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('storage/' . $testimonial->foto) }}" class="card-img-top" alt="{{ $testimonial->nome }}" style="object-fit: cover; height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $testimonial->nome }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $testimonial->cargo }}</h6>
                    <p class="card-text">{{ Str::limit($testimonial->comentario, 100) }}</p>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Deseja realmente excluir este depoimento?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <p class="text-muted text-center">Nenhum depoimento cadastrado.</p>
    @endforelse
</div>
@endsection
