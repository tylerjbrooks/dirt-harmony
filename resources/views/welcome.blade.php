<x-landing-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            @if (Route::has('login'))
                <div class="p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="min-w-7xl w-full p-2 lg:p-4">
                <div class="flex justify-center">
                    <svg viewBox="106.3505 89.299 215.375 38.1553" width="400" height="70" xmlns="http://www.w3.org/2000/svg">
                      <text style="fill: rgb(251,146,60); font-family: Arial, sans-serif; font-size: 34px; font-weight: 700; text-anchor: middle; white-space: pre; text-decoration: underline solid rgba(0, 0, 0, 0.85);" x="214.038" y="120.299">Dirt Harmony</text>
                    </svg>
                </div>

                <div class="flex mt-16 w-full border-2 border-zinc-400 rounded-md overflow-hidden">
                    @livewire('browser')
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
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
</x-landing-layout>



