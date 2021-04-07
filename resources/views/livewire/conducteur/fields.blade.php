<div class="overflow-hidden bg-white shadow sm:rounded-lg">

    <div class="border-t border-gray-700">
        <dl>
            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput3"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Categorie') }}</span>
                    <select wire:model="conducteur_categorie_id" id="exampleFormControlInput3"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline"
                        required>
                        <option></option>
                        @foreach ($ListeCategorie as $ListeCategorie)
                            <option value="{{ $ListeCategorie->id }}">{{ $ListeCategorie->libelle }}
                            </option>
                        @endforeach
                    </select>
                    @error('conducteur_categorie_id') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput5"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Site') }}</span>
                    <select wire:model="site_id" id="exampleFormControlInput5"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline"
                        required>
                        <option></option>
                        @foreach ($ListeSite as $ListeSite)
                            <option value="{{ $ListeSite->id }}">{{ $ListeSite->libelle }}
                            </option>
                        @endforeach
                    </select>
                    @error('site_id') <span class="text-red-500">{{ $message }}</span>@enderror

                </dd>
            </div>

            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput1"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Nom') }}</span>
                    <input type="text" wire:model="nom" id="exampleFormControlInput1"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        placeholder="{{ __('Entrer le nom') }}" required>
                    @error('nom') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput1"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Prenoms') }}</span>
                    <input type="text" wire:model="prenom" id="exampleFormControlInput1"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        placeholder="{{ __('Entrer le Prenom') }}" required>
                    @error('prenom') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
            </div>


            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput5"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Date Naissance') }}</span>
                    <input type="date" wire:model="date_naissance" id="exampleFormControlInput5"
                        placeholder="{{ __('Date Naissance') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline ">
                    @error('date_naissance') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput7"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Date Embauche') }}</span>
                    <input type="date" wire:model="date_embauche" id="exampleFormControlInput7"
                        placeholder="{{ __('Date Embauche') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline ">
                    @error('date_embauche') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
            </div>


            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput9"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Nationalité') }}</span>
                    <input type="text" id="exampleFormControlInput9" wire:model="nationalite"
                        placeholder="{{ __('nationalite') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline "
                        required>
                    @error('nationalite') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput9"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('matrimoniale') }}</span>
                    <input type="text" id="exampleFormControlInput9" wire:model="matrimoniale"
                        placeholder="{{ __('matrimoniale') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline "
                        required>
                    @error('matrimoniale') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput10"
                        class="block text-sm font-bold text-gray-700 mb1">{{ __('Nombre Enfant') }}</span>
                    <input type="number" id="exampleFormControlInput10" wire:model="nb_enfant"
                        placeholder="{{ __('Nombre Enfant') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('nb_enfant') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput11"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('matricule') }}</span>
                    <input type="text" id="exampleFormControlInput1" wire:model="matricule"
                        placeholder="{{ __('matricule') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('matricule') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput12"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('CNPS') }}</span>
                    <input type="text" id="exampleFormControlInput12" wire:model="cnps"
                        placeholder="{{ __('cnps') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('cnps') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>

                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span for="exampleFormControlInput13"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Email') }}</span>
                    <input type="email" id="exampleFormControlInput13" wire:model="email"
                        placeholder="{{ __('email') }}"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        required>
                    @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                    <span for="exampleFormControlInput3"
                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Sexe') }}</span>
                    <select wire:model="sexe" id="exampleFormControlInput14"
                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline"
                        required>
                        <option></option>
                        <option value="homme">M</option>
                        <option value="Femme">F</option>

                    </select>
                    @error('sexe') <span class="text-red-500">{{ $message }}</span>@enderror
                </dd>
            </div>
        </dl>
    </div>
</div>
