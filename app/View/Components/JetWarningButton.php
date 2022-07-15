<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class JetWarningButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View
    {
        return view('vendor.jetstream.components.warning-button');
    }
}
