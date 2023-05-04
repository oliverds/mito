<x-guest-layout>
    <x-ui.card>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <x-ui.card.header>
                <x-ui.card.title>{{ __('Reset Password') }}</x-ui.card.title>
            </x-ui.card.header>

            <x-ui.card.content>
                <div class="grid gap-4">
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="email" :value="__('Email')" />
                        <x-ui.input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="password" :value="__('Password')" />
                        <x-ui.input id="password" type="password" name="password" required autocomplete="new-password" />
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
                    {{ __('Reset Password') }}
                </x-ui.button>
            </x-ui.card.footer>
        </form>
    </x-ui.card>
</x-guest-layout>
