{{-- resources/views/components/includes/input-group-append.blade.php --}}

@props([
    'icon' => null
])

@if($icon)
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="material-icons-outlined">{{ $icon }}</span>
        </div>
    </div>
@endif
