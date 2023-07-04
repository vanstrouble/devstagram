@extends('layouts.app')

@section('title')
    {{-- This is your accout --}}
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5 flex justify-center">
                <img src="{{ asset('img/usuario.svg') }}" alt="user image" class="mx-auto w-1/2 lg:w-full py-2">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 md:flex md:flex-col md:justify-center">
                <p class="text-gray-700 text-2xl text-center md:text-left">{{ $user->username }}</p>
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
