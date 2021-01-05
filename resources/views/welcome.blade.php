<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        

        
        
    </head>
    <body class="min-h-screen " 
    x-data="{ atTop: true, openModal: false }"
    x-on:scroll.window="atTop = (window.pageYOffset > 100) ? false : true; "
    x-on:keydown.escape=" openModal = openModal ? false : true">

    <div class="">
        <section class="fixed z-10 w-full p-2" x-bind:class="{ 'bg-white shadow-lg': !atTop }">
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center">
                    <div class="text-blue-700 hover:scale-110 "
                        x-bind:class="{ 'text-blue-900': !atTop, 'text-blue-700': atTop}">
                        <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3h18v18H3zM21 9H3M21 15H3M12 3v18"/>
                        </svg>
                    </div>
                    <div class="ml-4 font-serif text-4xl text-blue-700 " x-bind:class="{ 'text-blue-900': !atTop, 'text-blue-700 scale-110': atTop}">
                        {{ config('app.name', 'Laravel') }}
                    </div>
                </div>
                @if (Route::has('login'))
                    <div class="flex items-center">
                        <ul class="flex items-center hidden md:flex">
                            @auth
                                <li class="p-2 mr-8 text-gray-700 uppercase" x-data="{ open: false }"><a
                                    href="{{ route('dashboard') }}">Dashboard</a></li>
                                @else
                                    <li class="p-2 mr-8 text-gray-700 uppercase" x-data="{ open: false }"><a
                                            href="{{ route('login') }}">Login</a></li>
                                    @if (Route::has('register'))
                                        <li class="p-2 mr-8 text-gray-700 uppercase" x-data="{ open: false }"><a
                                            href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endif
                            <!--li class="relative p-2 mr-3 text-gray-700 uppercase" x-data="{ open: false }">
                                <button @click="open = true" style="text-transform: inherit" class="flex items-center">About
                                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 9l6 6 6-6"/>
                                    </svg>
                                </button>
                                <ul class="absolute right-0 mt-2 shadow-lg bg-whiteborder" x-show="open"
                                    @click.away="open = false">
                                    <li class="p-2 text-gray-700 bg-gray-200" x-data="{ open: false }"><a
                                            href="#">Test</a></li>
                                </ul>
                            </li-->
                            <!--li class="relative p-2 mr-3 text-gray-700 uppercase" x-data="{ open: false }">
                                <button @click="open = true" style="text-transform: inherit" class="flex items-center">With Kids
                                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 9l6 6 6-6"/>
                                    </svg>
                                </button>
                                <ul class="absolute right-0 mt-2 shadow-lg bg-whiteborder" x-show="open"
                                    @click.away="open = false">
                                    <li class="p-2 text-gray-700 bg-gray-200" x-data="{ open: false }"><a
                                            href="#">Child 1</a></li>
                                    <li class="p-2 text-gray-700 bg-gray-200" x-data="{ open: false }"><a
                                            href="#">Child 2</a></li>
                                </ul>
                            </li-->
                        </ul>
                        <div class="" x-on:click="openModal = !openModal">
                            <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <section 
            class="fixed z-10 hidden w-full h-full p-6 bg-indigo-200"
            x-bind:class="{ 'hidden': !openModal }">
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center">
                    <div class="text-indigo-900 ">
                        <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3h18v18H3zM21 9H3M21 15H3M12 3v18"/>
                        </svg>
                    </div>
                    <div class="ml-4 font-serif text-4xl text-indigo-900 ">SiteName</div>
                </div>
                <div class="flex items-center">
                    <div class="" x-on:click="openModal = !openModal">
                        <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-64 py-32 mx-auto bg-local" style="background-image: url({{asset('images/background_.png')}}) ">
            <div class="">
                <div class="container px-6 mx-auto">
                    <div class=""><h2 class="text-5xl text-green-600 ">Heading</h2></div>
                    <div class=""><!--x-jet-slide/--></div>
                </div>
            </div>
        </section>
        <section class="bg-no-repeat ">
            <div class="bg-white">
                <div class="container px-64 py-64 mx-auto">
                    <div class=""><h1 class="p-0 m-0 font-serif text-4xl ">New Heading</h1></div>
                    <x-jet-login-form/>
                    <div class=""><x-jet-slide/></div>
                </div>
            </div>
        </section>
        <section class="bg-gray-900 ">
            <div class="px-6 py-64 ">
                <div class="max-w-3xl mx-auto mb-4 font-serif text-2xl font-light text-indigo-100 "><p>"Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eufugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officiadeserunt mollit anim id est laborum."</p>
                </div>
                <label class="block max-w-2xl mx-auto font-bold text-green-200 ">source here</label>
            </div>
        </section>
        <section class="px-6 py-16 overflow-x-hidden bg-gray-400">
            <div class="container p-6 mx-auto mb-6">
                <h2 class="font-serif text-3xl text-center ">Lorem ipsum dolor sit amet</h2>
                <div class="text-center " data-aos="flip-down">
                    <p>Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat.</p>
                </div>
            </div>
            <div class="container flex flex-wrap w-full px-2 mx-auto">
                <div class="w-full mb-6 lg:w-1/3 ">
                    <div class="h-full p-4 mx-2 bg-indigo-200 shadow-lg">
                        <div class="text-indigo-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                <line x1="4" y1="22" x2="4" y2="15"></line>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-800 ">Lorem ipsum dolor sit amet</h3>
                        <div class="font-thin "><p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magnaaliqua.</p></div>
                    </div>
                </div>
                <div class="w-full mb-6 lg:w-1/3 ">
                    <div class="h-full p-4 mx-2 bg-indigo-200 shadow-lg">
                        <div class="text-indigo-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                <line x1="4" y1="22" x2="4" y2="15"></line>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-800 ">Lorem ipsum dolor sit amet</h3>
                        <div class="font-thin "><p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magnaaliqua.</p></div>
                    </div>
                </div>
                <div class="w-full mb-6 lg:w-1/3 ">
                    <div class="h-full p-4 mx-2 bg-indigo-200 shadow-lg">
                        <div class="text-indigo-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                <line x1="4" y1="22" x2="4" y2="15"></line>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-blue-800 ">Lorem ipsum dolor sit amet</h3>
                        <div class="font-thin "><p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magnaaliqua.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-6 py-32 overflow-x-hidden text-white bg-gray-600">
            <div class="container max-w-3xl mx-auto">
                <div class="mb-2 text-green-100 ">
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
                    </svg>
                </div>
                <h2 class="mb-4 font-serif text-3xl leading-tight text-center "
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore etdolore magna aliqua.</h2>
                <div class="mb-4 text-lg font-light text-center " data-aos="flip-right">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit animid est laborum.</p>
                </div>
                <ul class="flex flex-wrap justify-center" data-aos="fade-down">
                    <li class="p-4 m-4 font-bold uppercase border-2 rounded-full hover:bg-white hover:text-blue-600"
                        x-data="{ open: false }"><a href="#">Duis aute irure dolor</a></li>
                    <li class="p-4 m-4 font-bold uppercase border-2 rounded-full hover:bg-white hover:text-blue-600"
                        x-data="{ open: false }"><a href="#">Excepteur</a></li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
