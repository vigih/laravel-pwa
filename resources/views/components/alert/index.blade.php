{{-- resources/views/components/alert/index.blade.php --}}

@props([
    'variant' => 'primary',
    'size' => 'md',
    'message' => null,
    'class' => '',
])

@php
    $baseClass = 'block relative shadow-md font-medium rounded-md transition-all duration-200 p-3';

    $variants = [
        'primary' => 'border-2 border-blue-600 text-blue-800 hover:bg-blue-50',
        'secondary' => 'border-2 border-yellow-400 text-yellow-500 hover:bg-yellow-50',
        'warning' => 'border-2 border-yellow-500 text-yellow-600 hover:bg-yellow-50',
        'danger' => 'border-2 border-red-600 text-red-700 hover:bg-red-50',
        'success' => 'border-2 border-green-600 text-green-700 hover:bg-green-50',
        'dark' => 'border-2 border-gray-700 text-gray-800 hover:bg-gray-50',
        'info' => 'border-2 border-cyan-500 text-cyan-600 hover:bg-cyan-50'
    ];

    $variantClass = $variants[$variant] ?? $variants['primary'];

    $classed = trim("$baseClass $variantClass $class");

@endphp

<x-alert.base class="{{ $classed }}">
    {{ $message ?: $slot }}
    <x-alert.dismiss />
</x-alert.base>
