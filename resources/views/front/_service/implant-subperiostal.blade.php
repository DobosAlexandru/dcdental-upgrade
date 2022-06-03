@extends('front._layouts.service')

@section('article-tagline')
<p>Implanturile subperiostale ofera alternative rapida a unei danturi fixe in doar 24 h.</p>
<p>Scheletul din titan 100% este biocompatibil si acopera osul maxilar sau mandibular astfel incat acesta va reprezenta
    suportul pentru viitoare lucrare protetica fixa.</p>
@endsection

@section('article')
<div class="grid md:grid-cols-2 text-indigo-700 gap-x-20">
    <div class="order-last md:order-none mt-12 md:mt-0">
        <div class="flex flex-col items-center space-y-24">
            <img src="{{ asset('images/DCDental-WebColaje-1.jpg') }}" alt="Implant subperiostal 1"
                class="rounded-lg shadow-md">
            <img src="{{ asset('images/DCDental-WebColaje-2.jpg') }}" alt="Implant subperiostal 2"
                class="rounded-lg shadow-md">
        </div>
    </div>
    <div class="flex flex-col items-start 2xl:w-2/3">
        <div class="text-left leading-10">
            <h4 class="font-bold">Cui se adreseaza acest tip de implant?</h4>
            <ul class="leading-6 pl-5 mt-8">
                <li class="list-disc">
                    Pacienti edentate cu atrofie osoasa severa , care nu potbeneficia de implanturi dentare
                    conventionale( insurubate in os)
                </li>
                <li class="list-disc">
                    Pacienti care nu pot beneficia de reconstructii osoase
                </li>
            </ul>
        </div>
        <div class="text-left leading-6 space-y-4 mt-12">
            <h4 class="font-bold">Avantaje</h4>
            <ul class="leading-6 mt-8 pl-5">
                <li class="list-disc">Pacientii primesc lucrarea fixa provizorie imediat dupa interventia chirurgicala
                </li>
                <li class="list-disc">Nu necesita interventii secundare de aditie osoasa</li>
                <li class="list-disc">Implantul subperiostal este un implant personalizat pentru fiecare pacient in
                    parte, realizat dupa structura osoasa a acestuia</li>
                <li class="list-disc">Rezultatele sunt predictibile.</li>
            </ul>
            <p>
                Costul tratamentului cu implant subperiostal este personalizat pentru fiecare pacient, de aceea
                detaliile se discuta cu medical chirurg in prealabil in urma consultatiei.
            </p>
            <p>
                Lucrarea fixa provizorie se insurubeaza in 24 h de la interventie, iar lucrearea fixa definitiva se
                poate realiza dupa minim 9 luni.
            </p>
            <p>
                Poti opta pentru o reabilitare a danturii in 24 h, sau un tratament de indreptare a dintilor, estetica
                dentara sau chiar tratament endodontic( tratamentul canalelor radacinii dintelui) prin selectarea
                optiunii de plata in rate fixe prin Banca Transilvania.
            </p>
            <p>
                Procedura este simpla, o persoana dedicate din cadrul bancii iti va furniza toate informatiile necesare
                si va face demersul pentru tine.
            </p>
            <div class="">
                <a href="/contact" title="Contactati DC Dental"
                    class="block md:inline font-semibold hover:text-indigo-700 w-max">
                    Contacteaza-ne
                </a>
                si afla totul despre fiecare tratament  in cadrul Clinicii DCdental.
            </div>
        </div>

    </div>
</div>

@endsection
