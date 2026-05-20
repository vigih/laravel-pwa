{{-- resources/views/components/card/body.blade.php --}}

@props([ 
    'content' => null 
])

<div {{ $attributes->merge(['class' => 'px-3 text-sm']) }} {{ $attributes }} >
    {{ $content ?: $slot }}
</div>
