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
                        <strong>AFFICHAGE DETAIL DU CONDUCTEUR</strong>
                    </h4>
                    <div class="hidden sm:block">
                        <div class="py-2">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                    <span class="max-w-2xl mt-1 text-sm text-gray-900">
                        Details sur : <strong style="text-transform: uppercase">{{ $this->nom }}</strong> <strong>|</strong> 
                        Editer le: {{ date('d/m/Y H:m:s') }} <br />
                        Par : {{ Auth::user()->name }} <strong>|</strong> 
                        Extrait de: {{ config('app.name', 'Laravel') }}
                        {{-- Route::currentRouteName() --}}
                    </span>
                </div>


                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="border-t border-gray-100">
                        <dl>
                            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput21"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Categorie') }}</span>
                                    
                                    <input type="text" wire:model="conducteur_categorie_id" id="exampleFormControlInput21"
                                    value="{{ $this->conducteur_categorie_id }}"
                                    class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    disabled>
                                </dd>
                
                
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput5"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Site') }}</span>
                                    
                                    <input type="text" wire:model="site_id" id="exampleFormControlInput22"
                                    value="{{ $this->site_id }}"
                                    class="w-full px-3 py-2 leading-tight text-gray-900 bg-gray-100 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    disabled>
                
                                </dd>
                            </div>
                
                
                            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput1"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Nom') }}</span>
                                    <input type="text" wire:model="nom" id="exampleFormControlInput1"
                                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        value="{{ $this->nom }}" 
                                        disabled>
                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput1"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Prenoms') }}</span>
                                    <input type="text" wire:model="prenom" id="exampleFormControlInput1"
                                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        value="{{ $this->prenom }}" 
                                        disabled>
                                   
                                </dd>
                            </div>
                
                
                            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6"> 
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput5"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Date Naissance') }}</span>
                                    <input type="date" wire:model="date_naissance" id="exampleFormControlInput5"
                                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            value="{{ $this->date_naissance }}" 
                                            disabled>
                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput7"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Date Embauche') }}</span>
                                    <input type="date" wire:model="date_embauche" id="exampleFormControlInput7"
                                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    value="{{ $this->date_embauche }}" 
                                    disabled>
                                </dd>
                            </div>
                
                
                            <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput9"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Nationalité') }}</span>
                                    <input type="text" id="exampleFormControlInput9" wire:model="nationalite"
                                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        value="{{ $this->nationalite }}" 
                                        disabled>
                                </dd>
                                
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput9"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('matrimoniale') }}</span>
                                    <input type="text" id="exampleFormControlInput9" wire:model="matrimoniale"
                                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        value="{{ $this->matrimoniale }}" 
                                        disabled>
                                </dd>
                
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput10"
                                        class="block text-sm font-bold text-gray-700 mb1">{{ __('Nombre Enfant') }}</span>
                                    <input type="number" id="exampleFormControlInput10" wire:model="nb_enfant"
                                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        value="{{ $this->nb_enfant }}" 
                                        disabled>
                                </dd>
                                
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput11"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('matricule') }}</span>
                                    <input type="text" id="exampleFormControlInput1" wire:model="matricule" placeholder="{{ __('matricule') }}"
                                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            value="{{ $this->matricule }}" 
                                            disabled>
                                </dd>
                
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput12"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('CNPS') }}</span>
                                    <input type="text" id="exampleFormControlInput12" wire:model="cnps" placeholder="{{ __('cnps') }}"
                                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            value="{{ $this->cnps }}" 
                                            disabled>
                                </dd>
                
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span for="exampleFormControlInput13"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Email') }}</span>
                                    <input type="email" id="exampleFormControlInput13" wire:model="email"
                                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        value="{{ $this->email }}" 
                                        disabled>
                                </dd>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-1">
                                    <span for="exampleFormControlInput3"
                                        class="block mb-0 text-sm font-bold text-gray-700">{{ __('Sexe') }}</span>
                                        <input type="text" wire:model="sexe" id="exampleFormControlInput3"
                                        class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        value="{{ $this->sexe }}" 
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

