@props([
    'variant' => 'primary',
    'size' => 'md',
    'label' => '',
    'icon' => null,
    'text' => null,
])

@php
    $baseClass = 'inline-flex relative items-center shadow-md justify-center font-medium rounded-md transition-all duration-200';

    $variants = [
        'primary' => 'border-2 border-blue-600 text-blue-600',
        'secondary' => 'border-2 border-yellow-400 text-yellow-400',
        'warning' => 'border-2 border-yellow-600 text-yellow-600',
        'danger' => 'border-2 border-red-600 text-red-600',
        'success' => 'border-2 border-green-600 text-green-600',
        'dark' => 'border-2 border-gray-700 text-gray-700',
        'info' => 'border-2 border-cyan-500 text-cyan-500'
    ];

    $variantsText = [
        'primary' => 'ml-2 bg-blue-600 text-white px-1 rounded-sm',
        'secondary' => 'ml-2 bg-yellow-400 text-white px-1 rounded-sm',
        'warning' => 'ml-2 bg-yellow-600 text-white px-1 rounded-sm',
        'danger' => 'ml-2 bg-red-600 text-white px-1 rounded-sm',
        'success' => 'ml-2 bg-green-600 text-white px-1 rounded-sm',
        'dark' => 'ml-2 bg-gray-700 text-white px-1 rounded-sm',
        'info' => 'ml-2 bg-cyan-500 text-white px-1 rounded-sm'
    ];

    $variantsIcon = [
        'secondary' => 'ml-2 font-bolds bg-yellow-600 text-white px-1 text-[18px] rounded-sm',
        'primary' => 'ml-2 bg-blue-600 text-white px-1 text-[18px] rounded-sm',
        'warning' => 'ml-2 bg-yellow-600 text-white px-1 text-[18px] rounded-sm',
        'danger' => 'ml-2 bg-red-600 text-white px-1 text-[18px] rounded-sm',
        'success' => 'ml-2 bg-green-600 text-white px-1 text-[18px] rounded-sm',
        'dark' => 'ml-2 bg-gray-700 text-white px-1 text-[18px] rounded-sm',
        'info' => 'ml-2 bg-cyan-500 text-white px-1 text-[18px] rounded-sm'
    ];

    $sizes = [
        'sm' => 'pl-3 pr-2 py-1 text-[11px]',
        'md' => 'pl-3 pr-2 py-1 text-sm',
        'lg' => 'pl-4 pr-2 py-2 text-md',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $variantClassText = $variantsText[$variant] ?? $variantsText['primary'];
    $variantClassIcon = $variantsIcon[$variant] ?? $variantsIcon['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];

    $class = trim("$baseClass $variantClass $sizeClass");
@endphp

<span {{ $attributes->merge(['class' => $class]) }} {{ $attributes }}>
    {{ $label ?: $slot }}
    @if($text)
    <span class="{{ $variantClassText }}">{{ $text }}</span>
    @endif
    
    @if($icon)
    <span class="material-icons-outlined {{ $variantClassIcon }}">{{ $icon }}</span>
    @endif
</span>
