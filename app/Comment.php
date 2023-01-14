<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The all fillable values
     * 
     * @var array
     */
    protected $fillable = [
        'user_id', 'article_id', 'body'
    ];

    /**
     * The oner of comment
     * 
     * @return \App\User
     */
    protected function oner()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
