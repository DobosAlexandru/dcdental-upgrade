<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tratamente') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">

            {{-- Index --}}
            <x-jet-nav-link href="{{ route('tratamente.index') }}" :active="request()->routeIs('tratamente.index')">
                {{ __('Index') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('tratamente.create') }}" :active="request()->routeIs('tratamente.create')">
                {{ __('Create') }}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <form action="{{ route('tratamente.update', $tratament) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-4">
                            {{-- Nume --}}
                            <div>
                                <x-jet-label for="name" value="{{ __('Nume') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="$tratament->name" autofocus autocomplete="name" />
                                <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                                <x-jet-input-error for="name" class="mt-2" />
                            </div>

                            {{-- Categorie --}}

                            <div>
                                <x-jet-label for="tarifCategory_id" value="{{ __('Categorie tratament') }}" />
                                <select name="tarifCategory_id" id="tarifCategory_id" class="rounded-md w-full">
                                    @foreach ($categoriiTarife as $categorie)
                                    <option value="{{ $categorie->id }}"
                                    @if($tratament->tarifCategory->id == $categorie->id) selected @endif
                                    >{{ $categorie->name }}</option>
                                    @endforeach

                                </select>
                                <x-jet-input-error for="tarifCategory_id" class="mt-2" />
                            </div>

                            {{-- Pret --}}
                            <div>
                                <x-jet-label for="price" value="{{ __('Pret') }}" />
                                <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price"
                                    :value="$tratament->price" autofocus autocomplete="price" />
                                <span class="text-xs text-gray-500">Acest camp este obligatriu</span>
                                <x-jet-input-error for="price" class="mt-2" />
                            </div>

                            {{-- Price unit --}}

                            <div>
                                <x-jet-label for="price_unit" value="{{ __('Unitate pret') }}" />
                                <select name="price_unit" id="price_unit" class="rounded-md w-full">
                                    <option value="">Please select a price unit</option>

                                    <option value="lei">lei</option>
                                    <option value="euro">euro</option>

                                </select>
                                <x-jet-input-error for="price_unit" class="mt-2" />
                            </div>

                            {{-- Info --}}

                            <div>
                                <x-jet-label for="info" value="{{ __('Info') }}" />
                                <x-trix name="info" styling="overflow-y-scroll h-40">
                                    {{ $tratament->info }}
                                </x-trix>
                                <x-jet-input-error for="info" class="mt-2" />
                            </div>

                            <x-jet-button class="mt-12">
                                {{ __('Update') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
