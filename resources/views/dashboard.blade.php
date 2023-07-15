@extends('layouts.app')

@section('title')
    {{-- This is your accout --}}
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class=" md:w-10/12 lg:w-4/12 px-5 flex justify-center">
                <img src="{{ asset('img/usuario.svg') }}" alt="user image" class="mx-auto w-1/2 lg:w-full py-2">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 md:flex md:flex-col md:justify-center">
                <p class="text-gray-700 text-2xl text-center md:text-left">{{ $user->username }}</p>
                <div class="flex justify-center md:justify-start">
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

    <section class=" container mx-auto mt-10">
        <h2 class=" text-4xl text-center font-black my-10">
            Shitposting
        </h2>
        @if ($posts->count() > 0)
            <div class=" grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <a href="">
                            <img src="{{ asset('uploads') . '/' . $post->image }}" alt="Post Image {{ $post->title }}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="flex items-center justify-center mt-5">
                {{ $posts->links() }}
            </div>
        @else
            <p class="text-center text-gray-500 text-lg font-bold py-5">
                <span class="block">There's nothing to show</span>
                <span class="block mt-2">😞</span>
            </p>
        @endif
    </section>
@endsection
