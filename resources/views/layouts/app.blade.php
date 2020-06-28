<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="img/logos/Abodah1@1.5x.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
   
</head>
<body class="antialiased font-sans bg-gray-100">
    <div id="app">
        @include('components.header')
        <main>
            @yield('content')
        </main>
        @include('components.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
   <!--  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script> -->
  <!--  https://tailwindcomponents.com/component/coinbase-clone -->
 <!--  https://images.unsplash.com/photo-1540924633-a69d88e410de?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80 -->
</body>
</html>