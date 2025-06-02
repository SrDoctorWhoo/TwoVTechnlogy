@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="alert alert-info" style="background-color: var(--admin-card-bg); border-color: var(--admin-border-color); color: var(--admin-text-light);">
    Bem-vindo ao Painel Administrativo da Two V Technology!
</div>

{{-- MENSAGENS RECENTES --}}
<div class="card mb-4">
    <div class="card-header bg-dark text-white">
        <i class="fas fa-envelope me-2"></i> Mensagens Recentes
    </div>
    <ul class="list-group list-group-flush">
    @forelse($novasMensagens as $mensagem)
        <li class="list-group-item" style="background-color: #1e1e2f; color: #ddd; border-color: #2c2c3d;">
            <strong style="color: #fff;">{{ $mensagem->nome }}</strong> —
            <span class="text-muted">{{ Str::limit($mensagem->mensagem, 50) }}</span>
            <br>
            <small class="text-muted">{{ $mensagem->created_at->diffForHumans() }}</small>
        </li>
    @empty
        <li class="list-group-item text-muted" style="background-color: #1e1e2f; border-color: #2c2c3d;">
            Nenhuma nova mensagem.
        </li>
    @endforelse
</ul>

</div>

{{-- CARDS DE GERENCIAMENTO --}}
<div class="row">
    @can('manage services')
    <div class="col-md-4">
        <div class="card admin-card">
            <div class="card-body text-center">
                <i class="fas fa-concierge-bell fa-3x mb-3 text-muted"></i>
                <h5 class="card-title">Gerenciar Serviços</h5>
                <p class="card-text">Adicione, edite ou remova os serviços oferecidos.</p>
                <a href="{{ route('admin.services.index') }}" class="btn btn-admin-action">Ir para Serviços</a>
            </div>
        </div>
    </div>
    @endcan

    @can('manage users')
    <div class="col-md-4">
        <div class="card admin-card">
            <div class="card-body text-center">
                <i class="fas fa-users-cog fa-3x mb-3 text-muted"></i>
                <h5 class="card-title">Gerenciar Usuários</h5>
                <p class="card-text">Administre os usuários e suas permissões.</p>
                <a href="#" class="btn btn-admin-action">Ir para Usuários</a>
            </div>
        </div>
    </div>
    @endcan

    {{-- Adicione mais cards para outras seções abaixo --}}
</div>
@endsection
<script src="{{ mix('js/app.js') }}"></script>
<script>
  Echo.private('admin.contacts')
      .listen('NewContactReceived', (e) => {
        const c = e.contact;
        const html = `
          <li class="list-group-item">
            <strong>${c.nome}</strong> —
            ${c.mensagem.substring(0,50)}...
            <br><small>${new Date(c.created_at).toLocaleTimeString()}</small>
          </li>`;
        document.querySelector('#recent-messages').insertAdjacentHTML('afterbegin', html);
      });
</script>
