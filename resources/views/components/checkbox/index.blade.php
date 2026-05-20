{{-- resources/views/components/checkbox/index.blade.php --}}

@props([
    'name' => '',
    'id' => null,
    'label' => '',
    'value' => '1',
    'checked' => false,
    'required' => false,
    'disabled' => false,
    'variant' => 'secondary',
    'inputClass' => null,
])

@php
$id = $id ?? $name . '_' . rand(100, 999);
$variants = [
    'primary' => 'checkbox-outline-primary',
    'secondary' => 'checkbox-outline-secondary',
    'success' => 'checkbox-outline-success',
    'info' => 'checkbox-outline-info',
    'danger' => 'checkbox-outline-danger',
    'dark' => 'checkbox-outline-dark',
];
$variantClass = $variants[$variant] ?? $variants['secondary'];
$inputClass = $inputClass ? ' ' . $inputClass : null;
@endphp

<div {{ $attributes->merge(['class' => "checkbox-outline $variantClass"]) }}>
    <div class="checkbox-outline-container">
        <input type="hidden" name="{{ $name }}" value="0">

        <input
            type="checkbox"
            id="{{ $id }}"
            class="checkbox-outline-form-control{{ $inputClass }}"
            name="{{ $name }}"
            value="{{ $value }}"
            {{ $checked ? 'checked' : '' }}
            {{ $required ? 'required' : '' }}
            {{ $disabled ? 'disabled' : '' }}
        >

        <svg class="checkbox-icon checkbox-outline-checked-icon" viewBox="0 0 24 24">
            <path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
        </svg>

        <svg class="checkbox-icon checkbox-outline-unchecked-icon" viewBox="0 0 24 24">
            <path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
        </svg>
    </div>

    @if($label)
        <label class="checkbox-label" for="{{ $id }}">{{ $label }}</label>
    @endif
</div>
