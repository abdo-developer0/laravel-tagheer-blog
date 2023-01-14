@extends('layouts.front')

@section('content')
    <!-- Carousel Start -->
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/front/img/carousel-1.jpg' )}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h2 class="mb-3 text-white font-weight-bold">{{$settings->site_name}}</h2>
                    <a href="{{ route('about') }}" class="btn btn-lg btn-outline-light mt-4">Read More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- Carousel End -->
    
    <div class="container">
        <x-article-list :list="$latest" />
    </div>

    <!-- Subscribe Start -->
    <div class="py-5 px-4 bg-secondary text-center">
        <p class="h1 text-white font-weight-bold">Subscribe We Newsletter</p>
        <p class="text-white">Subscribe and get we latest article in your inbox</p>
        <p class="text-white">we have {{ $subscribers_count }} of subscribers</p>
        <form action="{{ route('subscribe') }}" method="GET" class="form-inline justify-content-center">
            @csrf
            <div class="input-group">
                <input name="email" type="text" class="form-control" placeholder="Type your email to subscribe">
                <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->
    <div class="container">
        <x-article-list :list="$ower" />
    </div>
@endsection