<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PagePhotoBanner extends Component
{

    public function __construct(
        public string $imgLarge,
        public string $title = '',
        public string $icon = '',
        public string $text = '',
        public string $imgSmall = '',
        public array $roomInfo = [],
    )
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.page-photo-banner');
    }
}
