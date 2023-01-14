<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArticleList extends Component
{
    public $articles;
    public $reversed;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($list,$reversed = false)
    {
        $this->articles = $list;
        $this->reversed = $reversed;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.article-list');
    }
}
