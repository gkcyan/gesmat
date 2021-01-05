<button class="p-1 text-gray-400 border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
    <svg class="w-6 h-6 animate-bounce" stroke="currentColor" fill="none" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
    </svg>
  </button>

<x-jet-dropdown align="right" width="48">
    <x-slot name="trigger">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <button class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </button>
        @else
            <button class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                <div>{{ Auth::user()->name }}</div>

                <div class="ml-1">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        @endif
    </x-slot>

    <x-slot name="content">
        <!-- Account Management -->
        <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
        </div>

        <x-jet-dropdown-link href="{{ route('profile.show') }}">
            {{ __('Profile') }}
        </x-jet-dropdown-link>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                {{ __('API Tokens') }}
            </x-jet-dropdown-link>
        @endif

        <div class="border-t border-gray-100"></div>

        <!-- Team Management -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Team') }}
            </div>

            <!-- Team Settings -->
            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                {{ __('Team Settings') }}
            </x-jet-dropdown-link>

            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                    {{ __('Create New Team') }}
                </x-jet-dropdown-link>
            @endcan

            <div class="border-t border-gray-100"></div>

            <!-- Team Switcher -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Switch Teams') }}
            </div>

            @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" />
            @endforeach

            <div class="border-t border-gray-100"></div>
        @endif

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-dropdown-link>
        </form>
    </x-slot>
</x-jet-dropdown>