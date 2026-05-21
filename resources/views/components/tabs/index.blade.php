{{-- resources/views/components/tabs/index.blade.php --}}

@props([
    'default' => '',
])

<div x-data="{ activeTab: '{{ $default }}' }" {{ $attributes->merge(['class' => 'w-full']) }}>
    <!-- Bagian navigasi tombol -->
    @isset($header)
        {{ $header }}
    @endisset

    <!-- Bagian isi konten -->
    @isset($content)
        {{ $content }}
    @endisset
</div>
