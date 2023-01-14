<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Visitor;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $this->authorize('admin');

        return view('dashbord.index')
            ->with('visits_info', Visitor::info())
                ->with('articles_count', Article::count())
                    ->with('users_count', User::count());
    
    }
}
