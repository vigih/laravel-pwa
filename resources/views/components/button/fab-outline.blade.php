{{-- resources/views/components/button/fab-outline.blade.php --}}

@props([
    'variant' => 'primary',
    'size' => 'md',
    'disabled' => false,
    'href' => null,
    'icon' => null,
    'type' => 'button'
])

@php
    $baseClass = 'inline-flex items-center shadow-md justify-center font-medium rounded-full transition-all duration-200';

    $variants = [
        'primary' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
        'secondary' => 'border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-50',
        'warning' => 'border-2 border-yellow-500 text-yellow-600 hover:bg-yellow-50',
        'danger' => 'border-2 border-red-600 text-red-600 hover:bg-red-50',
        'success' => 'border-2 border-green-600 text-green-600 hover:bg-green-50',
        'dark' => 'border-2 border-gray-700 text-gray-700 hover:bg-gray-50',
        'info' => 'border-2 border-cyan-500 text-cyan-500 hover:bg-cyan-50'
    ];

    $sizes = [
        'sm' => 'px-3 py-1 text-sm w-[30px] h-[30px]',
        'md' => 'px-4 py-2 text-base w-[40px] h-[40px]',
        'lg' => 'px-6 py-3 text-lg w-[50px] h-[50px]',
    ];

    $textIcon = [
        'sm' => 'text-[20px]',
        'md' => 'text-[24px]',
        'lg' => 'text-[28px]',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $textClass = $textIcon[$size] ?? $textIcon['md'];
    $disabledClass = $disabled ? 'opacity-50 cursor-not-allowed' : 'hover:shadow-md';
    $iconed = $icon ? 'opacity-50 cursor-not-allowed' : 'hover:shadow-md';

    $class = trim("$baseClass $variantClass $sizeClass $disabledClass");
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge([ 'class' => $class, 'disabled' => $disabled ]) }}>
        @if($icon)
        <span class="material-icons-outlined {{ $textClass }}">{{ $icon }}</span>
        @else
        {{ $slot }}
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge([ 'class' => $class, 'disabled' => $disabled ]) }}>
        @if($icon)
        <span class="material-icons-outlined {{ $textClass }}">{{ $icon }}</span>
        @else
        {{ $slot }}
        @endif
    </button>
@endif
