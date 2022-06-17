<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideNavItem extends Component
{
    public $title;
    public $to;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $to, $name)
    {
        $this->title = $title;
        $this->to = $to;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-nav-item');
    }
}
