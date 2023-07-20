@extends('layouts.app')

@section('title')
    <div class="text-center my-6">
        <h2 class="text-3xl font-bold text-gray-900">Editar Perfil</h2>
        <p class="text-gray-600 text-lg">Usuario: {{ auth()->user()->username }}</p>
    </div>
@endsection

@section('content')
    <h1>Ur gay</h1>
@endsection
