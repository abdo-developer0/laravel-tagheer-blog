<div class="d-flex @if($reversed) flex-column-reverse @else flex-column @endif mx-auto" style="max-width: 800px;">
    @foreach($articles as $article)
        @if($article->is_public)
            <x-article :model="$article"/>
        @endif
    @endforeach
</div>