@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class=" container mx-auto flex">
        <div class=" md:w-1/2">
            {{-- All data about image --}}
            <img src="{{ asset('uploads') . '/' . $post->image }}" alt="Post Image {{ $post->title }}">
            <div class=" p-3">
                <p>0 Likes</p>
            </div>
            <div>
                <p class=" font-bold">{{ $post->user->username }}</p>
                <p class=" text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                <p class=" mt-5">{{ $post->description }}</p>
            </div>
        </div>

        <div class="md:w-1/2 p-5">
            {{-- Comments --}}
            <div class="comment-box shadow bg-white p-5 mb-5">
                <p class="text-xl font-bold text-center mb-4 container mx-auto md:flex">¿Qué te hace sentir esta obra?</p>

                <form action="">
                    <div class="mb-4">
                        <textarea name="comment" id="description" placeholder="Agrega un nuevo comentario"
                            class="border p-2 w-full bg-gray-100 rounded-lg" rows="4"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Comentar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
