@extends('admin.layouts.app')

@section('title', 'Novo Depoimento')
@section('page-title', 'Cadastrar Depoimento')

@section('content')
<div class="card">
    <div class="card-body">
        @include('admin.testimonials._form', ['route' => route('admin.testimonials.store'), 'method' => 'POST'])
    </div>
</div>
@endsection
