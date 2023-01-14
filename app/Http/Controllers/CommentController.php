<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|string'
        ]);

        Comment::create([
            'article_id' => $request->article_id,
            'user_id'    => Auth::id(),
            'body'       => $request->body
        ]);

        return back();
    }

    public function destory($id)
    {
        $comment = Comment::findOrFail($id);

        $comment->delete();

        return back();
    }
}
