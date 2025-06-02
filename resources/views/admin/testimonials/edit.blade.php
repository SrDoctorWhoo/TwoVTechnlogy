@extends('admin.layouts.app')

@section('title', 'Editar Depoimento')
@section('page-title', 'Editar Depoimento')

@section('content')
<div class="card">
    <div class="card-body">
        @include('admin.testimonials._form', ['route' => route('admin.testimonials.update', $testimonial), 'method' => 'PUT'])
    </div>
</div>
@endsection
