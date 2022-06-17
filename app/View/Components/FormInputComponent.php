<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInputComponent extends Component
{
    public $title;
    public $field;
    public $name;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $field, $name, $type = "text")
    {
        $this->title = $title;
        $this->field = $field;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input-component');
    }
}
