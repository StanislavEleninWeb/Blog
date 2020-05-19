<?php

namespace App\View\Components\Inputs\Buttons;

use Illuminate\View\Component;

class Rud extends Component
{
    public $route;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $id)
    {
        $this->id = $id;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.inputs.buttons.rud');
    }
}
