@extends('layouts.app')

{{-- @section('title') --}}
{{-- This is your account --}}
{{-- @endsection --}}

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-4/12 px-5 md:p-1 flex justify-center">
                <img src="{{ $user->image ? asset('profiles') . '/' . $user->image : asset('img/usuario.svg') }}"
                    alt="user image" class="mx-auto w-1/2 lg:w-full py-2 rounded-full">
            </div>
            <div class="md:w-8/12 px-5 md:flex md:flex-col md:justify-center">
                <div class="flex items-center justify-center md:justify-start md:gap-2">
                    <p class="text-gray-700 text-2xl text-center md:text-left">{{ $user->username }}</p>
                    @auth()
                        @if ($user->id === auth()->user()->id)
                            <a href="{{ route('profile.index', $user) }}"
                                class="text-gray-500 hover:text-gray-600 cursor-pointer p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                        @else
                            @if (!$user->following(auth()->user()))
                                <form action="{{ route('users.follow', $user) }}" method="POST">
                                    @csrf
                                    <input type="submit"
                                        class=" bg-blue-400 text-white uppercase rounded-lg px-3 py-1 text-xs font-bold cursor-pointer mx-5"
                                        value="Follow">
                                </form>
                            @else
                                <form action="{{ route('users.unfollow', $user) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit"
                                        class=" bg-red-400 text-white uppercase rounded-lg px-3 py-1 text-xs font-bold cursor-pointer mx-5"
                                        value="Unfollow">
                                </form>
                            @endif
                        @endif
                    @endauth
                </div>
                <div class="flex justify-center md:justify-start">
                    {{-- Follwers number --}}
                    <p class="text-gray-800 text-sm mb-3 font-bold mr-6">
                        {{ $user->followers->count() }}
                        <span class="font-normal">@choice('Seguidor|Seguidores', $user->followers->count())</span>
                    </p>
                    {{-- Following number --}}
                    <p class="text-gray-800 text-sm mb-3 font-bold mr-6">
                        {{ $user->followings->count() }}
                        <span class="font-normal">Siguiendo</span>
                    </p>
                    {{-- Posts number --}}
                    <p class="text-gray-800 text-sm mb-3 font-bold">
                        {{ $user->posts->count() }}
                        <span class="font-normal">@choice('Post|Posts', $user->posts->count())</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10">
        <div class="text-center my-6">
            <hr class="border-t-2 border-gray-300">
            <h2 class="text-4xl font-bold text-gray-800 mt-4 mb-6">Welcome to MyGram</h2>
            <hr class="border-t-2 border-gray-300">
        </div>
        @if ($posts->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <a href="{{ route('posts.show', ['post' => $post, 'user' => $user]) }}">
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
