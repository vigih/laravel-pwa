{{-- resources/views/components/field/floating/currency.blade.php --}}

@props([
    'name' => '',
    'label' => '',
    'size' => 'md',
    'value' => null,
    'icon' => 'currency_exchange',
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
                type="tel"
                name="{{ $name }}"
                class="form-control input-currency text-right !font-semibold{{ $inputClass }}"
                id="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder }}"
                maxlength="14"
                autocomplete="off"
                onkeypress="return /[0-9\.]/i.test(event.key)"
                oninput="this.value = this.value.replace(/[^0-9\.]/g, '');if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
            >
        </div>
    </div>

</div>
