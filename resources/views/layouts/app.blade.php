<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

        <!-- add kutty dropdow component -->
        <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/dropdown.min.js"></script>
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-blue-100">
            <x-jet-nav-bar/>
            <x-jet-sous-nav-bar/>

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="px-4 py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header ?? ' '}}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="py-6">
                    <div class="py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                            <x-jet-nav-bar-page/>
                            <x-jet-page-title/>
                             {{ $slot }}
                        </div>
                    </div>
                </div>
            </main>

            <!-- Page footer -->
            
             <footer class="px-4 py-1 font-sans bg-white">                
                    @yield('footer')
                        <div class="pt-1 mt-1 text-xs text-center text-gray-700 border-t border-gray-300"> 
                            ©2020 Yannick GOUEDE. All rights reserved.
                        </div>
             </footer>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
