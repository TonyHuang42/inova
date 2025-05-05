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
            /* transition: all 0.3s ease; */
        }

        .section-1 {
            z-index: 1;
        }

        .section-2 {
            z-index: 2;
            min-height: 900px;
        }

        .section-3 {
            background: #0B212C;
            z-index: 3;
        }

        .banner-video-container {
            position: relative;
            width: 100%;
            height: 900px;
            overflow: hidden;
        }

        .banner-video-slogan {
            font-family: "Bropotic", sans-serif;
            font-size: clamp(1rem, 3vw, 2rem);
            position: absolute;
            width: 100%;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1;

            background: linear-gradient(to right, #444, white, #444);
            background-size: 200% auto;
            animation: gradient-slide 5s linear infinite;

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            background-clip: text;
            color: transparent;
        }

        .fullscreen-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            transform: translate(-50%, -50%);
            object-fit: cover;
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
            width: 130px;
            height: 130px;
            position: relative;
            display: inline-block;
            /* margin: 10px; */
        }

        .progress-circle-svg {
            width: 130px;
            height: 130px;
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

        .circle-label-content .big {
            display: block;
            font-size: 40px;
            font-weight: 600;
            margin-top: -8px;
        }

        .circle-label-content .small {
            display: block;
            font-size: 16px;
            font-weight: 300;
            margin-top: -8px;
        }

        .progress-bar-wrapper {
            margin-bottom: 20px;
        }

        .progress-bar-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
            font-size: 18px;
            font-weight: 300;
        }

        .progress-bar-container {
            background-color: #282828;
            overflow: hidden;
            height: 2px;
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background-color: #fff;
            color: #fff;
            text-align: center;
            line-height: 24px;
            transition: width 1.5s ease;
        }

        @keyframes gradient-slide {
            0% {
                background-position: 100% 50%;
            }

            100% {
                background-position: -100% 50%;
            }
        }

        #microSD-counter {
            font-size: 64px;
            font-weight: 400;
        }

        .microSD-GB {
            position: absolute;
            bottom: 13px;
            left: 118px;
            font-size: 32px;
            font-weight: 400;
        }

        @media only screen and (max-width: 767px) {
            .section-1 {
                min-height: 700px;
            }
        }

        @media only screen and (min-width: 576px) {
            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 1030;
                transition: transform 0.3s ease-in-out;
            }

            .navbar.hidden {
                transform: translateY(-100%);
            }

            .navbar.visible {
                transform: translateY(0);
            }
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
                {{-- <div class="banner-video-slogan">FORM THAT FITS.<br>FEATURES THAT LAST.</div> --}}
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

            <div class="row bottom-padding">
                <div class="col-xl-2 col-sm-6 px-0 d-flex flex-column justify-content-center">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_chip.png') }}" alt="battery" class="img-fluid">
                </div>

                <div class="col-xl-4 col-sm-6 px-4 d-flex flex-column justify-content-center">
                    <h4>The Processor You Can Rely On</h4>
                    <p class="mb-3" style="font-size:15px;">Northlight is powered by a 2.0GHz quad-core MediaTek Helio A22, delivering stable and efficient performance for everyday tasks. Built on 12nm architecture and manufactured by TSMC, it runs cool and conserves power. With Bluetooth 5, you get faster connections, longer range, and more data capacity—all built in.</p>
                </div>

                <div class="col-xl-2 col-sm-4 d-flex flex-column align-items-center">
                    <div class="circle-container" data-target="20" data-label=
                    "<div class='circle-label-content'><span class='big'>2×</span><span class='small'>SPEED</span></div>"></div>
                    <h5 class="mt-3 text-center" style="font-size: 18px;">Faster Pairing</h5>
                    <p class="text-center">Connect to devices with 2× the speed</p>
                </div>

                <div class="col-xl-2 col-sm-4 d-flex flex-column align-items-center">
                    <div class="circle-container" data-target="40" data-label=
                    "<div class='circle-label-content'><span class='big'>4×</span><span class='small'>RANGE</span></div>"></div>
                    <h5 class="mt-3 text-center" style="font-size: 18px;">Stronger Signal</h5>
                    <p class="text-center">Stay linked with up to 4× the range</p>
                </div>

                <div class="col-xl-2 col-sm-4 d-flex flex-column align-items-center">
                    <div class="circle-container" data-target="80" data-label=
                    "<div class='circle-label-content'><span class='big'>8×</span><span class='small'>CAPACITY</span></div>"></div>
                    <h5 class="mt-3 text-center" style="font-size: 18px;">Better Sharing</h5>
                    <p class="text-center">Broadcast to more devices with 8× the data</p>
                </div>
            </div>

            {{-- MicroSD --}}
            <div class="row bottom-padding">
                <div class="col-xl-2 d-flex flex-column justify-content-center order-xl-0 order-2">
                    <p>up to</p>
                    <div class="position-relative" style="margin-top: -20px;">
                        <div id="microSD-counter">0</div>
                        <div class="microSD-GB">GB</div>
                    </div>
                </div>

                <div class="col-xl-8 col-sm-6 px-xl-4 d-flex flex-column justify-content-center order-sm-0 order-1">
                    <h4>Extra Space When You Need It</h4>
                    <p style="font-size:15px;">Add up to 512GB of extra space with a microSD card—no setup, no cloud, no hassle. Store photos, videos, and files directly on your device and expand only when you need to. Your data stays with you, fully under your control and safely offline—no logins, no subscriptions, and no forced upgrades.</p>
                </div>

                <div class="col-xl-2 col-sm-6 px-0 d-flex flex-column justify-content-center order-xl-2 order-sm-1 order-0">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_microSD_card.png') }}" alt="INOVA Dual SIM" class="img-fluid">
                </div>
            </div>

            {{-- Battery --}}
            <div class="row bottom-padding">
                <div class="col-xl-2 col-sm-6 px-0 d-flex flex-column justify-content-center">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_battery.png') }}" alt="battery" class="img-fluid">
                </div>

                <div class="col-xl-6 col-sm-6 px-4 d-flex flex-column justify-content-center">
                    <h4>Power That’s Easy to Replace</h4>
                    <p style="font-size:15px;">The removable battery swaps out in seconds with no tools needed, letting users easily replace their battery anytime. It offers enough capacity for everyday use, and the full device remains noticeably lighter than most modern phones—many of which push over 200g, making it easier to use without hand fatigue.</p>
                </div>

                <div class="col-xl-4 d-flex flex-column justify-content-between">
                    <div class="progress-bar-wrapper">
                        <div class="progress-bar-label">
                            <span>Capacity</span>
                            <span>2500mAh</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-target="95"></div>
                        </div>
                    </div>

                    <div class="progress-bar-wrapper">
                        <div class="progress-bar-label">
                            <span>Standby Time</span>
                            <span>87hr</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-target="87"></div>
                        </div>
                    </div>

                    <div class="progress-bar-wrapper">
                        <div class="progress-bar-label">
                            <span>Talking time</span>
                            <span>10hr</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-target="90"></div>
                        </div>
                    </div>

                    <div class="progress-bar-wrapper">
                        <div class="progress-bar-label">
                            <span>Device Weight</span>
                            <span>163g</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-target="16"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dual SIM --}}
            <div class="row bottom-padding">
                <div class="col-xl-2 d-xl-flex flex-column justify-content-center order-xl-0 order-2 d-none">
                    <img src="{{ asset('img/northlight/Inova_dual.svg') }}" alt="INOVA Northlight Dual SIM" style="width: 80%;">
                </div>

                <div class="col-xl-8 col-sm-6 px-xl-4 d-flex flex-column justify-content-center order-sm-0 order-1">
                    <h4>Dual SIMs. Zero Compromises.</h4>
                    <p style="font-size:15px;">With dual SIM support, you can use two phone numbers on one device—perfect for work and personal lines, or keeping your main number active while adding a local SIM when traveling. And unlike most phones, Northlight lets you use both SIMs and a microSD card at the same time—no slot-sharing, no switching, no compromises.</p>
                </div>
                <div class="col-xl-2 col-sm-6 px-0 d-flex flex-column justify-content-center order-xl-2 order-sm-1 order-0">
                    <img src="{{ asset('img/northlight/Inova_spec_parts_dualSIM_card.png') }}" alt="INOVA microSD Card" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    @include('inc.northlight-spec')
@endsection

@push('scripts')
    <script>
        // === Circle Progress Animation ===
        (() => {
            const radius = 60;
            const center = 65;
            const circumference = 2 * Math.PI * radius;
            const duration = 1500;

            function createCircle(container, target, label) {
                if (!container.querySelector('svg')) {
                    container.innerHTML = `
                    <svg class="progress-circle-svg" width="100" height="100">
                        <circle cx="${center}" cy="${center}" r="${radius}" stroke="#282828" stroke-width="2" fill="none" />
                        <circle class="progress-circle" cx="${center}" cy="${center}" r="${radius}" stroke="#ffffff" stroke-width="2"
                            fill="none" stroke-linecap="round" transform="rotate(-90 ${center} ${center})"
                            stroke-dasharray="${circumference}" stroke-dashoffset="${circumference}" />
                    </svg>
                    <div class="circle-label">${label}</div>
                `;
                }
            }

            function animateCircle(circleEl, target) {
                let startTime = null;

                function animate(timestamp) {
                    if (!startTime) startTime = timestamp;
                    const elapsed = timestamp - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = progress * (2 - progress);
                    const current = target * eased;
                    const offset = circumference * (1 - current / 100);
                    circleEl.style.strokeDashoffset = offset;

                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    }
                }

                requestAnimationFrame(animate);
            }

            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.circle-container').forEach(container => {
                    const target = parseInt(container.getAttribute('data-target'), 10);
                    const label = container.getAttribute('data-label') || '';
                    createCircle(container, target, label);

                    const circle = container.querySelector('.progress-circle');

                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (!circle) return;

                            if (entry.isIntersecting && container.dataset.animated !== "true") {
                                container.dataset.animated = "true";
                                animateCircle(circle, target);
                            } else if (!entry.isIntersecting) {
                                circle.style.strokeDashoffset = circumference;
                                container.dataset.animated = "false";
                            }
                        });
                    }, {
                        threshold: 0
                    });

                    observer.observe(container);
                });
            });
        })();

        // === Progress Bar Animation ===
        (() => {
            document.addEventListener('DOMContentLoaded', () => {
                const bars = document.querySelectorAll('.progress-bar');
                let hasAnimated = false;

                function animateBars() {
                    bars.forEach(bar => {
                        const target = parseInt(bar.getAttribute('data-target'), 10);
                        bar.style.width = target + '%';
                    });
                }

                function resetBars() {
                    bars.forEach(bar => bar.style.width = '0%');
                }

                function checkBarsInView() {
                    const windowHeight = window.innerHeight;
                    let anyInView = false;
                    let allOutOfView = true;

                    bars.forEach(bar => {
                        const rect = bar.getBoundingClientRect();
                        const out = rect.bottom < 0 || rect.top > windowHeight;

                        if (!out) {
                            anyInView = true;
                            allOutOfView = false;
                        }
                    });

                    if (anyInView && !hasAnimated) {
                        hasAnimated = true;
                        animateBars();
                    } else if (allOutOfView && hasAnimated) {
                        hasAnimated = false;
                        resetBars();
                    }
                }

                window.addEventListener('scroll', checkBarsInView);
                window.addEventListener('resize', checkBarsInView);
                checkBarsInView();
            });
        })();

        // === microSD Counter Animation ===
        (() => {
            const counterElement = document.getElementById('microSD-counter');
            if (!counterElement) return;

            const start = 0;
            const end = 512;
            const duration = 1500;
            let startTime = null;
            let isAnimating = false;

            function animateCounter(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = timestamp - startTime;
                const percent = Math.min(progress / duration, 1);
                const eased = percent * (2 - percent);
                const current = Math.floor(start + (end - start) * eased);
                counterElement.textContent = current;

                if (percent < 1) {
                    requestAnimationFrame(animateCounter);
                }
            }

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !isAnimating) {
                        isAnimating = true;
                        startTime = null;
                        requestAnimationFrame(animateCounter);
                    } else if (!entry.isIntersecting && isAnimating) {
                        isAnimating = false;
                        counterElement.textContent = start;
                        startTime = null;
                    }
                });
            });

            observer.observe(counterElement);
        })();

        // === Features Fixed Position Behavior ===
        (() => {
            const container = document.querySelector('.northlight-banner-container');
            const features = document.querySelectorAll('.phone-banner-features');

            if (!container || features.length === 0) return;

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
                    features.forEach(feature => feature.classList.remove('position-fixed'));
                } else {
                    updateFeaturePosition();
                }
            }

            function init() {
                if (window.innerWidth <= 768) {
                    features.forEach(feature => feature.classList.remove('position-fixed'));
                } else {
                    updateFeaturePosition();
                    handleScroll();
                }
            }

            window.addEventListener('DOMContentLoaded', init);
            window.addEventListener('resize', init);
            window.addEventListener('scroll', handleScroll);
        })();

        // === Navbar Visibility Toggle ===
        (() => {
            const navbar = document.querySelector('.navbar');
            const section1 = document.querySelector('.section-1');

            if (!navbar || !section1) return;

            window.addEventListener('scroll', () => {
                const section1Height = section1.offsetHeight;

                if (window.scrollY < section1Height) {
                    navbar.classList.add('visible');
                    navbar.classList.remove('hidden');
                } else {
                    navbar.classList.remove('visible');
                    navbar.classList.add('hidden');
                }
            });
        })();
    </script>
@endpush
