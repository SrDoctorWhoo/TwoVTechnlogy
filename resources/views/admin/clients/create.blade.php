@extends('admin.layouts.app')

@section('title', 'Novo Cliente')
@section('page-title', 'Cadastrar Novo Cliente')

@section('content')
<form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.clients._form')
</form>
@endsection
