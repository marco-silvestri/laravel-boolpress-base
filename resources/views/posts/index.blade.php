@extends('layouts/main')

@section('main-content')
    <h2 class="is-size-3">Post archive</h2>
    <div class="container">
    @foreach ($posts as $post)
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
        @if ($loop->last)
        <hr>
        @endif
    @endforeach
        <div class="box">
            {{ $posts->links() }}
        </div>
    </div>    
@endsection

