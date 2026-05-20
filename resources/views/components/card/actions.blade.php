{{-- resources/views/components/card/action.blade.php --}}

<div {{ $attributes->merge(['class' => 'p-3 flex items-center']) }}>
    {{ $slot }}
</div>
