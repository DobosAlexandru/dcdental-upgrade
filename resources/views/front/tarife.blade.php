@extends('front._layouts.app')


@section('content')
<h1 class="hidden">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>
<section class="md:py-12 md:px-12 lg:px-container 2xl:px-60">
    <div class="mx-auto">
        <div class="md:grid md:grid-cols-2 md:items-center">
            <div class="mt-8 md:mt-0 pb-8 md:pb-0 px-5 w-full">
                <div class="max-w-xl">
                    <h2 class="text-center md:text-left">
                        Zambeste cu DC dental
                    </h2>
                    <p class="mt-5 text-indigo-700 2xl:text-lg font-normal opacity-75">Echipa noastră are o mare
                        varietate
                        de specialități, astfel încât să putem găsi tratamentul potrivit pentru tine, pe baza nevoilor
                        și situației tale unice.</p>
                </div>
            </div>
            <div class="relative mt-5 w-full">

                <img src="{{asset('images/cabinet-dcdental-0050.jpg')}}" alt="{{ config('settings.site_name') }}"
                    class="rounded-lg">

            </div>
        </div>
    </div>
</section>

<section class="py-8 md:py-12 ">
    <div class="container mx-auto">
        <div class="max-w-4xl text-center mx-auto">
            <h2>Tarife si preturi</h2>
            <p class="mt-5 text-indigo-700 text-xl md:text-2xl font-normal opacity-75">Prețuri servicii Clinica DC
                dental</p>
        </div>
    </div>
</section>

<section class="bg-indigo-100 py-8 md:py-12 ">
    <div class="text-indigo-700 mx-auto px-3 md:px-12 lg:px-container 2xl:px-60">
        <p class="mt-5 text-indigo-700 text-xl md:text-2xl font-normal opacity-75 lg:max-w-4xl lg:mx-auto">
            Consultație de specialitate : 120 lei
        </p>
        @foreach ($treatmentsGroup as $index => $group)
        <div x-data="{ show:false }"
            class="lg:max-w-4xl lg:mx-auto bg-white rounded-lg mt-5 first:mt-0 shadow hover:shadow-md">
            <div class="flex-1">
                <div class="py-6 px-3 md:px-5 flex items-center justify-between">
                    <h3 class="leading-tight text-indigo-700 text-2xl lg:text-3xl">
                        {{ $index }}
                    </h3>
                    <button @click="show = !show" :aria-expanded="show ? 'true' : 'false'"
                        :class="{ 'transition-all duration-300 rotate-90 ': show }"
                        class="ml-3 lg:ml-5 flex-shrink-0 ooutline-none focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            class="ml-1 w-8 h-8 fill-current -rotate-90 transition-all duration-300"
                            role="presentation">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                </div>

                <div class="is-collapsed" x-show="show" x-transition:enter="transition duration-300"
                    x-transition:enter-start="opacity-0 " x-transition:enter-end="opacity-100 "
                    x-transition:leave="transition duration-300" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
                    <div
                        class="grid grid-cols-12 gap-4 py-5 px-3 md:px-5 sticky top-0 bg-white border-b-2 border-indigo-400">
                        <div class="col-span-8 md:col-span-10">
                            <h5 class="font-semibold text-lg font-mono">Denumire</h5>
                        </div>
                        <div class="col-span-4 md:col-span-2">
                            <div class="text-right font-normal text-base">
                                <h5 class="font-semibold text-lg font-mono">Pret</h5>
                            </div>
                        </div>
                    </div>


                    @foreach($group as $treatment)

                    <div
                        class="grid grid-cols-12 gap-4 text-gray-800 py-4 px-3 md:px-5 even:bg-indigo-100 odd:bg-white">
                        <div class="col-span-8 md:col-span-10">
                            <span class="font-semibold text-base md:text-lg font-mono">
                                {{ $treatment->name }}
                            </span>
                        </div>
                        <div class="col-span-4 md:col-span-2">
                            <div class="text-right font-semibold text-sm md:text-lg">
                                <span>{{ $treatment->price }} {{ $treatment->price_unit }}</span>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        @endforeach
        <div class="mt-8 lg:mt-12 lg:max-w-4xl lg:mx-auto">
            <p class="text-base font-normal text-gray-900"> Ai nelamuriri legate de preturi ? <a href="/contact"
                    title="Contactati DC Dental"
                    class="block md:inline font-semibold hover:text-indigo-700">Contacteaza-ne!</a></p>
        </div>
    </div>
</section>
<section class="mx-auto 2xl:max-w-8xl md:px-12 lg:px-container 2xl:px-60 mt-12">
    <div class="md:grid grid-cols-2 gap-x-10">
        <img src="{{ asset('images/Dental-Ro-_-Second-edition.jpg') }}" class="w-auto mx-auto rounded-md shadow-md" alt="">
        <img src="{{ asset('images/star-bt-plata-in-6-rate.jpg') }}" class="w-auto mx-auto rounded-md shadow-md" alt="">
    </div>
</section>
@include('front._components.locatii')



@endsection
