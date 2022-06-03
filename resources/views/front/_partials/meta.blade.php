<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ $page['title'] . ' | ' . config('settings.site_name') }}</title>

<link rel="home" href="">
<link rel="icon" type="image/png" href="{{asset('static/images/meta/favicon-32.png')}}">


<!-- Fonts -->
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


@livewireStyles


<!-- Scripts -->
<script>
    document.createElement( "picture" );
</script>
@stack('meta')
@stack('head-scripts')

@include('front._partials.tracking')


