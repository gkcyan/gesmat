<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-700 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Denomination') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="{{ __('Entrer votre Denomination') }}" wire:model="denomination" required>
                            @error('Denomination') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block mb-2 text-sm font-bold text-gray-700">{{ __('nom_commercial') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="{{ __('Entrer votre nom_commercial') }}" wire:model="nom_commercial">
                            @error('nom_commercial') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput3" class="block mb-2 text-sm font-bold text-gray-700">{{ __('sigle') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput3" placeholder="{{ __('Entrer votre sigle') }}" wire:model="sigle">
                            @error('sigle') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput4" class="block mb-2 text-sm font-bold text-gray-700">{{ __('rcm') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput4" placeholder="{{ __('Entrer votre rcm') }}" wire:model="rcm">
                            @error('rcm') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput5" class="block mb-2 text-sm font-bold text-gray-700">{{ __('ncc') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput5" placeholder="{{ __('Entrer votre ncc') }}" wire:model="ncc">
                            @error('ncc') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput6" class="block mb-2 text-sm font-bold text-gray-700">{{ __('adresse') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput6" placeholder="{{ __('Entrer votre adresse') }}" wire:model="adresse">
                            @error('adresse') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput7" class="block mb-2 text-sm font-bold text-gray-700">{{ __('forme_juridique') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput7" placeholder="{{ __('Entrer votre forme_juridique') }}" wire:model="forme_juridique">
                            @error('forme_juridique') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput8" class="block mb-2 text-sm font-bold text-gray-700">{{ __('capital') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput8" placeholder="{{ __('Entrer votre capital') }}" wire:model="capital">
                            @error('capital') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput9" class="block mb-2 text-sm font-bold text-gray-700">{{ __('image') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput8" placeholder="{{ __('Entrer votre logo') }}" wire:model="image">
                            @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput10" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Statut') }}</label>
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput10" placeholder="{{ __('Entrer votre actif') }}" wire:model="actif">
                            @error('Statut') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:border-gray-900 focus:shadow-outline-green sm:text-sm sm:leading-5">
                        Save
                        </button>
                    </span>
                    <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>