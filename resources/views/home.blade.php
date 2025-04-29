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
            <h1 class="mb-5 text-center home-slogan">Essential Technology. <br>Exceptional Value.</h1>

            <div class="row pt-3 text-center gx-lg-5 bottom-padding">
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/inova_feature_1.svg') }}" alt="accessibility" style="width: 73px; margin-top: 6px;">
                    <h4 style="padding-top: 11px;">Replaceable Battery</h4>
                    <p class="mb-0" style="margin-top: 20px;">Power up in seconds. Swap batteries anytime and extend your phone’s life—no tools, no charge time, no need to replace the whole device.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/inova_feature_2.svg') }}" alt="simplicity" style="width: 80px;">
                    <h4 style="padding-top: 10px;">Dual SIM + MicroSD</h4>
                    <p class="mb-0" style="margin-top: 20px;">Experience dual SIM capabilities and expand your storage with microSD at the same time, fully control how you connect and store data</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/inova_feature_3.svg') }}" alt="community" style="width: 65px; margin-top: 13px;">
                    <h4 style="padding-top: 12px;">Reliable Chip</h4>
                    <p class="mb-0" style="margin-top: 20px;">Northlight runs on a reliable MediaTek chip made by TSMC— the trusted chipmaker behind many major tech brands in the industry.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-1">
        <img src="{{ asset('img/home/inova_phone_teenage.jpg') }}" alt="Teen Device" class="banner-bg-img">
        <div class="container-fluid">
            <div class="home-banner-content ms-sm-5">
                <h2>The Right Features-At The Right Price</h2>
                <p>Most phones are too complex and pricey or too limited. Northlight gives young users the just right features—at the just right price.</p>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-2">
        <img src="{{ asset('img/home/inova_phone_senior.jpg') }}" alt="Senior Device" class="banner-bg-img">
        <div class="container-fluid d-flex justify-content-end">
            <div class="home-banner-content me-sm-5">
                <h2>Bring Back the Features You Missed</h2>
                <p>Bringing back trusted features like headphone jacks and swappable batteries—so even seniors can easily pick it up.</p>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-3">
        <img src="{{ asset('img/home/inova_phone_business.jpg') }}" alt="Business Device" class="banner-bg-img">
        <div class="container-fluid">
            <div class="home-banner-content ms-sm-5">
                <h2>Your Device. Your Data. Your Choice.</h2>
                <p>Manage two numbers with Dual SIMs and secure files locally with microSD—your work, your data, protected and under your control.</p>
            </div>
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="container">
            <div class="row section-padding">
                <div class="col-lg-7">
                    <h2>It's Not About Less - It's About Enough</h2>
                </div>

                <div class="col-lg-5 border-start-lg ps-lg-5">
                    <p>We created Northlight for one reason: to cut through the noise. It’s built to do what matters—connect, last, and simplify life without unnecessary extras.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="home-banner-5">
        {{-- <img src="{{ asset('img/home/banner_northlight.png') }}" alt="northlight" class="w-100"> --}}
        @include('inc.northlight-banner')
    </div>

    <div class="bg-black text-white">
        <div class="custom-container">
            <div class="row section-padding gx-xl-5 gy-xxl-0 gy-4">
                <div class="col-xxl-5 col-xl-6 d-flex flex-column">
                    <h4>Simple Add-Ons That Make a Big Difference</h4>
                    <p class="pt-3">Don’t upgrade your phone—upgrade your setup. Swappable batteries, microSD cards, and fast chargers keep you powered, backed up, and in control.</p>
                    <div class="pt-4">
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
