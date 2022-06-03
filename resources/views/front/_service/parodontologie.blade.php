@extends('front._layouts.service')

@section('article-tagline')
<p>
    Parodontita este o boala care duce, in timp, la pierderea dintilor. Apare chiar si la persoanele tinere, iar daca nu
    este tinuta sub control, produce efecte dezastruoase. Studiile arata ca exista sanse ca aceasta sa fie ereditara.
    Asadar, daca ai in familie un astfel de istoric medical, esti mult mai expus acestei probleme dentare. Exista, insa,
    mai multi factori care duc la declansarea ei.
</p>
@endsection

@section('article')
<div class="px-4">
    <div class="grid md:grid-cols-2 gap-x-20">
        <div class="2xl:w-2/3">
            <img src="{{ asset('images/dcdental-imagine-parodontoza.jpg') }}" class="w-full rounded-lg"
                alt="Parodontologie">
        </div>
        <div class="2xl:w-2/3">
            <h3 class="font-bold mb-8">Simptome parodontită</h3>
            <ul class="pl-5 mt-8">
                <li class="list-disc">
                    Gingie umflată şi moale;
                </li>
                <li class="list-disc">
                    Gingie de culoare roşu aprins sau violet;
                </li>
                <li class="list-disc">
                    Gingie sensibilă la atingere;
                </li>
                <li class="list-disc">
                    Sângerări ale gingiilor;
                </li>
                <li class="list-disc">
                    Îndepărtarea gingiilor de dinţi, făcând dinţii să pară mai lungi decât în mod obişnuit;
                </li>
                <li class="list-disc">Noi spaţii se dezvoltă între dinţi;</li>
                <li class="list-disc">
                    Puroi adunat între dinte şi gingie;
                </li>
                <li class="list-disc">
                    Respiraţie urât mirositoare;
                </li>
                <li class="list-disc">
                    Pierderea dinţilor;
                </li>
                <li class="list-disc">
                    Durere la mestecat;
                </li>
                <li class="list-disc">
                    Modificarea modului în care dinţii se potrivesc atunci când muşcaţi;
                </li>
            </ul>
        </div>
    </div>
    <div class="grid md:grid-cols-2 gap-x-20 mt-12">
        <div class="2xl:w-2/3">
            <h3 class="leading-10 font-bold mb-8">Cum depistam boala parodontala?</h3>
            <div class="mt-8">
                <p>
                    Testele PCR pentru depistarea bacteriilor din parodontiu (gingie) prezintă o specificitate înaltă
                    pentru identificarea și stabilirea cantității lor relative. Testele sunt, de asemenea, mai sensibile
                    decât cultura bacteriană, deoarece identifică germenii după ADN, indiferent de viabilitatea acestora
                    .
                </p>
            </div>
            <div class="mt-12">
                <h3 class="leading-10 font-bold mb-8">Tratament boala parodontala</h3>
                <div class="mt-8 space-y-8">
                    <p>
                        Planul de tratament poate fi efectuat de către medicul stomatolog. Scopul tratamentului
                        parodontitei
                        este de a curăţa temeinic buzunarele create în jurul dinţilor şi de a preveni deteriorarea
                        osului.
                        Pentru ca tratamentul medical să aibă succes acesta trebuie complementat cu o rutină zilnică de
                        îngrijire orală şi oprirea din fumat (dacă este cazul).
                    </p>
                    <img src="{{ asset('images/paradontoza_tratament.jpg') }}" class="w-full rounded-lg"
                        alt="Parodontologie">
                </div>
            </div>
            <div class="mt-12">
                <h3 class="leading-10 font-bold mb-8">Tratament non-chirurgical parodontită</h3>
                <div class="mt-8 space-y-4">
                    <p>
                        Dacă parodontita nu este într-un stadiu avansat, tratamentul poate implica proceduri mai puţin
                        invazive, incluzând:
                    </p>
                    <ul class="pl-5">
                        <li class="list-disc">
                            <strong>Detartrajul</strong> îndepărtează tartrul şi bacteriile de pe suprafaţa dinţilor şi
                            sub gingie. Acesta poate fi realizat folosind instrumente, laser sau dispozitiv cu
                            ultrasunete.
                        </li>
                        <li class="list-disc">
                            <strong>Planarea radiculară</strong>. Netezeşte suprafeţele rădăcinilor, previne acumularea
                            continuă a tartrului şi bacteriilor; elimina produsul secundar bacterian care contribuie la
                            inflamarea şi întârzierea vindecării sau reataşarea gingiei pe suprafaţa dinţilor.
                        </li>
                        <li class="list-disc">
                            <strong>Antibiotice</strong>.Acestea pot ţine sub control infecţia bacteriană.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="2xl:w-2/3">
            <h3 class="font-bold mb-8">Cauze parodontită</h3>
            <div class="mt-8 space-y-4">
                <p>
                    În cele mai multe cazuri parodontita începe cu placa – o substanţă lipicioasă compusă majoritar din
                    bacterii. Dacă este lăsată netratată, iată cum poate avansa la stadiul de parodontită:
                </p>
                <p>
                    Placa se formează pe suprafaţa dinţilor iar periajul dinţilor de două ori pe zi cât şi folosirea
                    aţei dentare elimină placa, insa acesta reapare rapid.
                </p>
                <p>
                    Dacă nu este înlăturată periodic, placa se poate întări sub linia gingiei formând tartru. Tartrul
                    este mai greu de îndepărtat şi este plin cu bacterii. Daunele asupra gingiilor şi dinţilor sunt mai
                    mari cu cât placa şi tartrul rămân mai mult timp pe dinţi. Tartrul nu pote fi înlăturat prin periaj
                    sau folosind aţa dentară fiind nevoie de o curăţare profesională pentru a-l elimina.
                </p>
                <p>
                    Placa poate cauza gingivită, cea mai uşoară formă de boală parodontală. Gingivita reprezintă
                    iritarea şi inflamaţia părţii gingiei situată la baza dintelui. Gingivita poate fi înlăturată cu un
                    tratament profesional stomatologic şi o îngrijire orală atentă. Inflamaţia continuă a gingiilor
                    poate provoca parodontită, cauzând apariţia unor “buzunare” între gingie şi dinte, acesta
                    umplându-se cu placă, tartru şi bacterii. În timp, aceste buzunare devin mai adânci, adăugându-se
                    noi bacterii. Netratată, această infecţie cauzează pierderea ţesutului şi a osului, şi în cele din
                    urmă pierderea dinţilor afectaţi.
                </p>
            </div>
            <div class="mt-12">
                <h3 class="leading-10 font-bold mb-8">Tratamente chirurgicale parodontită.</h3>
                <div class="mt-8 space-y-4">
                    <p>
                        Dacă suferiţi de parodontită în stadiu avansat, tratamentul poate necesita o intervenţie
                        chirurgicală dentară, cum ar fi:
                    </p>
                    <ul class="pl-5">
                        <li class="list-disc">
                            <strong>Reducerea pungilor parodontale.</strong> Stomatologul va efectua mici incizii în
                            gingie, astfel încât o secţiune din gingie poate fi ridicată, expunând rădăcinile pentru ca
                            acestea să poată fi curăţate eficient. Deoarece parodontita provoacă deseori pierdere
                            osoasa, osul de bază poate fi reconturat înainte ca ţesutul gingival să fie cusut la loc.
                            După vindecare va fi mai uşor să curăţaţi aceste zone şi să menţineţi gingiile sănătoase.
                        </li>
                        <li class="list-disc">
                            <strong>Grafe cu ţesut moale.</strong>Când gingia este afectată, aceasta se îndepărtează de
                            dinte, stomatologul putând lua decizia de a întări o parte din ţesutul afectat. Acest lucru
                            se efectuează prin îndepărtarea unei cantităţi mici de ţesut de pe acoperişul gurii şi
                            ataşarea acesteia la locul afectat. Acest lucru poate opri retragerea gingiilor, acoperind
                            rădăcinile expuse şi redând dinţilor un aspect plăcut.
                        </li>
                        <li class="list-disc">
                            <strong>Adiţie osoasă.</strong>Această procedură este efectuată atunci când parodontita a
                            distrus osul din jurul rădăcinii dintelui. Pentru reconstrucţia dintelui se vor folosi grefe
                            ce pot fi compuse din mici fragmente din propriul os sau material sintetic. Graftul osos
                            ajută la prevenirea pierderii dinţilor prin menţinerea acestora în poziţie. De asemenea,
                            serveşte ca o platformă pentru regenerarea osului natural.
                        </li>
                        <li class="list-disc">
                            <strong>Regenerarea ţesutului. </strong>Medicul stomatolog va implanta o piesă specială,
                            formată dintr-o ţesătură biocompatibilă între osul existent şi dinte. Materialul va
                            impiedica ţesutul nedorit să intre în zona de vindecare, permiţând regenerarea osului
                            afectat.
                        </li>
                        <li class="list-disc">
                            <strong>Stimularea creşterii ţesuturilor prin proteine. </strong>O altă tehnică folosită
                            implică aplicarea unui gel special pe rădăcina dintelui afectat. Acest gel conţine aceleaşi
                            proteine găsite în dezvoltarea smalţului dinţilor şi stimulează creşterea osului şi a
                            ţesuturilor sănătoase.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('blog-post')
<div class="grid md:grid-cols-2 gap-x-10 items-center text-indigo-700 mb-8 py-4">
        <div class="flex flex-col items-center md:items-start space-y-8 px-2 md:px-0">
            <div class="">
                <h2 class="text-3xl font-body font-serif font-bold text-indigo-700">
                    Laser Epic X
                </h2>
                <p class="text-indigo-700 opacity-70 mt-4">
                    Odata cu avansarea si dezvoltarea stomatologiei moderne, uzul microscopului dentar in tratamentele de canal a devenit foarte important. Cu ajutorul lui practicianul poate identifica canale suplimentare si astfel sansele de reusita cresc considerabil.
                </p>
            </div>
            <div class="mt-4 pb-4">
                <a href="{{ route('blog.show', 'laser-epic-x') }}"
                    class="px-3 py-2 my-6 bg-indigo-700 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 gradient focus:outline-none focus:shadow-outline hover:scale-105">
                    Mai mult
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/dc-dental-laser-dioda.jpg')}}" class="w-full rounded-lg">
        </div>
    </div>
@endsection
