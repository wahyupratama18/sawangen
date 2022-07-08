<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class SawangenLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title = '')
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
        return view('layouts.sawangen');
    }
}
