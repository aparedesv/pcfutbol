<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('web.layouts.head')

    @if(isset($view) && view()->exists($view.'head'))

        @include($view.'head')

    @endif

</head>

<body class="bg-light">

    <div id="app">

        <main class="p-0 m-0">

            <div id="web">

                @yield('content')

            </div>

        </main>

        @if(isset($view) && view()->exists($view.'includes'))

            @include($view.'includes')

        @endif

    </div>

</body>

</html>
