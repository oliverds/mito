<x-guest-layout>
    <x-ui.card>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <x-ui.card.header>
                <x-ui.card.title>{{ __('Log in') }}</x-ui.card.title>

                @if (Route::has('register'))
                    <x-ui.card.description>
                        {{ __('Not a member?') }}
                        <a class="underline underline-offset-4 hover:text-primary" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    </x-ui.card.description>
                @endif
            </x-ui.card.header>

            <x-ui.card.content>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="grid w-full items-center gap-4">
                    <!-- Email Address -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="email" :value="__('Email')" />
                        <x-ui.input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div class="grid gap-1.5">
                        <x-ui.label for="password" :value="__('Password')" />

                        <x-ui.input id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Remember Me -->
                    <div>
                        <label for="remember_me" class="inline-flex items-center">
                            <x-ui.checkbox id="remember_me" type="checkbox" name="remember" />
                            <span class="ml-2 text-sm font-medium leading-none">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                </div>
            </x-ui.card.content>

            <x-ui.card.footer>
                <x-ui.button class="w-full">
                    {{ __('Log in') }}
                </x-ui.button>
            </x-ui.card.footer>
        </form>
    </x-ui.card>

    @if (Route::has('password.request'))
        <p class="mt-4 text-center text-sm text-muted-foreground">
            <a class="underline underline-offset-4 hover:text-primary" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        </p>
    @endif
</x-guest-layout>
