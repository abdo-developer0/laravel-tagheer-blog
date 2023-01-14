<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'user_id', 'title', 'body', 'is_public'
    ];


    public function image()
    {
        return $this->hasOne('App\Image');
    }

    protected function oner()
    {
        return $this->belongsTo('App\User','user_id');
    }

    protected function comments()
    {
        return $this->hasMany('App\Comment');
    }

    protected function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function isLiked()
    {
        return \App\Like::where('article_id', $this->id)
                    ->where('user_id', auth()->id())->count();
    }
}
