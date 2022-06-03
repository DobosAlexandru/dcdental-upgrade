@extends('front._layouts.app')


@section('content')
<h1 class="invisible">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

<article class="pt-12 pb-16">
    <div class="md:flex md:flex-row md:items-center">
        <div class="pl-3 md:px-5 md:pl-12 lg:pl-container 2xl:pl-60 w-full lg:w-1/2">
            <div class="max-w-xl text-indigo-700">
                <p class="uppercase text-sm font-mono font-bold mb-4">Servicii {{ env('APP_NAME') }}</p>
                <h2>
                    {{ $page['nav_title'] }}
                </h2>
                <div class="mt-5 leading-6 2xl:text-lg font-mono xl:pr-12">
                    {{ $page['tagline'] }}
                    @yield('article-tagline')
                </div>
            </div>
        </div>
        <div class="mt-5 w-full lg:w-1/2">
            <div class="block relative overflow-hidden pb-common">
                @if($page['nav_title'] == 'Chirugie Maxilo Faciala')
                <div class="relative mx-auto w-full rounded-lg shadow-lg px-2 lg:pr-container">
                    <div class="relative block pb-wide shadow-md rounded-lg overflow-hidden">
                        <iframe class="w-full h-56 lg:h-72 2xl:h-128" frameborder="0"
                            src="https://www.youtube.com/embed/{{$page['video_id']}}?iv_load_policy=3&amp;enablejsapi=0&amp;wmode=opaque&amp;feature=player_embedded&amp;autoplay=0&amp;loop=1&amp;controls=1&amp;modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;rel=0"
                            allowfullscreen="true"></iframe>
                    </div>
                </div>
                @elseif ($page['nav_title'] == 'Implant Subperiostal')
                <div class="relative mx-auto w-full rounded-lg shadow-lg px-2 lg:pr-container">
                    <div class="relative block pb-wide shadow-md rounded-lg overflow-hidden">
                        <iframe class="w-full h-56 lg:h-72 2xl:h-128" frameborder="0" type="text/html"
                            src="https://www.youtube.com/embed/{{$page['video_id']}}?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com"></iframe>
                    </div>
                </div>
                @elseif ($page['nav_title'] == 'Implantologie')
                <div class="relative mx-auto w-full rounded-lg shadow-lg px-2 lg:pr-container">
                    <div class="relative block pb-wide shadow-md rounded-lg overflow-hidden">
                        <iframe class="w-full h-56 lg:h-72 2xl:h-128" frameborder="0" type="text/html"
                            src="https://www.youtube.com/embed/{{$page['video_id']}}?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com"></iframe>
                    </div>
                </div>
                @else
                <img src="{{URL::to(asset('images/'. $page['cover_image']))}}" alt="{{ $page['nav_title']}}"
                    class="h-3/4 w-full md:rounded-l-full {{ ($page['nav_title'] == 'Protetică') ? 'h-auto w-full' : 'h-full' }}">
                @endif
            </div>
        </div>
    </div>
    <section class="px-3 md:px-12 xl:px-service pt-5 md:pt-12 mt-12">
        <div class="mx-auto font-mono text-indigo-700 leading-6 font-light 2xl:text-lg">
            @yield('article')
        </div>

    </section>
</article>
<section class="md:px-12 lg:px-container 2xl:px-60">
    @yield('blog-post')
</section>

@if(isset($posts))
    @foreach($posts as $post)
        @if($page['nav_title'] == $post->category->name)

            <div class="my-8 md:px-12 lg:px-container 2xl:px-60 py-2">
                <div class="grid md:grid-cols-2 md:gap-x-10 md:items-center text-indigo-700">
                    <div class="flex flex-col items-start px-4 md:px-0">
                        <div class="">
                            <h2 class="text-3xl font-body font-serif font-bold text-indigo-700">
                                {{ $post->title }}
                            </h2>
                            <p class="text-indigo-700 opacity-70 mt-4">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                        <div class="mt-4 pb-4">
                            <a href="{{ route('blog.show', $post) }}"
                                class="px-3 py-2 my-6 text-base bg-indigo-700 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 gradient focus:outline-none focus:shadow-outline hover:scale-105">
                                Mai mult
                            </a>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('storage/'.$post->cover_image)}}" class="w-full rounded-lg">
                    </div>
                </div>
            </div>

        @endif
    @endforeach
@endif

<section class="mb-20 md:pl-12 lg:pl-container 2xl:pl-60 bg-gray-100 pt-6">
    <div class="grid lg:grid-cols-2 items-center text-indigo-700">
        <div class="flex flex-col items-center md:items-start space-y-8 px-2 md:px-0">
            <h2 class="leading-11 font-body font-serif font-bold text-indigo-700">Cine este</br>
                Dr. Drochioi Cristian?
            </h2>
            <div class="grid grid-cols-2 mx-auto text-center md:text-left gap-6">
                <div class="flex flex-col md:flex-row items-center">
                    <img src="{{ asset('static/svg/mortarboard.svg') }}" alt="" class="mr-6">
                    <p class="text-sm lg:text-base">Absolvent Facultatea de
                        Medicina si Farmacie, Iasi</p>
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <img src="{{ asset('static/svg/certificate.svg') }}" alt="" class="mr-6">
                    <p class="text-sm lg:text-base">Specializarea chirurgie
                        oro-maxilo-faciala/implantologie</p>
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <img src="{{ asset('static/svg/first-aid-kit.svg') }}" alt="" class="mr-6">
                    <p class="text-sm lg:text-base">Medic specialist la
                        Spitalul Clinic Militar, Iasi</p>
                </div>
                <div class="flex flex-col md:flex-row items-center">
                    <img src="{{ asset('static/svg/avatar.svg') }}" alt="" class="mr-6">
                    <p class="text-sm lg:text-base">Asistent
                        Dr. Univ. la UMF Iasi</p>
                </div>
            </div>
            <div class="mt-4 pb-4">
                <a href="{{ route('despre-noi') }}" class="uppercase font-bold text-xs">afla mai multe</a>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/Cristian-Drochioi.jpg') }}" alt="" class="w-full">
        </div>
    </div>
</section>

@endsection
