<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class Portfolios extends Component
{
    public $portfolios;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($portfolios)
    {
        $this->portfolios = $portfolios;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.portfolios');
    }
}
