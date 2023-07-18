@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class=" container mx-auto md:flex">
        <div class=" md:w-1/2">
            {{-- All data about post --}}
            <img src="{{ asset('uploads') . '/' . $post->image }}" alt="Post Image {{ $post->title }}">
            <div class=" p-3 flex items-center gap-2">
                @auth
                    @if ($post->checkLike(auth()->user()))
                        <form action="{{ route('posts.likes.destroy', $post) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class=" my-4">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    @else
                        <form action="{{ route('posts.likes.store', $post) }}" method="POST">
                            @csrf
                            <div class=" my-4">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    @endif
                @endauth
                <p class=" font-bold">
                    {{ $post->likes->count() }}
                    <span>Likes</span>
                </p>
            </div>
            <div>
                <p class=" font-bold">{{ $post->user->username }}</p>
                <p class=" text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                <p class=" mt-5">{{ $post->description }}</p>
            </div>
            @auth()
                @if ($post->user_id === auth()->user()->id)
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Destruir obra"
                            class=" bg-red-600 hover:bg-red-700 p-2 rounded text-white font-bold mt-4 cursor-pointer duration-200 transition-all">
                    </form>
                @endif
            @endauth
        </div>

        <div class="md:w-1/2 p-5">
            {{-- Comments form --}}
            <div class="comment-box shadow bg-white p-5 mb-5">
                <p class="text-xl font-bold text-center mb-4 container mx-auto md:flex">¿Qué te hace sentir esta obra?</p>
                @auth()
                    @if (session('message'))
                        <div class=" bg-green-500 p-2 rounded-lg mb-6 text-white text-center uppercase font-bold">
                            {{ session('message') }}
                        </div>
                    @endif

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
                {{-- Comments view section --}}
                <div class=" bg-white shadow mb-5 max-h-96 overflow-y-scroll mt-10">
                    @if ($post->comments->count() > 0)
                        @foreach ($post->comments as $comment)
                            <div class=" p-5 border-gray-300 border-b">
                                <a href="{{ route('dash.index', $comment->user) }}"
                                    class=" font-bold">{{ $comment->user->username }}</a>
                                <p>{{ $comment->comment }}</p>
                                <p class=" text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                            </div>
                        @endforeach
                    @else
                        <p class=" p-10 text-center">Aún no hay comentarios</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
