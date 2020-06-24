@extends('layouts/main')

@section('main-content')
    <section class="has-background-primary">
        <div class="container py-2 has-text-centered">
            <h2 class="py-6 is-size-2">Users list</h2>
        @foreach ($users as $user)
            <div class="box">
                <div class="card">
                    <div class="card-content">
                        <h3 class="content has-text-left is-size-3">{{ $user->name }}</h3>
                    </div>
                    <div class="card-content has-text-left ">
                        <div class="content">{{ $user->email }}</div>
                        <div class="content">{{ $user->detail->address }}</div>
                        <div class="content">{{ $user->detail->phone }}</div>
                    </div>
                </div>
            </div>
        {{--     
        @if ($loop->last)
        <hr>
        @endif
        --}}
    @endforeach
    </div>
</section>
@endsection

