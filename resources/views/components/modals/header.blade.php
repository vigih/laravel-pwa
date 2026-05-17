{{-- resources/views/components/modals/header-modal.blade.php --}}

@props([
    'class' => '',
    'title' => '',
])

<div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
    <h3 class="text-lg font-semibold text-gray-900">{{ $title }}</h3>
    <x-modals.dismiss />
</div>
