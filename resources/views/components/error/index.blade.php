@props(['imgUrl', 'title', 'message', 'backUrl'])

@php
    if ($backUrl) {
        if ($backUrl === '/') {
            $backUrl = url('/');
        } else {
            $backUrl = route($backUrl);
        }
    }
@endphp

<div class="text-center">
    <img src="{{ asset($imgUrl) }}" alt="{{ $title }}" class="w-full mb-4" />
    <h1 class="font-bold text-lg">{{ $title }}</h1>
    <p class="pt-3 mb-8">{{ $message }}</p>
    <a href="{{ $backUrl }}"
        class="bg-yellow-400 hover:bg-yellow-500 w-full py-2 text-black inline-flex items-center shadow-md justify-center font-medium rounded-lg transition-all duration-200">Kembali
        ke Beranda</a>
</div>
