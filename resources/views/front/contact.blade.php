@extends('front._layouts.app')


@section('content')
	<h1 class="invisible">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>

	<section class="md:py-12">
		<div class="md:flex md:flex-row md:items-center text-center lg:text-left">
			<div class="mt-5 w-full md:w-1/2">
				<div class="block relative overflow-hidden pb-square xl:pb-common">
					<img src="{{asset('images/dc-dental-contact-dr-drochioi-cristian.jpg')}}" alt="{{ config('settings.site_name') }}" class="md:rounded-r-full">
				</div>
			</div>
			<div class="mt-8 md:mt-0 pb-8 md:pb-0 px-5 md:pr-12 lg:pr-container xl:pl-5p w-full md:w-1/2">
				<div class="max-w-xl">
					<h2>Contactează-ne</h2>
					<p class="mt-8 text-indigo-700 text-base 2xl:text-lg font-normal opacity-75">Clinicile Dc dental sunt situate în Iași și Botoșani. Dacă aveți întrebări, nelămuriri legate de programare, specializare, medici colaboratori sau alte subiecte, ne puteți trimite un e-mail la linkul de mai jos.</p>
					<div class="mt-6">
						<a href="mailto:office@dcdental.ro" title="{{config('settings.site_name')}} - Contact DC Dental" class="md:inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-indigo-700 border border-indigo-700 rounded-full uppercase md:tracking-wider hover:shadow bg-white hover:text-white hover:bg-indigo-700 transform-colors duration-200 ease-in">trimite mesaj</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('front._components.locatii')

@endsection
