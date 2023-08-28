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
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        {{--<x-banner />--}}

        <div class="min-h-screen bg-gradient-to-br from-orange-300 to-orange-50 p-3">
            <div class="min-h-screen bg-zinc-50 rounded-lg shadow-lg">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')
        @stack('scripts')

        @livewireScripts
    </body>
</html>
