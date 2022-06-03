@extends('front._layouts.app')

@section('content')
<section class="mx-auto px-2 md:px-12 lg:px-container">
    <article>
        <div class="py-6 w-full 2xl:w-4/5 mx-auto">

            <div class="relative no-underline pt-44 sm:pt-88 2xl:pt-128 hover:no-underline">
                <div class="h-auto">
                    <img src="{{ asset('storage/' . $post->cover_image)}}"
                        class="absolute top-0 w-full -z-1 rounded-t-3xl lg:rounded-3xl" />
                </div>
                <div class="bg-white py-6 px-2 sm:px-12 2xl:px-20 md:w-auto lg:w-2/3 sm:rounded-tr-3xl shadow-md">
                   {{--  <p class="text-gray-700">{{ $post->published_at }}</p> --}}
                    <h2 class="mb-4">{{ $post->title }}</h2>
                    <div class="flex flex-col items-start text-indigo-400">
                        <div class="mb-5 text-base">
                            {!! $post->excerpt !!}
                        </div>
                        <div class="text-white bg-indigo-700 rounded-xl px-6 py-2">
                            {{ $post->category->name }}
                        </div>
                    </div>
                    <div class="text-indigo-700 mt-16">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>

        </div>
    </article>
</section>
@endsection
