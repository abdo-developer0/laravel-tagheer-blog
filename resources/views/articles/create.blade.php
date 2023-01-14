@extends('layouts.front')

@section('content')
<!-- Contact Start -->
<div class="container bg-white pt-5">
    @if($errors->any())
    <div class="alert alert-danger">{{$errors->first()}}</d>
    @elseif(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <h1 class="display-3 text-center py-5">Create new Article.</h1>

    <div class="col-md-12 pb-5">
        <div class="contact-form">

            
            <div class="col-md-5 mb-3" onclick="choseImage()">
                <img class="img-fluid mb-4 mb-md-0" src="{{ asset($settings->logo_path) }}" id="imageShow" alt="Image" />
            </div>

            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <input type="file" id="ifile" onchange="showImage()" name="img" style="display: none;" />

                <div class="control-group">
                    <input type="text" required name="title" class="form-control" placeholder="Title">
                </div>

                <div class="control-group">
                    <textarea required name="body" class="form-control" rows="6" placeholder="Article Content"></textarea>
                </div>

                <div class="control-group mt-3">
                    <input type="checkbox" name="is_public" checked id="is_publish">
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