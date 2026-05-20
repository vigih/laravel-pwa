{{-- resources/views/components/collapse/index.blade.php --}}

@props([
    'class' => '',
])

<x-collapse.base class="{{ $class }}">
    @isset($trigger)
    {{ $trigger }}
    @endisset

    <x-collapse.content>
        {{ $slot }}
    </x-collapse.content>
</x-collapse.base>

