<div class="form-group">
    <label for="name">Nome do Cliente (opcional)</label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $client->name ?? '') }}">
</div>

<div class="form-group">
    <label for="logo_path">Logo (JPEG, PNG, SVG)</label>
    @if(isset($client) && $client->logo_path)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $client->logo_path) }}" alt="Logo atual" height="60">
        </div>
    @endif
    <input type="file" class="form-control-file" name="logo_path" {{ isset($client) ? '' : 'required' }}>
</div>

<div class="mt-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
