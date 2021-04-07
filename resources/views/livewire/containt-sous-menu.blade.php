
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(request()->routeIs('dashboard'))
        
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link>
            </div>  
            <!--div class="space-x-8 sm:-my-px sm:ml-5 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Entreprise') }}
                </x-jet-nav-link>
            </div-->
         
        
    @elseif(request()->routeIs('site'))
        
    <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-jet-nav-link>
    </div>  

    @elseif(request()->routeIs(['parc','mat_marque','materiel','mat_modele','mat_type','mat_categorie']))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('materiel') }}" :active="request()->routeIs('materiel')">
                    {{ __('Materiel') }}
                </x-jet-nav-link>
            </div>  
            
            <div x-data="dropdown()" class="space-x-2 sm:-my-px sm:ml-10 sm:flex" >
                <x-jet-nav-link id="open-color-menu" x-spread="trigger" :active="request()->routeIs(['mat_categorie','mat_marque','mat_modele','mat_type'])" >
                    {{ __('Parametrage') }}
                    <svg class="dropdown-arrow" :class="{ 'rotate-180': open }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>      
                </x-jet-nav-link>
                <div class="space-x-2 dropdown-list sm:-my-px sm:ml-10 sm:flex" id="color-menu" x-spread="dropdown" x-cloak>
                     <x-jet-nav-link href="{{ route('mat_marque') }}" :active="request()->routeIs('mat_marque')">
                        {{ __('Marque') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('mat_type') }}" :active="request()->routeIs('mat_type')">
                        {{ __('Type') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('mat_modele') }}" :active="request()->routeIs('mat_modele')">
                        {{ __('Modèle') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('mat_categorie') }}" :active="request()->routeIs('mat_categorie')">
                        {{ __('Catégorie') }}
                    </x-jet-nav-link>
                </div>
            </div>

            @elseif(request()->routeIs(['carburant','carb_categorie','carb_petrolier','carb_produit','carb_tarif']))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('materiel') }}" :active="request()->routeIs('consommation')">
                    {{ __('Consommation') }}
                </x-jet-nav-link>
            </div>  
            
            <div x-data="dropdown()" class="space-x-2 sm:-my-px sm:ml-10 sm:flex" >
                <x-jet-nav-link id="open-color-menu" x-spread="trigger" :active="request()->routeIs(['carburant','carb_categorie','carb_petrolier','carb_produit','carb_tarif'])" >
                    {{ __('Parametrage') }}
                    <svg class="dropdown-arrow" :class="{ 'rotate-180': open }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>      
                </x-jet-nav-link>
                <div class="space-x-2 dropdown-list sm:-my-px sm:ml-10 sm:flex" id="color-menu" x-spread="dropdown" x-cloak>
                    <x-jet-nav-link href="{{ route('carb_categorie') }}" :active="request()->routeIs('carb_categorie')">
                        {{ __('Catégorie') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('carb_produit') }}" :active="request()->routeIs('carb_produit')">
                        {{ __('Produit') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('carb_petrolier') }}" :active="request()->routeIs('carb_petrolier')">
                        {{ __('Petrolier') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('carb_tarif') }}" :active="request()->routeIs('carb_tarif')">
                        {{ __('Tarif') }}
                    </x-jet-nav-link>
                   
                </div>
            </div>

            @elseif(request()->routeIs(['conducteur','conduct_categorie']))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('conducteur') }}" :active="request()->routeIs('conducteur')">
                    {{ __('Conducteur') }}
                </x-jet-nav-link>
            </div>  
            
            <div x-data="dropdown()" class="space-x-2 sm:-my-px sm:ml-10 sm:flex" >
                <x-jet-nav-link id="open-color-menu" x-spread="trigger" :active="request()->routeIs(['carburant','carb_categorie','carb_petrolier','carb_produit','carb_tarif'])" >
                    {{ __('Parametrage') }}
                    <svg class="dropdown-arrow" :class="{ 'rotate-180': open }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>      
                </x-jet-nav-link>
                <div class="space-x-2 dropdown-list sm:-my-px sm:ml-10 sm:flex" id="color-menu" x-spread="dropdown" x-cloak>
                    <x-jet-nav-link href="{{ route('conduct_categorie') }}" :active="request()->routeIs('conduct_categorie')">
                        {{ __('Catégorie') }}
                    </x-jet-nav-link>
                </div>
            </div>

            
           
            
   
    @else
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('')">
                    {{ __('') }}
                </x-jet-nav-link>
            </div>
    @endif