@extends('layouts/main')

@section('main-content')
    <h2>{{ $post->title }}</h2>
    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete">
    
    </form>
    <p>{{ $post->body }}</p>
    <p>written by {{ $post->user->name }} at {{ $post->created_at }}.</p>
    @if($post->created_at != $post->updated_at)
        <p>Last updated: {{ $post->updated_at }}</p>
    @endif
    @forelse ($post->tags as $tag)
        <span>{{ $tag->name }}</span>
    @empty
        <p>No related tags</p>
    @endforelse
    <hr>
    <h3>Comments:</h3>
    @foreach ($post->comments as $comment)
        <h4>{{ $comment->title }}</h4>
        <p>{{ $comment->body }}</p>
    @endforeach
@endsection