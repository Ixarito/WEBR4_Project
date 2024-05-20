<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- navbar css -->
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <!-- global css -->
    <link rel="stylesheet" href="{{asset('css/global.css')}}">

    @yield('style')

    <!-- footer css -->
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <nav class="navbar">
        <div class="logo">
            <a href="/">
                ParkReference
            </a>
        </div>
        <div class="hamburger-menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
            </svg>
        </div>
        <!-- desktop -->
        <div class="nav-menu">
            <a href="#" class="current-page-menu">Home</a>
            <a href="#">Career</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </nav>
    <!-- mobile -->
    <div class="nav-menu-mobile">
        <a href="#">Home</a>
        <a href="#">Career</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
</header>

<main>
    @yield('content')
</main>

<div class="footer">
    <div class="footer-logo">
        <a href="/">
            ParkReference - WERBR4
        </a>
    </div>
    <div class="footer-text">
        <p>
            © 2024 Angielczyk Marcel. Tous droits réservés.
        </p>
    </div>
</div>

@yield('script')
<script src="{{asset('js/navbar.js')}}"></script>
</body>
</html>
