{{-- resources/views/components/textfield-multi-icon.blade.php --}}
@props([
    'name' => '',
    'label' => '',
    'type' => 'text',
    'value' => '',
    'iconPrepend' => null,
    'iconAppend' => null,
    'color' => 'primary',
    'required' => false,
    'disabled' => false,
    'placeholder' => ' ',
    'class' => '',
])

<div class="input-group input-group-outline input-group-icon bg-white">
    <x-includes.input-group-prepend :icon="$iconPrepend" />
    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $color }}">
        <div class="textfield-outline-wrapper">
            
            <x-includes.textfield-label-wrapper :label="$label" />
            <input
                type="{{ $type }}"
                name="{{ $name }}"
                class="form-control {{ $class }}"
                id="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
                {{ $attributes }}
            >
        </div>
    </div>
    <x-includes.input-group-append :icon="$iconAppend" />
</div>
