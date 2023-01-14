@extends('layouts.dashbord')

@section('content')
<!-- start of content -->
<div class="container">
    <h1 class="display-3 text-center py-5">Articles</h1>

    <div class="row py-5">
        <a href="{{ route('articles.create') }}" class="btn btn-primary fw-bolder rounded-pill">
            <i class="fas fa-plus"></i> New
        </a>
    </div>

    <div class="card">
        @if($articles->count())
        <table class="table-responsive w-full rounded">
            <thead>
                <tr>
                    <th class="border w-1/6 px-4 py-2">Title</th>
                    <th class="border w-1/6 px-4 py-2">Created By</th>
                    <th class="border w-1/6 px-4 py-2">Created At</th>
                    <th class="border w-1/6 px-4 py-2">Updated At</th>
                    <th class="border w-1/5 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    @if($article->is_public) 
                        <tr>
                            <td class="border px-4 py-2">{{ $article->title }}</td>
                            <td class="border px-4 py-2">{{ $article->oner->name }}</td>
                            <td class="border px-4 py-2">{{ $article->created_at->diffForHumans() }}</td>
                            <td class="border px-4 py-2">{{ $article->updated_at->diffForHumans() }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('articles.show', $article->id) }}" class="col-4 btn rounded">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('articles.edit', $article->id) }}" class="col-4 btn rounded">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="col-4 btn m-0 p-0" action="{{ route('articles.delete', $article->id) }}" method="POST" onsubmit="return confirm('Are you want delete this')">
                                    @csrf
                                    <button class="btn rounded" type="submit"><i class="fas fa-trash"></i></button>
                                </form>                        
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        @else
        <dv class="display-5 my-5 py5 text-center">
            No Articles.
        </dv>
        @endif
    </div>
</div>
<!-- end of content -->
@endsection