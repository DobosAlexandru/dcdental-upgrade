@extends('front._layouts.base')

@section('head')
	@include('front._partials.meta')
@endsection

@section('app:before')
	@include('front._partials.outdated-browser')
@endsection

@section('app')

	@include('front._partials.header')

	@include('front._nav.menu-responsive')

    <main role="main" id="main-content" class="flex-auto w-full overflow-x-hidden">
        @yield('content')

        @include('front._partials.footer')
    </main>



@endsection
