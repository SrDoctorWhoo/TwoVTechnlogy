@extends('admin.layouts.app')

@section('title', 'Editar Cliente')
@section('page-title', 'Editar Cliente')

@section('content')
<form action="{{ route('admin.clients.update', $client) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('admin.clients._form')
</form>
@endsection
