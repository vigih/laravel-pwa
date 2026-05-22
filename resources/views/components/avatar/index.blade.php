@props(['size' => 'md', 'url'])
@php

    $sizes = [
        'sm' => 'w-6 h-6',
        'md' => 'w-10 h-10',
        'lg' => 'w-14 h-14',
        'xl' => 'w-[64px] h-[64px]',
    ];
    $sizeClass = $sizes[$size] ?? $sizes['md'];

@endphp

<img {{ $attributes->merge(['class' => "$sizeClass rounded-full"]) }} src="{{ $url }}" alt="avatar">
