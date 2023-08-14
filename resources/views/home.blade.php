@extends('layouts.app')

@section('title')
    Home Website page
@endsection

@section('content')
    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                        <img src="{{ asset('uploads') . '/' . $post->image }}" alt="Post Image {{ $post->title }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex items-center justify-center mt-5">
            {{ $posts->links() }}
        </div>
    @else
        <p class=" text-center">There's nothing to show</p>
    @endif
@endsection
