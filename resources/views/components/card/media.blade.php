{{-- resources/views/components/card/media.blade.php --}}

@props([ 'url' ])

@php
preg_match('/([\w_\-0-9]+)\.(png|jpeg|jpg|webp)$/', $url, $matches, PREG_OFFSET_CAPTURE);
$alted = $matches[1] ?? null;
$alted = $alted[0] ?? 'alt';
$alted = preg_replace('/[_\-]+/',' ',$alted);
@endphp

<img src="{{ $url }}" alt="{{ $alted }}"  {{ $attributes->merge(['class' => 'rounded-t-md']) }}>
