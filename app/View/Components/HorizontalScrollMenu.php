<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HorizontalScrollMenu extends Component
{

    public function __construct(public array $options, public bool $jump = false)
    {}


    public function render()
    {
        return view('components.horizontal-scroll-menu');
    }
}
