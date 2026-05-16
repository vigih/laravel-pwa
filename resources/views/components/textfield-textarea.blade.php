{{-- resources/views/components/textfield-textarea.blade.php --}}

@props([
    'name' => '',
    'label' => '',
    'value' => '',
    'color' => 'primary',
    'placeholder' => ' ',
    'class' => '',
])
<div class="input-group input-group-outline input-group-icon bg-white">
    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $color }}">
        <div class="textfield-outline-wrapper">
            <x-includes.textfield-label-wrapper :label="$label" />
            <textarea 
                id="{{ $name }}"
                name="{{ $name }}"
                rows="3"
                {{ $attributes->merge(['class' => 'form-control-textarea input-textarea block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg outline-none']) }}
                placeholder="{{ $placeholder }}"
                {{ $attributes }}>
            {{ $slot }}
            </textarea>
        </div>
    </div>
</div>
