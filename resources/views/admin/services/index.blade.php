@extends('admin.layouts.app')

@section('title', 'Serviços')
@section('page-title', 'Gerenciar Serviços')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.services.create') }}" class="btn btn-success">+ Novo Serviço</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-striped table-dark">
    <thead style="background-color: #1f2937; color: #ffffff;">
        <tr>
            <th>Título</th>
            <th>Ícone</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($services as $service)
        <tr style="background-color: #111827; color: #e5e7eb;">
            <td>{{ $service->title }}</td>
            <td><i class="{{ $service->icon_class }}"></i> {{ $service->icon_class }}</td>
            <td>{{ \Illuminate\Support\Str::limit($service->description, 80) }}</td>
            <td>
                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning btn-sm text-dark">
                    <i class="fas fa-edit"></i> Editar
                </a>
                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este serviço?');" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm text-light">
                        <i class="fas fa-trash-alt"></i> Excluir
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr style="background-color: #111827; color: #e5e7eb;">
            <td colspan="4" class="text-center">Nenhum serviço cadastrado ainda.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
