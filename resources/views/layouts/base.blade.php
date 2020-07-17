<html>
    <head>
        <title>{{ __('main.title') }} - @yield('title')</title>
    </head>
    <body>
        
        <main class="">
            <div id="app">
            <navbar></navbar>
            </div>
            @section('sidebar')
            @yield('content')
        </main>

    <footer>
    Teste
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vue-i18n-locales.generated.js') }}"></script>
    @stack('scripts')

    </body>
</html>

