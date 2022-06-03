@extends('front._layouts.service')

@section('article')
<div class="">
    <p>Fiecare pacient este unic, așa cum și planul de tratament este personalizat, foarte bine analizat de către
        medicul specialist ortodont și realizat în armonie cu sistemul osos, muscular și articular al fiecărui pacient
        în parte.</p>

    <p>Vârsta cea mai potrivită pentru tratamentul ortodontic este aproximativ 8-9 ani. La această vârstă, oasele
        maxilare cresc mai repede și sunt mai elastice, motiv pentru care modificarea poziției se realizează mult mai
        repede și mai usor.</p>

    <p>Tratamentul ortodontic poate fi efectuat, desigur, la orice vârstă, cu mențiunea că la o vârstă adultă durata
        tratamentului este mai mare deoarece oasele nu mai sunt la fel de elastice ca în copilărie.</p>

    <p>Există mai multe tipuri de aparate dentare: fixe și mobile, cu brackets metalici dar și estetici, de safir.</p>

    <span class='font-bold'>Aparatele mobile</span> se folosesc mai ales la copii, începând cu varsta de
    8 ani. Ele au dezavantajul că succesul tratamentului depinde de voința copilului de a purta aparatele.
    Incepand cu 12 ani, se folosesc <span class='font-bold'>aparatele fixe</span>.

    <blockquote>
        Cele mai moderne tipuri de aparate dentare sunt cele complet estetice, cum este cel de tipul incognito care are
        bracketii situați pe partea interioară a dinților, astfel încât vizibilitatea acestuia este aproape nulă.
    </blockquote>
    <span class='font-bold'>De asemenea, din aceeași categorie de aparate estetice este și cel
        Invisalign</span>, care îndreaptă dinţii folosind o serie de aliniatori detaşabili aproape invizibili, care sunt
    adaptaţi special la dinţii dumneavoastră. Pe măsură ce înlocuiţi fiecare aliniator odată la două săptămâni, dinţii
    dumneavoastră vor migra – puţin câte puţin, săptămână după săptămână, deplasându-se treptat spre poziţia finală
    proiectată, fara a avea nici un impact asupra vieții de zi cu zi. Practic, el poate fi îndepărtat pentru a manca sau
    pentru a realiza o igienă corespunzatoare, sau pentru scurt timp la ocazii speciale.
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
