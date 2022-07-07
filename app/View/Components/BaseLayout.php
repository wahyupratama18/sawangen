<?php

namespace App\View\Components;

use Illuminate\View\{Component, View};

class BaseLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title = "")
    {
        if ($this->title) {
            $this->title .= ' - ';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View
    {
        return view('layouts.base');
    }
}
