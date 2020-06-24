@extends('layouts/main')

@section('main-content')
<link rel="stylesheet" href="styles/carousel.css">
<section class="hero is-medium is-success is-bold pb-6">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-size-2">Welcome to Boolpress</h1>
            <h2 class="subtitle is-size-4">a blog for everyone</h2>
            {{-- Carousel --}}
            <div>
                <div class="app__gallery">
                    <!-- Images wrapper -->
                    <div class="frame">
                        @foreach ($carousel as $image)
                            <img src="{{ $image->url }}" alt="" class="app__img 
                            @if ($loop->first)
                                active
                            @endif
                            ">    
                        @endforeach
                    </div>
                    <div id="app__radio-area">
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts/carousel.js"></script>
@endsection
