<div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    
    <div class="border-t border-gray-700">
      <dl>

        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">{{ __("Zone") }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="text" id="exampleFormControlInput1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="{{ __("Entrer votre Zone") }}" wire:model="libelle" required>
            @error('libelle') <span class="text-red-500">{{ $message }}</span>@enderror
          </dd>
        </div>

        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">{{ __("Longitude") }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="text" id="exampleFormControlInput1" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" placeholder="{{ __("Entrer la longitude de la Zone") }}" wire:model="longitude" required>
            @error('longitude') <span class="text-red-500">{{ $message }}</span>@enderror
          </dd>
        </div>

        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput6" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Latitude') }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input id="exampleFormControlInput6" type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"  placeholder="{{ __("Entrer la latitude") }}" wire:model="latitude" required>
            @error('latitude') <span class="text-red-500">{{ $message }}</span>@enderror
          </dd>
        </div>

        
        <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput2" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Description') }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="{{ __("Descrire la Zone") }}" wire:model="description">
            @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
          </dd>
        </div>


        <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            <label for="exampleFormControlInput3" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Modele Rural') }}</label>
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
             
            <select wire:model="type" id="exampleFormControlInput3" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline " required>
                  
              <option></option>
                  <option value="Ville" >Ville</option>
                  <option value="Village" >Village</option>
                  <option value="Campement" >Campement</option>
                  
              </select>
              @error('type') <span class="text-red-500">{{ $message }}</span>@enderror

          </dd>
        </div>
      
      
  
      </dl>
    </div>
 </div>
