<div>
    {{-- Stop trying to control. --}}
    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Plantations') }}
            </h2>
        </x-slot>
    
        <div class="py-1">
            <div class="py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="">
                  {{-- @livewire('services.services-table',['ListeEntreprises'=>'','ListeSites'=>'']) --}}
                @livewire('plantations.plantation-table')
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
