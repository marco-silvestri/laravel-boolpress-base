@extends('layouts/main')

@section('main-content')
<section class="has-background-primary">
    <div class="container py-2 has-text-centered">
        <h2 class="py-6 is-size-2">Create new post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label" for="title">Title</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
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
                        <textarea class="textarea" name="body" rows="20" id="body" placeholder="Write your post" value="{{ old('body') }}"></textarea>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($tags as $tag)
        <div class="checkbox">
            <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
            <label for="tag-{{ $loop->iteration }}">{{ $tag->name }}</label>
        </div>
        @endforeach
        <div class="my-4">
            <input type="submit" value="Update" class="button is-success is-large">
        </div>
    </form>
</div>
</section>
@endsection

