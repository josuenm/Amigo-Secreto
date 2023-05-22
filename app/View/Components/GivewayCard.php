<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GivewayCard extends Component
{
    public array $personX;
    public array $personY;

    /**
     * Create a new component instance.
     */
    public function __construct(array $personX, array $personY)
    {
        $this->personX = $personX;
        $this->personY = $personY;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.giveway-card');
    }
}
