<section>
    <x-ui.card>
        <x-ui.card.header>
            <x-ui.card.title>{{ __('Update Password') }}</x-ui.card.title>

            <x-ui.card.description>
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </x-ui.card.description>
        </x-ui.card.header>

        <x-ui.card.content>
            <form id="update-password" method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <div class="grid w-full items-center gap-4">
                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-ui.label for="current_password" :value="__('Current Password')" />
                        <x-ui.input id="current_password" name="current_password" type="password" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" />
                    </div>

                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-ui.label for="password" :value="__('New Password')" />
                        <x-ui.input id="password" name="password" type="password" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" />
                    </div>

                    <div class="grid w-full max-w-sm items-center gap-1.5">
                        <x-ui.label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-ui.input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
                    </div>
                </div>
            </form>
        </x-ui.card.content>

        <x-ui.card.footer>
            <div class="flex items-center gap-4">
                <x-ui.button form="update-password">{{ __('Save') }}</x-ui.button>

                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-muted-foreground"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </x-ui.card.footer>
    </x-ui.card>
</section>
