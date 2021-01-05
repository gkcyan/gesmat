
    <nav x-data="{ open: false }" class="bg-gray-300 border-b border-black-900">
        <!-- Primary Navigation Menu -->
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between h-10">
                <div class="flex">
                    <!-- Logo -->

                    <!-- Navigation Links -->
                   @livewire('containt-sous-menu')
                    
                </div>
                

                <!-- version mobile-->
                <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    @livewire('containt-sous-menu')
                </div>
            </div>
    </nav>
   
 