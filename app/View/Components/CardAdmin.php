<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardAdmin extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $blogs;
     public $projects;
     public $categories;
     public $experiences;
    public function __construct($blogs, $projects, $experiences, $categories)
    {
        $this->blogs = $blogs;
        $this->projects = $projects;
        $this->experiences = $experiences;
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.card-admin');
    }
}
