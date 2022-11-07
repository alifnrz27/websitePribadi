<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectAdmin extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $projects;
    public function __construct($projects)
    {
        $this->projects = $projects;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.project-admin');
    }
}
