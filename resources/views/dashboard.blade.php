@extends('layouts.app')

@section('title')
    This is your accout
@endsection

@section('content')
    <div class=" flex justify-center">
        <div class=" w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class=" md:w-8/12 lg:w-6/12 px-5">
                <p>Ur horrible face here</p>
                <img src="{{ asset('img/usuario.svg') }}" alt="user image">
            </div>
            <div class=" md:w-8/12 lg:w-6/12 px-5">
                @if(auth()->check())
                    <p class=" text-gray-700 text-2xl">{{ $user->username }}</p>
                @else
                    <p class=" text-gray-700 text-2xl">No user authenticated</p>
                @endif
            </div>
        </div>
    </div>
@endsection
