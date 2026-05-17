<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    
    <div class="site-page flex justify-center min-h-screen bg-gray-100">
        <div class="site-content w-[360px]">
            <!-- Page Heading -->
            <header id="header" class="header">
                @isset($header)
                    {{ $header }}
                @endisset
            </header>

            <!-- Page Content -->
            <main>
                @isset($section)
                    {{ $section }}
                @endisset
            </main>
        </div>
    </div>

    <!-- Page footer -->
    <footer id="footer" class="footer fixed overflow-x-auto scrollbar-hidden bottom-0 z-[1000] w-full bg-white shadow-md border-t-[1px] border-gray-200">
        <div class="flex">
            <x-layouts.menu-footer label="{{ __('Pesanan') }}" icon="{{ __('home') }}" />
            <x-layouts.menu-footer label="{{ __('Cek Harga') }}" icon="{{ __('taxi_alert') }}" />
            <x-layouts.menu-footer label="{{ __('Dashboard') }}" icon="{{ __('dashboard') }}" active="text-yellow-500 font-bold" :url="route('dashboard')" />
            <x-layouts.menu-footer label="{{ __('Account') }}" icon="{{ __('person_outline') }}" :url="route('profile.index')" />
            <x-layouts.menu-footer label="{{ __('Report') }}" icon="{{ __('save_as') }}" />
        </div>
    </footer>
    
    {{-- Form POST tersembunyi yang mengeksekusi logout --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</body>
</html>
