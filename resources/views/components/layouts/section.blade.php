{{-- resources/views/components/layouts/section.blade.php --}}
@props([
    'class' => '',
])

<section class="p-2 {{ $class }}">
    {{ $slot }}
</section>
