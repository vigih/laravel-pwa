{{-- resources/views/components/alert/dismiss.blade.php --}}

<div {{ $attributes->merge(['class' => '']) }}>
    <button
        @click="open = false"
        type="button"
        class="text-current opacity-50 hover:opacity-100 transition-opacity duration-150">
        <span class="material-icons font-bold text-base">close</span>
    </button>
</div>
