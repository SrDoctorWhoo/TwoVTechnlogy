<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">Nome *</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $testimonial->nome ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="cargo" class="form-label">Cargo</label>
        <input type="text" class="form-control" id="cargo" name="cargo" value="{{ old('cargo', $testimonial->cargo ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="comentario" class="form-label">Comentário *</label>
        <textarea class="form-control" id="comentario" name="comentario" rows="4" required>{{ old('comentario', $testimonial->comentario ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Foto {{ isset($testimonial) ? '(Substituir)' : '' }} *</label>
        <input type="file" class="form-control" id="foto" name="foto" {{ isset($testimonial) ? '' : 'required' }}>
        @if(isset($testimonial) && $testimonial->foto)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $testimonial->foto) }}" alt="Foto Atual" style="max-height: 120px;">
            </div>
        @endif
    </div>

    <div class="text-end">
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save me-1"></i> Salvar
        </button>
    </div>
</form>
