<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Sukolilo</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<<<<<<< Updated upstream
=======
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
>>>>>>> Stashed changes
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>