@props([
    'variant' => 'primary',
    'size' => 'md',
    'label' => '',
])

@php
    $baseClass = 'inline-flex items-center shadow-md justify-center font-medium rounded-2xl transition-all duration-200';

    $variants = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-yellow-400 hover:bg-yellow-500 text-black',
        'warning' => 'bg-yellow-500 hover:bg-yellow-600 text-black',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'dark' => 'bg-gray-700 hover:bg-gray-800 text-white',
        'info' => 'bg-cyan-500 hover:bg-cyan-600 text-white'
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
