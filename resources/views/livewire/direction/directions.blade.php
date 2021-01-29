<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Direction') }}
            </h2>
        </x-slot>
    
        <div class="py-1">
            <div class="py-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="">
                    @livewire('directions-table')
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
