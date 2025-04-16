@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@section('content')
    <div class="home-banner-container">
        <img class="home-banner" src="{{ asset('img/home/banner_home.jpg') }}" alt="Banner">
        <h1 class="mb-0 home-banner-container-text d-none d-xl-block">Building Bridges, Not Just Devices</h1>
    </div>

    <div class="bg-black text-white">
        <div class="container">
            <h1 class="mb-5 text-center d-block d-xl-none">Building Bridges, Not Just Devices</h1>

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

    <div class="home-banner-2">
        <div class="container">
            <div class="home-banner-content">
                <h2>Incredible sharpness of sound and perfect tune</h2>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
            </div>
        </div>
    </div>

    <div class="home-banner-3">
        <div class="container d-flex justify-content-end">
            <div class="home-banner-content">
                <h2>Incredible sharpness of sound and perfect tune</h2>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
            </div>
        </div>
    </div>

    <div class="home-banner-4">
        <div class="container">
            <div class="home-banner-content">
                <h2>Incredible sharpness of sound and perfect tune</h2>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
            </div>
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="container">
            <div class="row section-padding">
                <div class="col-lg-7">
                    <h2>Follow the digital trends & lead the changes with us</h2>
                </div>

                <div class="col-lg-5 border-start-lg ps-lg-5">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum dele niti atque corrupti quos dolores et quas molestias.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="home-banner-5">
        <img src="{{ asset('img/home/banner_northlight.png') }}" alt="northlight" class="w-100">
    </div>

    <div class="bg-black text-white">
        <div class="container">
            <div class="row section-padding gy-xl-0 gy-4">
                <div class="col-xl-3 col-sm-6">
                    <h3>Developing wired & wireless tech</h3>
                    <p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ip aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <img src="{{ asset('img/home/img_1.jpg') }}" alt="battery" class="img-fluid">
                </div>

                <div class="col-xl-3 col-sm-6">
                    <img src="{{ asset('img/home/img_2.jpg') }}" alt="battery charger" class="img-fluid">
                </div>

                <div class="col-xl-3 col-sm-6">
                    <img src="{{ asset('img/home/img_3.jpg') }}" alt="microSD Card" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection
