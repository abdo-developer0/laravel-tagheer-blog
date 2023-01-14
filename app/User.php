<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'access', 'activation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function access()
    {
        if ($this->access == 0) {
            return 'none';
        }

        if ($this->access == 1) {
            return 'reader';
        }

        if ($this->access == 2) {
            return 'other';
        }

        if ($this->access >= 3) {
            return 'admin';
        }
    }
}
