<x-layout>
    <x-slot:title>Home Page</x-slot>
    <x-slot:stylerefs>
        @vite(['resources/css/home.css'])
    </x-slot>
    <x-tailwind-ui-stacked-dark-nav>
        <x-slot:header>Welcome to Justin's Laravel test bench!</x-slot>
        <div id="content-wrapper">
            <ol>
                <li>Dr. Pepper</li>
                <li>Pepsi</li>
                <li>Mt. Dew</li>
            </ol>
        </div>
    </x-tailwind-ui-stacked-dark-nav>
</x-layout>
