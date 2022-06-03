@extends('front._layouts.app')

@section('content')
    <h1 class="invisible">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

    <article class="pt-12 pb-16">
        <div class="container mx-auto">
            <div class="lg:flex lg:flex-row lg:items-center">
                <div class="px-3 xl:pr-12 w-full lg:w-1/2">
                    <div class="max-w-xl md:mx-auto">
                        <h2 class="md:text-center lg:text-left">
                            {{ $page['nav_title'] }}
                        </h2>
                        <p class="mt-5 text-indigo-900 text-base md:text-lg font-normal opacity-75 max-w-xl md:text-center lg:text-left">{{ $page['tagline'] }}</p>
                    </div>
                </div>
                <div class="px-3 mt-5 w-full lg:w-1/2">
                    @if($page['video_id'])
                        <div class="relative mx-auto w-full rounded-lg shadow-lg">
                            <div class="relative block pb-wide shadow-md rounded-lg overflow-hidden">
                                <iframe width="560" height="315" frameborder="0" src="https://www.youtube.com/embed/{{$page['video_id']}}?iv_load_policy=3&amp;enablejsapi=0&amp;wmode=opaque&amp;feature=player_embedded&amp;autoplay=0&amp;loop=1&amp;controls=1&amp;modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;rel=0" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                    @else
                        <div class="block relative overflow-hidden lg:rounded-bl-quarter lg:rounded-tl-quarter pb-common">
                            <img src="{{ URL::to(asset('images/'. $page['cover_image']. '.jpg')) }}" alt="{{ $page['nav_title']}}" class="absolute max-w-none top-0 left-0 object-center {{ ($page['nav_title'] == 'Protetică') ? 'h-auto w-full' : 'h-full' }}">
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-8 lg:mt-12 xl:px-5">
                <div class="flex items-center justify-between px-5 lg:px-0">
                    <a href="/" class="block font-body text-sm md:text-xl text-indigo-400">DC Dental Clinic</a>
                    <div class="flex items-center">
                        <a href="{{ config('settings.social_media_facebook')}}" class="block text-indigo-400 hover:text-indigo-700 transform-colors duration-250 ease-in">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-8 h-6 md:h-8 fill-current" >
                                <title>Facebook</title>
                                <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/>
                            </svg>
                        </a>
                        <a href="{{ config('settings.social_media_youtube')}}" class="block ml-5 text-indigo-400 hover:text-indigo-700 transform-colors duration-250 ease-in">
                            <svg role="img" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 class="w-6 md:w-8 h-6 md:h-8 fill-current" >
                                <title>YouTube</title>
                                <path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/>
                            </svg>
                        </a>
                        <a href="{{ config('settings.social_media_instagram')}}" class="block ml-5 text-indigo-400 hover:text-indigo-700 transform-colors duration-250 ease-in">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                 class="w-6 md:w-8 h-6 md:h-8 fill-current">
                                <title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="border border-indigo-400 w-full mt-5"></div>
            </div>
        </div>

        <section class="px-3 md:px-5 xl:pl-5p pt-5 md:pt-12">
            <div class="container mx-auto">
                <div class="md:flex md:flex-wrap md:items-center">
                    <div class="w-full md:w-2/5">
                        <div class="block relative overflow-hidden pb-square">
                            <img src="{{asset('images/piezotome-cube-action.jpg')}}" alt="DC dental echipament" class=" min-w-full object-center">
                        </div>
                    </div>
                    <div class="mt-8 md:mt-0 w-full md:w-3/5">
                        <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75 leading-tight">Chirurgie orală ultrasonică, atraumatică,thenologie avansată</h3>
                        <p class="mt-5 text-xl font-light text-black leading-normal tracking-normal font-mono opacity-75">Aparatul de Piezosurgery  CUBE ACTEON este de ultima generatie, fiind practic cel mai performant instrument de acest gen la ora actuala.  Acesta foloseste microvibratiile ultrasonice,  pentru a sectiona structurile mineralizate, dure, fara a leza tesutul moale.</p>
                    </div>
                    <div class="w-full mt-5">
                        <p class="text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75"><span class="font-semibold text-indigo-900">Indicatii: </span>osteotomie, osteoplastie, extractia chirurgicala atraumatica, reglarizare  osoasa, sinus lift, chirurgie ortognatica.</p>
                        <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75"><span class="font-semibold text-indigo-900">Avantajele piezotomului:</span></p>
                        <ul class="mt-1 p-3 lg:px-3 lg:py-5 list-none xl:h-80 lg:grid lg:grid-rows-5 lg:grid-flow-col lg:gap-4 text-base bg-gray-200">
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3">Piezotome Cube îmbunătăţeşte semnificativ experienţa procedurilor chirurgicale osoase</span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3"> Performanţa impecabilă a echipamentului combinată cu expertiza clinică a specialistului deschid calea către tratamente osoase precise, mai rapide, atraumatice şi mai previzibile. </span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3"> Piezochirurgia produce rezultate remarcabile cu vindecare mai rapida, semnificativ mai puțină durere și mai puține complicații postoperatorii. </span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3">Precizie și conservarea a osului</span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3">Eficienta sporită comparativ cu instrumentarul clasic rotativ</span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3">Sângerare minimă</span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3">Nu afecteaă țesuturile moi (membrana sinusala, vase, nervi)</span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3"> Vindecare osoasă mult mai rapidă </span>
                            </li>
                            <li class="py-2 border-b border-gray-100 flex items-center leading-snug">
								<span class="w-6 h-6 flex items-center justify-center bg-indigo-500 rounded-full flex-shrink-0 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-3 h-3">
                                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
                                    </svg>
								</span>
                                <span class="ml-3"> Reduce durerea și edemul postchirurgical </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-3 md:px-5 xl:pl-5p pt-5 md:pt-12">
            <div class="mt-8 container mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-2/5">
                        <div class="block relative overflow-hidden pb-square">
                            <img src="{{asset('images/centrifuga.jpg')}}" alt="DC dental echipament" class="min-w-full object-center">
                        </div>
                    </div>
                    <div class="w-full md:w-3/5 md:pl-5 mt-8 md:mt-0">
                        <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75 leading-tight">Tehnologia PRP - PRF Vindecare accelerată</h3>
                        <p class="mt-5 text-xl font-light text-black leading-normal tracking-normal font-mono opacity-75">PRP, cunoscută și sub numele de Terapia Vampir, este o terapie revoluționară care utilizează ceea ce propriul organism oferă, în scopul vindecării și regenerării țesuturilor și anume plasma imbogățită în proteine și factori de creștere.</p>
                        <p class="mt-5 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75"><span class="font-semibold text-indigo-900">Metoda: </span>utilizând exclusiv sângele pacientului, în urma centrifugării acestuia, în doar cateva minute, se poate utiliza plasma bogată în factori de creștere care accelerează procesul de vindecare al zonei în care s-a intervenit chirurgical (implant dentar, sinus lift, adiție osoasă etc),</p>
                        <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75"><span class="font-semibold text-indigo-900">Avantaje:</span> scurtează considerabil vindecarea postoperatorie.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-3 md:px-5 xl:pl-5p mt-12 ">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h2 class="text-4xl lg:text-5xl text-indigo-900 font-mono opacity-75 md:text-center">Chirurgie orală</h2>
                        <p class="mt-5 text-xl font-light text-black leading-normal tracking-normal font-mono opacity-75 md:text-center max-w-4xl mx-auto ">Chirurgia orală este parte din chirurgia oro-maxilo-facială și implica urmatoarele tipuri de intervenții: extracții dentara laborioase, rezecția apicală, chistectomia, amputația radiculară, chirurgie parodontală, chirurgie plastică gingivală – microchirurgie, regularizarea de creastă osoasă, adiție de os in scop implantar.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-3 md:px-5 xl:pl-5p">
            <div class="container mx-auto">
                <div class="md:flex md:items-center border-b border-indigo-400 py-8 md:py-16">
                    <div class="w-full md:w-2/5">
                        <div class="block relative overflow-hidden">
                            <img src="{{asset('images/dc-dental-cabinet-14@sm.jpg')}}" alt="DC dental echipament" class=" min-w-full object-center rounded-md">
                        </div>
                    </div>
                    <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pl-8 lg:pl-12">
                        <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75">Extracția dentară - molarul de minte</h3>
                        <div class="mt-5">
                            <p class="text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">Extracția dentară este indicată în cazul dinților nerecuperabili prin metode reconstructive. Se indică protejarea cu atenție a osului in timpul extracției pentru a putea insera implant dentar în aceeași ședință sau ulterior.</p>
                            <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">Foarte frecvent molarii de minte nu au spațiu suficient să erupă pe arcadă și prin presiune creează înghesuiri dentare sau rămân incluși în os.</p>
                            <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75"><span class="font-semibold text-red-600">ATENȚIE! </span> Este indicat ca extracția molarilor de minte să fie efectată de medic chirurg oro-maxilo-facial, pentru a putea manageria corect protocolul operator și eventualele complicații.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-3 md:px-5 xl:pl-5p">
            <div class="container mx-auto">
                <div class="md:flex md:items-center  md:flex-row-reverse border-b border-indigo-400 py-8 md:py-16">
                    <div class="w-full md:w-2/5">
                        <div class="block relative overflow-hidden">
                            <img src="{{asset('images/dc-dental-cabinet-9@sm.jpg')}}" alt="DC dental echipament" class="relative min-w-full object-center rounded-md">
                        </div>
                    </div>
                    <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pr-8 lg:pr-12">
                        <div class="w-full">
                            <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75">Chirurgia parodontală</h3>
                            <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">Chirurgia parodontală are rol in regenerarea osoasă și tisulară cu scopul de a impiedica progresia bolii parodontale sau eradicarea acesteia.</p>
                            <p class="text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">De asemeni, înainte de intervenție se realizează obturația dintelui cu ajutorul microscopului.</p>
                        </div>
                        <div class="w-full mt-8">
                            <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75">Regularizarea creastei osoase</h3>
                            <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">Are ca scop conturarea crestelor osoase maxilare edentate, pentru a îndepărta eventuali spiculi ososi dureroși la palpare, atingere, sau în scopul aplicării și stabilizării protezelor dentare.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="px-3 md:px-5 xl:pl-5p">
            <div class="container mx-auto">
                <div class="md:flex md:items-center border-b border-indigo-400 py-8 md:py-16">
                    <div class="w-full md:w-2/5">
                        <div class="block relative overflow-hidden">
                            <img src="{{asset('images/dc-dental-cabinet-19@sm.jpg')}}" alt="DC dental echipament" class="relative min-w-full object-center rounded-md">
                        </div>
                    </div>
                    <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pl-8 lg:pl-12">
                        <div class="w-full">
                            <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75">Rezecția apicală</h3>
                            <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">Rezecția apicală este o intervenție chirurgicală prin care se indepartează vârful afectat al unei rădăcini sau cel mult 1\3 din acesta împreună cu chistul periapical, scopul fiind păstrarea dintelui pe arcadă.</p>
                            <p class="text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">De asemenea, înainte de intervenție se realizează obturația dintelui cu ajutorul microscopului.</p>
                        </div>
                        <div class="w-full mt-5">
                            <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75">Chistectomia</h3>
                            <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">Reprezintă extirparea chirurgicală a chisturilor cu origine dentară sau nu, localizate în interiorul oaselor maxilare.</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <section class="px-3 md:px-5 xl:pl-5p">
            <div class="container mx-auto">
                <div class="md:flex md:flex-row-reverse md:items-center pt-8 md:pt-16 ">
                    <div class="w-full md:w-2/5">
                        <div class="block relative overflow-hidden">
                            <img src="{{asset('images/dc-dental-cabinet-26@sm.jpg')}}" alt="DC dental echipament" class="block relative min-w-full object-center rounded-md">
                        </div>
                    </div>
                    <div class="mt-8 md:mt-0 w-full md:w-3/5 md:pr-8 lg:pr-12">
                        <div class="w-full">
                            <h3 class="text-2xl lg:text-3xl text-indigo-900 font-mono opacity-75">Microchirurgie</h3>
                            <p class="mt-3 text-lg font-light text-black leading-normal tracking-normal font-mono opacity-75">La Clinica DC dental unele intervenții se realizează cu ajutorul microscopului si a microinstrumentarlui, cu scopul de a spori precizia actului terapetic.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <section class="relative pt-12 bg-gray-100">
        <div class="xl:w-5/6 mx-auto">
            <div class="md:flex md:flex-row-reverse md:justify-center md:items-center">
                <div class="px-5 w-full md:w-1/2">
                    <img src="{{asset('images/doctor.png')}}" alt="Dr. Drochioi Cristian - prezentare implant" aspect_ratio="pb-common">
                </div>
                <div class="mt-10 md:mt-0 px-5 w-full md:w-1/2 text-center xl:text-left">
                    <h2 class="tracking-normal">Centru de implantologie <br>DC dental</h2>
                    <p class="mt-6 text-indigo-400 text-lg leading-normal font-normal max-w-xl mr-auto">Centru de implantologie DC dental este cea mai modernă clinică de stomatologica din Moldova. Specializată în servicii de implantologie avansată, chirurgie orală și maxilo-facială, <span class="font-bold text-indigo-700">Clinica DC dental</span> oferă tratamente la cele mai înalte standarde, într-un ambient plăcut, steril, dotat cu echipamente de ultimă generatie.</p>
                    <div class="mt-8">
                        <a href="/programari" title="{{config('settings.site_name')}} Programari" class="inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-full uppercase md:tracking-wide hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white">programează o consultație</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
