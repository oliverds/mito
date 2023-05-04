<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-ui.card>
                <x-ui.card.header>
                    <x-ui.card.title>{{ __("Welcome") }}</x-ui.card.title>
                </x-ui.card.header>
                <x-ui.card.content>
                    {{ __("You're logged in!") }}
                </x-ui.card.content>
            </x-ui.card>
        </div>
    </div>
</x-app-layout>
