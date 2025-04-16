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
        </div>
    </div>

    <div class="home-user-banner home-user-banner-1">
        <div class="container">
            <div class="home-banner-content">
                <h2>A Confident First Device for Young Minds</h2>
                <p>Long-lasting and easy to use, Northlight helps young minds explore technology safely - without overwhelming features</p>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-2">
        <div class="container d-flex justify-content-end">
            <div class="home-banner-content">
                <h2>A Reliable Solution for Modern Business Needs</h2>
                <p>Northlight helps manage business on the go with dual SIMs, secure data, and features designed to keep your operations smooth</p>
            </div>
        </div>
    </div>

    <div class="home-user-banner home-user-banner-3">
        <div class="container">
            <div class="home-banner-content">
                <h2>Simple Features That Help Seniors Stay Close</h2>
                <p>Easy to hold, hear, and understand—Northlight helps seniors stay connected with loved ones and manage everyday tasks.</p>
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
        <div class="container">
            <div class="row section-padding gy-xl-0 gy-4">
                <div class="col-xl-3 col-sm-6">
                    <h3>Add-Ons That Keep You Going</h3>
                    <p class="pt-5">Extend what your phone can do with add-ons made for performance. From power to storage, our swappable batteries, battery chargers, and microSD cards keep you ready for whatever the day demands.</p>
                    <a class="button button--filled" href="" target="_self">
                        <span>Discover our products</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <img src="{{ asset('img/home/battery.jpg') }}" alt="battery" class="img-fluid">
                </div>

                <div class="col-xl-3 col-sm-6">
                    <img src="{{ asset('img/home/battery_charger.jpg') }}" alt="battery charger" class="img-fluid">
                </div>

                <div class="col-xl-3 col-sm-6">
                    <img src="{{ asset('img/home/microSD_card.jpg') }}" alt="microSD card" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
