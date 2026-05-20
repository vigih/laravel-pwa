{{-- resources/views/components/field/append.blade.php --}}

@props([
    'icon' => 'email'
])

<div class="input-group-append">
    <div class="input-group-text">
        <span class="material-icons-outlined">{{ $icon }}</span>
    </div>
</div>
