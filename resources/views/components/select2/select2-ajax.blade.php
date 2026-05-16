{{-- resources/views/components/select2/select2-ajax.blade.php --}}

@props([
'icon' => null,
'label' => '',
'color' => 'primary',
'name' => '',
'id' => null,
'selected' => null,
'disabled' => false,
'placeholder' => null,
])

<div class="input-group input-group-outline input-group-icon bg-white">

    <x-includes.input-group-prepend :icon="$icon" />
    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $color }}">
        <div class="textfield-outline-wrapper">
            <x-includes.textfield-label-wrapper :label="$label" />
            <select
                name="{{ $name }}"
                id="{{ $id ?? $name }}"
                {{ $disabled ? 'disabled' : '' }}
                class="form-control select2-ajax select2 select2-floating-label {{ $attributes->get('class') }}"
                {{ $attributes->except('class') }} 
                {{ $attributes }}>

                @if($placeholder)
                <option value="">{{ $placeholder }}</option>
                @endif

                
            </select>
        </div>
    </div>
</div>
