<!DOCTYPE html>
<html lang="ro">
    <head>
        @yield('head')
    </head>

    <body>

        @yield('app:before')

        <div>
            @yield('app')
        </div>

        @section('app:after')
        @livewireScripts

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
        <script>
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                  "background": "#CBD5E0"
                },
                "button": {
                  "background": "#2e3680",
                  "text": "#ffffff"
                }
              },
              "theme": "classic",
              "content": {
                "message": "Acest site foloseste cookie-uri pentru a va asigura cea mai buna experienta web.",
                "dismiss": "Am inteles!",
                "link": "Mai multe detalii",
                "href": "https://dcdental.ro/termeni-si-conditii"
              }
            });
        </script>
        @stack('scripts')




    </body>
</html>
