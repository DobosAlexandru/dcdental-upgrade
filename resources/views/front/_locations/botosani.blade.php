@extends('front._layouts.app')


@section('content')
<h1 class="invisible">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

<section class="py-8 lg:py-12">

        <div class="px-5 md:px-12 lg:px-container 2xl:px-60 md:flex md:flex-row md:items-center">
            <div class="lg:pr-8 w-full lg:w-1/2">
                <div class="max-w-xl">
                    <h2
                        class="text-4xl lg:text-5xl text-indigo-700 font-body font-semibold leading-none tracking-tight leading-none">
                        {{ $page['locatie'] }}
                    </h2>
                    <p class="mt-5 text-indigo-700 text-base 2xl:text-lg font-normal opacity-75">{{ $page['tagline']}}
                    </p>
                </div>
            </div>
            <div class="mt-5 lg:mt-0 pl-8 w-full lg:w-1/2">

                <div class="w-full">
                    <div class="relative w-full">
                        <img src="{{asset('images/dc-dental-cabinet-9@sm.jpg')}}" class="rounded-md" alt="DC Dental Botosani">
                    </div>
                </div>

            </div>
        </div>

</section>

<section class="py-8 lg:py-12">
    <div class="px-5 md:px-12 lg:px-container relative">
        <h2 class="text-4xl lg:text-5xl font-normal font-semibold tracking-wide text-center text-indigo-700">Adresa
            noastră</h2>
        <div class="mt-8 lg:mt-12">
            <div class="lg:-mx-10 lg:flex">
                <div class="px-4 lg:p-10 w-full lg:w-2/5">
                    <h4 class="font-serif text-indigo-700 text-2xl font-semibold font-body text-center lg:text-left">
                        Informatii foarte utile pentru pacienti:</h4>
                </div>
                <div class="mt-5 lg:mt-0 w-full lg:w-3/5 md:flex ">
                    <div class="md:mt-8 lg:mt-0 w-full md:w-1/2 px-5 lg:p-10 h-full flex flex-col">
                        <div class="">
                            <h4 class="font-serif text-indigo-700 text-lg font-semibold font-body">Adresa</h4>
                            <p class="mt-1 font-light font-body text-lg opacity-75">
                                Str. Primaverii nr.5, bloc P11, sc. A, ap.1
                        </div>
                        <div class="mt-5">
                            <h4 class="font-serif text-indigo-700 text-lg font-semibold font-body">Transport public</h4>
                            <p class="mt-1 font-light font-body text-lg opacity-75">
                                Autobuze:
                                <br>Tramvai: </p>
                        </div>
                        <a href="https://goo.gl/maps/ibiCaPzys2THoEGPA" target="_blank"
                            title="{{ config('settings.site_name') }} Botosani"
                            class="mt-5 md:mt-auto w-full md:width-auto  block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 uppercase rounded-md md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">harta</a>
                    </div>
                    <div class="mt-8 lg:mt-0 w-full md:w-1/2 px-5 lg:p-10 h-full flex flex-col">
                        <div class="">
                            <h4 class="font-serif text-indigo-700 text-lg font-semibold font-body">Program</h4>
                            <p class="mt-1 font-light font-body text-lg opacity-75">
                                Luni-Vineri: 09.00 - 18.00
                                <br>Sâmbătă: închis
                                <br>Duminică: închis
                            </p>
                        </div>
                        <div class="mt-5">
                            <h4 class="font-serif text-indigo-700 text-lg font-semibold font-body">Contact</h4>
                            <div class="mt-1">
                                <a href="mailto:office@dcdental.ro" title="contact DC dental botosani" target="_blank"
                                    class="block font-light font-body text-black text-lg opacity-75">office@dcdental.ro</a>
                                <a href="tel:0040787695411" title="contact DC dental botosani"
                                    class="block font-light font-body text-black text-lg opacity-75">0787 695 411</a>
                            </div>
                        </div>
                        <a href="mailto:office@dcdental.ro" title="{{ config('settings.site_name') }} Botosani"
                            target="_blank"
                            class="mt-5	 w-full md:w-auto block text-sm font-bold text-center px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 uppercase rounded-md md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white transform-colors duration-200 ease-in">trimite
                            mesaj</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-8 md:pt-10 bg-gray-100">
    <div class="px-5 lg:px-0">
        <div class="md:flex md:flex-row md:items-center">
            <div class="mt-5 w-full md:w-1/2">
                <img src="{{asset('images/doctor.png')}}" alt="Dr. Drochioi Cristian" aspect_ratio="pb-common">
            </div>
            <div class="mt-8 md:mt-0 pb-8 md:pb-0 px-5 xl:pl-5p md:pr-12 lg:pr-container 2xl:pr-60 w-full md:w-1/2">
                <div class="max-w-xl">
                    <h2 class="text-center md:text-left">
                        Clinica DC dental
                    </h2>
                    <div class="mt-8">
                        <p class="text-indigo-700 text-base 2xl:text-lg font-normal opacity-75 leading-relaxed tracking-wide">
                            Specializată în servicii de implantologie avansată, chirurgie orală și maxilo-facială,
                            clinica DC dental oferă tratamente la cele mai înalte standarde, într-un ambient placut,
                            steril, dotat cu echipamente de ultimă generație.</p>
                        <p class="mt-3 text-indigo-700 text-base 2xl:text-lg font-normal opacity-75 leading-relaxed tracking-wide">
                            Fiecare pacient traiește o experiență unică, fiind tratat de o echipă de specialiști în
                            chirurgie, implantologie, protetică, ortodonție, parodontologie, endodonție și cosmetică
                            dentară, pe baza unui plan de tratament personalizat, întocmit in echipă.</p>
                        <p class="mt-3 text-indigo-700 text-base 2xl:text-lg font-normal opacity-75 leading-relaxed tracking-wide">
                            Clinica DC dental este coordonată de <span class="font-bold">Dr. Drochioi Cristian, medic
                                specialist chirurgie oro-maxilo-facială</span>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
