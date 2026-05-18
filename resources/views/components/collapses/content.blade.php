{{-- resources/views/components/collapses/content.blade.php --}}

@props([
    'class' => '',
])

<div x-show="open" 
    x-collapse
    x-transition.duration.200ms
    >
    {{ $slot }}
</div>
