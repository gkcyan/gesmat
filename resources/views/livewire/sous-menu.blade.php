
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(request()->routeIs('dashboard'))
        
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Acceuil') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('contact')">
                    {{ __('KPI') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('contact')">
                    {{ __('Alertes') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Requête') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('entreprise')">
                    {{ __('To Do List') }}
                </x-jet-nav-link>
            </div>
         
        
    @elseif(request()->routeIs(['parc','mat_marque','materiel','mat_modele','mat_type','mat_categorie','conducteur','conduct_categorie']))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('materiel') }}" :active="request()->routeIs(['mat_marque','materiel','mat_modele','mat_type','mat_categorie'])">
                    {{ __('Materiel') }}
                </x-jet-nav-link>
            </div>      
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('conducteur') }}" :active="request()->routeIs(['conducteur','conduct_categorie'])">
                    {{ __('Conducteur') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Chargeur') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dimensionnement') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Documentation') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Incident') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Sanction') }}
                </x-jet-nav-link>
            </div>

        @elseif(request()->routeIs('maintenance'))


       


            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link  href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Disponibilité') }}
                </x-jet-nav-link>
            </div>

           
            <div x-data="dropdown()" class="space-x-2 sm:-my-px sm:ml-10 sm:flex" >
                <x-jet-nav-link id="open-color-menu" x-spread="trigger" :active="request()->routeIs('dashboard')" >
                    {{ __('Avarie') }}
                    <svg class="dropdown-arrow" :class="{ 'rotate-180': open }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>      
                </x-jet-nav-link>
                <div class="dropdown-list" id="color-menu" x-spread="dropdown" x-cloak>
                                    
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dropdown-item dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dropdown-item dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dropdown-item dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
               
                </div>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Maint. Préventive') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Maint. Curative') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Achat') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Stock') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Equipement') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('RH') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Reporting') }}
                </x-jet-nav-link>
            </div>

        @elseif(request()->routeIs('logistique'))
        
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Prévision') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Affectation') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Réalisation') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Kilometrage') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Frais Divers') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Facturation') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Reporting') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Parametrage') }}
                </x-jet-nav-link>
            </div>

        @elseif(request()->routeIs('achat'))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('piece_det') }}" :active="request()->routeIs('piece_det')">
                    {{ __('Besoin') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Cotation') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Validations') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Livraison') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Reglement') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Catalogue Prix') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Fournisseur') }}
                </x-jet-nav-link>
            </div>
           

        @elseif(request()->routeIs('transp_prive'))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('transp_prive') }}" :active="request()->routeIs('transp_prive')">
                    {{ __('Transporteur') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Barème') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Facturation') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __("Appel d'Offre") }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __("Offre de service") }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __("Réclamation") }}
                </x-jet-nav-link>
            </div>
         @elseif(request()->routeIs(['consommable','carburant','carb_categorie','carb_tarif','carb_produit','carb_petrolier']))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('carburant') }}" :active="request()->routeIs(['consommable','carburant','carb_categorie','carb_tarif','carb_produit','carb_petrolier'])">
                    {{ __('Carburant') }}
                </x-jet-nav-link>
            </div>

            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Lubrifiant') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Pneus') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Tarification') }}
                </x-jet-nav-link>
            </div>
        
        @elseif(request()->routeIs(['parametrage','entreprise','site','direction','service','pbascule','gencadrement','plantation','zone']))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Entreprise') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('site') }}" :active="request()->routeIs('site')">
                    {{ __('Site') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('direction') }}" :active="request()->routeIs('direction')">
                    {{ __('Direction') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('service') }}" :active="request()->routeIs('service')">
                    {{ __('Service') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{route('zone')}}" :active="request()->routeIs('zone')">
                    {{ __('Zone') }}
                </x-jet-nav-link>
            </div>
           
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('pbascule') }}" :active="request()->routeIs('pbascule')">
                    {{ __('Pont Bascule') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('gencadrement') }}" :active="request()->routeIs('gencadrement')">
                    {{ __('Grp. Encadrement') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{route('plantation')}}" :active="request()->routeIs('plantation')">
                    {{ __('Plantation') }}
                </x-jet-nav-link>
            </div>
           
        @elseif(request()->routeIs('appli'))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Utilisateur') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Groupe') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Droit') }}
                </x-jet-nav-link>
            </div>
   
    @else
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('')">
                    {{ __('') }}
                </x-jet-nav-link>
            </div>
    @endif