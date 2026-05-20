{{-- resources/views/components/field/hidden.blade.php --}}

@props([
    'name',
    'value' => ''
])

<input type="hidden" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" {{ $attributes }}>
