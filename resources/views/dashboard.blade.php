@extends('layouts.app')

@section('title')
    This is your accout
@endsection

@section('content')
    <div class="flex justify-center"> <!-- Agregado: Centrado horizontal -->
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="w-8/12 lg:w-6/12 px-5 flex items-center justify-center h-full"> <!-- Modificado: Añadida clase "h-full" y centrado vertical y horizontal -->
                <img src="{{ asset('img/usuario.svg') }}" alt="user image" class="w-1/2 lg:w-full">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 md:flex md:flex-col md:justify-center md:items-start">
                <p class="text-gray-700 text-2xl text-center mt-5">
                    {{ auth()->check() ? $user->username : 'No user authenticated' }}
                </p>
                <div class="flex justify-center">
                    <p class="text-gray-800 text-sm mb-3 font-bold mr-6">
                        0
                        <span class="font-normal">Seguidores</span>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold mr-6">
                        0
                        <span class="font-normal">Siguiendo</span>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold">
                        0
                        <span class="font-normal">Posts</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
