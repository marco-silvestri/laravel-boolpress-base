@extends('layouts/main')

@section('main-content')
    <div class="container">
        <h2 class="is-size-2">{{ $post->title }}</h2>
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
    </div>
    <div class="container my-6">
        <h3 class="is-size-4 my-2">Comments:</h3>
        @foreach ($post->comments as $comment)
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">{{ $comment->title }}</p>
            </header>
            <div class="card-content">
                <p>{{ $comment->body }}</p> 
            </div> 
        </div>
        @endforeach
    </div>
@endsection
{{-- 
<div class="box">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">{{  $post->title  }}</p>
        </header>
        <div class="card-content">
            <div class="content">{{ $post->body }}</div>
            <div class="content">written by: {{ $post->user->name }}</div>
        </div>
        <footer class="card-footer">
            <a href="{{ route('posts.show', $post->slug) }}" class="card-footer-item">Read more</a>
        </footer>
    </div>
</div>
 --}}