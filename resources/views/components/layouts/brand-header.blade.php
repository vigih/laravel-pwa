{{-- resources/views/components/layouts/brand-header.blade.php --}}

@props([
    'alt' => '',
    'class' => '',
])

<img class="brand {{ $class }}" src="{{ config('app.url') }}/images/logo.png" alt="{{ config('app.name') }}">
