<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textfield extends Component
{
    public $name;
    public $label;
    public $type;
    public $value;
    public $icon;
    public $color;
    public $required;
    public $disabled;

    public function __construct(
        $name = '',
        $label = '',
        $type = 'text',
        $value = '',
        $icon = null,
        $color = 'primary',
        $required = false,
        $disabled = false
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value = $value;
        $this->icon = $icon;
        $this->color = $color;
        $this->required = $required;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.textfield');
    }
}
