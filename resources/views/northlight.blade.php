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
            /* background: black; */
            z-index: 1;
        }

        .section-2 {
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

        .key-features-description {
            font-weight: 100;
            font-size: 20px;
            color: rgba(255, 255, 255, 0.7);
        }

        .key-features-description strong {
            font-weight: 600;
            color: white;
        }

        .circle-container {
            width: 100px;
            height: 100px;
            position: relative;
            display: inline-block;
            /* margin: 10px; */
        }

        .progress-circle-svg {
            width: 100px;
            height: 100px;
        }

        .circle-label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            text-align: center;
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
                <video playsinline loop muted autoplay class="fullscreen-video">
                    <source src="{{ asset('video/Northlight-details.mp4') }}" type="video/mp4" />
                </video>
            </div>
        </div>

        <div class="northlight-banner-section section-3">
            @include('inc.northlight-features')
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="custom-container">
            <div class="row section-padding">
                <div class="col-12">
                    <h1 class="text-center mb-3">What Makes It Truly Different</h1>
                    {{-- <div class="col-12">
                        <p class="mb-0">Northlight is designed to be practical, dependable, and easy to live with. It brings together the essentials—performance, storage, flexibility, and power—in a way that makes sense for everyday use. From the processor to the battery, every part is thoughtfully chosen to help you stay connected, productive, and in control—whether at home, at work, or on the move. Built for simplicity, shaped by purpose, and ready to meet the demands of real life. No clutter, no distractions—just the features you need, when you need them.</p>
                    </div> --}}
                </div>
            </div>

            <div class="row bottom-padding-sm">
                <div class="col-lg-2 col-6">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_chip.png') }}" alt="battery" class="img-fluid">
                </div>

                <div class="col-lg-4 col-6">
                    <h4>Power You Can Count On</h4>
                    <p class="mb-3">Northlight is powered by a 2.0GHz quad-core MediaTek Helio A22, delivering stable and efficient performance for everyday tasks. Built on 12nm architecture and manufactured by TSMC, it runs cool and conserves power. </p>
                    <p>With Bluetooth 5, you get faster connections, longer range, and more data capacity—all built in.</p>
                </div>

                <div class="col-lg-2 col-4 d-flex flex-column align-items-center">
                    <div class="circle-container" data-target="50" data-label="2X<br>Speed"></div>
                    <h5>Faster Pairing</h5>
                    <p class="text-center">Connect to devices with 2× the speed</p>
                </div>

                <div class="col-lg-2 col-4 d-flex flex-column align-items-center">
                    <div class="circle-container" data-target="75" data-label="4X<br>Range"></div>
                    <h5>Stronger Signal</h5>
                    <p class="text-center">Stay linked with up to 4× the range</p>
                </div>

                <div class="col-lg-2 col-4 d-flex flex-column align-items-center">
                    <div class="circle-container" data-target="100" data-label="8X<br>Capacity"></div>
                    <h5>Faster Pairing</h5>
                    <p class="text-center">Broadcast to more devices with 8× the data</p>
                </div>
            </div>

            <div class="row bottom-padding-sm gx-xl-0 gx-lg-5">
                <div class="col-lg-7 d-flex align-items-center order-2 order-lg-1">
                    <div>
                        <p class="my-2 text-white">REPLACEABLE BATTERY</p>
                        <div class="key-features-description">Includes a <strong>2500mAh removable battery</strong> with <strong>tool-free latch</strong> for quick swaps. Easily replace degraded units to extend your device’s lifespan.</div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-end order-1 order-lg-2">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_battery.png') }}" alt="battery" style="max-width: 350px;">
                </div>
            </div>

            <div class="row bottom-padding-sm gx-xl-0 gx-lg-5">
                <div class="col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-start">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_dualSIM.png') }}" alt="dual SIM cards" style="max-width: 350px;">
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <p class="my-2 text-white">DUAL SIMs</p>
                        <div class="key-features-description">Supports <strong>Micro + Nano SIMs</strong> with <strong>simultaneous microSD</strong> use. Dual active lines with software switching—no slot-sharing or physical swaps.</div>
                    </div>
                </div>
            </div>

            <div class="row bottom-padding-sm gx-xl-0 gx-lg-5">
                <div class="col-lg-7 d-flex align-items-center order-2 order-lg-1">
                    <div>
                        <p class="my-2 text-white">microSD CARD</p>
                        <div class="position-relative">
                            <h3 id="counter">0</h3>
                            <h3 style="position: absolute; top: 0; left: 75px;">GB</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-end order-1 order-lg-2">
                    <div class="highlight-features-img-wrap">
                        <img src="{{ asset('img/northlight/Inova_spec_parts_microSD.png') }}" alt="microSD" style="max-width: 350px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('inc.northlight-spec')
@endsection

@push('scripts')
    <script>
        const radius = 45;
        const center = 50;
        const circumference = 2 * Math.PI * radius;
        const duration = 1500;

        function createCircle(container, target, label) {
            container.innerHTML = `
                <svg class="progress-circle-svg">
                    <circle cx="${center}" cy="${center}" r="${radius}" stroke="#282828" stroke-width="2" fill="none" />
                    <circle class="progress-circle" cx="${center}" cy="${center}" r="${radius}" stroke="#ffffff" stroke-width="2"
                    fill="none" stroke-linecap="round" transform="rotate(-90 ${center} ${center})"
                    stroke-dasharray="${2 * Math.PI * radius}" stroke-dashoffset="${2 * Math.PI * radius}" />
                </svg>
                <div class="circle-label">${label}</div>
                `;

            const circle = container.querySelector('.progress-circle');
            let startTime = null;

            function animate(timestamp) {
                if (!startTime) startTime = timestamp;
                const elapsed = timestamp - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const eased = progress * (2 - progress);
                const current = target * eased;

                const offset = circumference * (1 - current / 100);
                circle.style.strokeDashoffset = offset;

                if (progress < 1) {
                    requestAnimationFrame(animate);
                }
            }

            requestAnimationFrame(animate);
        }

        // Setup example
        document.querySelectorAll('.circle-container').forEach(container => {
            const target = parseInt(container.getAttribute('data-target'), 10);
            const label = container.getAttribute('data-label') || ''; // e.g., "HTML", "Skill A", etc.
            createCircle(container, target, label);
        });
    </script>


    <script>
        const container = document.querySelector('.northlight-banner-container');
        const features = document.querySelectorAll('.phone-banner-features');

        function updateFeaturePosition() {
            if (window.innerWidth <= 768) return;
            const viewportHeight = window.innerHeight;
            const containerHeight = container.offsetHeight;

            features.forEach(feature => {
                if (containerHeight > viewportHeight) {
                    feature.classList.add('position-fixed');
                } else {
                    feature.classList.remove('position-fixed');
                }
            });
        }

        function handleScroll() {
            if (window.innerWidth <= 768) return;
            const containerHeight = container.offsetHeight;

            if (window.scrollY > containerHeight) {
                features.forEach(feature => {
                    feature.classList.remove('position-fixed');
                });
            } else {
                updateFeaturePosition();
            }
        }

        function initFeatureBehavior() {
            if (window.innerWidth <= 768) {
                features.forEach(feature => {
                    feature.classList.remove('position-fixed');
                });
                return;
            }

            updateFeaturePosition();
            handleScroll();
        }

        window.addEventListener('DOMContentLoaded', initFeatureBehavior);
        window.addEventListener('resize', initFeatureBehavior);
        window.addEventListener('scroll', handleScroll);
    </script>
@endpush
