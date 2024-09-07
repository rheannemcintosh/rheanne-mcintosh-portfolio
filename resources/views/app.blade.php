<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/css/app.css', 'resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        <div class="flex py-4  border-b-4 border-green-700">
            <div class="m-auto justify-center items-center text-green-700">
                <h1 class="text-7xl font-bold text-center">Rheanne McIntosh</h1>
                <h2 class="text-4xl text-center">Lead Software Engineer</h2>
            </div>
        </div>
        <div class="m-4 max-w-3xl mx-auto">
            @inertia
        </div>
    </body>
</html>
