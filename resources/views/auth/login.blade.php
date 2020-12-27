
<x-guest-layout>
            @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                @else
                    

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endif
            </div>
        @endif
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
             </x-slot>
                  <x-jet-login-form/>
            </x-jet-authentication-card>
</x-guest-layout>
