<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CheckboxSwitch extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = '',
        public ?string $id = null,
        public string $label = '',
        public string $value = '1',
        public bool $checked = false,
        public bool $required = false,
        public bool $disabled = false,
        public string $color = 'secondary',
        public string $class = '',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkbox-switch');
    }
}
