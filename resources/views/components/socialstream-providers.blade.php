<div class="flex flex-row items-center justify-between py-4 text-gray-500">
    <hr class="w-full mr-2">
        {{ __('forms.or') }}
    <hr class="w-full ml-2">
</div>

<div class="flex flex-col gap-y-3 [&_a]:p-2 [&_a]:bg-white [&_a]:rounded-lg [&_a]:w-full [&_a]:shadow-md [&_a]:flex [&_a]:items-center [&_a]:justify-center">
    @if (JoelButcher\Socialstream\Socialstream::hasFacebookSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::facebook()]) }}">
            <x-facebook-icon class="h-6 w-6 mx-2" />
            {{ __('forms.oauth', [
                'Action' => __("forms.$action"),
                'social' => 'Facebook'
            ]) }}
            <span class="sr-only">Facebook</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGoogleSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::google()]) }}" >
            <x-google-icon class="h-6 w-6 mx-2" />
            {{ __('forms.oauth', [
                'Action' => __("forms.$action"),
                'social' => 'Google'
            ]) }}
            <span class="sr-only">Google</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitter()]) }}">
            <x-twitter-icon class="h-6 w-6 mx-2" />
            {{ __('forms.oauth', [
                'Action' => __("forms.$action"),
                'social' => 'Twitter'
            ]) }}
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasLinkedInSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::linkedin()]) }}">
            <x-linked-in-icon class="h-6 w-6 mx-2" />
            {{ __('forms.oauth', [
                'Action' => __("forms.$action"),
                'social' => 'LinkedIn'
            ]) }}
            <span class="sr-only">LinkedIn</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGithubSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::github()]) }}">
            <x-github-icon class="h-6 w-6 mx-2" />
            {{ __('forms.oauth', [
                'Action' => __("forms.$action"),
                'social' => 'GitHub'
            ]) }}
            <span class="sr-only">GitHub</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGitlabSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::gitlab()]) }}">
            <x-gitlab-icon class="h-6 w-6 mx-2" />
            {{ __('forms.oauth', [
                'Action' => __("forms.$action"),
                'social' => 'GitLab'
            ]) }}
            <span class="sr-only">GitLab</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasBitbucketSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::bitbucket()]) }}">
            <x-bitbucket-icon />
            {{ __('forms.oauth', [
                'Action' => __("forms.$action"),
                'social' => 'BitBucket'
            ]) }}
            <span class="sr-only">BitBucket</span>
        </a>
    @endif
</div>
