{{-- resources/views/components/alerts/dismiss.blade.php --}}

@props([
    'class' => '',
])

<div class="absolute right-0 top-[-2px]">
    <button 
        @click="open = false" 
        type="button" 
        class="text-current opacity-50 hover:opacity-100 transition-opacity duration-150"
    >
        <span class="material-icons font-bold text-base">close</span>
    </button>
</div>

