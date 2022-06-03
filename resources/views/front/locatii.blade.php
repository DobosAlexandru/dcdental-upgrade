@extends('front._layouts.app')


@section('content')
	<h1 class="hidden">{{ $page['title'] ? $page['title'] : config('settings.site_name') }}</h1>
	<section class="md:py-12">
		<div class="">
			<div class="md:flex md:flex-row md:items-center">
				<div class="mt-5 w-full md:w-1/2">
					<div class="block relative overflow-hidden pb-square">
						<img src="{{asset('images/dc-dental-locatii-1.jpeg')}}" alt="{{ config('settings.site_name')  }}" class="h-auto rounded-lg md:rounded-l-none">
					</div>
				</div>
				<div class="mt-8 md:mt-0 pb-8 md:pb-0 pl-5 md:pr-12 lg:pr-container 2xl:pr-60 w-full md:w-1/2">
					<div class="max-w-xl md:text-right ">
						<h2 class="text-center md:text-right">
							Clinicile DC dental
						</h2>
						<p class="mt-5 text-indigo-700 text-base 2xl:text-lg font-normal opacity-75">Clinicile Dc dental sunt situate în Iași și Botoșani. Dacă aveți întrebări, nelămuriri legate de programare, specializare, medici colaboratori sau alte subiecte, ne puteți contacta folosind informatiile de mai jos.</p>
						<div class="mt-8">
							<a href="{{ route('locatii.iasi') }}"

								title="{{ config('settings.site_name')  }} Iasi"
								class="md:inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-white border border-indigo-700 rounded-full uppercase md:tracking-wider hover:shadow bg-indigo-700 hover:text-indigo-700 hover:bg-white">
								iasi
							</a>
							<a href="{{ route('locatii.botosani') }}"

								title="{{ config('settings.site_name')  }} Botosani"
								class="ml-3 md:inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug text-indigo-700 border border-indigo-700 rounded-full uppercase md:tracking-wider hover:shadow bg-white hover:text-white hover:bg-indigo-700">
								botosani
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('front._components.locatii')
@endsection
