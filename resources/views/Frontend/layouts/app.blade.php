<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Frontend.include.head')
    </head>
    <body>
        <div id="app">
            @include('Frontend.include.navbar')
            <div class="container">
                @yield('content')
            </div>
        </div>
        @include('Frontend.include.js')
    </body>
</html>