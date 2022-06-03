@extends("front._layouts.service")

@section('article')
<div class="grid md:grid-cols-2 text-indigo-700 gap-x-20">
    <div class="md:order-none mt-12 md:mt-0">
        <div class="text-left leading-10 space-y-4">
            <h4 class="font-bold">Generalități</h4>
            <p class="leading-6 mt-6">
                Estetica dentară a devenit din ce în ce mai importantă în ultimii ani. Beneficiile unui zâmbet sănătos
                sunt evidente, însă există avantaje și atunci când vine vorba de frumusețea zâmbetului: de la încredere
                în sine la o atitudine mai optimistă și mai deschisă, ba chiar și la interacțiuni sociale mai ușoare și
                o viață personală și profesională mai împlinită.
            </p>
            <p class="leading-6">
                Serviciile de estetică dentară sunt de mai multe tipuri, adaptabile fiecărui caz în parte și scopului
                final. Înainte de a efectua orice proceduri de estetică dentară, este important de reținut că dinții
                naturali ai pacienților trebuie să fie sănătoși, eventualele probleme acute sau cronice rezolvate, iar
                structurile să fie rezistente, asigurând astfel succesul intervențiilor.
            </p>
        </div>
        <div class="text-left leading-10 mt-8 space-y-4">
            <h4 class="font-bold">Albire</h4>
            <p class="leading-6 mt-6">
                Albirea dinților este o metodă simplă, rapidă, sigură și fără durere de a obține un zâmbet mai alb. Mai mult, are costuri reduse iar rezultatele sunt vizibile imediat. În funcție de caz, pot fi necesare una sau două ședințe de albire în cabinet, astfel încât rezultatul final să fie un zâmbet strălucitor.
            </p>
            <p class="text-left leading-6">
                Înainte de a începe tratamentul de albire, este necesar un consult stomatologic, astfel încât medicul să se asigure că procedura poate fi efectuată cu succes și că nu există probleme ale dinților și gingiilor care pot afecta rezultatul.
            </p>
            <p class="text-left leading-6">
                În cazul pacienților cu retracție gingivală, este posibil ca zonele în care este expusă rădăcina dintelui să capete o nuanță galbenă pe care produsele pentru albire nu o vor putea scoate. În cazul cariilor, soluția pentru albire poate pătrunde în zonele afectate și poate ajunge până la structurile interne ale dintelui.
            </p>
            <p class="text-left leading-6">
                În cazul unei danturi care nu este sănătoasă, tratamentul poate duce la sensibilizarea dinților. Tocmai de aceea este importantă o primă consultație pentru a determina dacă aceasta este soluția potrivită. Dacă nu, există și alte metode de a obține un zâmbet perfect.
            </p>
            <p class="text-left leading-6">
                Tratamentul de albire dentară nu este indicat femeilor însărcinate sau care alăptează, persoanelor sub 16 ani, celor cu dinți și gingii sensibile sau cu anumite alergii (vor fi discutate cu medicul), celor cu smalț erodat sau cu numeroase lucrări de protetică din ceramică (acestea din urmă nu vor fi afectate de soluția de albire și nu își vor schimba culoarea).
            </p>

        </div>
    </div>
    <div class="flex flex-col items-start 2xl:w-2/3">
        <div class="text-left leading-10 space-y-4 mt-8 sm:mt-0">
            <h4 class="font-bold">Fațete dentare</h4>

            <p class="text-left leading-6 mt-6">
                Fațetele dentare reprezintă o soluție pentru a avea un zâmbet perfect care arată natural! Ele sunt deosebite ca aspect, durabile în timp și pot nu doar să îți facă zâmbetul mai strălucitor, ci și să corecteze sau să ascundă mici imperfecțiuni (precum dinți ciobiți, spații între dinți, forme diferite alte dinților, ușoare anomalii de poziție).
            </p>
            <img src="{{ asset('images/dc-dental-fatete-dentare.jpg') }}" class="shadow-md rounded-md" alt="Fatete dentare">
            <p class="text-left leading-6">
                Fațetele dentare îți schimbă radical zâmbetul, și îți oferă mai multă încredere, sunt ușor de întreținut și reprezintă o soluție pe termen lung!! Tratamentul nu este invaziv, nu este dureros și nu durează mult.
            </p>
            <p class="text-left leading-6">
                Este important de menționat că fațetele dentare nu sunt aplicate pe molari, și nu pot înlocui dinți lipsă. Dinții pe care sunt aplicate trebuie să fie sănătoși, fără probleme cronice sau acute, iar eventualele probleme de sănătate orală vor trebui rezolvate înainte de a efectua tratamentul cu fațete dentare.
            </p>
        </div>
        <div class="text-left leading-10 mt-8 space-y-4">
            <h4 class="font-bold">Laser Epic X</h4>

            <p class="text-left leading-6 mt-6">
                Albirea cu laser reprezintă o soluție modernă și eficientă pentru a obține un zâmbet frumos!
            </p>

            <p class="text-left leading-6">
                Aceasta este cea mai recomandată metodă, deoarece are efecte pe termen lung, este sigură și non-invazivă! Tratamentul constă în aplicarea pe suprafața dinților a unui agent de albire care este activat cu ajutorul laserului.
            </p>

            <img src="{{ asset('images/dc-dental-laser-epicx.jpg') }}" class="shadow-md rounded-md" alt="Albire cu laser">

            <p class="text-left leading-6">
                Albirea dinților cu laser realizată într-o singură ședință de 20 de minute poate duce la o albire cu 4-6 nuanțe, mai rapid decât orice alt sistem. Această durată nu include și timpul pentru aplicarea barierei gingivale sau îndepărtarea ei.
            </p>
            <p class="text-left leading-6">
                Tratamentul de albire cu laser nu sensibiliează dinții (la alimente sau băuturi reci, calde sau dulci) și nici nu afectează negativ pulpa dinților sau gingia! Smalțul nu este afectat, astfel încât procedura poate fi repetată fără repercursiuni negative asupra dinților naturali!
            </p>
        </div>


    </div>
</div>
@endsection
