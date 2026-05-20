{{-- resources/views/components/button/fab.blade.php --}}

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
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-yellow-400 hover:bg-yellow-500 text-black',
        'warning' => 'bg-yellow-600 hover:bg-yellow-700 text-black',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'dark' => 'bg-gray-700 hover:bg-gray-800 text-white',
        'info' => 'bg-cyan-500 hover:bg-cyan-600 text-white'        
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

