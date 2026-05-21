{{-- resources/views/components/layouts/brand-header.blade.php --}}

<img {{ $attributes->merge(['class' => 'brand']) }} src="{{ config('app.url') }}/images/logo.png" alt="{{ config('app.name') }}">
