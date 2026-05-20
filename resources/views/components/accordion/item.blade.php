{{-- resources/views/components/accordion/item.blade.php --}}

@props([
    'title', 
    'id',
    'open' => false
])

<div x-data="{ active: {{ $open ? 'true' : 'false' }} }"
    {{ $attributes }}
    class="border border-slate-200 rounded-lg overflow-hidden mb-3"
    >

    <button type="button"
        class="w-full flex justify-between items-center p-4 bg-slate-50 hover:bg-slate-100 text-slate-800 font-medium transition-colors duration-200 text-left"
        @click="active = !active" 
        :aria-expanded="active ? 'true' : 'false'" 
        aria-controls="content-{{ $id }}">
        <span>{{ $title }}</span>
    </button>

    <!-- Konten Accordion (Animasi Smooth dengan x-collapse) -->
    <div id="content-{{ $id }}" 
        x-show="active" 
        x-collapse 
        x-cloak 
        class="border-t border-slate-200 bg-white"
        >
        <div class="p-4 text-slate-600 leading-relaxed text-sm">
            {{ $slot }}
        </div>
    </div>
</div>
