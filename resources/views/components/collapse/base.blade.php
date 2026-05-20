{{-- resources/views/components/collapse/base.blade.php --}}

@props([
    'class' => '',
])

<div x-data="{ open: false }"
    {{ $attributes }}
    class="{{ $class }}"
    >
    {{ $slot }}
</div>
