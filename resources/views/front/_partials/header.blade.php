<header class="shadow-lg-white px-7 sm:px-12 lg:px-container 2xl:px-60">
	<div class="mx-auto border-b border-gray-100 font-mono">
		<div class="flex items-center justify-center md:justify-between ">
			<div class="flex items-center">
				<div class="flex items-center">
					<p class="text-indigo-700 text-xs leading-snug font-semibold"><span class="hidden md:inline">Clinica </span>Iași: </p>
					<a href="tel:{{ config('settings.iasi_tel') }}" class="text-xs ml-1 py-2 text-indigo-700 leading-snug hover:text-indigo-400">{{ config('settings.iasi_tel') }}</a>
				</div>
				<span class="px-2 leading-none text-indigo-400 font-semibold"> | </span>
				<div class="flex items-center">
					<p class="text-indigo-700 text-xs leading-snug font-semibold"><span class="hidden md:inline">Clinica </span>Botoșani: </p>
					<a href="tel:{{ config('settings.botosani_tel') }}" class="text-xs ml-1 text-indigo-700 leading-snug hover:text-indigo-400">{{ config('settings.botosani_tel') }}</a>
				</div>
			</div>
			<div class="flex items-center">
				<a href="{{route('programari')}}" title="{{ env('APP_NAME') }} Programari" class=" hidden py-2 md:inline-flex text-xs font-mono px-6 leading-snug text-white uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:bg-indigo-400">programare</a>
			</div>
		</div>
	</div>
	<div class="relative mx-auto py-3 font-normal text-indigo-700">
		<div class="flex justify-between items-center">
			<a href="{{ route('home') }}" class="relative z-20 w-32 md:w-40 md:ml-0" title="DC dental">
				<img src="{{asset('static/images/branding/DCDental-LogoNEW-2022.svg')}}" alt="DC dental logo">
			</a>
			@include('front._nav.menu-toggle')
			@include('front._nav.menu')
		</div>
	</div>
</header>
