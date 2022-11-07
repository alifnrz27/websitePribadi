<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Comment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $type;
     public $slug;
     public $comments;
    public function __construct($type, $slug, $comments)
    {
        $this->type = $type;
        $this->slug = $slug;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment');
    }
}
