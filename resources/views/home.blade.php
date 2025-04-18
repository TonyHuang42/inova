@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@section('content')
    <div class="home-banner-container">
        <img class="home-banner" src="{{ asset('img/home/banner_home.png') }}" alt="Banner">
        <h2 class="mb-0 home-banner-container-text d-none d-lg-block">Building Bridges, Not Just Devices</h2>
    </div>

    <div class="philosophy">
        <div class="container">
            <h2 class="mb-5 text-center d-block d-lg-none">Building Bridges, Not Just Devices</h2>

            {{-- <a href="/about-us#purpose" class="text-white"> --}}
            <div class="row text-center gx-lg-5 bottom-padding">
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_accessible.svg') }}" alt="accessibility" class="values-icon">
                    <h3 class="pt-2">Accessibility</h3>
                    <p class="mb-0">We believe everyone deserves access to reliable technology. That’s why our products are built to welcome more people into a world of connection.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_simplicity.svg') }}" alt="simplicity" class="values-icon">
                    <h3 class="pt-2">Simplicity</h3>
                    <p class="mb-0">We design technology that works for you, not against you. Our devices are clear, comfortable, and easy to use—built to simplify life, not overwhelm it.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_community.svg') }}" alt="community" class="values-icon">
                    <h3 class="pt-2">Community</h3>
                    <p class="mb-0">INOVA products are designed to support more than individuals— we build tools that help people stay in touch, support each other, and grow together.</p>
                </div>
            </div>
            {{-- </a>
            <div class="row bottom-padding pt-5">
                <div class="col-12 text-center">
                    <a class="learn-more-button" href="/about-us">Learn More</a>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="container">
        <div class="section-padding">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <p class="mb-0">We started INOVA with a simple belief: technology should be accessible and bring people closer. Every product we create begins with that in mind. We don’t design to impress—we design to include, support, and connect. Our work is about giving people tools that feel natural and genuinely serve a purpose. Whether it’s a first phone or a daily companion, INOVA devices are made to grow with you—reliable, durable, and always grounded in human connection.</p>
                </div>
            </div>

            <div class="row top-padding">
                <h2 class="fw-bold">Designed for Real Life</h2>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('img/home/teen.jpg') }}" alt="teen" class="rounded-img home-user-img">
                    <h4 class="fw-bold theme-color mt-4">Built to Last for Young Users</h4>
                    <p>Designed for the long run, Northlight is simple to use, affordable to own, and made to grow with young users. With a replaceable battery and expandable storage, it stays reliable over time—without forcing an upgrade.</p>
                </div>

                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('img/home/business.jpg') }}" alt="business" class="rounded-img home-user-img">
                    <h4 class="fw-bold theme-color mt-4">Data-Secure for Business</h4>
                    <p>Keep sensitive data close with microSD storage that stays offline and in your control. While Dual SIM helps separate work and personal calls, and the replaceable battery ensures you're never caught off guard.</p>
                </div>

                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('img/home/senior.jpg') }}" alt="senior" class="rounded-img home-user-img">
                    <h4 class="fw-bold theme-color mt-4">Familiar & Easy for Seniors</h4>
                    <p>Northlight brings familiarity back. The replaceable battery and 3.5mm headphone jack feel intuitive and comfortable. Lightweight and easy to hold, with a clear interface—this is tech that supports, not frustrates.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-padding-sm pt-0">
            {{-- <div class="row bottom-padding-sm">
                <div class="col-12 col-md-8">
                    <h3 class="fw-bold">All in Our Products</h3>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end justify-content-end">
                    <a href="/northlight" class="underline-link">
                        Experience it now <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div> --}}

            <a href="/northlight">
                <img src="{{ asset('img/home/banner_northlight.png') }}" alt="Banner" class="rounded-img d-none d-md-block">
                <img src="{{ asset('img/home/banner_northlight_mobile.png') }}" alt="Banner" class="rounded-img d-md-none d-block">
            </a>

            {{-- <div class="row top-padding">
                <div class="col-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div> --}}

            {{-- <h3 class="fw-bold">Accessories</h3>

            <div class="slider home-slider-padding">
                <a href="/accessories">
                    <img src="{{ asset('img/accessories/battery.jpg') }}" alt="battery" class="rounded-img">
                    <div class="card-title">Battery</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/battery_charger.jpg') }}" alt="battery_charger" class="rounded-img">
                    <div class="card-title">Battery Charger</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/phone_case.jpg') }}" alt="phone_case" class="rounded-img">
                    <div class="card-title">Phone Case</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/microSD_card.jpg') }}" alt="microSD_card" class="rounded-img">
                    <div class="card-title">microSD Card</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/power_adapter.jpg') }}" alt="power_adapter" class="rounded-img">
                    <div class="card-title">Power Adapter</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/USB-C_cable.jpg') }}" alt="usb_cable" class="rounded-img">
                    <div class="card-title">USB-C Cable</div>
                </a>
            </div> --}}
        </div>
    </div>

    <div class="container">
        <div class="row bottom-padding-sm gx-lg-5">
            <div class="col-lg-9 mx-auto">
                <h2 class="text-center theme-color">Performance, Storage, Flexibility, and Power—All in One</h2>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_memory.svg') }}" alt="Chip" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">Reliable Chip</h4>
                        <p class="mb-0">The MediaTek chip powers a responsive, efficient experience—handling daily tasks with ease while conserving battery.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_battery_swap.svg') }}" alt="Battery" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">Replaceable Battery</h4>
                        <p class="mb-0">Out late or on the move? Just swap in a spare—no outlets, no waiting. Northlight stays powered when you need it most.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bottom-padding gx-lg-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_dualsim.svg') }}" alt="Dual SIM" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">Dual SIM</h4>
                        <p class="mb-0">Keep work and personal life organized, or use a travel SIM with ease. Two numbers, one device—managed simply in settings.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_sd_card.svg') }}" alt="microSD" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">microSD Card</h4>
                        <p class="mb-0">Need more space? Slide in a microSD card and store files right on your device—no cloud, no subscriptions, just peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-footer-bg section-padding">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-6">
                    <h2>Shaped by Values,<br>Made for Life</h2>
                </div>

                <div class="col-lg-6">
                    <p>Everything we build at INOVA comes back to one goal: making technology feel easier, more human, and more accessible. As we look ahead, we remain committed to removing barriers and creating thoughtful tools that support how people live, work, and stay connected—every single day.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
