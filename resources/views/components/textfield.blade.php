{{-- resources/views/components/textfield.blade.php --}}
@props([
    'name' => '',
    'label' => '',
    'type' => 'text',
    'value' => '',
    'icon' => null,
    'color' => 'primary',
    'required' => false,
    'disabled' => false,
    'placeholder' => ' ',
    'class' => '',
])
<div class="input-group input-group-outline input-group-icon bg-white">
    @if($icon)
    <div class="input-group-prepend">
        <div class="input-group-text">
            <span class="material-icons-outlined">{{ $icon }}</span>
        </div>
    </div>
    @endif

    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $color }}">
        <div class="textfield-outline-wrapper">
            <div class="textfield-label-wrapper">
                <div class="textfield-outline-left"></div>
                <div class="textfield-outline-middle">
                    <label class="control-label">{{ $label }}</label>
                </div>
                <div class="textfield-outline-right"></div>
            </div>
            <input
                type="{{ $type }}"
                name="{{ $name }}"
                class="form-control {{ $class }}"
                id="{{ $name }}"
                value="{{ old($name, $value) }}"
                placeholder="{{ $placeholder }}"
                {{ $required ? 'required' : '' }}
                {{ $disabled ? 'disabled' : '' }}
            >
        </div>
    </div>
</div>
