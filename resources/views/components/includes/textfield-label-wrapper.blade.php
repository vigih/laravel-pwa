{{-- resources/views/components/includes/textfield-label-wrapper.blade.php --}}

@props([
    'label' => ''
])

<div class="textfield-label-wrapper">
    <div class="textfield-outline-left"></div>
    <div class="textfield-outline-middle">
        <label class="control-label">{{ $label }}</label>
    </div>
    <div class="textfield-outline-right"></div>
</div>
