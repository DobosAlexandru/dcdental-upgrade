@extends('front._layouts.service')

@section('article-tagline')
<div>
    <p>
        Tratamentul endodontic se refera la tratarea canalelor radacinilor dintilor bolnavi si este necesar atunci cand
        pulpa dentara (tesutul din interiorul dintelui) se inflameaza/infecteaza. Cauzele sunt diverse:
    </p>
    <ul class="mt-2">
        <li>- carie profunda</li>
        <li>- Fractura sau fisura dentara</li>
        <li>- Traumatism asupra dintelui</li>
    </ul>
</div>
@endsection

@section('article')

<div class="grid md:grid-cols-2 text-indigo-700 gap-x-20">
    <div class="order-last md:order-none mt-12 md:mt-0">
        <div class="flex flex-col items-center space-y-24">
            <img src="{{ asset('images/tratament_endodontic1.jpg') }}" alt="Tratament endodontic 1">
            <img src="{{ asset('images/tratament_endodontic2.jpg') }}" alt="Tratament endodontic 2">
        </div>
    </div>
    <div class="flex flex-col items-start 2xl:w-2/3">
        <div class="text-left leading-10">
            <h4 class="font-bold">Semne ca ai nevoie de un tratament endodontic.</h4>
            <p class="leading-6 mt-8">
                Primul si cel mai important semn este durerea, la stimuli diversi, atat la rece cat si la cald. De
                asemenea durerea poate fi prezenta spontan sau la o usoara atingere.
            </p>
        </div>
        <div class="text-left leading-10 mt-12">
            <h4 class="font-bold">Cum salveaza tratamentul endodontic dintele?</h4>
            <p class="leading-6 mt-8"> Dupa inlaturarea pulpei dentare inflamate/infectate,
                urmeaza curatarea canalelor iar spatiul ramas gol va fi sigilat cu materiale biocompatibile. Dupa
                efectuarea tratamentului endodontic, dintele urmeaza sa fie refacut cu o coroana de invelis fizionomica,
                care il va proteja si ii va reda functia masticatorie, fizionomica.</p>
        </div>
        <div class="text-left leading-10 mt-12">
            <h4 class="font-bold">
                Ce presupune tratamentul endodontic la microscop?
            </h4>

            <ul class="leading-6 mt-8 pl-5">
                <li class="list-disc">izolarea campului operator cu sisteme de diga</li>
                <li class="list-disc">magnificarea campului operator cu ajutorul microscopuli endodontic</li>
                <li class="list-disc">lungimea canalelor se determina electronic</li>
                <li class="list-disc">prepararea si curatarea canalelor radiculare cu sisteme rotative</li>
                <li class="list-disc">obturarea canalelor cu sigilant</li>
                <li class="list-disc">control radiologic digital.</li>
            </ul>
        </div>
        <div class="text-left leading-10 mt-12">
            <h4 class="font-bold"> Tratamentul endodontic este dureros?</h4>
            <p class="text-indigo-400 leading-6 mt-8"> Fiind realizat sub anestezie locala, tratamentul pulpei
                dentare nu este dureros, insa in primele zile dupa tratament este posibila o semsibilitatr sau
                disconfort in zona respective din cauza inflamatiei postoperatorii, ameliorate cu medicatie prescrisa de
                medic.</p>
        </div>

    </div>
</div>

@endsection
