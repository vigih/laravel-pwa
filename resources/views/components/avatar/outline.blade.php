@props(['size' => 'md', 'variant' => 'primary', 'text'])

@php
    $variants = [
        'primary' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
        'secondary' => 'border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-50',
        'warning' => 'border-2 border-yellow-600 text-yellow-600 hover:bg-yellow-50',
        'danger' => 'border-2 border-red-600 text-red-600 hover:bg-red-50',
        'success' => 'border-2 border-green-600 text-green-600 hover:bg-green-50',
        'dark' => 'border-2 border-gray-700 text-gray-700 hover:bg-gray-50 ',
        'info' => 'border-2 border-cyan-500 text-cyan-500 hover:bg-cyan-50',
    ];

    $sizes = [
        'sm' => 'w-6 h-6',
        'md' => 'w-10 h-10',
        'lg' => 'w-14 h-14',
        'xl' => 'w-[64px] h-[64px]',
    ];

    $textClassName = [
        'sm' => 'text-[10px]',
        'md' => 'text-md',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $variantClass = $variants[$variant] ?? $variants['primary'];
    $textClass = $textClassName[$size] ?? $textClassName['md'];

@endphp

<div
    {{ $attributes->merge(['class' => $variantClass . ' ' . $sizeClass . ' flex justify-center items-center rounded-full']) }}>
    <span class="{{ $textClass }} uppercase">{{ $text }}</span>
</div>
