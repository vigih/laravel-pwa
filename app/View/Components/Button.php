<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    public array $variants = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-gray-200 hover:bg-gray-300 text-gray-800',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'outline' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    ];

    public array $sizes = [
        'sm' => 'px-3 py-1 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-6 py-3 text-lg',
    ];

    public function __construct(
        public string $variant = 'primary',
        public string $size = 'md',
        public bool $disabled = false,
        public ?string $href = null,
    ) {}

    public function class(): string
    {
        $base = 'inline-flex items-center justify-center font-medium rounded-lg transition-all duration-200 py-2 px-4';

        $variantClass = $this->variants[$this->variant] ?? $this->variants['primary'];
        $sizeClass = $this->sizes[$this->size] ?? $this->sizes['md'];
        $disabledClass = $this->disabled ? 'opacity-50 cursor-not-allowed' : 'hover:shadow-md';

        return trim("$base $variantClass $sizeClass $disabledClass");
    }

    public function render(): View
    {
        return view('components.button');
    }
}
