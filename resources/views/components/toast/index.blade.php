{{-- resources/views/components/toast/index.blade.php --}}

@props(['message', 'variant' => 'secondary', 'timeout' => 5000])

@php
    $variants = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white',
        'secondary' => 'bg-yellow-400 hover:bg-yellow-500 text-black',
        'warning' => 'bg-yellow-500 hover:bg-yellow-600 text-black',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
        'error' => 'bg-red-600 hover:bg-red-700 text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'dark' => 'bg-gray-700 hover:bg-gray-800 text-white',
        'info' => 'bg-cyan-500 hover:bg-cyan-600 text-white',
    ];

    $icons = [
        'primary' => 'text-white',
        'secondary' => 'text-black',
        'warning' => 'text-black',
        'error' => 'text-white',
        'danger' => 'text-white',
        'success' => 'text-white',
        'dark' => 'text-white',
        'info' => 'text-white',
    ];

    $icons = [
        'success' => 'check_circle',
        'primary' => 'check_circle',
        'error' => 'error',
        'danger' => 'error',
        'warning' => 'warning',
        'info' => 'info',
        'dark' => 'info',
    ];

    $icon = $icons[$variant] ?? 'info';
    $variantClass = $variants[$variant] ?? $variants['secondary'];
    $iconClass = $icons[$variant] ?? $icons['secondary'];
@endphp

<div {{ $attributes->merge(['class' => 'fixed bottom-1 left-1/2 -translate-x-1/2 w-[350px]']) }}>

    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, @js($timeout))"
        x-show="show"
        x-transition
        class="pointer-events-auto p-4 rounded-md shadow-xl flex items-center gap-2 {{ $variantClass }}">
        <span class="material-icons {{ $iconClass }}">{{ $icon }}</span>
        <span class="leading-5">{{ $message }}</span>
    </div>

</div>
