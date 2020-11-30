<div class="p-6 bg-white border-b border-gray-200 sm:px-20">
    <div>
        <!--x-jet-application-logo class="block w-auto h-12" /-->
    </div>

    <div class="mt-8 text-2xl">
        Bienvenue sur {{ config('app.name', 'Laravel') }} !
    </div>

    <div class="mt-6 text-gray-500">
        {{ config('app.name', 'Laravel')  }} est votre application intégrée de gestion du materiel et du transport.<br/>
        Elle facilite l'interaction entre les différents acteurs et intervenants des processus impliqués.
    </div>
</div>

<div class="grid grid-cols-1 bg-gray-200 bg-opacity-25 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href=#">Gestion du Materiel</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
            Ce module vous permet la gestion des maintenances , le suivi de l'etat du parc , gestion des incidents et des chauffeurs ....  
            </div>

            <a href="#">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                        <div>Acceder...</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="#">Gestion du Carburant</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Ce module vous permet la gestion les consommations de carburant , vos demandes de remboursement, le suivi des stocks, le suivi de la facturation ....
            </div>

            <a href="#">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                        <div>Acceder...</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>
    

    <div class="p-6 border-t border-gray-200">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="#">Gestion de la Logistique</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
            Ce module permet la gestion de l'usage du materiel , le suivi des kilométrages , des frais annexes liés à l'usage du materiel et des chargeurs
            </div>
            <a href="#">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                        <div>Acceder...</div>
    
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            <svg  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600">Gestion des prestations externalisées</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Ce module permet une identification des pretataires, la gestion des appels d'offre de prestation et le suivi de la facturation des prestations externalisées.    
            </div>
            <a href="#">
                <div class="flex items-center mt-3 text-sm font-semibold text-indigo-700">
                        <div>Acceder...</div>
    
                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>

       
    </div>
</div>
@section('footer')
<div class="container flex flex-col justify-between pb-4 mx-auto overflow-hidden text-center md:flex-row md:text-left">
    <a href="#" class="block w-full mr-2 md:w-1/6">
      <img src="{{ asset('logo.png') }}" class="w-32 ml-4 md:ml-0" alt="logo">
    </a>
    <div class="pt-1 mt-2 leading-normal text-gray-900 md:mt-0">
      <h4 class="py-1 font-bold tracking-wide uppercase">Notre vision</h4>
      <p>  Mettre à la disposition des acteurs un système intégré pour faciliter le traitement et l'exploitation des données,
       Afin de leur permettre de se concentrer sur les processus métiers pour une valeur ajoutées optimale.</p>
      
    </div>
  </div>
@endsection
