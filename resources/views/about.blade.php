<x-layout>
    <x-slot:title>About Us</x-slot>
    <x-tailwind-ui-stacked-dark-nav>
        <x-slot:header>About Page</x-slot>
        <p>
            Site details:
            {{ $appName }}
            {{ $appVer }}
        </p>
    </x-tailwind-ui-stacked-dark-nav>
</x-layout>
