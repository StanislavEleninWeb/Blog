<?php

namespace App\View\Components\Inputs\Buttons;

use Illuminate\View\Component;

class Back extends Component
{

    public $type;

    public $text;

    public $url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $text, $url)
    {
        $this->type = $type;
        $this->text = $text;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.inputs.buttons.back');
    }
}
