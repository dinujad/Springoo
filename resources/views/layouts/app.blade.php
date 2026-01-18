<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ravi Jewellery</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #faf9f6; /* Off-white background */
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content will go here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
