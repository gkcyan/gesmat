<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Pont Bascule') }}
            </h2>
        </x-slot>
    
        <div class="py-1">
            <div class="py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="">
                  {{-- @livewire('services.services-table',['ListeEntreprises'=>'','ListeSites'=>'']) --}}
                 @livewire('pbascules.pbascule-table')
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
