{{-- resources/views/components/date-picker/time-picker.blade.php --}}

@props([
    'name' => '',
    'label' => '',
    'type' => 'text',
    'value' => '',
    'icon' => null,
    'color' => 'primary',
    'required' => false,
    'disabled' => false,
    'placeholder' => '',
    'class' => '',
])

<div class="input-group input-group-outline input-group-icon bg-white">
    <x-includes.input-group-prepend :icon="$icon" />
    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $color }}">
        <div class="textfield-outline-wrapper">
            <x-includes.textfield-label-wrapper :label="$label" />
            <input
                type="{{ $type }}"
                name="{{ $name }}"
                class="form-control time-picker {{ $class }}"
                id="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder }}"
                readonly
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $attributes }}
            >
        </div>
    </div>
</div>

