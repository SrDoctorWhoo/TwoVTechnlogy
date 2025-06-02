@extends('admin.layouts.app')

@section('title', 'Editar Serviço')
@section('page-title', 'Editar Serviço')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">← Voltar</a>
    </div>

    <form action="{{ route('admin.services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.services._form') {{-- Usa o mesmo formulário da criação --}}
    </form>
@endsection
