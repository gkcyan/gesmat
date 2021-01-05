<table class="w-full table-fixed">
    <thead>
        <tr class="bg-gray-100">
            <th class="w-10 px-2 py-2">No.</th>
            <th class="px-4 py-2">Nom</th>
            <th class="px-4 py-2">Com.</th>
            <th class="px-4 py-2">Sigle</th>
            <th class="px-4 py-2">RCM</th> 
            <th class="px-4 py-2">CC</th>
            <th class="px-4 py-2">Adresse</th>
            <th class="px-4 py-2">Imposit°</th>
            <!--th class="px-4 py-2">Capital</th>
            <th class="px-4 py-2">Image</th>
            <th class="px-4 py-2">Actif</th-->
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entreprises as $entreprise)
        <tr>
            <td class="px-4 py-2 border">{{ $entreprise->id }}</td>                           
            <td class="px-4 py-2 border">{{ $entreprise->denomination }}</td>
            <td class="px-4 py-2 border">{{ $entreprise->nom_commercial }}</td>
            <td class="px-4 py-2 border">{{ $entreprise->sigle }}</td>
            <td class="px-4 py-2 border">{{ $entreprise->rcm }}</td>
            <td class="px-4 py-2 border">{{ $entreprise->ncc }}</td>
            <td class="px-4 py-2 border">{{ $entreprise->adresse }}</td>
            <td class="px-4 py-2 border">{{ $entreprise->forme_juridique }}</td>
            <!--td class="px-4 py-2 border">{{-- $entreprise->capital --}}</td>
            <td class="px-4 py-2 border">{{-- $entreprise->image --}}</td>
            <td class="px-4 py-2 border">{{-- $entreprise->actif --}}</td-->            
            <td class="px-4 py-2 border">
                <button wire:click="read({{ $entreprise->id }})" class="px-1 py-1 font-bold text-white bg-teal-500 rounded hover:bg-teal-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                </button>
                <button wire:click="edit({{ $entreprise->id }})" class="px-1 py-1 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                </button>
                <button wire:click="delete({{ $entreprise->id }})" class="px-1 py-1 font-bold text-white bg-red-500 rounded hover:bg-red-700">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>