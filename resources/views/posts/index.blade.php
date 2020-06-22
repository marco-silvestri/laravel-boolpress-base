@extends('layouts/main')

@section('main-content')
    <h2>Post archive</h2>
    @foreach ($posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->body }}</p>
        <p>written by {{ $post->user->name }}</p>
        @if ($loop->last)
        <hr>
        @endif
    @endforeach
@endsection