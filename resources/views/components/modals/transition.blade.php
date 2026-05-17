{{-- resources/views/components/modals/transition.blade.php --}}

@props([
    'class' => '',
])

<div x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
