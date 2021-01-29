
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
   
    @else
            <div class="space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="{{ route('entreprise') }}" :active="request()->routeIs('')">
                    {{ __('') }}
                </x-jet-nav-link>
            </div>
    @endif