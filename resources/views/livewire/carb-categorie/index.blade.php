<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Carburant') }}  
                <span class="text-xs font-thin text-indigo-800">Module de gestion du Carburant</span>   
                
            </h2>

            
        </x-slot>
    
        <div class="py-1">
            <div class="py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="">              
                     @livewire('carb-categorie.categorie-table')
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
