{{-- resources/views/components/modals/dismiss.blade.php --}}

@props([
    'class' => '',
])

<button @click="open = false" class="text-gray-400 hover:text-gray-600 focus:outline-none text-2xl">
    &times;
</button>
