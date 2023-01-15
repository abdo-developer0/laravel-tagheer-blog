<?php

namespace App\Http\Controllers;

use App\Article;
use App\Setting;
use App\Subscriber;
use App\Visitor;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function __construct()
    {
        Visitor::create();
    }

    public function index()
    {
        return view('front.home')
            ->with('latest', Article::latest()->take(3)->get() )
            ->with('ower', Article::all()->take(3))
            ->with('subscribers_count', Subscriber::count() );
    }

    public function subscribe(Request $request)
    {
        $subscriber = $request->validate(['email' => 'required|string|unique:subscribers']);

        Subscriber::create($subscriber);

        return back();
    }

    public function blog()
    {
        return view('front.blog')->with('articles', Article::all() );
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
