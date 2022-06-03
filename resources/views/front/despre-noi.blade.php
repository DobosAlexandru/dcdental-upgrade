@extends('front._layouts.app')


@section('content')

<h1 class="hidden">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

<section class="md:py-12 lg:py-16 overflow-x-hidden">
    <div class="mx-auto px-3 md:px-12 lg:px-container 2xl:px-60">
        <div class="lg:flex lg:flex-row-reverse md:items-center">
            <div class="w-full lg:w-1/2">
                <div class="block relative overflow-hidden pb-square md:pb-portrait lg:pb-square shadow-lg">
                    <img src="{{asset('images/dc-dental-echipa-1@lg.jpg')}}" alt="{{config('settings.site_name')}}"
                        class="h-auto rounded-lg shadow-lg">
                </div>
            </div>
            <div class="mt-8 lg:mt-0 pb-8 md:pb-0 px-5 md:px-0 w-full lg:w-1/2">

                <div class="text-5xl font-bold font-serif text-indigo-700 ">
                    <h2 class="text-center lg:text-left">
                        Clinica DC dental
                    </h2>
                </div>
                <div class="mt-8 text-base lg:pr-4">
                    <p class="text-indigo-700 font-normal leading-relaxed tracking-wide">
                        Specializată în servicii de implantologie avansată, chirurgie orală și maxilo-facială,
                        clinica DC dental oferă tratamente la cele mai înalte standarde, într-un ambient placut,
                        steril, dotat cu echipamente de ultimă generație.</p>
                    <p class="mt-3 text-indigo-700 font-normal leading-relaxed tracking-wide">
                        Fiecare pacient traiește o experiență unică, fiind tratat de o echipă de specialiști în
                        chirurgie, implantologie, protetică, ortodonție, parodontologie, endodonție și cosmetică
                        dentară, pe baza unui plan de tratament personalizat, întocmit in echipă.</p>
                    <p class="mt-3 text-indigo-700 font-normal leading-relaxed tracking-wide">
                        Clinica DC dental este coordonată de <span class="font-bold">Dr. Drochioi Cristian, medic
                            specialist chirurgie oro-maxilo-facială</span>.
                </div>

            </div>
        </div>
    </div>
</section>

<section class="relative py-12 lg:py-16 bg-gray-100">
    <div class="px-3 md:px-12 lg:px-container 2xl:px-60 mx-auto">
        <div class="lg:-mx-5 lg:flex lg:items-start xl:items-center">
            <div class="w-full lg:w-2/5 lg:px-5">
                <div class="relative w-full overflow-hidden">
                    <div class="relative w-full z-10">

                        <picture>
                            <source media="(max-width:640px)" srcset="{{ asset('images/dr-drochioi-cristian@sm.jpg')}}">
                            <source media="(max-width:768px)" srcset="{{ asset('images/dr-drochioi-cristian@md.jpg')}}">
                            <source media="(max-width:1024px)"
                                srcset="{{ asset('images/dr-drochioi-cristian-1@lg.jpg')}}">
                            <img src="{{ asset('images/dr-drochioi-cristian-1@lg.jpg')}}" alt="Clinica DC dental"
                                class="w-full pb-portrait md:pb-wide lg:pb-portrait rounded-lg">
                        </picture>

                    </div>
                </div>
            </div>
            <div class="w-full lg:w-3/5 lg:px-5">
                <div class="mt-8 md:mt-12 lg:mt-0 text-justify">
                    <div class="text-indigo-700 text-5xl font-bold font-serif">
                        <h2 class="text-center">
                            Dr. Drochioi Cristian
                        </h2>
                    </div>
                    <div class="mt-8">
                        <p class="text-indigo-700 text-base 2xl:text-lg leading-relaxed tracking-wide">
                            Asist. Univ. Dr. Drochioi Cristian coordonează clinica DC dental unde efectuează consultații
                            și o gamă variată de intervenții chirurgicale în sfera oro-maxilo-facială.
                        </p>
                        <p class="mt-3 text-indigo-700 text-base 2xl:text-lg leading-relaxed tracking-wide">
                            Deține licențe atât în Medicina Dentară cât și în Medicina Generală în cadrul Universității
                            de Medicină și Farmacie Gr. T. Popa, Iași.
                        </p>
                        <p class="mt-3 text-indigo-700 text-base 2xl:text-lg leading-relaxed tracking-wide">
                            Din anul 2012 a activează ca asistent de cercetare, apoi cadru didactic la Universitatea de
                            Medicină și Farmacie Gr. T. Popa, Iași, disciplina de chirurgie maxilo-facială.
                        </p>
                        <p class="mt-3 text-base 2xl:text-lg leading-relaxed tracking-wide text-indigo-700">
                            In prezent, Dr. Drochioi Cristian este medic specialist in cadrul compartimentului de
                            chirurgie oro-maxilo-faciala al Spitalului Clinic Militar de Urgență Dr. Iacob Czihac Iasi
                        </p>
                        <p class="mt-3 text-indigo-700 text-base 2xl:text-lg leading-relaxed tracking-wide">
                            Ariile de interes medical: chirurgia ortognatică, chirurgia oncologică, chirurgia tumorilor
                            benigne maxilo-faciale, patologia glandelor salivare, anomalii maxilo-faciale, disfuncții la
                            nivel articulației temporo-mandibulare (ATM), chirurgie preimplantară, implantologie.
                        </p>
                    </div>
                    <div class="mt-12 lg:mt-8 text-center">
                        <a href="{{route('programari')}}"
                            title="{{config('settings.site_name')}} Programare consultatie"
                            class="inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-indigo-700 border border-indigo-700 rounded-full uppercase md:tracking-wide hover:shadow hover:bg-indigo-700 hover:text-white">programează
                            o consultație</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
