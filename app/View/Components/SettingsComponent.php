<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SettingsComponent extends Component
{
    public $field;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field,$title)
    {
        $this->field = $field;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.settings-component');
    }
}
