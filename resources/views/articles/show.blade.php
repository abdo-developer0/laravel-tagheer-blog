@extends('layouts.front')

@section('content')
<div class="row">

    <div class="col-md-8 d-flex flex-column">
        <x-article :model="$article" />
        <p class="display-4 text-center">keepa comment.</p>
        <form action="{{ route('comment.store') }}" method="POST" class="d-flex px-2" id="kep-comment">
            @csrf
            <input type="hidden" name="article_id" value="{{ $article->id }}">
            <input class="col-9 rounded px-2 py-1 mr-1" type="text" name="body" placeholder="write your comment.">
            <button class="col-3 btn btn-primary rounded" type="submit">save</button>
        </form>
    </div>

    <div class="col-md-4 px-2 pb-5">
        <p class="h4 text-center text-center py-3">Total Comments {{ $article->comments->count() }}</p>
        <hr>

        @if($article->comments->count())
            @foreach($article->comments as $comment)
                <div class="row pt-1 px-2">
                    <div style="max-width: 50px;">
                        <img class="img-fluid rounded-circle" src="{{ asset('/assets/front/img/logo.jpg') }}" alt="user">
                    </div>
                    <div class="col">
                        <p class="h4">{{ $comment->oner->name }}</p>
                        <p>{{ $comment->body }}</p>
                    </div>
                    @if(Auth::check() and Auth::user()->access() == 'admin')
                        <!-- Article Controls Start -->
                        <div class="col row justify-content-end">
                            <form action="{{ route('comment.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you want delete this')">
                                @csrf
                                <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                        <!-- Article Controls End -->
                    @endif
                </div>
            @endforeach
        @else
            <div class="display-5 text-center py-5">No Comments.</div>
        @endif
        
    </div>

</div>
@endsection