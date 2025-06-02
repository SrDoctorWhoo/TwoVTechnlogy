@extends('admin.layouts.app')

@section('title', 'Mensagens de Contato')
@section('page-title', 'Mensagens Recebidas')

@section('content')
    <div class="card shadow-lg">
        <div class="card-body table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Serviço</th>
                        <th>Mensagem</th>
                        <th>Recebido em</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contatos as $contato)
                        <tr>
                            <td>{{ $contato->nome }}</td>
                            <td>{{ $contato->email }}</td>
                            <td>{{ $contato->telefone ?? '-' }}</td>
                            <td>{{ $contato->servico }}</td>
                            <td>{{ Str::limit($contato->mensagem, 60) }}</td>
                            <td>{{ $contato->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Nenhuma mensagem recebida.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $contatos->links() }}
            </div>
        </div>
    </div>
@endsection
