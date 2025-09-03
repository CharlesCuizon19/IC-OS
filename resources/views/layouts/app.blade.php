<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js CDN for toggling menu -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="overflow-x-hidden">
    <x-header />
    <main>
        @yield('content')
    </main>
    <div>
        {{-- Event Model --}}
        @php
            $blogs_footer = \App\Models\blogs::orderBy('date_issued')->take(3)->get();
        @endphp

        <x-footer :blogs_footer="$blogs_footer" />
    </div>
</body>

</html>

<style>
    * {
        font-family: "Roboto", sans-serif;
    }
</style>

<script>
    AOS.init({
        duration: 1000, // animation duration in ms
        once: true // animation only happens once
    });
</script>
