<?php

namespace App\View\Components\Inputs\Buttons;

use Illuminate\View\Component;

class Ok extends Component
{
    
    public $type;

    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $text)
    {
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.inputs.buttons.ok');
    }
}
