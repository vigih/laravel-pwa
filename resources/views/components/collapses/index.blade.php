{{-- resources/views/components/collapses/index.blade.php --}}

@props([
    'class' => '',
])

@php
  
@endphp

<x-collapses.base class="{{ $class }}">
    @isset($trigger)
    {{ $trigger }}
    @endisset

    <x-collapses.content>
        {{ $slot }}
    </x-collapses.content>
</x-collapses.base>

