<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Article extends Component
{
    /**
     * The Article Model
     * 
     * @var \App\Article
     */
    public $article;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->article = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.article');
    }
}
