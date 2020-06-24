@extends('layouts/main')

@section('main-content')
<section class="has-background-primary">
    <div class="container py-2 has-text-centered">
        <div class="card">
            <div class="card-content">
                <h3 class="content has-text-centered is-size-3">{{ $post->title }}</h3>
            </div>
            <div class="card-content">
                <a class="button is-warning is-small" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="button is-danger is-small" type="submit" value="Delete">
                </form>
            </div>
            <div class="card-content">
                <div class="content has-text-justified">{{ $post->body }}</div>
                <div class="content has-text-justified">written by {{ $post->user->name }} at {{ $post->created_at }}.</div>
                @if($post->created_at != $post->updated_at)
                <div class="content has-text-left">Last updated: {{ $post->updated_at }}</div>
                @endif
                @forelse ($post->tags as $tag)
                <div class="content has-text-left">{{ $tag->name }}</div>
                @empty
                <div class="content has-text-left">No related tags</div>
                @endforelse
            </div>
        </div>
        <h3 class="is-size-4 my-6">Comments:</h3>
        @foreach ($post->comments as $comment)
        <div class="card my-4">
            <div class="card-content">
                <h3 class="content has-text-centered is-size-4">{{ $comment->title }}</h3>
            </div>
            <div class="card-content">
                <div class="content has-text-justified">{{ $post->body }}</div>
                <div class="content has-text-justified">{{ $comment->body }}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
