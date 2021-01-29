<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-700 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                     <div class="px-4 py-5 bg-gray-300 sm:px-6">
                        <h4 class="text-lg font-medium leading-6 text-center text-gray-900">
                          <strong>AJOUTER UN SERVICE</strong>
                        </h4>
                        <div class="hidden sm:block">
                          <div class="py-2">
                              <div class="border-t border-gray-200"></div>
                          </div>
                        </div>
                        <span class="max-w-2xl mt-1 text-sm text-gray-900"> 
                         Enregistrer les Services de votre entreprise
                        </span>
                      </div>
                
                @include('livewire.direction.fields')
                
                 <div class="px-4 py-3 bg-gray-400 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:border-gray-900 focus:shadow-outline-green sm:text-sm sm:leading-5">
                        {{ __('Enregistrer') }}
                        </button>
                    </span>
                    <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                            {{ __('Annuler') }}
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>