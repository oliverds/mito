<x-guest-layout>
    <x-ui.card>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <x-ui.card.header>
                <x-ui.card.title>{{ __('Verify Email') }}</x-ui.card.title>

                <x-ui.card.description>
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </x-ui.card.description>
            </x-ui.card.header>

            @if (session('status') == 'verification-link-sent')
                <x-ui.card.content>
                    <div class="mb-4 font-medium text-sm">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                </x-ui.card.content>
            @endif

            <x-ui.card.footer>
                <x-ui.button class="w-full">
                    {{ __('Resend Verification Email') }}
                </x-ui.button>
            </x-ui.card.footer>
        </form>
    </x-ui.card>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-ui.button variant="link" class="w-full">
            {{ __('Log Out') }}
        </x-ui.button>
    </form>
</x-guest-layout>
