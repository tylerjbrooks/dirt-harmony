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

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        @stack('styles')
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gradient-to-br from-orange-600 to-orange-50 p-3 md:p-10">
            <div class="min-h-screen bg-white rounded-lg shadow-lg">
                <div class="py-5">
                    <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
                        @if (Route::has('login'))
                            <div class="p-6 text-right">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-bold text-zinc-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-bold text-zinc-500">Log in</a>
                                @endauth
                            </div>
                        @endif

                        <div class="min-w-7xl w-full my-6 px-2 md::px-4">
                            <div class="flex justify-center">
                                <a href="{{route('welcome')}}">
                                    <svg viewBox="106.3505 89.299 215.375 38.1553" width="350" height="70" xmlns="http://www.w3.org/2000/svg">
                                      <text style="fill: rgb(251,146,60); font-family: Arial, sans-serif; font-size: 34px; font-weight: 700; text-anchor: middle; white-space: pre; text-decoration: underline solid rgba(0, 0, 0, 0.85);" x="214.038" y="120.299">Dirt Harmony</text>
                                    </svg>
                                </a>
                            </div>

                            <main>
                                <div class="mt-12 w-full border-2 border-zinc-400 rounded-md overflow-hidden">
                                    {{ $slot }}
                                </div>
                            </main>

                            <div class="flex justify-center mt-6 px-0 sm:items-center sm:justify-between">
                                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                                    <div class="flex items-center gap-4">
                                        Dirt Harmony by Tyler Brooks                          
                                    </div>
                                </div>

                                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @stack('modals')
        @stack('scripts')

        @livewireScripts
    </body>
</html>
