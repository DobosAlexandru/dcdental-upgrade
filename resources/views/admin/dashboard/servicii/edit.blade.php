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

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <x-form method="PUT" action="{{ route('servicii.update', $serviciu) }}" has-files>
                        <div class="space-y-6">
                            {{-- Cover Image --}}
                            <div>
                                <x-jet-label for="cover_image" value="{{ __('Cover Image') }}" />
                                <x-jet-input id="cover_image" class="block mt-1 w-full" type="file" name="cover_image"
                                    :value="$serviciu->cover_image" autocomplete="cover_image" />
                                <span class="mt-2 text-xs text-gray-500">File type:jpg, png only!</span>
                                <x-jet-input-error for="cover_image" class="mt-2" />
                            </div>

                            {{-- Title --}}
                            <div>
                                <x-jet-label for="title" value="{{ __('Meta Title') }}" />
                                <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    :value="$serviciu->title" autofocus autocomplete="title" />
                                <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                                <x-jet-input-error for="title" class="mt-2" />
                            </div>

                            {{-- Nav Title --}}
                            <div>
                                <x-jet-label for="nav_title" value="{{ __('Name') }}" />
                                <x-jet-input id="nav_title" class="block mt-1 w-full" type="text" name="nav_title"
                                    :value="$serviciu->nav_title" autofocus autocomplete="nav_title" />
                                <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                                <x-jet-input-error for="nav_title" class="mt-2" />
                            </div>

                            {{-- Tagline --}}
                            <div>
                                <x-jet-label for="tagline" value="{{ __('Tagline') }}" />
                                <x-jet-input id="tagline" class="block mt-1 w-full" type="text" name="tagline"
                                    :value="$serviciu->tagline" autofocus autocomplete="tagline" />
                                <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                                <x-jet-input-error for="tagline" class="mt-2" />
                            </div>

                            {{-- Video Id --}}
                            <div>
                                <x-jet-label for="video_id" value="{{ __('Video Id') }}" />
                                <x-jet-input id="video_id" class="block mt-1 w-full" type="text" name="video_id"
                                    :value="$serviciu->video_id" autofocus autocomplete="video_id" />
                                <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                                <x-jet-input-error for="video_id" class="mt-2" />
                            </div>

                            {{-- Meta Description --}}
                            <div>
                                <x-jet-label for="meta_description" value="{{ __('Meta description') }}" />
                                <x-trix name="meta_description" styling="overflow-y-scroll h-40">
                                    {{ $serviciu->meta_description }}
                                </x-trix>
                                <x-jet-input-error for="meta_description" class="mt-2" />
                            </div>
                        </div>
                        <x-jet-button class="mt-12">
                            {{ __('Update') }}
                        </x-jet-button>


                    </x-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
