@extends('front._layouts.app')



@section('content')
<h1 class="invisible">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

@include('front._components.top-bar')

<section class="relative md:px-5 lg:px-container 2xl:px-60 overflow-hidden">
	<div class="hidden md:block absolute inset-0 z-10 h-full w-full">
		<div class="w-full h-full object-center grayscale-full bg-center bg-cover bg-repeat" style="background-image: url('../images/implant-bg.jpeg')"></div>
		<div class="absolute inset-0 bg-white opacity-75 z-20"></div>
	</div>
	<div class="relative z-30 py-12 lg:py-24">
		<div class="container px-3 mx-auto">
			<p class="text-base md:text-lg text-indigo-700 uppercase tracking-wide text-center">fast &amp; fixed</p>
			<h2 class="text-center">Extracţie, inserare implant dentar, protezare imediată
				<br> cu lucrare fixă într-o zi</h2>
			<div class="mt-12 flex items-center">
				<div class="w-full lg:w-4/5 relative">
					<div class="absolute w-full h-full bg-indigo-100 opacity-75 z-10 rounded-lg"></div>
					<div class="relative z-20 p-3 md:p-8 border-indigo-400 rounded-lg shadow-lg overflow-hidden">
						<div class="md:flex md:items-center">
							<div class="w-full md:w-3/5">
								<h3 class="font-bold block leading-tight">Ce este Fast &amp; Fixed ?</h3>
								<div class="mt-8">
									<p class="font-bold text-indigo-700 text-base 2xl:text-lg leading-relaxed tracking-wide">
										SKY fast & fixed - un tratament cu implanturi dentare eficiente, cu rezultate vizibile imediat, confirmate de mai mult de 20.000 de pacienți.
									</p>
									<p class="mt-1 text-indigo-700 text-base 2xl:text-lg leading-relaxed tracking-wide">
										Fast & Fixed reprezintă un concept-sistem nou-avansat de reabilitare dentara a dintilor pierduti sau afectati de boala parodontala cu ajutorul <span class="font-bold">dintilor ficsi pe implanturi</span>. În decursul unei singure zile pacienții primesc implanturi dentare și o lucrare provizorie fixă. Astfel se pot intoarce imediat la o viață socială normală și implicit la o viață de calitate.
									</p>
									<p class="mt-1 text-indigo-700 text-base 2xl:text-lg leading-relaxed tracking-wide">
										La <span class="font-bold">DC dental</span>, această tehnică modernă, revoluționară, este realizată de medici specializați în implantologie și chirurgie orală și maxilo-facială, dar și protetică dentară, echipă coordonată de <a href="/despre-noi" title="Despre DC dental" class="font-bold text-indigo-700 underline text-lg">dr. Drochioi Cristian.</a>
									</p>
								</div>
							</div>
							<div class="w-full md:w-2/5 mt-5 md:mt-0 md:pl-3">
								<img src="{{asset('images/fast-fixed.jpg')}}" alt="DC dental - fast & fixed"  class="block relative max-w-full md:ml-auto" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-5 md:mt-8 flex items-center">
				<div class="w-full lg:w-4/5 ml-auto relative">
					<div class="absolute w-full h-full bg-white opacity-75 z-10  rounded-lg"></div>
					<div class="relative z-20 p-3 md:p-8 border-indigo-400 rounded-lg shadow-lg">
						<h3 class="font-bold block leading-tight">Cine beneficiază de Fast &amp; Fixed?</h3>
						<div class="md:flex md:items-center">
							<div class="w-full md:w-3/5">
								<div class="mt-8">
									<p class="mt-1 text-indigo-700 2xl:text-lg leading-relaxed tracking-wide">
										Pacienții edentați, cei afectați de boala parodontală sau care prezintă dinși irecuperabili, pacienți care nu tolerează protezele mobile, care doresc revenirea la o viață normală fără teama generată de situațiile neplacute generate de proteza dentară mobilă și evident, doresc să beneficieze de un tratament optim, modern, rapid.</p>
									<p class="mt-1 text-indigo-700 2xl:text-lg leading-relaxed tracking-wide">
										De asemeni acest tratament este preferat de către pacienți cu viața socială activă, care ia contact cu publicul, nu neaparat în vârstă.</p>
								</div>
							</div>
							<div class="w-full mt-5 md:mt-0 md:w-2/5">
								<img src="{{asset('images/dc-dental-implant-24h.jpg')}}"  alt="DC dental - fast & fixed"
									 class="block relative rounded-md max-w-full md:ml-auto sm:pl-4" />
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="mt-8 flex items-center">
				<div class="w-full lg:w-4/5 relative">
					<div class="absolute w-full h-full bg-indigo-100 opacity-75 z-10 rounded-lg"></div>
					<div class="relative z-20 p-3 md:p-8 border-indigo-400 rounded-lg shadow-lg">
						<h3 class="font-bold block text-indigo-700 leading-tight">Cazuri rezolvate</h3>
						<p class="mt-3 md:mt-8 text-indigo-700 2xl:text-lg leading-relaxed tracking-wide">
							Rezolvăm o varietate mare de cazuri, de fiecare data cu dedicare și professionalism, astfel încât rezultatul final să fie mereu un zâmbet sănătos și frumos!
						</p>
                        <div class="md:flex md:items-center justify-center xl:items-end md:gap-x-8 mt-4 w-full">
							<div class="w-full mt-5 md:mt-0 md:w-2/5 md:pl-3">
								<img src="{{asset('images/dc-dental-cazuri-rezolvate-1.jpeg')}}"  alt="DC dental - fast & fixed"
									 class="block relative rounded-md max-w-full md:ml-auto" />
							</div>
                            <div class="w-full mt-5 md:mt-0 md:w-2/5 md:pl-3">
								<img src="{{asset('images/dc-dental-cazuri-rezolvate-2.jpeg')}}"  alt="DC dental - fast & fixed"
									 class="block relative rounded-md max-w-full md:ml-auto" />
							</div>

						</div>

					</div>
				</div>
			</div>
			<div class="mt-8 flex items-center">
				<div class="w-full lg:w-4/5 md:ml-auto relative">
					<div class="absolute w-full h-full bg-indigo-100 opacity-75 z-10 rounded-lg"></div>
					<div class="relative z-20 p-3 md:p-8 border-indigo-400 rounded-lg shadow-lg">
						<h3 class="font-bold block text-indigo-700 leading-tight">Cum decurge intervenția de Fast & Fixed?</h3>
						<div class="md:flex md:items-center xl:items-end">
							<div class="w-full md:w-3/5">
								<div class="mt-8">
									<p class="mt-1 text-indigo-700 2xl:text-lg leading-relaxed tracking-wide">
										La <span class="font-bold">DC dental</span>, Fast & Fixed se desfășoară în condiții de siguranță și confort sporit pentru pacient, intervenția chirurgicală fiind complet nedureroasă, utilizând anestezie loco-regională potențată cu ajutorul medicului specialist anestezist.
									</p>
								</div>
							</div>
							<div class="w-full mt-5 md:mt-0 md:w-2/5 md:pl-3">
								<img src="{{asset('images/dc-dental-fast-fixed-4.png')}}"  alt="DC dental - fast & fixed"
									 class="block relative max-w-full md:ml-auto" />
							</div>
						</div>
						<p class="mt-3 md:mt-1 text-indigo-700 2xl:text-lg leading-relaxed tracking-wide">
							<span class="font-bold">Metoda</span> implică inserarea unor <span class="font-bold">implanturi speciale</span>, drepte și angulate, care ocolesc formațiunile anatomice adiacente (sinusurile maxilare, nervul alveolar inferior, canalul mandibular) și beneficiază de oferta osoasă a pacientului: <span class="font-bold">6 la maxilar</span> și <span class="font-bold">4 la mandibulă </span>.
						</p>
						<p class="mt-1 text-indigo-700 2xl:text-lg leading-relaxed tracking-wide">
							Aceste implanturi speciale permit încărcarea protetică imediată, in aceeași zi printr-o <span class="font-bold">lucrare fixă</span>. Astfel, după numai 6-8 ore, pacientul poate pleca din clinica având o dantură fixă care reface perfect atât fizionomia, cât și funcționalitatea aparatului dentomaxilar.
						</p>
					</div>
				</div>
			</div>
			<div class="mt-8 flex items-center">
				<div class="w-full lg:w-4/5 md:mr-auto relative">
					<div class="absolute w-full h-full bg-white opacity-75 z-10  rounded-lg"></div>
					<div class="relative z-20 p-3 md:p-8 border-indigo-400 rounded-lg shadow-lg">
						<h3 class="font-bold block leading-tight">De ce Fast & Fixed ?</h3>
						<div class="md:flex items-center xl:items-end">
							<div class="w-full mx:w-1/2">
								<div class="mt-8">
									<p class="mt-1 text-indigo-700  2xl:text-lg leading-relaxed tracking-wide">
										Avantajul major al folosiri sistemului <span class="font-bold">fast & fixed </span> este că oferă posibilitatea de a oferi pacienţilor, într-o singură zi, dinţi ficşi cu care pot mânca, vorbi și zâmbi imediat după operaţie, reluându-și astfel viaţa socială într-un timp record.
									</p>
									<p class="mt-1 text-indigo-700  2xl:text-lg leading-relaxed tracking-wide">
										Procedurile de: <span class="font-bold">extracţie</span>, <span class="font-bold">implantare</span> şi <span class="font-bold">lucrare protetică fixă </span> se fac într-o singură intervenție pe parcursul unei singure zile.
									</p>
                                    <p class="mt-3 md:mt-1 text-indigo-700 2xl:text-lg leading-relaxed tracking-wide">
                                        <span class="font-bold">Avantaje</span>: pacienţii care îşi doresc o restaurare fixă fără a mai fi nevoiţi să suporte proceduri de aditie osoasa pentru ca presupun un timp de aşteptare mai îndelungat (4-9 luni) şi costuri suplimentare.
                                    </p>
								</div>
							</div>
							<div class="flex items-center w-full md:mt-0 md:w-1/2 md:pl-2 ">
								<img src="{{asset('images/dc-dental-implant-24h-2.jpg')}}"  alt="DC dental - fast & fixed"
									 class="block relative rounded-md max-w-full md:ml-auto" />
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="mx-auto 2xl:max-w-8xl px-2 md:px-12 lg:px-container 2xl:px-60 mb-12">
    <div class="md:grid grid-cols-2 gap-x-10">
        <img src="{{ asset('images/Dental-Ro-_-Second-edition.jpg') }}" class="w-auto mx-auto rounded-md shadow-md" alt="">
        <img src="{{ asset('images/star-bt-plata-in-6-rate.jpg') }}" class="w-auto mx-auto rounded-md shadow-md" alt="">
    </div>
</section>

<section class="relative py-8">
	<div class="max-w-3xl mx-auto">
		<div class="-mx-3 px-3 flex justify-between flex-wrap text-center">
			<div class="mt-3 px-3 lg:px-0 w-full md:w-1/3 flex items-center md:flex-col">
				@include('front._components.svg.smile', ['class' => 'mx-auto stroke-current text-indigo-700' ])

				<p class="max-w-48 mx-auto text-indigo-700 2xl:text-lg leading-snug font-normal">Zambet nou in 24 de ore, dara durere </p>
			</div>
			<div class="mt-3 px-3 lg:px-0 w-full md:w-1/3 flex flex-row-reverse items-center md:flex-col">
				@include('front._components.svg.lucrare_fixa', ['class' => 'mx-auto stroke-current text-indigo-700' ])

				<p class="max-w-48 mx-auto text-indigo-700 2xl:text-lg leading-snug font-normal">Se realizeaza lucrare fixa insurubata</p>
			</div>
			<div class="mt-3 px-3 lg:px-0 w-full md:w-1/3 flex items-center md:flex-col">
				@include('front._components.svg.zone_anatomice', ['class' => 'mx-auto stroke-current text-indigo-700' ])

				<p class="max-w-48 mx-auto text-indigo-700 2xl:text-lg leading-snug font-normal">Sunt evitate zone anatomice critice <span class="block text-base opacity-75">(nervul alveolar inferior, sinusul maxilar)</span> </p>
			</div>
			<div class="mt-3 px-3 lg:px-0 w-full md:w-1/3 flex flex-row-reverse items-center md:flex-col">
				@include('front._components.svg.same_day', ['class' => 'mx-auto stroke-current text-indigo-700' ])

				<p class="max-w-48 mx-auto text-indigo-700 2xl:text-lg leading-snug font-normal">Lucrare fixa in aceeasi zi cu implantul dentar</p>
			</div>
			<div class="mt-3 px-3 lg:px-0 w-full md:w-1/3 flex items-center md:flex-col">
				@include('front._components.svg.timp_redus', ['class' => 'mx-auto stroke-current text-indigo-700' ])

				<p class="max-w-48 mx-auto text-indigo-700 2xl:text-lg leading-snug font-normal">Timp redus de tratament</p>
			</div>
			<div class="mt-3 px-3 lg:px-0 w-full md:w-1/3 flex flex-row-reverse items-center md:flex-col">
				@include('front._components.svg.economie', ['class' => 'mx-auto stroke-current text-indigo-700' ])

				<p class="max-w-48 mx-auto text-indigo-700 2xl:text-lg leading-snug font-normal">Este o solutie economica <span class="block text-base opacity-75">(nu trebuie sinus lifting sau aditie de os)</span></p>
			</div>
		</div>
	</div>
</section>

<section class="shadow-md shadow">
	<div class="lg:grid lg:grid-cols-2">
		<div class="w-full">
			<img src="{{asset('images/dc-dental-implant24h-fast&fixed.jpeg')}}" alt="DC dental - imagine radiografie dentara" classes="h-full">
		</div>
		<div class="w-full bg-indigo-700">
			<div class="px-5 md:px-12 lg:pr-container 2xl:pr-60 py-3 2xl:py-5 h-full flex flex-col justify-center items-start 2xl:gap-y-4">
				<p class="text-white 2xl:text-lg leading-relaxed font-light tracking-wide text-center xl:text-left">
					In cazul implanturilor dentare clasice, ulterior inserarii implantului, urmeaza o perioada de vindecare, timp in care implantul se osteointegreaza, perioada cuprinsa intre 4 si 6 luni. Dupa aceasta perioada, medicul va atasa de implant un bont protetic si o coroana dentara.
				</p>
				<p class="mt-5 text-white 2xl:text-lg leading-relaxed font-light tracking-wide text-center xl:text-left">
					<span class="font-bold">Cu Fast & Fixed nu este nevoie de aceasta perioada</span>. In sistemul Fast & Fixed se utilizeaza implanturi drepte si implanturi angulate la 35 de grade, pe care se ataseaza lucrarea dentara, realizata in cateva ore de la inserarea implanturilor.
				</p>
				<div class="mt-5 2xl:mt-10 text-center mx-auto xl:mx-0">
					<a href="{{route('programari')}}" title="{{config('settings.site_name')}} Contact" class="inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-white border border-white rounded-full uppercase md:tracking-wide hover:shadow-white-md hover:bg-white hover:text-indigo-700">programeaza o consultație</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="relative pt-12 bg-gray-100">
	<div class="md:pl-12 lg:pl-container 2xl:pl-60">
		<div class="md:flex md:flex-row-reverse md:justify-center md:items-center">
			<div class="px-5 w-full md:w-1/2">
				<img src="{{asset('images/doctor.png')}}" alt="Dr. Drochioi Cristian - prezentare implant" aspect_ratio="pb-common">
			</div>
			<div class="mt-10 md:mt-0 pr-5 w-full md:w-1/2 text-center xl:text-left">
				<h2 class="tracking-normal">Centru de implantologie <br>DC dental</h2>
				<p class="mt-6 text-indigo-400 2xl:text-lg leading-normal font-normal max-w-xl mr-auto">Centru de implantologie DC dental este cea mai modernă clinică de stomatologica din Moldova. Specializată în servicii de implantologie avansată, chirurgie orală și maxilo-facială, <span class="font-bold text-indigo-700">Clinica DC dental</span> oferă tratamente la cele mai înalte standarde, într-un ambient plăcut, steril, dotat cu echipamente de ultimă generatie.</p>
				<div class="mt-8">
					<a href="{{route('contact')}}" title="{{ config('settings.site_name') }} Programare consultatie" class="inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-indigo-700 border border-indigo-700 rounded-full uppercase md:tracking-wide hover:shadow hover:bg-indigo-700 hover:text-white">contact</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
