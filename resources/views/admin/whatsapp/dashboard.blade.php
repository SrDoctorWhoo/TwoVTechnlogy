@extends('admin.layouts.app')

@section('title','WhatsApp Panel')
@section('page-title','Painel WhatsApp')

@section('content')

<div class="row">
  {{-- Lista de Contatos Ativos --}}
  <div class="col-lg-4 mb-4">
    <div class="card">
      <div class="card-header bg-dark text-white">Contatos Ativos</div>
      <ul class="list-group list-group-flush">
        @forelse($contacts as $c)
          <li class="list-group-item">{{ $c->telefone }}</li>
        @empty
          <li class="list-group-item text-muted">Nenhum contato registrado.</li>
        @endforelse
      </ul>
    </div>
  </div>

  {{-- Mensagens Recentes --}}
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header bg-dark text-white">Mensagens Recentes</div>
      <div class="list-group list-group-flush">
        @forelse($recentMessages as $m)
          <div class="list-group-item">
            <div class="d-flex justify-content-between">
              <strong>{{ $m->nome }}</strong>
              <small class="text-muted">{{ $m->created_at->format('d/m H:i') }}</small>
            </div>
            <p class="mb-1">{{ Str::limit($m->mensagem, 100) }}</p>
            <small class="text-muted">Telefone: {{ $m->telefone ?? '–' }}</small>
          </div>
        @empty
          <div class="list-group-item text-muted">Ainda não há mensagens.</div>
        @endforelse
      </div>
    </div>
  </div>
</div>

@endsection
