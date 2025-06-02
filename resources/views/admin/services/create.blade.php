@extends('admin.layouts.app')

@section('title', 'Adicionar Novo Serviço')
@section('page-title', 'Adicionar Novo Serviço')

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto"> {{-- Centraliza o card em telas maiores --}}
        <div class="card admin-card">
            <div class="card-header">
                <h5 class="mb-0">Formulário de Criação de Serviço</h5>
            </div>
            <div class="card-body p-4"> {{-- Adicionado mais padding ao card-body --}}
                <form action="{{ route('admin.services.store') }}" method="POST"> {{-- --}}
                    @csrf {{-- --}}
                    {{-- Passa uma nova instância de Service para o formulário.
                         Isso garante que $service esteja definido no _form.blade.php
                         e $service->exists seja false.
                    --}}
                    @include('admin.services._form', ['service' => new \App\Models\Service()]) {{-- --}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection