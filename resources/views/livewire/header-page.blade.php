@if(request()->routeIs('dashboard'))

    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Dashbord
        <span class="text-xs font-thin text-indigo-800">Suivez vos indicateurs</span>                  
     </h2>

@elseif(request()->routeIs('entreprise'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Entreprise
        <span class="text-xs font-thin text-indigo-800">Enregistrer les entreprises partageant vos données</span>                  
    </h2>

    @elseif(request()->routeIs('materiel'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Matériel
        <span class="text-xs font-thin text-indigo-800">Interface de gestion du materiel</span>                  
    </h2>

    @elseif(request()->routeIs('mat_marque'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Marque
        <span class="text-xs font-thin text-indigo-800">Interface de gestion des marques de materiel</span>                  
    </h2>

    @elseif(request()->routeIs('mat_modele'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Modèle
        <span class="text-xs font-thin text-indigo-800">Interface de gestion des modèles d'une marque</span>                  
    </h2>

    @elseif(request()->routeIs('mat_type'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Type
        <span class="text-xs font-thin text-indigo-800"> Interface de gestion des différents types de materiel</span>                  
    </h2>

    @elseif(request()->routeIs('mat_categorie'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Catégorie
        <span class="text-xs font-thin text-indigo-800"> Interface de gestion des différentes catégories de materiel</span>                  
    </h2>
    @elseif(request()->routeIs('carb_categorie'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Catégorie
        <span class="text-xs font-thin text-indigo-800"> Interface de gestion des Catégories de produits Pétroliers</span>                  
    </h2>
    @elseif(request()->routeIs('carb_produit'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Produit Pétrolier
        <span class="text-xs font-thin text-indigo-800"> Interface de gestion des Produits Pétroliers</span>                  
    </h2>
    @elseif(request()->routeIs('carb_petrolier'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Pétrolier
        <span class="text-xs font-thin text-indigo-800"> Interface de gestion des Pétroliers</span>                  
    </h2>
    @elseif(request()->routeIs('carb_tarif'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Tarification
        <span class="text-xs font-thin text-indigo-800"> Interface de Gestion des couts des Produits Pétroliers</span>                  
    </h2>
    @elseif(request()->routeIs('conducteur'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Conducteur
        <span class="text-xs font-thin text-indigo-800"> Interface de Gestion des Conducteurs</span>                  
    </h2>
    @elseif(request()->routeIs('conduct_categorie'))
    <h2 class="text-xl font-bold leading-tight text-gray-900 "> Catégorie
        <span class="text-xs font-thin text-indigo-800"> Interface de Gestion des Catégories de Conducteur</span>                  
    </h2>
@else

    <h2 class="text-xl font-bold leading-tight text-gray-900 "> 
        <span class="text-xs font-thin text-indigo-800"></span>                  
     </h2>

@endif