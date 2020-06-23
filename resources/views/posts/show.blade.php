@extends('layouts/main')

@section('main-content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>written by {{ $post->user->name }} at {{ $post->created_at }}.</p>
    @if($post->created_at != $post->updated_at)
        <p>Last updated: {{ $post->updated_at }}</p>
    @endif
    <hr>
    <h3>Comments:</h3>
    @foreach ($post->comments as $comment)
        <h4>{{ $comment->title }}</h4>
        <p>{{ $comment->body }}</p>
    @endforeach
@endsection