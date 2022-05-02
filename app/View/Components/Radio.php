<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Radio extends Component
{
    public $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.radio');
    }
}
