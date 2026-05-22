{{-- resources/views/components/layouts/section-guest.blade.php --}}

<section {{ $attributes->merge(['class' => 'min-h-screen flex flex-col justify-center items-center bg-gray-200/50']) }}>
    {{ $slot }}
</section>
