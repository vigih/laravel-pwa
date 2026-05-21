{{-- resources/views/components/tabs/button.blade.php --}}

@props(['name', 'active' => '', 'notActive' => ''])

@php
    $name = strtolower($name);
    $notActive = 'border-transparent ' . $notActive;
@endphp

<button
    @click="activeTab = '{{ $name }}'"
    :class="activeTab === '{{ $name }}'
        ?
        @js($active) :
        @js($notActive)"
    {{ $attributes->merge(['class' => 'px-4 py-2 text-sm font-medium bg-transparent transition-all duration-300 ease-in-out outline-none focus:outline-none']) }}>
    {{ $slot }}
</button>
