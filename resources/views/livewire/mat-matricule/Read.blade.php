<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-700 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline" id="sectionAimprimer">
            <form> @csrf

                <div class="px-4 py-5 bg-gray-300 sm:px-6">
                    <h4 class="text-lg font-medium leading-6 text-center text-gray-900">
                        <strong>AFFICHAGE DETAIL CARTE GRISE DU MATERIEL</strong>
                    </h4>
                    <div class="hidden sm:block">
                        <div class="py-2">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                    <span class="max-w-2xl mt-1 text-sm text-gray-900">
                        Details sur : <strong style="text-transform: uppercase">{{ $this->matricule }}</strong> <strong>|</strong> 
                        Editer le: {{ date('d/m/Y H:m:s') }} <br />
                        Par : {{ Auth::user()->name }} <strong>|</strong> 
                        Extrait de: {{ config('app.name', 'Laravel') }}
                        {{-- Route::currentRouteName() --}}
                    </span>
                </div>


                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="border-t border-gray-700">
                        <dl>
                            <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput1"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Marque') }}</span>
                                    <input type="text" wire:model="materiel_marque_id" id="exampleFormControlInput1"
                                        value="{{ $this->materiel_marque_id }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>


                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput2"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Type Commercial') }}</span>
                                    <input type="text" wire:model="materiel_modele_id" id="exampleFormControlInput2"
                                        value="{{ $this->materiel_modele_id }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>
                            </div>


                            <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput3"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Genre') }}</span>
                                    <input type="text" wire:model="materiel_type_id" id="exampleFormControlInput3"
                                        value="{{ $this->materiel_type_id }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                </dd>

                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput4"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Matricule') }}</span>
                                    <input type="text" wire:model="matricule" id="exampleFormControlInput4"
                                        value="{{ $this->matricule }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                </dd>
                            </div>


                            <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">

                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput5"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Energie') }}</span>
                                    <input type="text" wire:model="carb_produit_id" id="exampleFormControlInput5"
                                        value="{{ $this->carb_produit_id }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>


                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput6"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('1ier Mise en Circulat°') }}</span>
                                    <input type="text" wire:model="date_premiere_mc" id="exampleFormControlInput6"
                                        value="{{ $this->date_premiere_mc }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput7"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Date Edit° Carte Grise') }}</span>
                                    <input type="text" wire:model="date_edition" id="exampleFormControlInput7"
                                        value="{{ $this->date_edition }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                </dd>
                            </div>


                            <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput8"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Proprietaire') }}</span>
                                    <input type="text" id="exampleFormControlInput8" wire:model="propietraire"
                                        value="{{ $this->propietraire }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                    @error('propietraire') <span
                                        class="text-red-500">{{ $message }}</span>@enderror
                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput9"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Essieux') }}</span>
                                    <input type="text" id="exampleFormControlInput9" wire:model="essieu"
                                        value="{{ $this->essieu }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                </dd>

                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput10"
                                        class="block text-sm font-bold text-gray-700 mb1">{{ __('PTAC') }}</span>
                                    <input type="text" id="exampleFormControlInput10" wire:model="ptac"
                                        value="{{ $this->ptac }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput11"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('PV') }}</span>
                                    <input type="text" id="exampleFormControlInput11" wire:model="pv"
                                        value="{{ $this->pv }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>

                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput12"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('CU') }}</span>
                                    <input type="text" id="exampleFormControlInput12" wire:model="cu"
                                        value="{{ $this->cu }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>

                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput13"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Carosserie') }}</span>
                                    <input type="text" id="exampleFormControlInput13" wire:model="carosserie"
                                        value="{{ $this->carosserie }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput14"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Num Carte Grise') }}</span>
                                    <input type="text" id="exampleFormControlInput14" wire:model="num_carte_grise"
                                        value="{{ $this->num_carte_grise }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput15"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Couleur') }}</span>
                                    <input type="text" id="exampleFormControlInput15" wire:model="couleur"
                                        value="{{ $this->couleur }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                </dd>

                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput16"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Places assises') }}</span>
                                    <input type="text" id="exampleFormControlInput16" wire:model="place_assise"
                                        value="{{ $this->place_assise }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>
                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput17"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Puissance fiscale') }}</span>
                                    <input type="text" wire:model="puissance_fiscale" id="exampleFormControlInput17"
                                        value="{{ $this->puissance_fiscale }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput18"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Usage') }}</span>
                                    <input type="text" wire:model="usage" id="exampleFormControlInput18"
                                        value="{{ $this->usage }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput19"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Num Chassis') }}</span>
                                    <input type="text" wire:model="chassis" id="exampleFormControlInput19"
                                        value="{{ $this->chassis }}"
                                        class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        disabled>

                                </dd>
                            </div>



                        </dl>
                    </div>
                </div>



                <div class="px-4 py-3 bg-gray-400 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <a href="#" onClick="imprimer('sectionAimprimer')">
                            <button type="button"
                                class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:border-gray-900 focus:shadow-outline-green sm:text-sm sm:leading-5">
                                Imprimer
                            </button>
                        </a>

                    </span>
                    <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                            Annuler
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

@once
    @push('scripts')
        <script>
            function imprimer(divName) {
            var printContents = document.getElementById(divName).innerHTML;    
            var originalContents = document.body.innerHTML;      
            document.body.innerHTML = printContents;     
            window.print();     
            document.body.innerHTML = originalContents;
       }
        </script>
    @endpush
@endonce

