{{-- resources/views/components/radio/index.blade.php --}}

@props([
    'name',
    'value',
    'label',
    'id' => null,
    'variant' => 'secondary',
    'checked' => false,
    'toggle' => null,
    'target' => null,
    'inputClass' => null,
])

@php
$id = $id ?? $name . '_' . rand(100, 999);
$variants = [
    'primary' => 'primary',
    'secondary' => 'secondary',
    'success' => 'success',
    'info' => 'info',
    'danger' => 'danger',
    'dark' => 'dark',
];
$variantClass = $variants[$variant] ?? $variants['secondary'];
$inputClass = $inputClass ? ' ' . $inputClass : null;
@endphp

<span {{ $attributes->merge(['class' => "radio-control-label"]) }}>
    <span class="radio-root radio-root-{{ $variantClass }}">
        <span class="radio-icon-label">
            <div class="radio-icon-root">

                <input
                    type="radio"
                    id="{{ $id }}"
                    class="radio-input form-check-input{{ $inputClass }}"
                    name="{{ $name }}"
                    value="{{ $value }}"
                    {{ $checked ? 'checked' : '' }}

                    @if($toggle) data-toggle="{{ $toggle }}" @endif
                    @if($target) data-target="{{ $target }}" @endif
                >

                {{-- Circle --}}
                <svg class="svg-icon-root" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                </svg>

                {{-- Checked dot --}}
                <svg class="svg-icon-root svg-icon-root-checked" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M8.465 8.465C9.37 7.56 10.62 7 12 7C14.76 7 17 9.24 17 12C17 13.38 16.44 14.63 15.535 15.535C14.63 16.44 13.38 17 12 17C9.24 17 7 14.76 7 12C7 10.62 7.56 9.37 8.465 8.465Z"/>
                </svg>

            </div>
        </span>

        <span class="radio-ripple-root"></span>
    </span>

    <label class="radio-label-text" for="{{ $id }}">
        {{ $label }}
    </label>
</span>
