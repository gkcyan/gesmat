
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
                    {{ __('TAF Manager') }}
                </x-jet-nav-link>
            </div>
         
        
    @elseif(request()->routeIs('parc'))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Materiel') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Conducteur') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Chargeur') }}
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
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Disponibilité') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Avarie') }}
                </x-jet-nav-link>
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
         @elseif(request()->routeIs('consommable'))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
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
        
            @elseif(request()->routeIs(['parametrage','entreprise']))
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('entreprise')">
                    {{ __('Entreprise') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('contact')">
                    {{ __('Site') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('contact')">
                    {{ __('Direction') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('contact')">
                    {{ __('Service') }}
                </x-jet-nav-link>
            </div>
           
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('contact')">
                    {{ __('Pont Bascule') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('contact')">
                    {{ __('Grp. Encadrement') }}
                </x-jet-nav-link>
            </div>
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('contact')">
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