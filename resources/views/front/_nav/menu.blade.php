<nav class="hidden lg:flex h-full justify-end flex-1">
    <ul class="list-none flex justify-end items-center">
        <li>
            <a href="{{route('home')}}" title="{{ env('APP_NAME') }} - Acasa"
                class="p-2 text-xl font-serif font-normal  leading-normal hover:text-indigo-400 {{-- {{ $page->isActive('/') ? 'active text-indigo-400' : 'text-indigo-900' }}  --}}">Acasa</a>
        </li>
        <li class="relative has-dropdown xl:ml-3">

            <a href="{{route('implantologie')}}" title="{{ env('APP_NAME') }} - Implantologie"
                class="flex items-center p-2 text-xl font-serif font-normal  leading-normal hover:text-indigo-400">Implantologie
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-6 h-6 fill-current"
                    role="presentation">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </a>

            <ul class="dropdown">

                <li class="dropdown__item">
                    <a href="{{route('implant-dentar-rapid-o-zi')}}" title="Implant24h"
                        class="dropdown__link">Implant24h</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('implant-subperiostal')}}" title="Implant subperiostal"
                        class="dropdown__link">Implant Subperiostal</a>
                </li>

            </ul>
        </li>
        <li class="xl:ml-3 relative has-dropdown">
            <a href="" title="{{ env('APP_NAME') }} - Servicii"
                class="flex items-center p-2 text-xl font-serif font-normal  leading-normal hover:text-indigo-700 {{-- {{ $page->isActive('/servicii') ? 'active text-indigo-400' : 'text-indigo-900' }} --}}">Servicii
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-6 h-6 fill-current"
                    role="presentation">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </a>
            <ul class="dropdown" id="top-dropdown">

                <li class="dropdown__item">
                    <a href="{{route('chirurgie-maxilo-faciala')}}" title="Chirurgie Maxilo-Faciala"
                        class="dropdown__link">Chirurgie Maxilo Faciala</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('endodontie')}}" title="Endodontie" class="dropdown__link">Endodonție</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('estetica-dentara')}}" title="Estetica Dentara" class="dropdown__link">Estetică
                        dentară</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('implantologie')}}" title="Implantologie" class="dropdown__link">Implantologie</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('implant-subperiostal')}}" title="Implantologie" class="dropdown__link">Implant
                        Subperiostal</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('ortodontie')}}" title="Ortodonție" class="dropdown__link">Ortodonție</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('parodontologie')}}" title="Parodontologie"
                        class="dropdown__link">Parodontologie</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('pedodontie')}}" title="Pedodonție" class="dropdown__link">Pedodonție</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('profilaxie-dentara')}}" title="Profilaxie Dentară"
                        class="dropdown__link">Profilaxie Dentară</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('protetica')}}" title="Protetică" class="dropdown__link">Protetică</a>
                </li>
                <li class="dropdown__item">
                    <a href="{{route('terapia-odontala')}}" title="Terapia odontală" class="dropdown__link">Terapia
                        odontală</a>
                </li>

            </ul>
        </li>
        <li class="xl:ml-3">
            <a href="{{route('tarife')}}" title="{{ env('APP_NAME') }} - Tarife"
                class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-400 {{-- {{ $page->isActive('/tarife') ? 'active text-indigo-400' : 'text-indigo-900' }} --}}">Tarife</a>
        </li>
        <li class="xl:ml-3">
            <a href="{{route('despre-noi')}}" title="{{ env('APP_NAME') }} - Despre Noi"
                class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-400 {{-- {{ $page->isActive('/despre-noi') ? 'active text-indigo-400' : 'text-indigo-900' }} --}}">Despre
                noi</a>
        </li>
        <li class="xl:ml-3">
            <a href="{{ route('blog') }}" title="{{ env('APP_NAME') }} - Blog"
                class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-400 {{-- {{ $page->isActive('/galerie') ? 'active text-indigo-400' : 'text-indigo-900' }} --}}">Blog</a>
        </li>
        <li class="xl:ml-3">
            <a href="{{route('galerie')}}" title="{{ env('APP_NAME') }} - Galerie"
                class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-400 {{-- {{ $page->isActive('/galerie') ? 'active text-indigo-400' : 'text-indigo-900' }} --}}">Galerie</a>
        </li>
        <li class="lg:ml-3">
            <a href="{{route('contact')}}" title="{{ env('APP_NAME') }} - Contact"
                class="p-2 text-xl font-serif font-normal leading-normal hover:text-indigo-400{{--  {{ $page->isActive('/contact') ? 'active text-indigo-400' : 'text-indigo-900' }} --}}">Contact</a>
        </li>
    </ul>
</nav>
