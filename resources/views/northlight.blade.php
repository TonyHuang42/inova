@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom-container.css') }}">
    <style>
        .northlight-banner-section {
            /* height: 100vh; */
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
            /* height: 100vh; */
            min-height: 900px;
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
        <div class="row section-padding">
            <div class="col-12">
                <div class="col-12">
                    <h1 class="text-center mb-3">What Makes It Truly Different</h1>
                </div>
                {{-- <div class="col-12">
                    <p class="mb-0">Northlight is designed to be practical, dependable, and easy to live with. It brings together the essentials—performance, storage, flexibility, and power—in a way that makes sense for everyday use. From the processor to the battery, every part is thoughtfully chosen to help you stay connected, productive, and in control—whether at home, at work, or on the move. Built for simplicity, shaped by purpose, and ready to meet the demands of real life. No clutter, no distractions—just the features you need, when you need them.</p>
                </div> --}}
            </div>
        </div>
        <div class="row bottom-padding gx-xl-0 gx-lg-5">
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <div class="highlight-features-img-wrap">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_chip.png') }}" alt="chip" class="img-fluid">
                </div>
            </div>
            <div class="col-xxl-6 offset-xxl-2 col-xl-7 offset-xl-1 col-lg-8 d-flex align-items-center">
                <div>
                    <p class="my-2 theme-color">RELIABLE CHIP</p>
                    <h3 class="key-features-description">2.0GHz <strong>quad-core MediaTek Helio A22</strong>, built on <strong>12nm</strong> architecture, delivers stable, efficient performance. <strong>TSMC</strong> made for trusted quality.</h3>
                </div>
            </div>
        </div>

        <div class="row bottom-padding gx-xl-0 gx-lg-5">
            <div class="col-xxl-6 col-xl-7 col-lg-8 d-flex align-items-center order-2 order-lg-1">
                <div>
                    <p class="my-2 theme-color">REPLACEABLE BATTERY</p>
                    <h3 class="key-features-description">Includes a <strong>2500mAh removable battery</strong> with <strong>tool-free latch</strong> for quick swaps. Easily replace degraded units to extend your device’s lifespan.</h3>
                </div>
            </div>
            <div class="col-lg-4 offset-xxl-2 offset-xl-1 d-flex align-items-center justify-content-center order-1 order-lg-2">
                <div class="highlight-features-img-wrap">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_battery.png') }}" alt="battery" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="row bottom-padding gx-xl-0 gx-lg-5">
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <div class="highlight-features-img-wrap">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_dualSIM.png') }}" alt="dual SIM cards" class="img-fluid">
                </div>
            </div>
            <div class="col-xxl-6 offset-xxl-2 col-xl-7 offset-xl-1 col-lg-8 d-flex align-items-center">
                <div>
                    <p class="my-2 theme-color">DUAL SIMs</p>
                    <h3 class="key-features-description">Supports <strong>Micro + Nano SIMs</strong> with <strong>simultaneous microSD</strong> use. Dual active lines with software switching—no slot-sharing or physical swaps.</h3>
                </div>
            </div>
        </div>

        <div class="row bottom-padding gx-xl-0 gx-lg-5">
            <div class="col-xxl-6 col-xl-7 col-lg-8 d-flex align-items-center order-2 order-lg-1">
                <div>
                    <p class="my-2 theme-color">microSD CARD</p>
                    <h3 class="key-features-description">Expandable storage via <strong>microSD card up to 512GB</strong>. Plug-and-play support, no formatting needed. Data stored <strong>physically</strong>, not online.</h3>
                </div>
            </div>
            <div class="col-lg-4 offset-xxl-2 offset-xl-1 d-flex align-items-center justify-content-center order-1 order-lg-2">
                <div class="highlight-features-img-wrap">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_microSD.png') }}" alt="microSD" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    @include('inc.northlight-spec')
@endsection
