@extends('layouts/main')

@section('main-content')
<section class="has-background-primary">
    <div class="container py-2 has-text-centered">
        <h2 class="py-6 is-size-2">Archive</h2>
    @foreach ($posts as $post)
        <div class="box">
            <div class="card">
                <div class="card-content">
                    <h3 class="content has-text-centered is-size-3">{{ $post->title }}</h3>
                </div>
                <div class="card-content">
                    <div class="content has-text-justified">{{ $post->body }}</div>
                    <div class="content has-text-justified">written by: {{ $post->user->name }}</div>
                </div>
                <div class="card-content has-text-left">
                    <a href="{{ route('posts.show', $post->slug) }}">Read more</a>
                </div>
            </div>
        </div>
    @endforeach
        <div class="box">
            {{ $posts->links() }}
        </div>
    </div>
</section>    
@endsection

