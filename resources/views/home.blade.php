@extends('layouts/main')

@section('main-content')
<link rel="stylesheet" href="carousel.css">
<section class="hero is-fullheight-with-navbar is-success is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-size-2">Welcome to Boolpress</h1>
            <h2 class="subtitle is-size-4">a blog for everyone</h2>
            {{-- Carousel --}}
            <div>
                <div class="app__gallery">
                    <!-- Images wrapper -->
                    <div class="frame">
                        <img src="https://picsum.photos/id/46/1400/400.jpg" alt="" class="app__img active">
                        <img src="https://picsum.photos/id/41/1400/400.jpg" alt="" class="app__img">
                        <img src="https://picsum.photos/id/51/1400/400.jpg" alt="" class="app__img">
                        <img src="https://picsum.photos/id/43/1400/400.jpg" alt="" class="app__img">
                        <img src="https://picsum.photos/id/44/1400/400.jpg" alt="" class="app__img">
                        <img src="https://picsum.photos/id/45/1400/400.jpg" alt="" class="app__img">
                    </div>
                    <div id="app__radio-area">
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="carousel.js"></script>
@endsection
