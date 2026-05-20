{{-- resources/views/components/accordion/item-group.blade.php --}}

@props([
    'title', 
    'id', 
])

<button type="button"
    class="w-full flex justify-between items-center p-4 bg-slate-50 hover:bg-slate-100 text-slate-800 font-medium transition-colors duration-200 text-left"
    @click="activeItem = (activeItem === '{{ $id }}' ? null : '{{ $id }}')"
    :aria-expanded="activeItem === '{{ $id }}' ? 'true' : 'false'" 
    aria-controls="content-{{ $id }}">
    <span>{{ $title }}</span>
</button>

<!-- Konten Accordion -->
<div id="content-{{ $id }}" 
    x-show="activeItem === '{{ $id }}'" 
    x-collapse 
    x-cloak
    class="border-t border-slate-200 bg-white">
    <div class="p-4 text-slate-600 leading-relaxed text-sm">
        {{ $slot }}
    </div>
</div>
