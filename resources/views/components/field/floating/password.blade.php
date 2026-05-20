{{-- resources/views/components/field/floating/password.blade.php --}}

@props([
    'name' => '',
    'label' => '',
    'type' => 'password',
    'size' => 'md',
    'value' => null,
    'icon' => 'key',
    'appendIcon' => 'visibility_off',
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
                class="form-control password-visibility{{ $inputClass }}"
                id="{{ $name }}"
                
                {{ $value ? "value old($name, $value)'" : '' }}
                {{ $placeholder ? "placeholder='$placeholder'" : '' }}
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
            >
        </div>
    </div>

    <x-field.append icon="{{ $appendIcon }}" />
</div>
