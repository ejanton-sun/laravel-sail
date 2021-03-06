<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @if (app()->environment() == 'local')
          [{{app()->environment()}}]
        @endif
        {{ config('app.name') }} @yield('title')</title>

    <!-- Fonts -->
    @yield('links')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    @yield('styles')

</head>

<body class="antialiased">
    @yield('content')
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('scripts')
@include('sweetalert::alert')
</html>
