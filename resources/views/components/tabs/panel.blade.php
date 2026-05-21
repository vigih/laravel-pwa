{{-- resources/views/components/tabs/panel.blade.php --}}

@props(['name'])

<div
    x-show="activeTab === '{{ $name }}'"
    x-cloak
    {{ $attributes->merge(['class' => 'p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm']) }}>
    {{ $slot }}
</div>
