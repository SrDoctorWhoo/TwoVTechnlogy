{{-- --}}
<div class="form-group">
    <label for="title" style="color: var(--admin-text-light);">Título do Serviço</label>
    <input type="text" class="form-control admin-form-control @error('title') is-invalid @enderror" {{-- --}}
           id="title" name="title" value="{{ old('title', $service->title ?? '') }}" required> {{-- --}}
    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror {{-- --}}
</div>

<div class="form-group">
    <label for="icon_class" style="color: var(--admin-text-light);">Classe do Ícone (Font Awesome)</label>
    <input type="text" class="form-control admin-form-control @error('icon_class') is-invalid @enderror"
           id="icon_class" name="icon_class" value="{{ old('icon_class', $service->icon_class ?? '') }}"
           placeholder="Ex: fas fa-concierge-bell">
    @error('icon_class') <div class="invalid-feedback">{{ $message }}</div> @enderror
    <small class="form-text" style="color: var(--admin-text-muted);">
        Use classes do Font Awesome (ex: <code>fas fa-tools</code>, <code>fab fa-react</code>).
        Consulte os ícones disponíveis em <a href="https://fontawesome.com/icons" target="_blank" style="color: var(--admin-primary-accent);">FontAwesome.com</a>.
    </small>
</div>

<div class="form-group">
    <label for="description" style="color: var(--admin-text-light);">Descrição</label>
    <textarea class="form-control admin-form-control @error('description') is-invalid @enderror" {{-- --}}
              id="description" name="description" rows="5" required>{{ old('description', $service->description ?? '') }}</textarea> {{-- --}}
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror {{-- --}}
</div>

<div class="mt-4 pt-2 border-top" style="border-color: var(--admin-border-color) !important;">
    <button type="submit" class="btn btn-admin-action"> {{-- --}}
        <i class="fas fa-save"></i> {{ isset($service) && $service->exists ? 'Atualizar Serviço' : 'Salvar Novo Serviço' }} {{-- --}}
    </button>
    <a href="{{ route('admin.services.index') }}" class="btn btn-admin-secondary ml-2">
        <i class="fas fa-times"></i> Cancelar
    </a>
</div>