{{-- resources/views/components/collapse/base.blade.php --}}

<div x-data="{ open: false }"
    {{ $attributes }}
    {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</div>
