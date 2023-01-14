<?php

namespace App\Http\Controllers;

use App\Article;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('viewAny', Article::class);

        return view('articles.index')->with('articles', Article::all() );
    }

    public function create()
    {
        $this->authorize('create', Article::class);

        return view('articles.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Article::class);

        $this->validateArticle($request);

        $article = Article::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'body' => $request->body,
            'is_public' => ($request->is_public? true: false)
        ]);

        $this->saveArticleImage($article->id, $request);

        return back()->with('success', 'Created, Successfuliy.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        $this->authorize('view', $article);

        return view('articles.show')->with('article', $article);
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        $this->authorize('update', $article);

        return view('articles.update')->with('article', $article );
    }

    public function update(Request $request)
    {
        $article = Article::findOrFail($request->article_id);

        $this->authorize('update', $article);

        $this->validateArticle($request);
        
        $article->title = $request->title;
        $article->body  = $request->body;
        $article->is_public = $request->is_public? true: false;
        $article->save();

        if ($request->img) {

            if ($article->image) {
                Storage::disk('public')->delete($article->image->path);
                $article->image->delete();
            }
            $this->saveArticleImage($article->id, $request);
        }

        return back()->with('success', 'Updated, Successfuliy.');
    }

    public function validateArticle($request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string'
        ]);
    }

    public function saveArticleImage($article_id, $request)
    {
        if ($request->img) {
            $user_id = Auth::id();
            $path = $request->img->storeAs("uploads/$user_id", $user_id.'_'.$request->img->getClientOriginalName() );
            Image::create([
                'user_id' => $user_id,
                'article_id' => $article_id,
                'path' => $path
            ]);
        }
    }

    public function destroy($id)
    {
        $article = Article::find($id);

        if ($article) {
            $this->authorize('delete', $article);

            $image = $article->image;

            if ($image) {
                Storage::disk('public')->delete($image->path);
                $image->delete();
            }

            if ($article->comments) {
                foreach($article->comments as $comment) {
                    $comment->delete();
                }

                if ($article->likes) {
                    foreach($article->likes as $like) {
                        $like->delete();
                    }
                }
            }

            $article ->delete();
        }
        
        return back()->with('success', 'Deleted, Succeesfuly.');
    }
}
