<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/manifest.json" rel="manifest">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="site-page flex justify-center min-h-screen bg-gray-200/75">
        <div class="site-content max-w-[500px] w-full">
            <!-- Page Content -->
            <main>
                @isset($section)
                    {{ $section }}
                @endisset
            </main>

            {{-- Page footer  --}}
            @isset($footer)
                {{ $footer }}
            @endisset
        </div>
    </div>
</body>

</html>
