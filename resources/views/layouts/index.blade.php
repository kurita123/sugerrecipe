<!Doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
    .footer {font-size:30px; background-color:#3490dc; text-align:right; color:white; margin:-25px 0;}
    .example {position: relative;}
    .example img { width:100%; max-width:100%; height: auto;}
    header {width: 100%;padding: 15px 0;margin: 0 auto;text-align: center;}
    header .headline{font-size: 32px;}
    .nav-list {text-align: center;padding: 10px 0;margin: 0 auto;}
    .nav-list-item {list-style: none;display: inline-block;margin: 0 20px;}
    footer {width: 100%; height: 120px; text-align: center; padding: 50px 0;background-color: #00ff7f;}
    .footer-text {color: #fff;}
    .sidebar_fixed {position: sticky;top: 60px;}
    .sidebar_content {margin-bottom: 100px;}
    
    </style>

</head>
<body>
<!-- header -->
<header>
    <h1 class="headline">
        <a>糖質制限商品&レシピ集</a>
    </h1>
    <ul class="nav-list">
        <li class="nav-list-item">
        <a>Home</a>
        </li>
        <li class="nav-list-item">Recipe</li>
        <li class="nav-list-item">Suger</li>
        <li class="nav-list-item">
        <a href="{{ route('login') }}">Login</a></p>
        </li>
    </ul>
    </header>
    <div class="content">
        @yield('content')　
    </div>
    <!-- footer -->
    <footer>
        <p>© All rights reserved by sugerrecipe.</p>
    </footer>
</body>
</html>