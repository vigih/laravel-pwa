{{-- resources/views/components/modals/dialog.blade.php --}}

@props([
    'position' => 'bottom',
])

@php
    $classed = $position === 'center' ? 'relative' : 'fixed bottom-0'
@endphp


<div x-show="open"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    @click.away="open = false"
    class="{{ $classed }} bg-white rounded-xl shadow-xl max-w-lg w-full overflow-hidden transform transition-all transform-gpu">
    
    {{ $slot }}
</div>
