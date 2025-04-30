<style>
    .northlight-banner-container {
        background-color: black;
        position: relative;
        width: 100%;
        padding-bottom: 56.24%;
        /* height: 100vh; */
        overflow: hidden;
        min-height: 900px;
    }

    .video-skeleton {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        z-index: 1;
    }

    .phone-banner {
        width: 100%;
        /* height: 100vh; */
        min-height: 900px;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
    }

    /* @media only screen and (max-width: 575px) {
        .northlight-banner-container {
            min-height: 700px;
        }

        .phone-banner {
            min-height: 700px;
        }
    } */

    /* .phone-banner-phone {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        max-width: 100%;
        min-height: 900px;
        object-fit: cover;
    } */

    .phone-banner-features {
        position: absolute;
        transform: translate(-50%, -50%);
        max-height: 70px;
        z-index: 3;
        display: none;
    }

    .phone-banner-northlight {
        width: 100%;
        height: auto;
        min-height: 350px;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 3;
        display: none;
    }

    .phone-banner-slogan {
        width: 100%;
        height: auto;
        min-height: 420px;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 3;
        display: none;
    }

    @media only screen and (max-width: 1199px) {
        .phone-banner-features {
            max-height: 60px;
        }
    }

    @media only screen and (max-width: 991px) {
        .phone-banner-features {
            max-height: 45px;
        }
    }

    @media only screen and (max-width: 167) {
        .phone-banner-features {
            max-height: 50px;
        }
    }
</style>

<script>
    function hideSkeleton() {
        // document.querySelector('.video-skeleton').style.display = 'none';
        document.querySelector('.phone-banner-northlight').style.display = 'block';
        document.querySelector('.phone-banner-slogan').style.display = 'block';
        let features = document.querySelectorAll('.phone-banner-features');
        features.forEach(function(el) {
            el.style.display = 'block';
        });
    }
</script>

<div class="northlight-banner-container">
    {{-- <img src="{{ asset('img/northlight/banner/BG.jpg') }}" alt="banner" class="phone-banner">
    <img src="{{ asset('img/northlight/banner/phone.png') }}" alt="phone" class="phone-banner-phone"> --}}
    <video playsinline loop muted autoplay class="phone-banner" onloadeddata="hideSkeleton()">
        <source src="{{ asset('video/Northlight.mp4') }}" type="video/mp4" />
    </video>
    <img src="{{ asset('img/northlight/banner/northlight.png') }}" alt="northlight" class="phone-banner-northlight">
    <img src="{{ asset('img/northlight/banner/slogan.png') }}" alt="slogan" class="phone-banner-slogan">

    <div class="d-md-flex d-none">
        <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 19%;">

        <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 77%;">

        <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 15%;">

        <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 85%;">

        <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 20%;">

        <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 82%;">
    </div>

    <div class="d-md-none">
        <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 25%;">

        <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 50%;">

        <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 75%;">

        <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 25%;">

        <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 50%;">

        <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 75%;">
    </div>
</div>
