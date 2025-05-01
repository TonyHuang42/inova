<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KINGSMAN')</title>
    <meta name="description" content="@yield('meta_description', 'KINGSMAN')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/favicon/favicon-16X16.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/logo/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('img/logo/favicon/android-chrome-512x512.png') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('styles')
    <style>
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: black;
            color: white;
            border: none;
            padding: 14px 20px;
            border-radius: 26px;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <header>
        <nav class="navbar navbar-expand-sm" data-bs-theme="dark">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand me-5 d-flex align-items-center gap-2" href="/">
                    <img src="{{ asset('img/logo/inova_logo.svg') }}" alt="logo" class="logo">
                    <img src="{{ asset('img/logo/iNova_workmark.svg') }}" alt="logo" class="inova">
                </a>
                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <!-- Navbar Content -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-start w-100 gap-0 column-gap-4">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                                @if (request()->is('/')) <i class="fa-solid fa-caret-right me-1"></i> @endif
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('northlight') ? 'active' : '' }}" href="/northlight">
                                @if (request()->is('northlight')) <i class="fa-solid fa-caret-right me-1"></i> @endif
                                Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('support') ? 'active' : '' }}" href="/support">
                                @if (request()->is('support')) <i class="fa-solid fa-caret-right me-1"></i> @endif
                                Support
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ request()->is('news') ? 'active' : '' }}" href="/news">
                                @if (request()->is('news')) <i class="fa-solid fa-caret-right me-1"></i> @endif
                                News
                            </a>
                        </li> --}}
                    </ul>                    
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <section class="footer">
        <div class="mt-auto" style="background-color: #232323;">
            <div class="container">
                <div class="copyright">
                    <p class="m-0">Copyright © <strong>INOVA DIGITAL SOLUTIONS INC.</strong> All Rights Reserved</p>
                    <div class="terms">
                        <a href="/terms-of-use">Terms of Use</a>
                        <a href="/privacy-policy">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <button id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script>
        const navbar = document.querySelector('.navbar');
    
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const maxScroll = 200; // Adjust how far it takes to become fully opaque
            const opacity = Math.min(scrollY / maxScroll, 1);
            navbar.style.backgroundColor = `rgba(0, 0, 0, ${opacity})`;
        });
    </script> --}}
    
    @stack('scripts')
    {{-- <script>
        // Show the button when the user scrolls down 20px from the top of the document
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("back-to-top").style.display = "block";
            } else {
                document.getElementById("back-to-top").style.display = "none";
            }
        }

        document.getElementById('back-to-top').addEventListener('click', function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
