<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            {{ $title }}
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{ $stylerefs ?? '' }}
    </head>
    <body class="h-full">
        <nav>
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="/about" style="color: green">About Us</x-nav-link>
            <x-nav-link href="/contact">Contact Us</x-nav-link>
        </nav>
        {{ $slot }}
    </body>
</html>
