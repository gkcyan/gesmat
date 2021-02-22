<div class="overflow-hidden bg-white shadow sm:rounded-lg">

    <div class="border-t border-gray-700">
        <dl>

            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput3"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Marque') }}</span>
                    <select wire:model="materiel_marque_id" id="exampleFormControlInput3"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline"
                        required>
                        <option></option>
                        @foreach ($ListeMaterielMarques as $ListeMaterielMarque)
                            <option value="{{ $ListeMaterielMarque->id }}">{{ $ListeMaterielMarque->libelle }}
                            </option>
                        @endforeach
                    </select>
                    @error('materiel_marque_id') <span class="text-red-500">{{ $message }}</span>@enderror

                </dd>


                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput5"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Type Commercial') }}</span>
                    <select wire:model="materiel_modele_id" id="exampleFormControlInput5"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline"
                        required>
                        <option></option>
                        @foreach ($ListeMaterielModeles as $ListeMaterielModele)
                            <option value="{{ $ListeMaterielModele->id }}">{{ $ListeMaterielModele->libelle }}
                            </option>
                        @endforeach
                    </select>
                    @error('materiel_modele_id') <span class="text-red-500">{{ $message }}</span>@enderror

                </dd>
            </div>


            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput4"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Genre') }}</span>
                    <select wire:model="materiel_type_id" id="exampleFormControlInput4"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline"
                        required>
                        <option></option>
                        @foreach ($ListeMaterielTypes as $ListeMaterielType)
                            <option value="{{ $ListeMaterielType->id }}">{{ $ListeMaterielType->libelle }}</option>
                        @endforeach
                    </select>
                    @error('materiel_type_id') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput1"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Matricule') }}</span>
                    <input type="text" wire:model="matricule" id="exampleFormControlInput1"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        placeholder="{{ __('Entrer le Matricule') }}" required>
                    @error('matricule') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
            </div>


            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput5"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Energie') }}</span>
                    <select wire:model="carb_produit_id" id="exampleFormControlInput5"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline"
                        required>

                        <option></option>
                        @foreach ($ListeCarbProduits as $ListeCarbProduit)
                            <option value="{{ $ListeCarbProduit->id }}">{{ $ListeCarbProduit->libelle }}</option>
                        @endforeach
                    </select>
                    @error('carb_produit_id') <span class="text-red-500">{{ $message }}</span>@enderror

                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput5"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('1ier Mise en Circulat°') }}</span>
                    <input type="date" wire:model="date_premiere_mc" id="exampleFormControlInput5"
                        placeholder="{{ __('Date de mise en circulation') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline ">
                    @error('date_premiere_mc') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput7"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Date Edit° Carte Grise') }}</span>
                    <input type="date" wire:model="date_edition" id="exampleFormControlInput7"
                        placeholder="{{ __('Date edition carte grise') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline ">
                    @error('date_edition') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
            </div>


            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput9"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Proprietaire') }}</span>
                    <input type="text" id="exampleFormControlInput9" wire:model="propietraire"
                        placeholder="{{ __('Proprietaire') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline "
                        required>
                    @error('propietraire') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput9"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Essieux') }}</span>
                    <input type="text" id="exampleFormControlInput9" wire:model="essieu"
                        placeholder="{{ __('Essieux') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline "
                        required>
                    @error('essieu') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput10"
                        class="block text-sm font-bold text-gray-700 mb1">{{ __('PTAC') }}</span>
                    <input type="text" id="exampleFormControlInput10" wire:model="ptac"
                        placeholder="{{ __('PTAC') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('ptac') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput11"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('PV') }}</span>
                    <input type="text" id="exampleFormControlInput1" wire:model="pv" placeholder="{{ __('PV') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('pv') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput12"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('CU') }}</span>
                    <input type="text" id="exampleFormControlInput12" wire:model="cu" placeholder="{{ __('CU') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('cu') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput13"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Carosserie') }}</span>
                    <input type="text" id="exampleFormControlInput13" wire:model="carosserie"
                        placeholder="{{ __('Carosserie') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('carosserie') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput14"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Num Carte Grise') }}</span>
                    <input type="text" id="exampleFormControlInput14" wire:model="num_carte_grise"
                        placeholder="{{ __('Num Carte Grise') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('num_carte_grise') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput18"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Couleur') }}</span>
                    <input type="text" id="exampleFormControlInput18" wire:model="couleur"
                        placeholder="{{ __('Couleur') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('couleur') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput17"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Places assises') }}</span>
                    <input type="text" id="exampleFormControlInput7" wire:model="place_assise"
                        placeholder="{{ __('Places assises') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('place_assise') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput16"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Puissance fiscale') }}</span>
                    <input type="text" id="exampleFormControlInput16" wire:model="puissance_fiscale"
                        placeholder="{{ __('Puissance fiscale') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('puissance_fiscale') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput15"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Usage') }}</span>
                    <input type="text" id="exampleFormControlInput15" wire:model="usage"
                        placeholder="{{ __('Usage') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('usage') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput20"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Num Chassis') }}</span>
                    <input type="text" id="exampleFormControlInput20" wire:model="chassis"
                        placeholder="{{ __('Num Chassis') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('chassis') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
            </div>



        </dl>
    </div>
</div>
