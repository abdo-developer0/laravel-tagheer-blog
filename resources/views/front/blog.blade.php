@extends('layouts.front')

@section('content')
<!-- Blog Start -->
<div class="container bg-white pt-5">

    @if( Auth::check() and in_array(Auth::user()->access(), ['admin','other']))
    <div class="row py-5">
        <a href="{{ route('articles.create') }}" class="btn btn-primary fw-bolder rounded-pill">
            <i class="fas fa-plus"></i> New
        </a>
    </div>
    @endif

    <x-article-list :list="$articles" reversed />

</div>
<!-- Blog End -->
@endsection