{{-- resources/views/components/textfield-currency.blade.php --}}

@props([
    'name' => '',
    'label' => '',
    'value' => '',
    'icon' => null,
    'color' => 'primary',
    'required' => false,
    'disabled' => false,
    'placeholder' => ' ',
    'class' => '',
])

<div class="input-group input-group-outline input-group-icon bg-white">
  
    <x-includes.input-group-prepend :icon="$icon" />
    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $color }}">
        <div class="textfield-outline-wrapper">
            <x-includes.textfield-label-wrapper :label="$label" />
            <input
                type="tel"
                name="{{ $name }}"
                class="form-control input-currency text-right !font-semibold {{ $class }}"
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
