<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public static function  info()
    {
        $carbon =  new Carbon();

        $start   = $carbon->startOfMonth();
        $end    = $carbon->now();
        $current = $info['current'] = Visitor::whereBetween('created_at',[$start,$end])->count();
        
        $start   = $carbon->now()->subMonth()->startOfMonth();
        $end     = $carbon->now()->subMonth()->lastOfMonth();
        $last = $info['last'] = Visitor::whereBetween('created_at',[$start,$end])->count();

        if ($current < $last) {
            $info['change'] = ($current - $last)  * -1;
            $info['status'] = 'down';
        }
        else {
            $info['change'] = ($current - $last);
            $info['status'] = 'up';
        }

        $info['total'] = Visitor::count();

        
        return $info;
    }
}
