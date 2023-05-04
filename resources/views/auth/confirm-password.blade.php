<x-guest-layout>
    <x-ui.card>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <x-ui.card.header>
                <x-ui.card.description>
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </x-ui.card.description>
            </x-ui.card.header>

            <x-ui.card.content>
                <!-- Password -->
                <div class="grid gap-1.5">
                    <x-ui.label for="password" :value="__('Password')" />

                    <x-ui.input id="password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" />
                </div>
            </x-ui.card.content>

            <x-ui.card.footer>
                <x-ui.button class="w-full">
                    {{ __('Confirm') }}
                </x-ui.button>
            </x-ui.card.footer>
        </form>
    </x-ui.card>
</x-guest-layout>
