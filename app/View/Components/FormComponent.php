<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormComponent extends Component
{
    public $post;
    public $formAction;
    public $isCommentForm;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $formAction , $isCommentForm)
    {
        $this->post = $post;
        $this->formAction = $formAction;
        $this->isCommentForm = $isCommentForm;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-component');
    }
}
