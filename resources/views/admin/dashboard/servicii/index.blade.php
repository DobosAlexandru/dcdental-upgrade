<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Servicii') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">

            {{-- Index --}}
            <x-jet-nav-link href="{{ route('servicii.index') }}" :active="request()->routeIs('servicii.index')">
                {{ __('Index') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('servicii.create') }}" :active="request()->routeIs('servicii.create')">
                {{ __('Create') }}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="max-w-7xl mt-4 mx-auto sm:px-6 lg:px-8">
        <x-ui.alerts />
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:servicii.index>
            </div>
        </div>
    </div>
</x-app-layout>
