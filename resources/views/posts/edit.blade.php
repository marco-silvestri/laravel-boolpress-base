@extends('layouts/main')

@section('main-content')
    <h2>Create new post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
        </div>
        <div class="form-group">
            <label for="body">
                Body
            </label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ old('body', $post->body) }}</textarea>
        </div>

        @foreach ($tags as $tag)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}"
                @if ($post->tags->contains($tag->id))
                    checked
                @endif>
                <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
            </div>
        @endforeach

        <input type="submit" value="Update" class="btn btn-primay">
    </form>

@endsection