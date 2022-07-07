<x-guest-layout title="Daftar">
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label class="text-sawangen" for="name" value="{{ __('forms.name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-sawangen" for="email" value="{{ __('forms.email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-sawangen" for="password" value="{{ __('forms.password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-sawangen" for="password_confirmation" value="{{ __('forms.password_confirm') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('forms.agreement.text', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-sawangen hover:text-sawangen/90">'.__('forms.agreement.terms').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-sawangen hover:text-sawangen/90">'.__('forms.agreement.privacy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif


            <x-jet-button class="w-full justify-center mt-4 rounded-lg">
                {{ __('forms.register') }}
            </x-jet-button>

        </form>
        
        @if (JoelButcher\Socialstream\Socialstream::show())
        <x-socialstream-providers action="register" />
        @endif

        <p class="text-center mt-4">
            {{ __('forms.registered') }}

            <a class="text-sawangen hover:text-sawangen/90" href="{{ route('login') }}">
                {{ __('forms.login') }}
            </a>
        </p>
    </x-jet-authentication-card>
</x-guest-layout>
