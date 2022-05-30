<?php

namespace App\View\Components\Treatment;

use Illuminate\View\Component;

class TreatmentItem extends Component
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
        return view('components.treatment.treatment-item');
    }
}
