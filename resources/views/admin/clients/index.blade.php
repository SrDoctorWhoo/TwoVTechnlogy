@extends('admin.layouts.app')

@section('title', 'Clientes')
@section('page-title', 'Logos de Clientes')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.clients.create') }}" class="btn btn-success">+ Novo Cliente</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-dark table-striped">
    <thead style="background-color: #1f2937; color: #fff;">
        <tr>
            <th>Nome</th>
            <th>Logo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($clients as $client)
            <tr style="background-color: #111827; color: #e5e7eb;">
                <td>{{ $client->name }}</td>
                <td><img src="{{ asset('storage/' . $client->logo_path) }}" alt="{{ $client->name }}" height="40"></td>
                <td>
                    <a href="{{ route('admin.clients.edit', $client) }}" class="btn btn-warning btn-sm text-dark">Editar</a>
                    <form action="{{ route('admin.clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm text-light">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="3" class="text-center">Nenhum cliente cadastrado ainda.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
