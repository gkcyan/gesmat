


@if(request()->routeIs('dashboard'))

    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Dashbord
        <span class="text-xs font-thin text-indigo-800">Suivez vos indicateurs</span>                  
     </h2>

@elseif(request()->routeIs('entreprise'))

    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Entreprise
        <span class="text-xs font-thin text-indigo-800">Enregistrer les entreprises partageant vos données</span>                  
    </h2>
@else

    <h2 class="text-xl font-bold leading-tight text-gray-900 "> 
        <span class="text-xs font-thin text-indigo-800"></span>                  
     </h2>

@endif