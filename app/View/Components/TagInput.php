<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TagInput extends Component
{

    public $name;
    public $placeholder;
    public $type;
    public $disabled;
    public $value;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $placeholder = null, $type = "text", $disabled = false, $value = null)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->disabled = $disabled;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag-input');
    }
}
