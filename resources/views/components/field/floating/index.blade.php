{{-- resources/views/components/field/floating/index.blade.php --}}

@props([
    'name' => '',
    'label' => '',
    'type' => 'text',
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
                class="form-control{{ $inputClass }}"
                id="{{ $name }}"
                
                {{ $value ? "value old($name, $value)'" : '' }}
                {{ $placeholder ? "placeholder='$placeholder'" : '' }}
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
            >
        </div>
    </div>
</div>
