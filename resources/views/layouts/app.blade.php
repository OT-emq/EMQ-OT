<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
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
<body>
    <nav class="no-print">
        @include('partials.header')
    </nav>
    <main class="flex justify-center items-center mt-10 mb-50">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>