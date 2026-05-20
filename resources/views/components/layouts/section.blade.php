{{-- resources/views/components/layouts/section.blade.php --}}

<section {{ $attributes->merge(['class' => 'p-2 min-h-screen']) }} {{ $attributes }}>
    {{ $slot }}
</section>
