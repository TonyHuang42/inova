@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom-container.css') }}">
    <style>
        .northlight-banner-section {
            height: 100vh;
            min-height: 900px;
            position: sticky;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .section-1 {
            background: black;
            z-index: 1;
        }

        .section-2 {
            /* background: #3498db; */
            z-index: 2;
        }

        .section-3 {
            background: #0B212C;
            z-index: 3;
        }

        .fullscreen-video {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            display: block;
        }
    </style>
@endpush

@section('content')
    <div style="position: relative; z-index: 0;">
        <div class="northlight-banner-section section-1">
            @include('inc.northlight-banner')
        </div>

        <div class="northlight-banner-section section-2">
            <div class="banner-video-container">
                <video playsinline loop muted autoplay data-wf-ignore="true" class="fullscreen-video">
                    <source src="https://cdn.vidzflow.com/v/iN7fAS3EUL_1080p_1697633777.mp4" type="video/mp4" />
                </video>
            </div>
        </div>


        <div class="northlight-banner-section section-3">
            @include('inc.northlight-features')
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="row section-padding">
                    <div class="col-12">
                        <div class="col-12">
                            <h1 class="fw-bold text-center mb-3">More Than a Phone</h1>
                        </div>
                        <div class="col-12">
                            <p class="mb-0">Northlight is designed to be practical, dependable, and easy to live with. It brings together the essentials—performance, storage, flexibility, and power—in a way that makes sense for everyday use. From the processor to the battery, every part is thoughtfully chosen to help you stay connected, productive, and in control—whether at home, at work, or on the move. Built for simplicity, shaped by purpose, and ready to meet the demands of real life. No clutter, no distractions—just the features you need, when you need them.</p>
                        </div>
                    </div>
                </div>
                <div class="row bottom-padding gx-md-5">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="highlight-features-img-wrap rounded-img">
                            <img src="{{ asset('img/northlight/Inova_spec_parts_chip.png') }}" alt="chip" class="img-fluid" style="max-height: 300px;">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <img src="{{ asset('img/northlight/icons/icons_memory.svg') }}" alt="Chip" class="support-icon">
                            <h3 class="my-2 theme-color">Reliable Chip</h3>
                            <p class="key-features-description">Northlight runs on the <strong>MediaTek Helio A22</strong>, a <strong>2.0GHz quad-core processor</strong> built on efficient <strong>12nm</strong> architecture for smooth and consistent performance. Whether messaging, streaming, or multitasking, it delivers dependable speed without overheating or battery drain. Manufactured by <strong>TSMC</strong>, the world’s leading chipmaker, it ensures <strong>stability, security</strong>, and everyday <strong>efficiency</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom-padding gx-md-5">
                    <div class="col-md-6 d-flex align-items-center order-2 order-md-1">
                        <div>
                            <img src="{{ asset('img/northlight/icons/icons_battery_swap.svg') }}" alt="Battery" class="support-icon">
                            <h3 class="my-2 theme-color">Replaceable Battery</h3>
                            <p class="key-features-description">Northlight features a <strong>2500mAh removable battery</strong> with a <strong>tool-free</strong> latch system, allowing fast swaps without a technician. Keep a spare charged and stay powered anytime, and when battery performance declines over time, just <strong>replace the unit</strong>—not the phone. This design supports long-term <strong>durability, reduces waste</strong>, and ensures you're always ready when charging isn’t possible.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center order-1 order-md-2">
                        <div class="highlight-features-img-wrap rounded-img">
                            <img src="{{ asset('img/northlight/Inova_spec_parts_battery.png') }}" alt="battery" class="img-fluid" style="max-height: 300px;">
                        </div>
                    </div>
                </div>

                <div class="row bottom-padding gx-md-5">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="highlight-features-img-wrap rounded-img">
                            <img src="{{ asset('img/northlight/Inova_spec_parts_dualSIM.png') }}" alt="dual SIM cards" class="img-fluid" style="max-height: 300px;">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <img src="{{ asset('img/northlight/icons/icons_dualsim.svg') }}" alt="Dual SIM" class="support-icon">
                            <h3 class="my-2 theme-color">Dual SIM</h3>
                            <p class="key-features-description">Northlight supports <strong>dual SIM</strong> functionality with dedicated <strong>Micro and Nano SIM slots</strong>, and unlike many alternatives, Northlight allows you to use a <strong>microSD card simultaneously</strong>—no trade-offs between storage and connectivity. Two numbers can stay active at once, with seamless switching in settings. It’s a reliable solution for <strong>managing lines, cutting costs</strong>, and keeping things simple.</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom-padding gx-md-5">
                    <div class="col-md-6 d-flex align-items-center order-2 order-md-1">
                        <div>
                            <img src="{{ asset('img/northlight/icons/icons_sd_card.svg') }}" alt="microSD" class="support-icon">
                            <h3 class="my-2 theme-color">microSD Card</h3>
                            <p class="key-features-description">With support for <strong>microSD cards up to 512GB</strong>, Northlight allows easy, cost-effective storage expansion. Keep photos, apps, and files <strong>securely stored</strong> on your device, with no need for cloud logins or subscriptions. Your data stays <strong>physically</strong> with you, offering greater <strong>privacy, control, and offline access</strong>—all through a simple plug-and-play setup that requires no configuration.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center order-1 order-md-2">
                        <div class="highlight-features-img-wrap rounded-img">
                            <img src="{{ asset('img/northlight/Inova_spec_parts_microSD.png') }}" alt="microSD" class="img-fluid" style="max-height: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
