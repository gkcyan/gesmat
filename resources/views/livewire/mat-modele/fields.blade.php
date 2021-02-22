<div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    
    <div class="border-t border-gray-700">
      <dl>

        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">{{ __("Modele") }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="text" id="exampleFormControlInput1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="{{ __("Entrer la Marque du fabricant") }}" wire:model="libelle" required>
            @error('libelle') <span class="text-red-500">{{ $message }}</span>@enderror
          </dd>
        </div>
        <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput2" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Description') }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <textarea type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline " id="exampleFormControlInput2" placeholder="{{ __("Enregistrer une description") }}" wire:model="description"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
          </dd>
        </div>
        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput3" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Marque') }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
             
            <select wire:model="materiel_marque_id" id="exampleFormControlInput3" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline" required>
                  <option></option>
                  @foreach($ListeMaterielMarques as $ListeMaterielMarque)
                  <option value="{{ $ListeMaterielMarque->id }}" >{{ $ListeMaterielMarque->libelle }}</option>
                  @endforeach
              </select>
              @error('Marque') <span class="text-red-500">{{ $message }}</span>@enderror

          </dd>
        </div>

      </dl>
    </div>
 </div>
