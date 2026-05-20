{{-- resources/views/components/field/prepend.blade.php --}}

@props([ 'icon' => '' ])

<div class="input-group-prepend">
    <div class="input-group-text">
        <span class="material-icons-outlined">{{ $icon }}</span>
    </div>
</div>

