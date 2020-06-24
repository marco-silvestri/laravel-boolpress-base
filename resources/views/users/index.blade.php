@extends('layouts/main')

@section('main-content')
    <h2 class="is-size-3">Users list</h2>
    @foreach ($users as $user)
    <div class="card">
        <div class="card-content">
            <div class="media">
                <div class="media-content">
                    <p class="title is-4">{{ $user->name }}</p>
                    <p class="subtitle is-6">{{ $user->email }}</p>
                    <p class="subtitle is-6">{{ $user->detail->address }}</p>
                    <p class="subtitle is-6">{{ $user->detail->phone }}</p>
                </div>
            </div>
        </div>
    </div>
        @if ($loop->last)
        <hr>
        @endif
    @endforeach
@endsection
