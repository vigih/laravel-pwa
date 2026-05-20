@props([
    'variant' => 'primary',
    'size' => 'md',
    'label' => '',
])

@php
    $baseClass = 'inline-flex items-center shadow-md justify-center font-medium rounded-md transition-all duration-200';

    $variants = [
        'primary'   => 'bg-blue-500/10 hover:bg-blue-500/20 text-blue-400',
        'secondary' => 'bg-amber-400/10 hover:bg-amber-400/20 text-amber-300',
        'warning'   => 'bg-yellow-500/10 hover:bg-yellow-500/20 text-yellow-400',
        'danger'    => 'bg-red-500/10 hover:bg-red-500/20 text-red-400',
        'success'   => 'bg-green-500/10 hover:bg-green-500/20 text-green-400',
        'dark'      => 'bg-gray-500/10 hover:bg-gray-500/20 text-gray-300',
        'info'      => 'bg-cyan-500/10 hover:bg-cyan-500/20 text-cyan-400'
    ];

    $sizes = [
        'sm' => 'px-3 py-1 text-[11px]',
        'md' => 'px-3 py-1 text-sm',
        'lg' => 'px-4 py-2 text-md',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];

    $class = trim("$baseClass $variantClass $sizeClass");
@endphp

<span {{ $attributes->merge(['class' => $class]) }} {{ $attributes }}>
    {{ $label ?: $slot }}
</span>
