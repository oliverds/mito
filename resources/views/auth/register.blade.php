<x-guest-layout>
    <x-ui.card>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <x-ui.card.header>
                <x-ui.card.title>{{ __('Register') }}</x-ui.card.title>

                <x-ui.card.description>
                    {{ __('Already have an account?') }}
                    <a class="underline underline-offset-4 hover:text-primary" href="{{ route('login') }}">
                        {{ __('Log in') }}
                    </a>
                </x-ui.card.description>
            </x-ui.card.header>

            <x-ui.card.content>
                <div class="grid w-full item-center gap-4">
                    <!-- Name -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="name" :value="__('Name')" />
                        <x-ui.input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="email" :value="__('Email')" />
                        <x-ui.input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="password" :value="__('Password')" />

                        <x-ui.input id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-ui.input id="password_confirmation"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" />
                    </div>
                </div>
            </x-ui.card.content>

            <x-ui.card.footer>
                <x-ui.button class="w-full">
                    {{ __('Register') }}
                </x-ui.button>
            </x-ui.card.footer>
        </form>
    </x-ui.card>
</x-guest-layout>
