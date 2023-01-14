@extends('layouts.front')

@section('content')
<!-- Contact Start -->
<div class="container bg-white pt-5">
    @if($errors->any())
    <div class="alert alert-danger">{{$errors->first()}}</d>
    @elseif(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <h1 class="display-3 text-center py-5">Edit This Article.</h1>

    <div class="col-md-12 pb-5">
        <div class="contact-form">

            
            <div class="col-md-5 mb-3" onclick="choseImage()">
                <img class="img-fluid mb-4 mb-md-0" id="imageShow" src="{{ asset( $article->image? '/storage/'.$article->image->path: $settings->logo_path) }}" alt="" />
            </div>

            <form action="{{ route('articles.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <input type="file" id="ifile" name="img" value="/img/logo.jpg" style="display: none;" onchange="showImage()">

                <div class="control-group">
                    <input type="text" required name="title" value="{{ $article->title }}" class="form-control" placeholder="Title">
                </div>

                <div class="control-group">
                    <textarea required name="body" class="form-control" rows="6" placeholder="Article Content">{{ $article->body }}</textarea>
                </div>

                <div class="control-group mt-3">
                    <input type="checkbox" name="is_public" @if($article->is_public) checked @endif id="is_publish">
                    <label for="is_publish" class="ps-1">Publish</label>
                </div>

                <div>
                    <button class="btn btn-primary" type="submit">Publiche.</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection