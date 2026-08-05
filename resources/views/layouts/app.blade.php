<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/icono.png') }}" type="image/png">
    <title>
        @yield('title')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @media print{
            .no-print{
                display: none !important
            }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-b from-stone-50 to-emerald-100">
    <nav class="no-print sticky top-0">
        @include('partials.header')
    </nav>
    <main class="flex-1">
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    @stack('scripts')
</body>
</html>