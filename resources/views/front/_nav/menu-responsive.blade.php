<nav id="js-nav-menu" class="hidden absolute top-30 right-0 left-0 z-50 bg-white w-full lg:hidden">
    <div class="text-indigo-700 font-mono">
        <ul class=" list-none">
            <li class="border-t border-blue-200 pl-12 py-4">
                <a title="{{ env('APP_NAME') }} Acasa" href="{{route('home')}}" class="text-2xl font-semibold">Acasa</a>
            </li>
            <li class="border-t border-blue-200 pl-12 py-4">
                <a title="{{ env('APP_NAME') }} Implant dentar rapid o zi" href="{{route('implant-dentar-rapid-o-zi')}}"
                    class="text-2xl font-semibold">Implant24h</a>
            </li>
            <li class="relative flex flex-col items-start border-t border-blue-200 py-4">
                <div class="flex  justify-between items-center w-full pr-12">
                    <a title="{{ env('APP_NAME') }} Servicii" href="" class="text-2xl font-semibold pl-12">Servicii</a>
                    <button class=" transition-all duration-300" id="accordionButton" aria-controls="services-accordion" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-indigo-700"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="hidden bg-indigo-400 transition-all duration-300 ease-out text-white w-full mt-4" id="accordionList">
                    <ul class="text-3xl font-mono pl-20">

                        <li class="border-b border-white py-2">
                            <a href="{{route('chirurgie-maxilo-faciala')}}" title="Chirurgie Maxilo-Faciala"
                                class="text-2xl">Chirurgie Maxilo-Faciala</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('endodontie')}}" title="Endodontie" class="text-2xl">Endodonție</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('estetica-dentara')}}" title="Estetică dentară"
                                class="text-2xl">Estetică dentară</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('implantologie')}}" title="Implantologie"
                                class="text-2xl">Implantologie</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('implant-subperiostal')}}" title="Implant Subperiostal"
                                class="text-2xl">Implant Subperiostal</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('ortodontie')}}" title="Ortodonție" class="text-2xl">Ortodonție</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('parodontologie')}}" title="Parodontologie"
                                class="text-2xl">Parodontologie</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('pedodontie')}}" title="Pedodonție" class="text-2xl">Pedodonție</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('profilaxie-dentara')}}" title="Profilaxie Dentară"
                                class="text-2xl">Profilaxie Dentară</a>
                        </li>
                        <li class="border-b border-white py-2">
                            <a href="{{route('protetica')}}" title="Protetică" class="text-2xl">Protetică</a>
                        </li>
                        <li class="border-white py-2">
                            <a href="{{route('terapia-odontala')}}" title="Terapia odontală"
                                class="text-2xl">Terapia odontală</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="border-t border-blue-200 pl-12 py-4">
                <a title="{{ env('APP_NAME') }} Tarife" href="{{route('tarife')}}"
                    class="text-2xl font-semibold">Tarife</a>
            </li>
            <li class="border-t border-blue-200 pl-12 py-4">
                <a title="{{ env('APP_NAME') }} Despre noi" href="{{route('despre-noi')}}"
                    class="text-2xl font-semibold">Despre noi</a>
            </li>
            <li class="border-t border-blue-200 pl-12 py-4">
                <a title="{{ env('APP_NAME') }} Blog" href="{{route('blog')}}" class="text-2xl font-semibold">Blog</a>
            </li>
            <li class="border-t border-blue-200 pl-12 py-4">
                <a title="{{ env('APP_NAME') }} Galerie" href="{{route('galerie')}}"
                    class="text-2xl font-semibold">Galerie</a>
            </li>
            <li class="border-t border-blue-200 pl-12 py-4">
                <a title="{{ env('APP_NAME') }} Contact" href="{{route('contact')}}"
                    class="text-2xl font-semibold">Contact</a>
            </li>
        </ul>
    </div>
</nav>
