<x-footer.fixed
    class=" bg-white p-3 rounded-lg"
    x-show="open"
    x-transition:enter="transform transition ease-out duration-300"
    x-transition:enter-start="translate-y-full opacity-0 scale-95"
    x-transition:enter-end="translate-y-0 opacity-100 scale-100"
    x-transition:leave="transform transition ease-in duration-200"
    x-transition:leave-start="translate-y-0 opacity-100 scale-100"
    x-transition:leave-end="translate-y-full opacity-0 scale-95">
    {{ $slot }}
</x-footer.fixed>
