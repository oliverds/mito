<x-guest-layout>
    <x-ui.card>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <x-ui.card.header>
                <x-ui.card.title>{{ __('Fogot Password') }}</x-ui.card.title>
            </x-ui.card.header>

            <x-ui.card.content>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="grid gap-4">
                    <p class="text-sm text-muted-foreground">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </p>

                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="email" :value="__('Email')" />
                        <x-ui.input id="email" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>
                </div>
            </x-ui.card.content>

            <x-ui.card.footer>
                <x-ui.button class="w-full">
                    {{ __('Email Password Reset Link') }}
                </x-ui.button>
            </x-ui.card.footer>
        </form>
    </x-ui.card>
</x-guest-layout>
