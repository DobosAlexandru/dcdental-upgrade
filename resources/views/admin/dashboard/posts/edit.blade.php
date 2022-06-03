<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">

            {{-- Index --}}
            <x-jet-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                {{ __('Index') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('posts.create') }}" :active="request()->routeIs('posts.create')">
                {{ __('Create') }}
            </x-jet-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <x-form method="PUT" action="{{ route('posts.update', $post) }}" has-files>
                        <div class="space-y-6">
                            {{-- Cover Image --}}
                            <div>
                                <x-jet-label for="cover_image" value="{{ __('Cover Image') }}" />
                                <x-jet-input id="cover_image" class="block mt-1 w-full" type="file" name="cover_image"
                                    :value="$post->cover_image" autocomplete="cover_image" />
                                <span class="mt-2 text-xs text-gray-500">File type:jpg, png only!</span>
                                <x-jet-input-error for="cover_image" class="mt-2" />
                            </div>

                            {{-- Title --}}
                            <div>
                                <x-jet-label for="title" value="{{ __('Title') }}" />
                                <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    :value="$post->title" autofocus autocomplete="title" />
                                <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                                <x-jet-input-error for="title" class="mt-2" />
                            </div>

                            {{-- Excerpt (scurta introducere) --}}
                            <div>
                                <x-jet-label for="excerpt" value="{{ __('Scurta Introducere') }}" />
                                <x-jet-input id="excerpt" class="block mt-1 w-full" type="text" name="excerpt"
                                    :value="$post->excerpt" autofocus autocomplete="excerpt" />
                                <span class="text-xs text-gray-500">Maxim 200 de caractere</span>
                                <x-jet-input-error for="excerpt" class="mt-2" />
                            </div>

                            {{-- Category --}}

                            <div>
                                <x-jet-label for="category_id" value="{{ __('Categories') }}" />
                                <select name="category_id" id="category_id" class="rounded-md w-full">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                    @if($post->category->id == $category->id)
                                        selected
                                    @endif
                                    >{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                <x-jet-input-error for="category_id" class="mt-2" />
                            </div>

                            {{-- Body --}}

                            <div>
                                <x-jet-label for="body" value="{{ __('Body') }}" />
                                <x-forms.tinymce-editor name="body">
                                    {{ $post->body }}
                                </x-forms.tinymce-editor>
                                <x-jet-input-error for="body" class="mt-2" />
                            </div>

                            {{-- Schedule --}}
                            <div>
                                <x-jet-label for="published_at" value="{{ __('Schedule Date') }}" />
                                <x-pikaday name="published_at" format="YYYY-MM-DD" value="{{ $post->published_at }}" />
                                <x-jet-input-error for="published_at" class="mt-2" />
                            </div>

                            {{-- Tags --}}

                            <div>
                                <x-jet-label for="tags" value="{{ __('Tags') }}" />
                                <select name="tags[]" id="create-post" multiple x-data="{}" x-init="function(){ choices($el) }">
                                    @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                    @if(in_array($tag->id, $oldTags))
                                        selected
                                    @endif


                                    >{{ $tag->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            {{-- Meta Description --}}
                            <div>
                                <x-jet-label for="meta_description" value="{{ __('Meta description') }}" />
                                <x-trix name="meta_description" styling="overflow-y-scroll h-40">
                                    {{ $post->meta_description }}
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
