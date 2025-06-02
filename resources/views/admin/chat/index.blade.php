@extends('admin.layouts.app')

@section('content')
<div class="row">
  <div class="col-md-3">
    <ul class="list-group">
      @foreach($contatos as $c)
        <li class="list-group-item {{ request()->is('admin/chat/'.$c->id) ? 'active bg-primary text-white' : '' }}">
          <a href="{{ route('admin.chat.show', $c) }}" class="text-decoration-none {{ request()->is('admin/chat/'.$c->id) ? 'text-white' : 'text-dark' }}">
            {{ $c->nome }}
            <br>
            <small class="text-muted">{{ $c->mensagem }}</small>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
  <div class="col-md-9">
    {{-- Aqui você pode renderizar a conversa: se estiver em show, include a partial --}}
    @isset($contact)
      @include('admin.chat.partials.conversation', ['contact' => $contact])
    @else
      <p>Selecione um contato para iniciar o chat.</p>
    @endisset
  </div>
</div>
@endsection
