<div class="card my-5">
    <div class="row pt-1 px-2">
        <div style="max-width: 50px;">
            <img class="img-fluid rounded-circle" src="{{ asset('/assets/front/img/logo.jpg') }}" alt="user">
        </div>
        <div class="col">
            <p class="h4">{{ $article->oner->name }}</p>
            <p>{{ $article->created_at->diffForHumans() }}</p>
        </div>
        @auth
        <div class="col row justify-content-end">
            @can('update', $article)
            <a href="{{ route('articles.edit', $article->id) }}" class="btn">
                <i class="fas fa-edit"></i>
            </a>
            @endcan
            @can('delete', $article)
            <form action="{{ route('articles.delete', $article->id) }}" method="POST" onsubmit="return confirm('Are you want delete this')">
                @csrf
                <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
            </form>
            @endcan
        </div>
        @endauth
    </div>
    <img class="card-img-top" src="{{ asset( $article->image? 'assets/storage/'.$article->image->path: 'assets/front/img/logo.jpg') }}" alt="Image">
    <div class="card-body" id="article_{{$article->id}}">
        <h2 class="card-title">{{ $article->title }} <hr></h2>
        <p class="card-text">{{ $article->body }}</p>
    </div>
    @if($article->is_public)
        <div class="row">
            <a href="{{ route('articles.show', $article->id) }}#kep-comment" class="col btn border"><i class="fas fa-comment"></i> {{$article->comments->count()}} comments</a>
            <a href="{{ route('like.toggle', $article->id) }}" class="col btn border">
                <i class="fas fa-thumbs-up text-{{ $article->isLiked()? 'success': 'secondary' }}"></i> {{$article->likes->count()}}
            </a>
        </div>
    @else
        <div class="row">
            <a href="{{ route('articles.edit', $article->id) }}" class="col btn border"><i class="fas fa-eye"></i> publish</a>
        </div>
    @endif
</div>
