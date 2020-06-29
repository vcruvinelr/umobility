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

    
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

    </body>
</html>