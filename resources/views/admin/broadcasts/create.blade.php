@extends('admin.layouts.app')

@section('title','Novo Broadcast')
@section('page-title','Enviar Broadcast')

@section('content')
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $err)
        <div>{{ $err }}</div>
      @endforeach
    </div>
  @endif

  <form action="{{ route('admin.broadcasts.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="message" class="form-label">Mensagem</label>
      <textarea name="message" id="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Destinatários</label>
      <select name="recipients[]" class="form-select" multiple required>
        @foreach($contatos as $c)
          <option value="{{ $c->telefone }}"
            {{ in_array($c->telefone, old('recipients', [])) ? 'selected' : '' }}>
            {{ $c->nome }} ({{ $c->telefone }})
          </option>
        @endforeach
      </select>
      <small class="text-muted">Use Ctrl/Cmd para múltipla seleção.</small>
    </div>

    <button type="submit" class="btn btn-success">Enviar Broadcast</button>
  </form>
@endsection
