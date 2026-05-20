@props([
    'variant' => 'primary',
    'size' => 'md',
    'label' => '',
])

@php
    $baseClass = 'inline-flex items-center shadow-md justify-center font-medium rounded-md transition-all duration-200';

    $variants = [
        'primary' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
        'secondary' => 'border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-50',
        'warning' => 'border-2 border-yellow-600 text-yellow-600 hover:bg-yellow-50',
        'danger' => 'border-2 border-red-600 text-red-600 hover:bg-red-50',
        'success' => 'border-2 border-green-600 text-green-600 hover:bg-green-50',
        'dark' => 'border-2 border-gray-700 text-gray-700 hover:bg-gray-50 ',
        'info' => 'border-2 border-cyan-500 text-cyan-500 hover:bg-cyan-50'
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
