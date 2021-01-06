<div class="px-2 py-2 overflow-hidden bg-white shadow-xl sm:rounded-lg">
    
   {{-- <x-jet-succes-message/>
    <x-jet-loading/>
    
    @if($isOpen)
        @include('livewire.create')
    @endif--}}
    <!--button wire:click="create()" class="px-4 py-2 my-2 text-xs font-bold text-white bg-green-900 rounded hover:bg-green-700">Ajouter</button>
    <button wire:click="print()" class="px-4 py-2 my-2 text-xs font-bold text-white bg-yellow-900 rounded hover:bg-yellow-700">PDF</button>
    <button wire:click="export()" class="px-4 py-2 my-2 text-xs font-bold text-white bg-yellow-900 rounded hover:bg-yellow-700">Excel</button-->
    {{-- @include('livewire.table') --}}
     
        @livewire('entreprise-table')
     
</div>