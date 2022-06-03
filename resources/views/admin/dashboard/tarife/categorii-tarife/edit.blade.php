<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorii Tarife') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">

            {{-- Index --}}
            <x-jet-nav-link href="{{ route('categorii-tarife.index') }}" :active="request()->routeIs('categorii-tarife.index')">
                {{ __('Index') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('categorii-tarife.create') }}" :active="request()->routeIs('categorii-tarife.create')">
                {{ __('Create') }}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <form action="{{ route('categorii-tarife.update', $categorie ) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="$categorie->name" required autofocus autocomplete="name" />
                            <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>

                        <x-jet-button class="mt-12">
                            {{ __('Update') }}
                        </x-jet-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
