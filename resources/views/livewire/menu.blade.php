
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <x-jet-nav-link-main href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('parc') }}" :active="request()->routeIs(['parc','mat_marque','materiel','mat_modele','mat_type','mat_categorie'])">
        {{ __('Parc') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('maintenance') }}" :active="request()->routeIs('maintenance')">
        {{ __('Maintenance') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('logistique') }}" :active="request()->routeIs('logistique')">
        {{ __('Logistique') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('consommable') }}" :active="request()->routeIs(['consommable','carburant','carb_categorie','carb_tarif','carb_produit','carb_petrolier'])">
        {{ __('Consommable') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('achat') }}" :active="request()->routeIs('achat')">
        {{ __('Achat') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('transp_prive') }}" :active="request()->routeIs('transp_prive')">
        {{ __('Transp. Privé') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('parametrage') }}" :active="request()->routeIs([
                    'parametrage','entreprise','entre_index','entre_prest','entre_inter','site','site_index','direction','dir_index','service','serv_index','pbascule','pb_index',
                    'gencadrement','ge_index','plantation','plant_index','plant_parcelle','zone'
                    ])">
        {{ __('Paramétrage') }}
    </x-jet-nav-link-main>
    <x-jet-nav-link-main href="{{ route('appli') }}" :active="request()->routeIs('appli')">
        {{ __('Administration') }}
    </x-jet-nav-link-main>
    

