<div class="flex flex-col">


    {{-- Side Navigation --}}
    <div class="md:flex items-center mb-12 space-y-4 sm:space-y-0 px-2">

        {{-- Sorting --}}
        <div class="flex items-center">

            <div class="flex items-center justify-between w-full space-x-4">
                <button wire:click="sortBy('recentAsc')"
                    class="{{ $selectedSortBy === 'recentAsc' ? 'bg-indigo-700 text-white' : 'text-indigo-700' }} flex items-center px-6 py-2 rounded-lg transition-all duration-500">
                    Recente
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2 stroke-current" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                    </svg>
                </button>
                <button wire:click="sortBy('recentDesc')"
                    class="{{ $selectedSortBy === 'recentDesc' ? 'bg-indigo-700 text-white' : 'text-indigo-700' }} flex items-center px-6 py-2 rounded-lg transition-all duration-500">
                    Vechi
                    <svg xmlns=" http://www.w3.org/2000/svg" class="w-6 h-6 ml-2 stroke-current" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Categories --}}

        <div class="flex items-center block ml-4">
            <p class="text-indigo-700 mr-2">Categorii:</p>
            <select class="text-indigo-700 rounded-md w-full">
                <option>Selectati o categorie</option>
                <option wire:click="toggleCategory('')">All</option>
                @foreach ($categories as $category)
                <option wire:click="toggleCategory('{{ $category->id }}')">
                    {{ $category->name }}</option>
                @endforeach

            </select>
            {{-- <button wire:click="toggleCategory('')"
                    class="{{ ! $selectedCategory ? 'bg-indigo-700' : 'text-indigo-700' }} w-full text-left p-2
            text-white focus:outline-none">
            All
            </button>
            @foreach ($categories as $category)
            <button wire:click="toggleCategory('{{ $category->id }}')"
                class="{{ $selectedCategory == $category->id ? 'bg-indigo-700 text-white focus:outline-none' : 'text-indigo-700'}} p-2 w-full text-left tracking-wide">
                {{ $category->name }}
            </button>
            @endforeach --}}
        </div>


    </div>

    {{-- Main Content --}}
    <div class="flex flex-col items-start">
        <div class="md:grid md:grid-cols-2 md:gap-x-6">
            @foreach ($posts as $post)
            <div class="col-span-1 px-2 md:px-0" wire:key="{{ $post->id }}">
                <a href="{{ route('blog.show', $post) }}">
                    <div class="overflow-hidden bg-white rounded-t rounded-b-none shadow-md">
                        <div class="no-underline hover:no-underline">
                            <img src="{{ asset('storage/'.$post->cover_image)}}" class="w-full">
                            <div class="w-full p-4">
                                <h2 class="text-3xl font-bold text-indigo-700">{{ $post->title }}</h2>
                                <div class="text-indigo-400">
                                    <div class="mt-5 text-base body">
                                        {!! $post->excerpt !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none p-3 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow-md">
                        <div class="flex items-center justify-start">
                            <a href="{{ route('blog.show', $post) }}"
                                class="px-3 py-2 my-6 bg-indigo-700 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 gradient focus:outline-none focus:shadow-outline hover:scale-105">
                                Mai mult
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{-- Page Links --}}
        <div class="p-2">
            {{ $posts->links() }}
        </div>
    </div>
</div>
