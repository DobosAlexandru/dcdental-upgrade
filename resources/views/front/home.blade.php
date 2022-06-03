@extends('front._layouts.app')

@section('content')

<section class="relative h-2/3">

    <div class="flex items-center">
        <div class="w-full">
            <div class="relative w-full">
                <picture>
                    <source media="(max-width:640px)" srcset="{{ asset('images/DCDental-PozaCover@sm.webp')}}">
                    <source media="(max-width:640px)" data-srcset="{{ asset('images/DCDental-PozaCover@sm.jpg')}}">
                    <source media="(max-width:768px)" data-srcset="{{ asset('images/DCDental-PozaCover@md.jpg')}}">
                    <source media="(max-width:1024px)" data-srcset="{{ asset('images/DCDental-PozaCover@lg.jpg')}}">
                    <img data-src="{{ asset('images/DCDental-PozaCover.jpg')}}" alt="Clinica DC dental" class="lazyload w-full">
                </picture>


                <div
                    class="bg-indigo-700 md:absolute bottom-0 left-0 md:rounded-r-full md:w-4/5 md:pl-12 lg:pl-container 2xl:pl-60 py-4 md:py-6">
                    <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left md:pr-6">
                        <h2 class="text-3xl px-8 sm:px-0 text-white font-normal font-serif capitalize ">Centrul de
                            implantologie
                        </h2>
                        <div class="mt-5 md:mt-0 text-center">
                            <a href="{{route('despre-noi')}}" title="{{env('APP_NAME')}} Centrul de implantologie"
                                class="text-xs md:text-sm text-white leading-snug uppercase font-semibold inline-flex px-6 py-3 border-2 border-white rounded-full hover:bg-white hover:text-indigo-700 transition-all duration-300 md:px-8 md:tracking-wide">
                                află mai multe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="py-12 md:px-12 lg:px-container 2xl:px-60 font-mono">
    <div class="xl:w-full">
        <div class="md:flex md:flex-row md:justify-between md:items-center">
            <div class="flex justify-start w-full">
                <div class="flex flex-col items-center px-5 md:px-0 md:w-4/5 text-center ">
                    <div class="leading-none font-bold font-serif text-indigo-700">
                        <h2 class="">Implanturi și dinți ficsi <br />în aceeași zi</h2>
                    </div>
                    <p class="mt-8 text-indigo-400 2xl:text-lg leading-normal font-normal max-w-xl">Specialiștii în
                        implantologie și chirurgie Oro-Maxilo-Faciala vă oferă cele mai sigure și performante servicii.
                    </p>
                    <div class="mt-6">
                        <a href="/implant24h" title="{{ env('APP_NAME') }} Implant24h"
                            class="px-3 md:px-0 inline-flex text-base lg:text-sm font-semibold leading-snug text-indigo-700 hover:text-indigo-400 tracking-wide uppercase">află
                            mai multe</a>
                    </div>
                </div>
            </div>
            <div class="px-5 w-screen sm:w-full md:w-4/5">
                <video autoplay="autoplay" loop="true" muted>
                    <source src="{{asset('video/implant.mp4')}}">
                </video>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
    <div class="swiper2 mySwiper2">
        <div class="swiper-wrapper flex items-center">
            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{ asset('images/dc-dental-cabinet-7.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>
            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{asset('images/dc-dental-cabinet-13.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>
            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{ asset('images/dc-dental-cabinet-5.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>
            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{ asset('images/dc-dental-cabinet-8.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>
            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{ asset('images/dc-dental-cabinet-12.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>

            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{ asset('images/dc-dental-cabinet-14.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>

            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{ asset('images/dc-dental-cabinet-15.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>
            <div class="swiper-slide w-full xl:w-1/4 max-w-xl">
                <div class=" block relative leading-none pb-wide">
                    <img data-src="{{asset('images/dc-dental-cabinet-10.jpg')}}" class="lazyload w-full min-h-full"
                        alt="Clinica DC dental">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-8 md:py-12 lg:py-16 font-mono">
    <div class="md:px-12 lg:px-container 2xl:px-60 mx-auto">
        <div class="flex flex-col md:flex-row md:justify-center items-center">
            <div class="pr-5 lg:pl-0 w-full h-full md:w-3/5">
                <div class="relative block pb-wide shadow-md">
                    <iframe class="lazyload w-full h-56 lg:h-80 2xl:h-128"
                        data-src="https://www.youtube.com/embed/hhrCpjvU28Y?loop=1&modestbranding=1"
                        frameborder="0"></iframe>
                </div>
            </div>
            <div class="mt-10 text-center leading-none md:mt-0 px-5 md:px-0 w-full md:w-2/5">
                <div class="flex flex-col items-center md:items-end  md:text-right">
                    <div class="font-bold font-serif text-indigo-700">
                        <h2 class="">Clinica <br />DC dental</h2>
                    </div>
                    <p class="mt-8 text-indigo-400 2xl:text-lg leading-normal font-normal max-w-xl ml-auto">Centrul de
                        implantologie DC dental oferă tratamente la cele mai înalte standarde, într-un ambient placut,
                        steril, dotat cu echipamente de ultimă generație.</p>
                    <div class="mt-6">
                        <a href="{{route('implant-dentar-rapid-o-zi')}}" title="{{ env('APP_NAME') }} Implant24h"
                            class="px-3 md:px-0 inline-flex text-base lg:text-sm font-semibold leading-snug text-indigo-700 hover:text-indigo-400 tracking-wide uppercase">află
                            mai multe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section
    class="relative font-mono md:flex md:flex-row-reverse items-center bg-blue-50 md:pl-12 lg:pl-container 2xl:pl-60 pb-10 md:pb-0">

    <div class="ml-auto w-full md:w-4/5">
        <img data-src="{{asset('images/dcdental-cristian-drochioi.jpg')}}" class="lazyload" alt="Dr. Drochioi Cristian">
    </div>

    <div class="w-full md:mt-0  h-full">
        <div class="w-full h-full">
            <div class="flex flex-col justify-center h-full">
                <div class="mt-10 md:mt-0 px-5 md:px-0 w-full md:w-4/5 text-center md:text-left">
                    <div class="leading-none text-indigo-700 font-bold font-serif">
                        <h2 class="">Dr. Drochioi Cristian</h2>
                    </div>
                    <p
                        class="mt-8 md:mt-5 lg:mt-8 text-indigo-400 2xl:text-lg leading-normal font-normal max-w-xl mr-auto">
                        Asistent Univ. Dr. Drochioi Cristian coordonează <span class="font-bold">Clinica DC dental
                        </span> unde efectuează consultații și o gamă variată de intervenții chirurgicale în sfera
                        oro-maxilo-facială.</p>
                    <div class="mt-5 md:mt-3">
                        <a href="{{ route('despre-noi') }}" title="{{ env('APP_NAME') }} - Afla mai multe DC dental"
                            class="px-3 md:px-0 inline-flex text-base lg:text-sm font-semibold leading-snug text-indigo-700 hover:text-indigo-400 tracking-wide uppercase">află
                            mai multe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
