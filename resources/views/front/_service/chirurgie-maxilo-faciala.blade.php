@extends('front._layouts.service')

@section('article')
<div class="mb-20 bg-gray-100 py-4">
    <div class="px-3 md:px-5 xl:pl-5p pt-5 md:pt-12">
        <div class="mx-auto">
            <div class="md:flex md:flex-wrap md:items-center">
                <div class="w-full md:w-2/5">
                    <div class="block relative overflow-hidden pb-square">
                        <img src="{{asset('images/piezotome-cube-action.jpg')}}" alt="DC dental echipament"
                            class=" min-w-full object-center">
                    </div>
                </div>
                <div class="mt-8 md:mt-0 w-full md:w-3/5">
                    <h4>Chirurgie orală ultrasonică, atraumatică,thenologie avansată</h4>
                    <p class="mt-5 leading-normal tracking-normal font-mono">Aparatul de Piezosurgery  CUBE ACTEON este
                        de ultima generatie, fiind practic cel mai performant instrument de acest gen la ora actuala.
                        Acesta foloseste microvibratiile ultrasonice, pentru a sectiona structurile mineralizate, dure,
                        fara a leza tesutul moale.</p>
                </div>
                <div class="w-full mt-5">
                    <p class="mt-5 leading-normal tracking-normal font-mono"><span class="font-semibold">Indicatii:
                        </span>osteotomie, osteoplastie, extractia chirurgicala atraumatica, reglarizare osoasa, sinus
                        lift, chirurgie ortognatica.</p>
                    <p class="mt-3 leading-normal tracking-normal font-mono"><span class="font-semibold">Avantajele
                            piezotomului:</span></p>
                    <ul class="mt-1 p-3 lg:px-3 lg:py-5 list-none xl:h-80 lg:grid lg:grid-cols-2 bg-gray-200">
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3">Piezotome Cube îmbunătăţeşte semnificativ experienţa procedurilor
                                chirurgicale osoase</span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3"> Performanţa impecabilă a echipamentului combinată cu expertiza clinică a
                                specialistului deschid calea către tratamente osoase precise, mai rapide, atraumatice şi
                                mai previzibile. </span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3"> Piezochirurgia produce rezultate remarcabile cu vindecare mai rapida,
                                semnificativ mai puțină durere și mai puține complicații postoperatorii. </span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3">Precizie și conservarea a osului</span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3">Eficienta sporită comparativ cu instrumentarul clasic rotativ</span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3">Sângerare minimă</span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3">Nu afecteaă țesuturile moi (membrana sinusala, vase, nervi)</span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3"> Vindecare osoasă mult mai rapidă </span>
                        </li>
                        <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
                            <span
                                class="w-6 h-6 flex items-center justify-center bg-indigo-700 rounded-full flex-shrink-0 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="fill-current w-3 h-3">
                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                </svg>
                            </span>
                            <span class="ml-3"> Reduce durerea și edemul postchirurgical </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="px-3 md:px-5 xl:pl-5p pt-5 md:pt-12">
        <div class="mt-8 container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-2/5">
                    <div class="block relative overflow-hidden pb-square">
                        <img src="{{asset('images/centrifuga.jpg')}}" alt="DC dental echipament"
                            class="min-w-full object-center">
                    </div>
                </div>
                <div class="w-full md:w-3/5 md:pl-5 mt-8 md:mt-0">
                    <h4>Tehnologia PRP - PRF Vindecare accelerată</h4>
                    <p class="mt-3 leading-normal tracking-normal font-mono">PRP, cunoscută și sub numele de Terapia
                        Vampir,
                        este o terapie revoluționară care utilizează ceea ce propriul organism oferă, în scopul
                        vindecării și regenerării țesuturilor și anume plasma imbogățită în proteine și factori de
                        creștere.</p>
                    <p class="leading-normal tracking-normal font-mono"><span class="font-semibold">Metoda:
                        </span>utilizând exclusiv sângele pacientului, în urma centrifugării acestuia, în doar cateva
                        minute, se poate utiliza plasma bogată în factori de creștere care accelerează procesul de
                        vindecare al zonei în care s-a intervenit chirurgical (implant dentar, sinus lift, adiție osoasă
                        etc),</p>
                    <p class="leading-normal tracking-normal font-mono"><span class="font-semibold">Avantaje:</span>
                        scurtează considerabil vindecarea postoperatorie.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-3 md:px-5 xl:pl-5p mt-12 ">
        <div class="container mx-auto">
            <div class="flex flex-col items-center">
                <div class="w-full md:w-3/5">
                    <h4 class="font-serif md:text-center">Chirurgie orală</h4>
                    <p class="mt-5 leading-normal tracking-normal font-mono md:text-center max-w-4xl mx-auto ">Chirurgia
                        orală este parte din chirurgia oro-maxilo-facială și implica urmatoarele tipuri de intervenții:
                        extracții dentara laborioase, rezecția apicală, chistectomia, amputația radiculară, chirurgie
                        parodontală, chirurgie plastică gingivală – microchirurgie, regularizarea de creastă osoasă,
                        adiție de os in scop implantar.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-3 md:px-5 xl:pl-5p">
        <div class="container mx-auto">
            <div class="md:flex md:items-center border-b border-indigo-400 py-8 md:py-16">
                <div class="w-full md:w-2/5">
                    <div class="block relative overflow-hidden">
                        <img src="{{asset('images/dc-dental-cabinet-14@sm.jpg')}}" alt="DC dental echipament"
                            class=" min-w-full object-center rounded-md">
                    </div>
                </div>
                <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pl-8 lg:pl-12">
                    <h4>Extracția dentară - molarul de minte</h4>
                    <div class="mt-5">
                        <p class="leading-normal tracking-normal">Extracția dentară este indicată în cazul dinților
                            nerecuperabili prin metode reconstructive. Se indică protejarea cu atenție a osului in
                            timpul extracției pentru a putea insera implant dentar în aceeași ședință sau ulterior.</p>
                        <p class="mt-3 leading-normal tracking-normal">Foarte frecvent molarii de minte nu au spațiu
                            suficient să erupă pe arcadă și prin presiune creează înghesuiri dentare sau rămân incluși
                            în os.</p>
                        <p class="mt-3 leading-normal tracking-normal"><span class="font-semibold text-red-600">ATENȚIE!
                            </span> Este indicat ca extracția molarilor de minte să fie efectată de medic chirurg
                            oro-maxilo-facial, pentru a putea manageria corect protocolul operator și eventualele
                            complicații.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-3 md:px-5 xl:pl-5p">
        <div class="container mx-auto">
            <div class="md:flex md:items-center  md:flex-row-reverse border-b border-indigo-400 py-8 md:py-16">
                <div class="w-full md:w-2/5">
                    <div class="block relative overflow-hidden">
                        <img src="{{asset('images/dc-dental-cabinet-9@sm.jpg')}}" alt="DC dental echipament"
                            class="relative min-w-full object-center rounded-md">
                    </div>
                </div>
                <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pr-8 lg:pr-12">
                    <div class="w-full">
                        <h4>Chirurgia parodontală</h4>
                        <p class="mt-3 leading-normal tracking-normal font-mono ">Chirurgia parodontală are rol in
                            regenerarea osoasă și tisulară cu scopul de a impiedica progresia bolii parodontale sau
                            eradicarea acesteia.</p>
                        <p class="leading-normal tracking-normal font-mono ">De asemeni, înainte de intervenție se
                            realizează obturația dintelui cu ajutorul microscopului.</p>
                    </div>
                    <div class="w-full mt-8">
                        <h4>Regularizarea creastei osoase</h4>
                        <p class="mt-3 leading-normal tracking-normal font-mono ">Are ca scop conturarea crestelor
                            osoase maxilare edentate, pentru a îndepărta eventuali spiculi ososi dureroși la palpare,
                            atingere, sau în scopul aplicării și stabilizării protezelor dentare.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="px-3 md:px-5 xl:pl-5p">
        <div class="container mx-auto">
            <div class="md:flex md:items-center border-b border-indigo-400 py-8 md:py-16">
                <div class="w-full md:w-2/5">
                    <div class="block relative overflow-hidden">
                        <img src="{{asset('images/dc-dental-cabinet-19@sm.jpg')}}" alt="DC dental echipament"
                            class="relative min-w-full object-center rounded-md">
                    </div>
                </div>
                <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pl-8 lg:pl-12">
                    <div class="w-full">
                        <h4>Rezecția apicală</h4>
                        <p class="mt-3 leading-normal tracking-normal font-mono">Rezecția apicală este o intervenție
                            chirurgicală prin care se indepartează vârful afectat al unei rădăcini sau cel mult 1\3 din
                            acesta împreună cu chistul periapical, scopul fiind păstrarea dintelui pe arcadă.</p>
                        <p class="leading-normal tracking-normal font-mono">De asemenea, înainte de intervenție se
                            realizează obturația dintelui cu ajutorul microscopului.</p>
                    </div>
                    <div class="w-full mt-5">
                        <h4>Chistectomia</h4>
                        <p class="mt-3 leading-normal tracking-normal font-mono">Reprezintă extirparea chirurgicală a
                            chisturilor cu origine dentară sau nu, localizate în interiorul oaselor maxilare.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="px-3 md:px-5 xl:pl-5p">
        <div class="container mx-auto">
            <div class="md:flex md:flex-row-reverse md:items-center pt-8 md:pt-16 ">
                <div class="w-full md:w-2/5">
                    <div class="block relative overflow-hidden">
                        <img src="{{asset('images/dc-dental-cabinet-26@sm.jpg')}}" alt="DC dental echipament"
                            class="block relative min-w-full object-center rounded-md">
                    </div>
                </div>
                <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pr-8 lg:pr-12">
                    <div class="w-full">
                        <h4>Microchirurgie</h4>
                        <p class="mt-3 leading-normal tracking-normal font-mono">La Clinica DC dental unele intervenții
                            se realizează cu ajutorul microscopului si a microinstrumentarlui, cu scopul de a spori
                            precizia actului terapetic. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('blog-post')
<div class="mb-8 py-4">
    <div class="grid md:grid-cols-2 md:gap-x-10 md:items-center text-indigo-700">
        <div class="flex flex-col items-start px-4 md:px-0">
            <div class="py-2">
                <h2 class="text-3xl font-body font-serif font-bold text-indigo-700">
                    Laser Epic X
                </h2>
                <p class=" text-indigo-700 opacity-70 mt-4">
                    Odata cu avansarea si dezvoltarea stomatologiei moderne, uzul microscopului dentar in tratamentele
                    de
                    canal a devenit foarte important. Cu ajutorul lui practicianul poate identifica canale suplimentare
                    si
                    astfel sansele de reusita cresc considerabil.
                </p>
            </div>
            <div class="mt-4 pb-4">
                <a href="{{ route('blog.show', 'laser-epic-x') }}"
                    class="px-3 py-2 my-6 text-base bg-indigo-700 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 gradient focus:outline-none focus:shadow-outline hover:scale-105">
                    Mai mult
                </a>
            </div>
        </div>
        <div class="px-4 md:pr-0 w-full">
            <img src="{{ asset('images/dc-dental-laser-dioda.jpg')}}" class="w-full rounded-lg">
        </div>
    </div>
</div>
@endsection
