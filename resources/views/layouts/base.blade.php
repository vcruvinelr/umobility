<html>
    <head>
        <title>{{ __('main.title') }} - @yield('title')</title>
    </head>
    <body>
        
        <main class="">
            <div id="app">
            @section('sidebar')
            <navbar></navbar>
                @yield('content')
            </div>
        </main>

    
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

    </body>
</html>