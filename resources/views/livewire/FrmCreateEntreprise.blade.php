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
                          <strong>AJOUTER UNE ENTREPRISE</strong>
                        </h4>
                        <div class="hidden sm:block">
                          <div class="py-2">
                              <div class="border-t border-gray-200"></div>
                          </div>
                      </div>
                        <span class="max-w-2xl mt-1 text-sm text-gray-900"> 
                         Enregistrer les informations de l'entreprise
                        </span>
                      </div>
                
                
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    
                    <div class="border-t border-gray-700">
                      <dl>
                        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Denomination') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="{{ __('Entrer votre Denomination') }}" wire:model="denomination" required>
                            @error('Denomination') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput2" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Nom Commercial') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="{{ __('Entrer votre nom commercial') }}" wire:model="nom_commercial">
                            @error('nom_commercial') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput3" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Sigle') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput3" placeholder="{{ __('Entrer votre sigle') }}" wire:model="sigle">
                            @error('sigle') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput4" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Registe de Commerce') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput4" placeholder="{{ __('Entrer votre rcm') }}" wire:model="rcm">
                            @error('rcm') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput5" class="block mb-2 text-sm font-bold text-gray-700">{{ __('N° Compte Contribuable') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput5" placeholder="{{ __('Entrer votre ncc') }}" wire:model="ncc">
                            @error('ncc') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput6" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Adresse') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput6" placeholder="{{ __('Entrer votre adresse') }}" wire:model="adresse">
                            @error('adresse') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput7" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Forme Juridique') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput7" placeholder="{{ __('Entrer votre forme juridique') }}" wire:model="forme_juridique">
                            @error('forme_juridique') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput8" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Capital') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput8" placeholder="{{ __('Entrer votre capital') }}" wire:model="capital">
                            @error('capital') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput9" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Image') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput8" placeholder="{{ __('Entrer votre logo') }}" wire:model="image">
                            @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            <label for="exampleFormControlInput10" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Statut') }}</label>
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput10" placeholder="{{ __('Entrer votre actif') }}" wire:model="actif">
                            @error('Statut') <span class="text-red-500">{{ $message }}</span>@enderror
                          </dd>
                        </div>
                        <!--div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            About
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
                          </dd>
                        </div>
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                          <dt class="text-sm font-medium text-gray-500">
                            Attachments
                          </dt>
                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                              <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                <div class="flex items-center flex-1 w-0">
                                  < Heroicon name: paper-clip >
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                  </svg>
                                  <span class="flex-1 w-0 ml-2 truncate">
                                    resume_back_end_developer.pdf
                                  </span>
                                </div>
                                <div class="flex-shrink-0 ml-4">
                                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Download
                                  </a>
                                </div>
                              </li>
                              <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                <div class="flex items-center flex-1 w-0">
                                  < Heroicon name: paper-clip >
                                  <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                  </svg>
                                  <span class="flex-1 w-0 ml-2 truncate">
                                    coverletter_back_end_developer.pdf
                                  </span>
                                </div>
                                <div class="flex-shrink-0 ml-4">
                                  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Download
                                  </a>
                                </div>
                              </li>
                            </ul>
                          </dd>
                        </div-->
                      </dl>
                    </div>
                  </div>
                

                
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