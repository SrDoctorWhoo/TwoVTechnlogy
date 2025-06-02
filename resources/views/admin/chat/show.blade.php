@extends('admin.layouts.app')


@section('content')
<div class="row">
  <div class="col-md-3">
    {{-- lista de contatos --}}
  </div>
  <div class="col-md-9 d-flex flex-column" style="height:80vh">
    <div id="messages" class="flex-grow-1 overflow-auto mb-3">
      @foreach($contact->messages as $msg)
        <div class="d-flex mb-2 {{ $msg->sent_by_us ? 'justify-content-end' : '' }}">
          <span class="badge {{ $msg->sent_by_us ? 'badge-success' : 'badge-secondary' }}">
            {{ $msg->body }}
          </span>
        </div>
      @endforeach
    </div>

    <form action="{{ route('admin.chat.send', $contact) }}" method="POST" id="chat-form" class="input-group">
      @csrf
      <input type="text" name="message" class="form-control" placeholder="Digite sua mensagem…">
      <button class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>
@endsection
