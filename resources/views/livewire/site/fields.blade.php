<div class="border-t border-gray-700">
    <dl>

      <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          <label for="exampleFormControlInput1" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Site') }}</label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <input type="text" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="{{ __('Entrer votre site') }}" wire:model="libelle" required>
          @error('site') <span class="text-red-500">{{ $message }}</span>@enderror
        </dd>
      </div>

      <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          <label for="exampleFormControlInput2" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Description') }}</label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <textarea  class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" placeholder="{{ __('Descrire votre site') }}" wire:model="description"></textarea>
          @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
        </dd>
      </div>
      <div class="px-4 py-2 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          <label for="exampleFormControlInput8" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Type') }}</label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <select wire:model="siege" id="exampleFormControlInput8" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline" required>
                <option></option>
                <option value="4">Siège</option>
                <option value="3">EAI</option>
                <option value="2">PI</option>
                <option value="1">PV</option>
            <option value="0">Prestataire</option>
            </select>
          @error('siege') <span class="text-red-500">{{ $message }}</span>@enderror
        </dd>
      </div>

      <div class="px-4 py-2 bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          <label for="exampleFormControlInput3" class="block mb-2 text-sm font-bold text-gray-700">{{ __('Entreprise') }}</label>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
           <select wire:model="entreprise_id" id="exampleFormControlInput3" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none form-select focus:outline-none focus:shadow-outline" required>
                <option></option>
                @foreach($ListeEntreprises as $ListeEntreprise)
                <option value="{{ $ListeEntreprise->id }}">{{ $ListeEntreprise->denomination }}</option>
                @endforeach
            </select>
            @error('entreprise_id') <span class="text-red-500">{{ $message }}</span>@enderror
        </dd>
      </div>
    </dl>
  </div>