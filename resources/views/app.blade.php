<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News App</title>

    <!-- preload head styles -->
    <link rel="preload" href="{{ asset('assets/css/unicons.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/css/swiper-bundle.min.css') }}" as="style">

    <!-- include uni-core components -->
    <link rel="stylesheet" href="{{ asset('assets/js/uni-core/css/uni-core.min.css') }}">

    <!-- include styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/unicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prettify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- include main style -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme/main.min.css') }}">
    
    
    @vite(['resources/js/app.js'])
</head>
<body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-white text-opacity-50 overflow-x-hidden">
    <div id="app"></div>
    
    <!-- Include assets JS -->
    <script src="{{ asset('assets/js/app-head-bs.js') }}"></script>
    <script src="{{ asset('assets/js/uni-core/js/uni-core-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/scrollmagic.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/anime.min.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/data-attr-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/swiper-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/anime-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/anime-helper-defined-timelines.js') }}"></script>
    <script src="{{ asset('assets/js/uikit-components-bs.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>

