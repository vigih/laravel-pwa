{{-- resources/views/components/switch/index.blade.php --}}

@props([
    'name' => '',
    'id' => null,
    'label' => '',
    'value' => '1',
    'checked' => false,
    'required' => false,
    'disabled' => false,
    'variant' => 'secondary',
    'class' => '',
    'inputClass' => null,
])

@php
    $colorClasses = [
        'primary' => 'checkbox-switch-primary',
        'secondary' => 'checkbox-switch-secondary',
        'success' => 'checkbox-switch-success',
        'info' => 'checkbox-switch-info',
        'danger' => 'checkbox-switch-danger',
        'dark' => 'checkbox-switch-dark',
    ];
    $id = $id ?? $name . '_' . rand(100, 999);
    $inputClass = $inputClass ? ' ' . $inputClass : null;
    $variantClass = $colorClasses[$variant] ?? $colorClasses['secondary'];  
@endphp

<div {{ $attributes->merge(['class' => "checkbox-switch-group"]) }} >
    <span class="checkbox-switch {{ $variantClass }}">
        <span class="checkbox-switch-container">
            <input type="hidden" name="{{ $name }}" value="0">
            <input
                type="checkbox"
                id="{{ $id }}"
                class="checkbox-switch-form-control{{ $inputClass }}"
                name="{{ $name }}"
                value="{{ $value }}"
                {{ $checked ? 'checked' : '' }}
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
            >
            <span class="switch-thumb"></span>
            <span class="switch-thumb-ripple"></span>
        </span>
        <span class="checkbox-switch-track"></span>
    </span>

    @if($label)
        <label class="checkbox-switch-label" for="{{ $id }}">{{ $label }}</label>
    @endif
</div>

