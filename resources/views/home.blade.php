<x-layout>
    <x-slot:title>Home Page</x-slot>
    <x-slot:stylerefs>
        @vite(['resources/css/home.css'])
    </x-slot>
    <h1>Welcome Home!</h1>
    <x-tailwind-ui-stacked-dark-nav>
        <x-slot:header>Welcome to Justin's Laravel test bench!</x-slot>
        <x-slot:content>
            <div id="content-wrapper">
                <ol>
                    <li>Dr. Pepper</li>
                    <li>Pepsi</li>
                    <li>Mt. Dew</li>
                </ol>
            </div>
        </x-slot:content>
    </x-tailwind-ui-stacked-dark-nav>
</x-layout>
