composer global require "laravel/installer"
laravel new livewire_project --jet
configurar la base de datos : .env
    php artisan migrate


Livewire:
    php artisan livewire:publish --config
    config->app.php
    xonfig->livewire.php
    npm install
    npm run dev
    https://stackoverflow.com/questions/73180945/jetstream-css-and-js-not-working-and-showing-viteresources-css-app-css-re

    Si falla la visualizacion:
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
       <!-- @vite(['resources/css/app.css', 'resources/js/app.js'])-->
       <script src="{{ asset('js/app.js') }}" defer></script>

Crear componente livewire:
    php artisan make:livewire ShowPosts
    el componente queda en app->Http->Livewiere
