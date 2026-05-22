@props(['size' => 'md', 'variant' => 'primary', 'text'])

@php
    $variants = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-yellow-400 hover:bg-yellow-500 text-black',
        'warning' => 'bg-yellow-500 hover:bg-yellow-600 text-black',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'dark' => 'bg-gray-700 hover:bg-gray-800 text-white',
        'info' => 'bg-cyan-500 hover:bg-cyan-600 text-white',
    ];

    $sizes = [
        'sm' => 'w-6 h-6',
        'md' => 'w-10 h-10',
        'lg' => 'w-14 h-14',
        'xl' => 'w-[64px] h-[64px]',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $variantClass = $variants[$variant] ?? $variants['primary'];

@endphp

<div {{ $attributes->merge(['class' => $variantClass . ' ' . $sizeClass . ' flex justify-center items-center rounded-full']) }}>
    <span class="text-md uppercase">{{ $text }}</span>
</div>
