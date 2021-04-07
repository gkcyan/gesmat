<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex flex-col w-full mb-2 space-y-2 lg:flex-row lg:space-x-2 lg:space-y-0 lg:mb-4 ">

        <div class="w-full lg:w-1/5">
            <div class="w-full p-3 bg-white border-l-4 border-purple-400 rounded-lg widget">
                <div class="flex items-center">
                    <div class="icon w-12 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="text-lg">{{ $mat }}</div>
                        <div class="text-sm text-gray-400">Matricules</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/5">
            <div class="w-full p-3 bg-white border-l-4 border-blue-400 rounded-lg widget">
                <div class="flex items-center">
                    <div class="icon w-12 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="text-lg">{{ $mark }}</div>
                        <div class="text-sm text-gray-400">Marques</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/5">
            <div class="w-full p-3 bg-white border-l-4 border-yellow-400 rounded-lg widget">
                <div class="flex items-center">
                    <div class="icon w-12 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="text-lg"> {{ $nbre }} </div>
                        <div class="text-sm text-gray-400">Types</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/5">
            <div class="w-full p-3 bg-white border-l-4 border-red-400 rounded-lg widget">
                <div class="flex items-center">
                    <div class="icon w-12 p-3.5 bg-red-400 text-white rounded-full mr-3">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="text-lg">{{ $genr }}</div>
                        <div class="text-sm text-gray-400">Genres</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/5">
            <div class="w-full p-3 bg-white border-l-4 border-green-400 rounded-lg widget">
                <div class="flex items-center">
                    <div class="icon w-12 p-3.5 bg-green-400 text-white rounded-full mr-3">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center">
                        <div class="text-lg">{{ $usag }}</div>
                        <div class="text-sm text-gray-400">Usages</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     
    
    
     
</div>
