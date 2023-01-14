<?php

namespace App\Http\Controllers;

use App\Article;
use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function toggle($id)
    {
        $article = Article::find($id);

        if ($article) {
            if ($article->isLiked()) {
                Like::where('article_id', $id)->where('user_id', auth()->id())->delete();
            }
            else {
                Like::create(['article_id' => $id, 'user_id' => auth()->id()]);
            }
        }

        return redirect(back()->getTargetUrl() . '#article_' . $id);
    }
}
