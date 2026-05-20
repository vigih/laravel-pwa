{{-- resources/views/components/accordion/group.blade.php --}}

@props([
    'default' => null
])

<div x-data="{ activeItem: '{{ $default }}' }" {{ $attributes->merge(['class' => 'space-y-3']) }}>
    {{ $slot }}
</div>
