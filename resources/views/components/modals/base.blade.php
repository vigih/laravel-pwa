{{-- resources/views/components/modals/base.blade.php --}}

@props([
    'class' => '',
])
<div x-show="open"
    class="fixed inset-0 z-[10000] flex items-center justify-center p-2 sm:p-0 {{ $class }}"
    style="display: none;">
    {{ $slot }}
</div>
