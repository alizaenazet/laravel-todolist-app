<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostsForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $buttonInfo,
        public string $actionProp,
        public string $methodProp = "POST",
        public string $postTitle = "",
        public string $postBody = ""
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.posts-form');
    }
}
