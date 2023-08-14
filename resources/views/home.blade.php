@extends('layouts.app')

@section('title')
    Discover Stunning Artwork
@endsection

@section('content')
    <x-list-post :posts="$posts" />
@endsection
