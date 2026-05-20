{{-- resources/views/components/card/index.blade.php --}}

<div {{ $attributes->merge(['class' => 'shadow-md rounded-md border-gray-200 bg-white']) }}>
    {{ $slot }}
</div>
