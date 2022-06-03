@extends('front._layouts.service')

@section('article')
<div class=" space-y-4">
    <p>Este vorba, în esență, de introducerea în os a unor dispozitive specializate ca design,rezistență mecanică,
        suprafață de contact cu osul și compoziție chimică (implant din titan, material 100% biocompatibil), care imită
        rădăcinile naturale ale dinților.</p>

    <p>Terapia pe implante impune câteva etape: prima întalnire cu medicul chirurg, ce presupune o consultație și
        anamneza detaliată, stabilirea unui diagnostic și a unui plan de tratament. La a doua întâlnire are loc
        inserarea implantului, operațiune înalt specializată, nedureroasă și netraumatizantă pentru pacient. După 7-14
        zile, se îndepartează firele de sutură</p>

    <p>Urmează perioada de osteointegrare de minim 4-6 luni, în funcție de terenul pacientului și de situația clinică
        întâlnită. În această perioadă, celulele osoase se atașează de suprafața implantului, osul maxilar și implantul
        făcând bloc comun. După această etapă, se trece la protezarea implantului cu lucrări protetice fixe sau proteze
        pe implanturi.</p>

    <p>Astăzi, cu rare excepții, implantologia este mereu posibilă, chiar și la pacienții care au suferit extracții
        dentare cu mult timp în urmă și unde cantitatea și calitatea osului sunt scazute. Tehnica modernă permite
        inserarea unui implant și în astfel de cazuri, pacienții fiind supuși în prealabil unei intervenții chirurgicale
        de adiționare osoasă.</p>

    <blockquote>
        Nu există o limită de durabilitate în timp a implantului. Dacă operațiunea de introducerea a implantului și
        toate intervențiile pe care aceasta le-a presupus au fost realizate într-un mod profesionist și cu materiale
        optime, minimum de viață al implantului se poate situa între 20 și 25 de ani. Pentru aceasta, este necesară
        și indispensabilă colaborarea pacientului atât în ceea ce privește asigurarea unei igiene orale perfecte,
        cât și controlul periodic.
    </blockquote>
    <p>Nu există o vârstă precizată a persoanelor care recurg la tratamentul cu implanturi dentare. Studiile științifice
        demonstrează că segmentul de vârstă cel mai interesat este după 40 de ani. Dacă nu există contraindicații
        clinice, pot fi introduse implanturi și persoanelor cu vârstă înaintată,70 sau chiar peste 80 ani.</p>

    <p>La tineri, implantologia este datorată, în esență, unor traumatisme sau ageneziei dentare (lipsa genetică a unui
        dinte), iar vârsta indicată este corelată cu dezvoltarea fizică, adică după 18 ani.</p>
</div>
@endsection

@section('blog-post')
<div class="mb-8 py-4">
    <div class="grid md:grid-cols-2 gap-x-10 items-center text-indigo-700">
        <div class="flex flex-col items-center md:items-start space-y-8 px-2 md:px-0">
            <div class="">
                <h2 class="text-3xl font-body font-serif font-bold text-indigo-700">
                    Scanarea intraorală – Tehnologie nouă de amprentare digitală
                </h2>
                <p class="text-indigo-700 opacity-70 mt-4">
                    Scanarea intraorală reprezintă cea mai inovatoare tehnică de amprentare dentară, deoarece asigură
                    tratamente cu un grad de eficiență și predictibilitate considerabil ridicată, comparativ cu
                    amprentarea clasică.
                </p>
            </div>
            <div class="mt-4 pb-4">
                <a href="{{ route('blog.show', 'scanarea-intraorala-tehnologie-noua-de-amprentare-digitala') }}"
                    class="px-3 py-2 my-6 bg-indigo-700 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 gradient focus:outline-none focus:shadow-outline hover:scale-105">
                    Mai mult
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/dcdental-cad-cam.jpg')}}" class="w-full rounded-lg">
        </div>
    </div>
</div>
@endsection
