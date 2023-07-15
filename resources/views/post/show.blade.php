@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class=" container mx-auto md:flex">
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
                @auth()
                    <p class="text-xl font-bold text-center mb-4 container mx-auto md:flex">¿Qué te hace sentir esta obra?</p>
                    <form action="{{ route('comments.store', ['post' => $post, 'user' => $user]) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <textarea name="comment" id="comment" placeholder="Agrega un nuevo comentario"
                                class="border p-2 w-full bg-gray-100 rounded-lg @error('comment') border-red-500 @enderror" rows="4"></textarea>
                            @error('comment')
                                <div class="bg-red-500 text-white my-2 rounded-lg p-4">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                class="h-4 w-4">
                                                <path fill-rule="evenodd"
                                                    d="M10 1C4.486 1 0 5.486 0 10c0 4.515 4.486 9 10 9 5.515 0 10-4.485 10-9 0-4.514-4.485-9-10-9zm0 16c-3.866 0-7-3.134-7-7 0-3.866 3.134-7 7-7 3.866 0 7 3.134 7 7 0 3.866-3.134 7-7 7zm0-12a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 4a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm">{{ $message }}</p>
                                        </div>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">Comentar</button>
                        </div>
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection
