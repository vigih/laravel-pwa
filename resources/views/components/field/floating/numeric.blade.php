{{-- resources/views/components/field/floating/numeric.blade.php --}}

@props([
    'name' => '',
    'label' => '',
    'type' => 'number',
    'size' => 'md',
    'value' => null,
    'icon' => '',
    'variant' => 'primary',
    'required' => false,
    'disabled' => false,
    'placeholder' => null,
    'inputClass' => null,
])

@php
    $inputClass = $inputClass ? ' ' . $inputClass : null;
@endphp

<div {{ $attributes->merge(['class' => "input-group input-group-$size input-group-outline input-group-icon bg-white"]) }} {{ $attributes }}>
    <x-field.prepend icon="{{ $icon }}" />

    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $variant }}">
        <div class="textfield-outline-wrapper">
            <x-field.label label="{{ $label }}" />
            <input
                type="{{ $type }}"
                name="{{ $name }}"
                class="[appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none form-control{{ $inputClass }}"
                id="{{ $name }}"
                onkeypress="return event.charCode >= 48 && event.charCode <= 57" 
                pattern="[0-0]*"
                inputmode="numeric"
                {{ $value ? "value old($name, $value)'" : '' }}
                {{ $placeholder ? "placeholder='$placeholder'" : '' }}
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
            >
        </div>
    </div>
</div>

