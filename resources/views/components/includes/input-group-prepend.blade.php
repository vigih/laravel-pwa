{{-- resources/views/components/includes/input-group-prepend.blade.php --}}

@props([
    'icon' => null
])

@if($icon)
    <div class="input-group-prepend">
        <div class="input-group-text">
            <span class="material-icons-outlined">{{ $icon }}</span>
        </div>
    </div>
@endif
