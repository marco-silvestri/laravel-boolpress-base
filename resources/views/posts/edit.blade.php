@extends('layouts/main')

@section('main-content')
<section class="has-background-primary">
<div class="container py-2 has-text-centered">
    <h2 class="py-6 is-size-2">Edit a post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label" for="title">Title</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label" for="body">Post</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea" rows="20" name="body" id="body">{{ old('body', $post->body) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        @foreach ($tags as $tag)
            <div class="checkbox">
                <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}"
                @if ($post->tags->contains($tag->id))
                    checked
                @endif>
                <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
            </div>
        @endforeach
    </div>
        <div class="my-4">
            <input type="submit" value="Update" class="button is-success is-large">
        </div>
    </form>
</div>
</section>
@endsection