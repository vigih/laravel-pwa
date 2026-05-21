{{-- resources/views/components/alert/index.blade.php --}}

@props([
    'variant' => 'primary',
    'size' => 'md',
    'message' => null,
])

@php
    $baseClass = 'relative flex shadow-sm font-medium rounded-md transition-all duration-200 p-3';

    $variants = [
        'primary' => 'bg-blue-50 border border-blue-200 text-blue-700 hover:bg-blue-100',
        'secondary' => 'bg-gray-50 border border-gray-200 text-gray-700 hover:bg-gray-100',
        'warning' => 'bg-yellow-50 border border-yellow-200 text-yellow-700 hover:bg-yellow-100',
        'danger' => 'bg-red-50 border border-red-200 text-red-700 hover:bg-red-100',
        'error' => 'bg-red-50 border border-red-200 text-red-700 hover:bg-red-100',
        'success' => 'bg-green-50 border border-green-200 text-green-700 hover:bg-green-100',
        'dark' => 'bg-gray-800 border border-gray-700 text-gray-100 hover:bg-gray-700',
        'info' => 'bg-cyan-50 border border-cyan-200 text-cyan-700 hover:bg-cyan-100',
    ];
    $textClass = [
        'primary' => 'text-blue-700',
        'secondary' => 'text-gray-700',
        'warning' => 'text-yellow-700',
        'error' => 'text-red-700',
        'danger' => 'text-red-700',
        'success' => 'text-green-700',
        'dark' => 'text-gray-100',
        'info' => 'text-cyan-700',
    ];
    $icons = [
        'success' => 'check_circle',
        'primary' => 'check_circle',
        'secondary' => 'info',
        'error' => 'error',
        'danger' => 'error',
        'warning' => 'warning',
        'info' => 'info',
        'dark' => 'info',
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];
    $textClassed = $textClass[$variant] ?? $textClass['primary'];
    $icon = $icons[$variant] ?? $icons['primary'];

    $classed = trim("$baseClass $variantClass");
@endphp


<div
    x-data="{ open: true }"
    x-show="open"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    {{ $attributes->merge(['class' => $classed]) }}
    role="alert">

    {{-- content --}}
    <span class="material-icons-outlined">{{ $icon }}</span>
    <span class="text-base leading-5 pl-3 {{ $textClassed }}"> {{ $message ?: $slot }} </span>

    {{-- dismiss --}}
    <div class="absolute right-0 top-[-2px]">
        <button
            @click="open = false"
            type="button"
            class="text-current opacity-50 hover:opacity-100 transition-opacity duration-150">
            <span class="material-icons font-bold text-base">close</span>
        </button>
    </div>

</div>
