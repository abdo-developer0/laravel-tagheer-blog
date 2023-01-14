@extends('layouts.front')

@section('content')
<div class="container bg-white pt-5">
    <h2 class="mb-5">About {{ $settings->site_name }}?</h2>
    <div class="card">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset($settings->logo_path) }}" alt="Image">
            </div>
            <div class="col-md-8">
                <p class="card-text">{{ $settings->about_content }}</p>
            </div>
        </div>
    </div>
</div>
@endsection