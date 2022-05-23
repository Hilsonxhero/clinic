<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class Treatments extends Component
{
    public $treatments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($treatments)
    {
        $this->treatments = $treatments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.treatments');
    }
}
