@props(['name', 'label' => '', 'value' => null, 'variant' => 'primary', 'placeholder' => null])

<div {{ $attributes->merge(['class' => 'input-group input-group-outline input-group-icon bg-white']) }}>
    <div class="form-group textfield textfield-outline textfield-floating-label textfield-{{ $variant }}">
        <div class="textfield-outline-wrapper">
            <x-field.label label="{{ $label }}" />
            <textarea
                id="{{ $name }}"
                name="{{ $name }}"
                rows="3"
                class="form-control-textarea input-textarea block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg outline-none"
                @if ($placeholder) placeholder="{{ $placeholder }}" @endif
                {{ $attributes }}>{{ $value ?: $slot }}</textarea>
        </div>
    </div>
</div>
