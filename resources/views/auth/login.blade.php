<x-guest-layout title="Masuk">
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label class="text-sawangen" for="email" value="{{ __('forms.email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-sawangen" for="password" value="{{ __('forms.password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex flex-col sm:flex-row sm:justify-between mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('forms.remember') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('forms.forgot') }}
                    </a>
                @endif
            </div>

            <div>
                <x-jet-button class="w-full justify-center mt-4 rounded-lg">
                    {{ __('forms.login') }}
                </x-jet-button>
            </div>
            
        </form>

        @if (JoelButcher\Socialstream\Socialstream::show())
            <x-socialstream-providers action="login" />
        @endif

        <p class="text-center mt-4">
            {{ __('forms.noaccount') }}

            <a class="text-sawangen hover:text-sawangen/90" href="{{ route('register') }}">
                {{ __('forms.register') }}
            </a>
        </p>
    </x-jet-authentication-card>
</x-guest-layout>
