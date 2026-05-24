{{-- resources/views/components/collapse/content.blade.php --}}
<div x-show="open"
    x-collapse
    x-transition.duration.200ms
    {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</div>
