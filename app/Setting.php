<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'address', 'phone', 'email',
        'site_name', 'about_content', 'logo_path',
        'is_open'
    ];
}
