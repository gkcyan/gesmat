<div class="flex justify-between">
<!-- Previous Page Link -->
@if ($paginator->onFirstPage())
<div class="relative inline-flex items-center justify-between w-32 px-4 py-2 text-sm font-medium leading-5 text-gray-400 border border-gray-300 rounded-md bg-gray-50">
    <x-icons.arrow-left />
    Precedent
</div>
@else
<button wire:click="previousPage" class="relative inline-flex items-center justify-between w-32 px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
    <x-icons.arrow-left />
    Precedent
</button>
@endif


<!-- Next Page pnk -->
@if ($paginator->hasMorePages())
<button wire:click="nextPage" class="relative inline-flex items-center justify-between w-32 px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
    Suivant
    <x-icons.arrow-right />
</button>
@else
<div class="relative inline-flex items-center justify-between w-32 px-4 py-2 text-sm font-medium leading-5 text-gray-900 border border-gray-300 rounded-md bg-gray-50">
    Suivant
    <x-icons.arrow-right class="inline" />
</div>
@endif
</div>
