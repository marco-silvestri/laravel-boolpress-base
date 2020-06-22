@extends('layouts/main')

@section('main-content')
    <h2>Users list</h2>
    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
        <p>{{ $user->email }}</p>
        <p>{{ $user->detail->address }}</p>
        <p>{{ $user->detail->phone }}</p>
        @if ($loop->last)
        <hr>
        @endif
    @endforeach
@endsection