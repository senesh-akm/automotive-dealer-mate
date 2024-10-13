<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Automotive Dealer Mate')</title>

    <!-- Include CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Include JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
