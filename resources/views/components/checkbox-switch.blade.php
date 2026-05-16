{{-- resources/views/components/checkbox-switch.blade.php --}}
@props([
    'name' => '',
    'id' => null,
    'label' => '',
    'value' => '1',
    'checked' => false,
    'required' => false,
    'disabled' => false,
    'color' => 'secondary', // primary, secondary, success, danger
    'class' => '',
])

@php
$id = $id ?? $name . '_' . rand(100, 999);
$colorClasses = [
    'primary' => 'checkbox-switch-primary',
    'secondary' => 'checkbox-switch-secondary',
    'success' => 'checkbox-switch-success',
    'info' => 'checkbox-switch-info',
    'danger' => 'checkbox-switch-danger',
];
$colorClass = $colorClasses[$color] ?? $colorClasses['secondary'];
@endphp

<span class="checkbox-switch-group">
    <span class="checkbox-switch {{ $colorClass }} {{ $class }}">
        <span class="checkbox-switch-container">
            <input type="hidden" name="{{ $name }}" value="0">
            <input
                type="checkbox"
                id="{{ $id }}"
                class="checkbox-switch-form-control"
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
</span>


<!-- <span class="checkbox-switch-group">
    <span class="checkbox-switch checkbox-switch-secondary">
        <span class="checkbox-switch-container switch-checked">
            <input type="checkbox" id="rama" class="checkbox-switch-form-control" name="Rama" value="1" checked="" data-animation="fo"></input>
            <span class="switch-thumb"></span>
            <span class="switch-thumb-ripple"></span>
        </span>
        <span class="checkbox-switch-track"></span>
    </span>
    <label class="checkbox-switch-label" for="rama">Rama Like</label>
</span> -->
