<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Materiel') }}
                <span class="text-xs font-thin text-indigo-800">Module de gestion du Materiel</span>
            </h2>
        </x-slot>

        <div class="py-1">
            <div class="py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="">
                    <!-- component -->

                    @livewire('materiel.select-materiel',['nbre','mat'])

                    <div class="py-2 border-t border-gray-300"></div>
                    {{-- @livewire('materiel.graph-materiel') 
                    <div class="py-2 border-t border-gray-300"></div>--}}

                    @livewire('mat-matricule.matricule-table')
                </div>
            </div>
        </div>

    </x-app-layout>
</div>
