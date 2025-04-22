@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom-container.css') }}">
@endpush

@section('content')
    <div class="bg-black text-white">
        <div class="home-banner-container">
            {{-- <img class="home-banner" src="{{ asset('img/home/banner_home.jpg') }}" alt="Banner"> --}}
            <video src="{{ asset('video/INOVA.mp4') }}" autoplay muted data-wf-ignore="true" class="img-fluid"></video>
        </div>

        <div class="container raised-section">
            <h1 class="mb-5 text-center">More Features,<br>Less Cost.</h1>

            <div class="row pt-3 text-center gx-lg-5 bottom-padding">
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_accessible.svg') }}" alt="accessibility" class="values-icon">
                    <h4 class="pt-2">Essentials without the Premium Price Tag</h4>
                    <p class="mb-0">We believe useful everyday tech shouldn’t be out of reach. That’s why we focus on what matters—and price it fairly for everyday people.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_simplicity.svg') }}" alt="simplicity" class="values-icon">
                    <h4 class="pt-2">Replace Your Battery, Not Your Entire Phone</h4>
                    <p class="mb-0">We design for longevity, not landfill. Our phones let you easily and quickly swap batteries anytime, so they last longer and waste less.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_community.svg') }}" alt="community" class="values-icon">
                    <h4 class="pt-2">Two Number, More Storage, One Phone</h4>
                    <p class="mb-0">Life isn’t one-size-fits-all. That’s why we make space for both your work and personal life—plus extra room to grow when needed.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-1">
        <img src="{{ asset('img/home/inova_phone_teenage.jpg') }}" alt="Teen Device" class="banner-bg-img">
        <div class="container-fluid">
            <div class="home-banner-content ms-sm-5">
                <h2>A First Phone with All the Right Features</h2>
                <p>Affordable and simple, Northlight offers the must-have features for young users learning responsibility—without the clutter.</p>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-2">
        <img src="{{ asset('img/home/inova_phone_senior.jpg') }}" alt="Senior Device" class="banner-bg-img">
        <div class="container-fluid d-flex justify-content-end">
            <div class="home-banner-content me-sm-5">
                <h2>Easy to Hear. Easy to Hold. Easy to Love.</h2>
                <p>Northlight keeps seniors confidently connected with loud audio, easy grip, clear visuals, and everyday features they actually use.</p>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-3">
        <img src="{{ asset('img/home/inova_phone_business.jpg') }}" alt="Business Device" class="banner-bg-img">
        <div class="container-fluid">
            <div class="home-banner-content ms-sm-5">
                <h2>Store Business Data Safely, Without the Cloud</h2>
                <p>Keep business files safe with local microSD storage—no risky cloud access. With dual SIM and long battery life, it's made for work.</p>
            </div>
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="container">
            <div class="row section-padding">
                <div class="col-lg-7">
                    <h2>Technology That Serves People, Not Just Performance</h2>
                </div>

                <div class="col-lg-5 border-start-lg ps-lg-5">
                    <p>INOVA creates devices with a clear purpose - empowering you with the tools to stay connected, get things done, and enjoy the moments that matter the most.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="home-banner-5">
        <img src="{{ asset('img/home/banner_northlight.png') }}" alt="northlight" class="w-100">
    </div>

    <div class="bg-black text-white">
        <div class="custom-container">
            <div class="row section-padding gx-xl-5 gy-xxl-0 gy-4">
                <div class="col-xxl-5 col-xl-6 d-flex flex-column">
                    <h4>Helpful Extras to Keep You Ready and Running</h4>
                    <div class="mt-auto">
                        <p class="pt-3">Extend what your phone can do with add-ons made for performance. From power to storage, our swappable batteries, battery chargers, and microSD cards keep you ready for everyday.</p>
                        <a class="button button--filled" href="" target="_self">
                            <span>Discover our products</span>
                            <i class="fa-solid fa-caret-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-6">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('img/home/inova_accessory_battery.jpg') }}" alt="inova accessory battery" class="img-fluid">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('img/home/inova_accessory_charger.jpg') }}" alt="inova accessory charger" class="img-fluid">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('img/home/inova_accessory_microSDcard.jpg') }}" alt="inova accessory microSD card" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        window.addEventListener('scroll', function() {
            const banners = document.querySelectorAll('.home-user-banner');
            banners.forEach(banner => {
                const img = banner.querySelector('.banner-bg-img');
                const rect = banner.getBoundingClientRect();

                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    const scrollPos = window.scrollY;
                    const offset = banner.offsetTop;
                    const yPos = (scrollPos - offset) * 0.02;
                    img.style.transform = `translateY(${yPos}px)`;
                }
            });
        });
    </script>
@endpush
