{{-- resources/views/components/card/title.blade.php --}}

@props([ 'text' ])

<div {{ $attributes->merge(['class' => 'p-3 font-bold text-base']) }} {{ $attributes }} >
    {{ $text }}
</div>
