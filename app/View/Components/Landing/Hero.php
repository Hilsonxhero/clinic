<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class Hero extends Component
{
    public $landing;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($landing)
    {
        $this->landing = $landing;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.hero');
    }
}
