<style>
    .features-container-desktop {
        position: relative;
        height: 1000px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .features-container-mobile {
        position: relative;
        max-height: 850px;
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
    }

    .features-container-mobile.open {
        min-height: 620px;
    }

    .image-wrapper {
        position: relative;
        display: inline-block;
        height: 1000px;
    }

    .image-wrapper-mobile {
        position: relative;
        display: inline-block;
        max-height: 850px;
        padding: 0 10px;
    }

    .feature-wrapper-mobile {
        background-color: #0B212C;
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }

    .feature-wrapper-mobile.visible {
        opacity: 1;
        visibility: visible;
    }

    .feature-wrapper-mobile.hidden {
        opacity: 0;
        visibility: hidden;
    }

    .engineering-drawing {
        height: 100%;
        display: block;
    }

    .feature-background-mobile {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        /* object-position: top center; */
    }

    .engineering-drawing-mobile {
        max-width: 100%;
        max-height: 850px;
        display: block;
        object-fit: contain;
        object-position: top center;
    }

    .engineering-drawing-mobile.open {
        min-height: 620px;
    }

    .circle-svg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: auto;
    }

    .circle {
        pointer-events: none;
        fill: rgba(0, 123, 255, 0.3);
    }

    .circle-inner {
        cursor: pointer;
        fill: rgba(0, 123, 255, 0.7);
    }

    .content {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .content.show {
        opacity: 1;
    }

    .text-overlay {
        color: white;
        position: absolute;
        top: 50%;
        left: 25%;
        overflow: hidden;
    }

    .text-overlay-mobile {
        color: white;
        position: absolute;
        top: 45%;
        left: 0;
        overflow: hidden;
        padding: 0 12px;
    }

    .feature-description {
        font-size: 20px;
        font-weight: 700;
    }

    .disclaimer {
        padding-top: 10px;
        color: #666;
        font-size: 12px;
        font-weight: 300;
    }

    .disclaimer-desktop {
        padding-bottom: 30px;
        color: #90A3AD;
        font-size: 12px;
        font-weight: 300;
        text-align: center;
    }

    .disclaimer-mobile {
        color: #90A3AD;
        font-size: 12px;
        font-weight: 300;
        text-align: center;
        padding: 0 20px 30px;
    }

    .xmark {
        color: white;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 32px;
        cursor: pointer;
        z-index: 10;
    }

    .bg-color {
        background-color: #0B212C;
    }

    .engineering-drawing-position {
        left: 22px;
    }

    .mobile-container-padding {
        padding: 50px 0 0 0;
    }

    .engineering-drawing-md {
        display: none;
    }

    .section a {
        color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1)) !important;
    }

    .section a:hover {
        text-decoration: underline !important;
    }

    .toggle-container {
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .toggle-container .arrow {
        margin: 1px;
        transition: transform 0.3s ease;
    }

    .toggle-container.active .arrow {
        transform: rotate(90deg);
    }

    .toggle-content {
        color: #90A3AD;
        margin-bottom: 0;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: max-height 0.3s ease-out, opacity 0.3s ease-out, margin-bottom 0.3s ease-out;
    }

    .toggle-content strong {
        color: white;
        font-weight: 400;
    }

    .toggle-content.open {
        margin-bottom: 1rem;
        max-height: 200px;
        opacity: 1;
    }

    @media only screen and (min-width: 1200px) {
        .features-container-mobile {
            display: none;
        }

        .disclaimer-mobile {
            display: none;
        }

        .mobile-container-padding {
            padding: 0;
        }
    }

    @media only screen and (min-width: 1800px) {
        .text-overlay {
            max-width: 460px;
        }
    }

    @media only screen and (max-width: 1799px) {
        .text-overlay {
            max-width: 460px;
        }
    }

    @media only screen and (max-width: 1599px) {
        .engineering-drawing-position {
            left: 120px;
        }

        .content {
            right: 70px;
        }

        .text-overlay {
            max-width: 425px;
        }
    }

    @media only screen and (max-width: 1399px) {
        .engineering-drawing-lg {
            display: none;
        }

        .engineering-drawing-md {
            display: block;
        }

        .image-wrapper {
            height: 900px;
        }

        .engineering-drawing-position {
            left: 80px;
        }

        .content {
            right: -50px;
        }

        .text-overlay {
            max-width: 375px;
        }
    }

    @media only screen and (max-width: 1199px) {
        .features-container-desktop {
            display: none;
        }

        .disclaimer-desktop {
            display: none;
        }

        .phone-banner-features {
            max-height: 60px;
        }
    }

    @media only screen and (max-width: 991px) {
        .phone-banner-features {
            max-height: 45px;
        }
    }
</style>

<!-- Desktop Engineering Drawing -->
<div class="bg-color overflow-hidden" style="z-index: 10;">
    <div class="custom-container">
        {{-- <h1 class="text-white text-center" style="padding-top: 50px;">Beyond the Essentials</h1> --}}
        <div class="features-container-desktop" id="engineering-drawing-section">
            <div class="image-wrapper engineering-drawing-position engineering-drawing-lg">
                <img src="{{ asset('img/northlight/Northlight-explosive-sketch.png') }}" alt="engineering drawing" class="engineering-drawing">
                <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    {{-- <circle class="circle" cx="36" cy="38.2">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="sim-card" cx="36" cy="38.2" r="1" /> --}}

                    <circle class="circle" cx="27.5" cy="65">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="usb-c" cx="27.5" cy="65" r="1" />

                    {{-- <circle class="circle" cx="56" cy="27">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="battery" cx="56" cy="27" r="1" /> --}}

                    {{-- <circle class="circle" cx="39.5" cy="34.5">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="microSD" cx="39.5" cy="34.5" r="1" /> --}}

                    <circle class="circle" cx="52" cy="13.5">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="case" cx="52" cy="13.5" r="1" />

                    <circle class="circle" cx="51.5" cy="86.5">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="display" cx="51.5" cy="86.5" r="1" />

                    <circle class="circle" cx="29.5" cy="61.5">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="3.5mm" cx="29.5" cy="61.5" r="1" />

                    {{-- <circle class="circle" cx="37.8" cy="64">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="chip" cx="37.8" cy="64" r="1" /> --}}

                    <circle class="circle" cx="33.3" cy="46.5">
                        <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="camera" cx="33.3" cy="46.5" r="1" />
                </svg>
            </div>

            <!-- Small Desktop Engineering Drawing -->
            <div class="image-wrapper engineering-drawing-position engineering-drawing-md">
                <img src="{{ asset('img/northlight/Northlight-explosive-sketch-mobile.png') }}" alt="engineering drawing" class="engineering-drawing">
                <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                    {{-- <circle class="circle" cx="14.2" cy="35.8">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="sim-card" cx="14.2" cy="35.8" r="1.1" /> --}}

                    <circle class="circle" cx="4.5" cy="67">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="usb-c" cx="4.5" cy="67" r="1.1" />

                    {{-- <circle class="circle" cx="36.5" cy="23.5">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="battery" cx="36.5" cy="23.5" r="1.1" /> --}}

                    {{-- <circle class="circle" cx="18.2" cy="31.5">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="microSD" cx="18.2" cy="31.5" r="1.1" /> --}}

                    <circle class="circle" cx="32.5" cy="7.5">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="case" cx="32.5" cy="7.5" r="1.1" />

                    <circle class="circle" cx="32" cy="91">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="display" cx="32" cy="91" r="1.1" />

                    <circle class="circle" cx="7.5" cy="61.5">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="3.5mm" cx="7.5" cy="61.5" r="1.1" />

                    {{-- <circle class="circle" cx="16" cy="65">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="chip" cx="16" cy="65" r="1.1" /> --}}

                    <circle class="circle" cx="11" cy="45">
                        <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="camera" cx="11" cy="45" r="1.1" />
                </svg>
            </div>

            <!-- Case -->
            <div class="image-wrapper content" id="case">
                <img src="{{ asset('img/northlight/phone_case.png') }}" alt="case" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>Phone Case</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Durable & Lightweight Design</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Northlight’s body and case use ABS injection PC—a <strong>tough, lightweight</strong> plastic. Unlike premium phones that rely on metals like aluminum or titanium (which add modest weight and cost for their durability), ABS keeps the phone practical: lightweight for pockets and <strong>affordable without compromising</strong> everyday resilience.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Compact & Practical Size</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">At 74mm wide (2.91 inches), <strong>Northlight fits comfortably in all hands</strong>—no stretching to reach buttons or balancing acts to avoid drops. While others chase oversized screens, we prioritize portability: it slips into small bags, jeans pockets, or your palm effortlessly, proving bigger isn’t always better.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Ergonomic Curves for All-Day Comfort</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Designed with <strong>smooth, rounded edges</strong> and a matte finish, Northlight feels natural in your grip. The subtle curves fit snugly in palms of all sizes, whether you’re texting one-handed on a commute or snapping photos at a family BBQ. No sharp edges, no slippery surfaces—just practicality that works for everyone.</p>
                </div>
            </div>

            <!-- Battery -->
            <div class="image-wrapper content" id="battery">
                <img src="{{ asset('img/northlight/battery.png') }}" alt="Detachable Battery" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>Detachable Battery</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Easily Replaceable</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Northlight’s battery swaps in seconds with a <strong>tool-free latch system</strong>—no screws, no technician required. <strong>Simply pop off</strong> the case, <storng>replace</storng> the battery, and power up. Designed for everyone, from tech novices to busy parents, it’s as simple as changing a TV remote’s batteries.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Built for Daily Demands & Emergencies</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>Keep a spare battery</strong> for all-day adventures, travel, or unexpected outages. Unlike sealed phones that leave you scrambling for a charger, Northlight ensures you’re never stranded. Swap in a fresh battery during a hike, flight, or blackout—because life doesn’t wait for a power outlet.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Replace the Battery, Not the Phone</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">When batteries degrade (as all do), Northlight lets you <strong>replace just the battery</strong>—not the entire phone. This eco-friendly approach cuts long-term costs and e-waste, aligning with our mission to make tech sustainable. Why discard a perfectly good phone over a $20 battery?</p>
                </div>
            </div>

            <!-- microSD Card -->
            <div class="image-wrapper content" id="microSD">
                <img src="{{ asset('img/northlight/microSD_card.png') }}" alt="microSD Card" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>microSD Card</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Affordable Expansion</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Expand your storage affordably with a <strong>microSD card</strong>—no need to buy a pricier high-storage model. Add up to <strong>512GB</strong> for photos, videos, and apps, keeping your budget intact while future-proofing your device.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Quick & Simple</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Just slide in a microSD card—<strong>no setup, no formatting</strong>. Northlight recognizes it instantly, letting you store files, transfer data, or free up space in seconds. Perfect for tech newcomers or anyone craving hassle-free solutions.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Backup Ready</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Use the microSD slot for <strong>reliable backups</strong> of family photos, work documents, or medical records. Unlike cloud storage (which needs Wi-Fi or subscriptions), your data stays offline, portable, and safe from accidental deletion—peace of mind in your pocket.</p>
                </div>
            </div>

            <!-- Dual SIM Card -->
            <div class="image-wrapper content" id="sim-card">
                <img src="{{ asset('img/northlight/dualSIM_card.png') }}" alt="Dual SIM card" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>Dual Sim Card</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Simplified Travel</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>Swap to a local SIM card instantly</strong> when traveling abroad—no more exorbitant roaming fees. Keep your home number active for emergencies while using a local plan for data, calls, and maps. Perfect for globetrotters, students abroad, or business trips.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Effortless Switching</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>Separate work and personal life</strong> seamlessly with Dual SIM. Assign one slot for client calls and another for family chats—no juggling phones or missing important updates. Ideal for freelancers, entrepreneurs, or anyone craving work-life balance.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Instant Switching</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Toggle between SIMs <strong>in seconds</strong> via software settings—no physical swapping needed. Pause your work line during dinner or activate a travel SIM mid-flight. Stay connected your way, without interruptions or delays.</p>
                </div>
            </div>

            <!-- Camera -->
            <div class="image-wrapper content" id="camera">
                <img src="{{ asset('img/northlight/camera.png') }}" alt="camera" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>Camera</h4>
                    <div class="toggle-container">
                        <div class="feature-description">5MP Rear Camera & 2MP Front Camera</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">A <strong>5MP rear camera</strong> captures sharp, 5-million-pixel photos—ideal for scanning documents, QR codes, or snapping clear shots of notes at work. The <strong>2MP front camera</strong> handles video calls and quick selfies, ensuring you stay connected with loved ones. Both prioritize practicality over blindly chasing unneeded ultra-high pixels.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Designed for Daily Usage</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Northlight’s camera focuses on what truly matters: <strong>capturing life’s essentials</strong>. Scan receipts, sharing daily updates, or record your child’s first steps—all without fuss. While 48MP+ cameras excel in professional detail, most users don’t need extreme resolution for sharing moments with friends or preserving life’s simple joys.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Memory Over Megapixels</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The best photos aren’t defined by resolution—they’re defined by moments. A blurry birthday cake or a sunlit family dinner holds more value than technical perfection. Northlight prioritizes <strong>preserving memories</strong>, not chasing specs, because life’s magic lies in the experience, not the pixels.</p>
                </div>
            </div>

            <!-- Chip -->
            <div class="image-wrapper content" id="chip">
                <img src="{{ asset('img/northlight/chip.png') }}" alt="Chip" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>Chip</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Mediatek Helio A22 MT6761</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">A <strong>Quad-Core 2.0GHz CPU</strong> (four processing units) efficiently handles daily tasks like messaging, browsing, social media, and streaming. While not for heavy gaming or 4K editing, it delivers smooth performance with energy efficiency—perfect for video calls, music, and apps that <strong>keep you connected</strong>.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Designed for Daily Usage</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The Helio A22 chip handles daily tasks with smooth efficiency. Designed for users who prioritize <strong>practicality over specs</strong>, it delivers <strong>reliable</strong> performance <strong>without the cost</strong> of power you’ll never use.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Made by MediaTek & TSMC</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>MediaTek</strong> (global leader in secure, efficient processors) partners with <strong>TSMC</strong> (Taiwan Semiconductor Manufacturing Company), the world’s top semiconductor maker. Together, they deliver rigorously tested Northlight chips—<strong>durable, secure, and affordable</strong>. Trusted engineering, without the premium cost.</p>
                </div>
            </div>

            <!-- 3.5mm -->
            <div class="image-wrapper content" id="3.5mm">
                <img src="{{ asset('img/northlight/headphone_jack.png') }}" alt="3.5mm Headphone Jack" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>3.5mm Headphone Jack</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Universal Compatibility</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The 3.5mm headphone jack remains the <strong>universal standard</strong> for wired audio. Unlike USB-C-only phones, Northlight works <strong>seamlessly</strong> with any headphones—from dollarstore earbuds to premium headsets—without adapters or compatibility hassles.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Charge & Listen</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Keep your phone charging via USB-C while plugging in wired headphones—no more choosing between <strong>music and battery life</strong>. Perfect for long flights, road trips, or bedside Netflix binges where uninterrupted power and sound matter most.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Classic Convenience</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The 3.5mm jack is a timeless, trusted feature. No batteries to charge, no settings to tweak—just plug in and enjoy instant, glitch-free audio. For users who crave <strong>simplicity</strong> (or hate fumbling with Bluetooth), it’s everyday ease, perfected.</p>
                </div>
            </div>

            <!-- USB-C -->
            <div class="image-wrapper content" id="usb-c">
                <img src="{{ asset('img/northlight/usb_c.png') }}" alt="USB-C" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>USB-C</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Universal Simplicity</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">USB-C is the <strong>global standard</strong> for modern devices—charge your phone, laptop, tablet, or earbuds with the same cable. No more juggling cords: transfer files, power up, or connect to monitors effortlessly. Simplify your tech life while saving money on extra accessories.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Future-Ready Tech</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">USB-C supports faster charging, 4K video output, and high-speed data transfers. <strong>Compatible</strong> with the latest laptops, chargers, and peripherals, it ensures Northlight stays relevant as tech evolves. <strong>No adapter</strong> headaches or outdated ports—just seamless compatibility for years to come.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Simple Connectivity</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">USB-C’s reversible design works flawlessly in any orientation—no flipping the plug three times. Whether you’re charging in the dark or rushing out the door, it’s <strong>hassle-free convenience</strong> for all ages. A small detail that makes everyday life smoother.</p>
                </div>
            </div>

            <!-- Display -->
            <div class="image-wrapper content" id="display">
                <img src="{{ asset('img/northlight/display.png') }}" alt="display" class="engineering-drawing">
                <div class="text-overlay">
                    <h4>Display</h4>
                    <div class="toggle-container">
                        <div class="feature-description">TFT LCD</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>TFT LCD</strong> screens use a backlight to deliver bright, <strong>sunlight-friendly visuals</strong>, ideal for outdoor use. Unlike OLED (where each pixel emits its own light), LCDs prioritize affordability, durability, and no risk of screen burn-in. Perfect for users who value practicality over premium specs.</p>

                    <div class="toggle-container">
                        <div class="feature-description">480x960 Resolution</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">At <strong>197 PPI</strong> (pixels per inch), sharper than most TVs screen, this PPI keeps text sharp for messaging, social media, and casual browsing. While premium phones push 500+ PPI (better for billboard-sized prints), Northlight’s screen matches daily needs—clear photos for social posts, no battery drain from overkill pixel density.</p>

                    <div class="toggle-container">
                        <div class="feature-description">60Hz Refresh Rate</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">A <strong>60Hz refresh rate</strong> updates the screen 60 times per second, matching most TVs and laptops. It handles scrolling, videos, and light gaming smoothly, while avoiding the battery drain and added cost of 120Hz+ displays. Designed for reliability, not specs you’ll rarely notice.</p>
                </div>
            </div>
        </div>
        <div class="disclaimer-desktop">*For demonstration purposes only. Actual parts, specifications, and measurements may vary. SIM and microSD cards not included.</div>
    </div>
</div>

<!-- Mobile Engineering Drawing -->
<div class="bg-color" style="z-index: 10;">
    <div class="container mobile-container-padding" id="engineering-drawing-section-mobile">
        <div class="features-container-mobile">
            <div class="image-wrapper-mobile">
                <img src="{{ asset('img/northlight/Northlight-explosive-sketch-mobile.png') }}" alt="engineering drawing" class="engineering-drawing-mobile">
                <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                    {{-- <circle class="circle" cx="14.8" cy="34.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="sim-card-mobile" cx="14.8" cy="34.5" r="1.5" /> --}}

                    <circle class="circle" cx="4.5" cy="63.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="usb-c-mobile" cx="4.5" cy="63.5" r="1.5" />

                    {{-- <circle class="circle" cx="36.5" cy="22.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="battery-mobile" cx="36.5" cy="22.5" r="1.5" /> --}}

                    {{-- <circle class="circle" cx="18.7" cy="30.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="microSD-mobile" cx="18.7" cy="30.5" r="1.5" /> --}}

                    <circle class="circle" cx="32.5" cy="7.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="case-mobile" cx="32.5" cy="7.5" r="1.5" />

                    <circle class="circle" cx="32" cy="87">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="display-mobile" cx="32" cy="87" r="1.5" />

                    <circle class="circle" cx="8.5" cy="59.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="3.5mm-mobile" cx="8.5" cy="59.5" r="1.5" />

                    {{-- <circle class="circle" cx="16.5" cy="62.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="chip-mobile" cx="16.5" cy="62.5" r="1.5" /> --}}

                    <circle class="circle" cx="11.8" cy="43.5">
                        <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                        <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                    </circle>
                    <circle class="circle-inner" data-target="camera-mobile" cx="11.8" cy="43.5" r="1.5" />
                </svg>
            </div>

            <!-- Case -->
            <div class="feature-wrapper-mobile" id="case-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/phone_case.png') }}" alt="Case" class="feature-background-mobile">
                <div class="text-overlay-mobile">
                    <h4>Phone Case</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Durable & Lightweight Design</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Northlight’s body and case use ABS injection PC—a <strong>tough, lightweight</strong> plastic. Unlike premium phones that rely on metals like aluminum or titanium (which add modest weight and cost for their durability), ABS keeps the phone practical: lightweight for pockets and <strong>affordable without compromising</strong> everyday resilience.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Compact & Practical Size</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">At 74mm wide (2.91 inches), <strong>Northlight fits comfortably in all hands</strong>—no stretching to reach buttons or balancing acts to avoid drops. While others chase oversized screens, we prioritize portability: it slips into small bags, jeans pockets, or your palm effortlessly, proving bigger isn’t always better.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Ergonomic Curves for All-Day Comfort</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Designed with <strong>smooth, rounded edges</strong> and a matte finish, Northlight feels natural in your grip. The subtle curves fit snugly in palms of all sizes, whether you’re texting one-handed on a commute or snapping photos at a family BBQ. No sharp edges, no slippery surfaces—just practicality that works for everyone.</p>
                </div>
            </div>

            <!-- Battery -->
            <div class="feature-wrapper-mobile" id="battery-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/battery.png') }}" alt="Detachable Battery" class="feature-background-mobile">
                <div class="text-overlay-mobile">
                    <h4>Detachable Battery</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Easily Replaceable</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Northlight’s battery swaps in seconds with a <strong>tool-free latch system</strong>—no screws, no technician required. <strong>Simply pop off</strong> the case, <storng>replace</storng> the battery, and power up. Designed for everyone, from tech novices to busy parents, it’s as simple as changing a TV remote’s batteries.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Built for Daily Demands & Emergencies</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>Keep a spare battery</strong> for all-day adventures, travel, or unexpected outages. Unlike sealed phones that leave you scrambling for a charger, Northlight ensures you’re never stranded. Swap in a fresh battery during a hike, flight, or blackout—because life doesn’t wait for a power outlet.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Replace the Battery, Not the Phone</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">When batteries degrade (as all do), Northlight lets you <strong>replace just the battery</strong>—not the entire phone. This eco-friendly approach cuts long-term costs and e-waste, aligning with our mission to make tech sustainable. Why discard a perfectly good phone over a $20 battery?</p>
                </div>
            </div>

            <!-- microSD Card -->
            <div class="feature-wrapper-mobile" id="microSD-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/microSD_card.png') }}" alt="microSD Card" class="engineering-drawing-mobile">
                <div class="text-overlay-mobile">
                    <h4>microSD Card</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Affordable Expansion</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Expand your storage affordably with a <strong>microSD card</strong>—no need to buy a pricier high-storage model. Add up to <strong>512GB</strong> for photos, videos, and apps, keeping your budget intact while future-proofing your device.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Quick & Simple</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Just slide in a microSD card—<strong>no setup, no formatting</strong>. Northlight recognizes it instantly, letting you store files, transfer data, or free up space in seconds. Perfect for tech newcomers or anyone craving hassle-free solutions.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Backup Ready</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Use the microSD slot for <strong>reliable backups</strong> of family photos, work documents, or medical records. Unlike cloud storage (which needs Wi-Fi or subscriptions), your data stays offline, portable, and safe from accidental deletion—peace of mind in your pocket.</p>
                </div>
            </div>

            <!-- Dual SIM Card -->
            <div class="feature-wrapper-mobile" id="sim-card-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/dualSIM_card.png') }}" alt="SIM card" class="engineering-drawing-mobile">
                <div class="text-overlay-mobile">
                    <h4>Dual Sim Card</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Simplified Travel</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>Swap to a local SIM card instantly</strong> when traveling abroad—no more exorbitant roaming fees. Keep your home number active for emergencies while using a local plan for data, calls, and maps. Perfect for globetrotters, students abroad, or business trips.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Effortless Switching</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>Separate work and personal life</strong> seamlessly with Dual SIM. Assign one slot for client calls and another for family chats—no juggling phones or missing important updates. Ideal for freelancers, entrepreneurs, or anyone craving work-life balance.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Instant Switching</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Toggle between SIMs <strong>in seconds</strong> via software settings—no physical swapping needed. Pause your work line during dinner or activate a travel SIM mid-flight. Stay connected your way, without interruptions or delays.</p>
                </div>
            </div>

            <!-- Camera -->
            <div class="feature-wrapper-mobile" id="camera-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/camera.png') }}" alt="Camera" class="engineering-drawing-mobile">
                <div class="text-overlay-mobile">
                    <h4>Camera</h4>
                    <div class="toggle-container">
                        <div class="feature-description">5MP Rear Camera & 2MP Front Camera</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">A <strong>5MP rear camera</strong> captures sharp, 5-million-pixel photos—ideal for scanning documents, QR codes, or snapping clear shots of notes at work. The <strong>2MP front camera</strong> handles video calls and quick selfies, ensuring you stay connected with loved ones. Both prioritize practicality over blindly chasing unneeded ultra-high pixels.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Designed for Daily Usage</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Northlight’s camera focuses on what truly matters: <strong>capturing life’s essentials</strong>. Scan receipts, sharing daily updates, or record your child’s first steps—all without fuss. While 48MP+ cameras excel in professional detail, most users don’t need extreme resolution for sharing moments with friends or preserving life’s simple joys.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Memory Over Megapixels</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The best photos aren’t defined by resolution—they’re defined by moments. A blurry birthday cake or a sunlit family dinner holds more value than technical perfection. Northlight prioritizes <strong>preserving memories</strong>, not chasing specs, because life’s magic lies in the experience, not the pixels.</p>
                </div>
            </div>

            <!-- Chip -->
            <div class="feature-wrapper-mobile" id="chip-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/chip.png') }}" alt="Chip" class="engineering-drawing-mobile">
                <div class="text-overlay-mobile">
                    <h4>Chip</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Mediatek Helio A22 MT6761</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">A <strong>Quad-Core 2.0GHz CPU</strong> (four processing units) efficiently handles daily tasks like messaging, browsing, social media, and streaming. While not for heavy gaming or 4K editing, it delivers smooth performance with energy efficiency—perfect for video calls, music, and apps that <strong>keep you connected</strong>.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Designed for Daily Usage</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The Helio A22 chip handles daily tasks with smooth efficiency. Designed for users who prioritize <strong>practicality over specs</strong>, it delivers <strong>reliable</strong> performance <strong>without the cost</strong> of power you’ll never use.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Made by MediaTek & TSMC</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>MediaTek</strong> (global leader in secure, efficient processors) partners with <strong>TSMC</strong> (Taiwan Semiconductor Manufacturing Company), the world’s top semiconductor maker. Together, they deliver rigorously tested Northlight chips—<strong>durable, secure, and affordable</strong>. Trusted engineering, without the premium cost.</p>
                </div>
            </div>

            <!-- 3.5mm -->
            <div class="feature-wrapper-mobile" id="3.5mm-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/headphone_jack.png') }}" alt="3.5mm Headphone Jack" class="engineering-drawing-mobile">
                <div class="text-overlay-mobile">
                    <h4>3.5mm Headphone Jack</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Universal Compatibility</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The 3.5mm headphone jack remains the <strong>universal standard</strong> for wired audio. Unlike USB-C-only phones, Northlight works <strong>seamlessly</strong> with any headphones—from dollarstore earbuds to premium headsets—without adapters or compatibility hassles.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Charge & Listen</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Keep your phone charging via USB-C while plugging in wired headphones—no more choosing between <strong>music and battery life</strong>. Perfect for long flights, road trips, or bedside Netflix binges where uninterrupted power and sound matter most.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Classic Convenience</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">The 3.5mm jack is a timeless, trusted feature. No batteries to charge, no settings to tweak—just plug in and enjoy instant, glitch-free audio. For users who crave <strong>simplicity</strong> (or hate fumbling with Bluetooth), it’s everyday ease, perfected.</p>
                </div>
            </div>

            <!-- USB-C -->
            <div class="feature-wrapper-mobile" id="usb-c-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/usb_c.png') }}" alt="USB-C" class="engineering-drawing-mobile">
                <div class="text-overlay-mobile">
                    <h4>USB-C</h4>
                    <div class="toggle-container">
                        <div class="feature-description">Universal Simplicity</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">USB-C is the <strong>global standard</strong> for modern devices—charge your phone, laptop, tablet, or earbuds with the same cable. No more juggling cords: transfer files, power up, or connect to monitors effortlessly. Simplify your tech life while saving money on extra accessories.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Future-Ready Tech</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">USB-C supports faster charging, 4K video output, and high-speed data transfers. <strong>Compatible</strong> with the latest laptops, chargers, and peripherals, it ensures Northlight stays relevant as tech evolves. <strong>No adapter</strong> headaches or outdated ports—just seamless compatibility for years to come.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Simple Connectivity</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">USB-C’s reversible design works flawlessly in any orientation—no flipping the plug three times. Whether you’re charging in the dark or rushing out the door, it’s <strong>hassle-free convenience</strong> for all ages. A small detail that makes everyday life smoother.</p>
                </div>
            </div>

            <!-- Display -->
            <div class="feature-wrapper-mobile" id="display-mobile">
                <i class="fa-solid fa-xmark xmark"></i>
                <img src="{{ asset('img/northlight/display.png') }}" alt="display" class="engineering-drawing-mobile">
                <div class="text-overlay-mobile">
                    <h4>Display</h4>
                    <div class="toggle-container">
                        <div class="feature-description">TFT LCD</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content"><strong>TFT LCD</strong> screens use a backlight to deliver bright, <strong>sunlight-friendly visuals</strong>, ideal for outdoor use. Unlike OLED (where each pixel emits its own light), LCDs prioritize affordability, durability, and no risk of screen burn-in. Perfect for users who value practicality over premium specs.</p>

                    <div class="toggle-container">
                        <div class="feature-description">480x960 Resolution</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">At <strong>197 PPI</strong> (pixels per inch), sharper than most TVs screen, this PPI keeps text sharp for messaging, social media, and casual browsing. While premium phones push 500+ PPI (better for billboard-sized prints), Northlight’s screen matches daily needs—clear photos for social posts, no battery drain from overkill pixel density.</p>

                    <div class="toggle-container">
                        <div class="feature-description">60Hz Refresh Rate</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">A <strong>60Hz refresh rate</strong> updates the screen 60 times per second, matching most TVs and laptops. It handles scrolling, videos, and light gaming smoothly, while avoiding the battery drain and added cost of 120Hz+ displays. Designed for reliability, not specs you’ll rarely notice.</p>
                </div>
            </div>
        </div>
        <div class="disclaimer-mobile">*For demonstration purposes only. Actual parts, specifications, and measurements may vary. SIM and microSD cards not included.</div>
    </div>
</div>


<script>
    //Show features on click
    document.addEventListener('DOMContentLoaded', () => {
        const circles = document.querySelectorAll('.circle-inner, .highlight-wrap');
        const defaultImage = document.getElementById('case');
        const hoverContent = document.querySelectorAll('.content');

        let currentTarget = null;

        // Function to show the targeted content and hide others
        function showContent(targetId) {
            // Hide all hover content
            hoverContent.forEach(content => {
                content.style.display = 'none';
                content.classList.remove('show');
            });

            if (targetId) {
                // Show the specific target content
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.style.display = 'block';
                    setTimeout(() => targetElement.classList.add('show'), 10);
                }

                // Update the current visible target
                currentTarget = targetId;
            } else {
                // No target clicked: show default image and hide everything else
                defaultImage.style.display = 'block';
                defaultImage.classList.add('show');
                currentTarget = null;
            }
        }

        // Add event listeners to circles
        circles.forEach(circle => {
            const targetId = circle.getAttribute('data-target');

            // On click, show the corresponding content
            circle.addEventListener('click', () => {
                showContent(targetId);
            });
        });

        // Set default state on page load
        showContent(null);

        // Set default state when resizing to desktop
        let lastWidth = window.innerWidth;

        function checkScreenWidth() {
            let currentWidth = window.innerWidth;
            if (lastWidth < 1200 && currentWidth >= 1200) {
                showContent(null);
            }

            lastWidth = currentWidth;
        }
        window.addEventListener("resize", checkScreenWidth);
    });



    // //show navbar on scroll
    // document.addEventListener('DOMContentLoaded', () => {
    //     const navbar = document.getElementById("phone-nav-container");
    //     const posterImages = Array.from(document.getElementsByClassName('phone-banner'));
    //     let imageHeights = [];

    //     // Function to update image heights
    //     function updateImageHeights() {
    //         imageHeights = posterImages.map(img => img?.offsetHeight || 0);
    //     }

    //     // Ensure each image is fully loaded before getting its height
    //     posterImages.forEach((img) => {
    //         if (img) {
    //             img.onload = () => {
    //                 updateImageHeights();
    //                 handleScroll();
    //             };

    //             // Fallback in case the image is cached and already loaded
    //             if (img.complete) {
    //                 updateImageHeights();
    //             }
    //         }
    //     });

    //     // Function to handle scroll logic
    //     function handleScroll() {
    //         const scrollPosition = window.scrollY || window.pageYOffset;
    //         const maxHeight = Math.max(...imageHeights);

    //         if (scrollPosition > maxHeight) {
    //             navbar.classList.remove("hidden");
    //             navbar.classList.add("visible");
    //         } else {
    //             navbar.classList.remove("visible");
    //             navbar.classList.add("hidden");
    //         }
    //     }

    //     // Add event listeners
    //     window.addEventListener('scroll', handleScroll);
    //     window.addEventListener('resize', () => {
    //         updateImageHeights();
    //         handleScroll();
    //     });
    // });



    // Function to resize all feature-wrapper-mobile elements to match image-wrapper-mobile
    function resizeFeatureWrappers() {
        const imageWrapper = document.querySelector('.image-wrapper-mobile');
        const featureWrappers = document.querySelectorAll('.feature-wrapper-mobile');

        if (imageWrapper && featureWrappers.length > 0) {
            // Get the width and height of the image-wrapper-mobile
            const width = imageWrapper.offsetWidth;
            let height = imageWrapper.offsetHeight;

            if (height < 620) {
                height = 620;
            }

            // Loop through all feature-wrapper-mobile elements
            featureWrappers.forEach(featureWrapper => {
                featureWrapper.style.width = `${width}px`;
                featureWrapper.style.height = `${height}px`;
                featureWrapper.style.minHeight = "620px";
            });
        }
    }

    window.addEventListener('load', resizeFeatureWrappers);
    window.addEventListener('resize', resizeFeatureWrappers);



    //Show and close feature-wrapper-mobile on click
    document.addEventListener('DOMContentLoaded', function() {
        const hoverCircles = document.querySelectorAll('.circle-inner, .highlight-wrap');
        const closeButtons = document.querySelectorAll('.xmark');
        const featureContainer = document.querySelector('.features-container-mobile');
        const engineeringDrawing = document.querySelector('.engineering-drawing-mobile');

        hoverCircles.forEach(circle => {
            circle.addEventListener('click', function() {
                document.querySelectorAll('.feature-wrapper-mobile').forEach(wrapper => {
                    wrapper.classList.add('hidden');
                    wrapper.classList.remove('visible');
                });

                const targetId = circle.getAttribute('data-target');
                const featureWrapper = document.getElementById(targetId);
                if (featureWrapper) {
                    featureWrapper.classList.add('visible');
                    featureWrapper.classList.remove('hidden');
                }
                featureContainer.classList.add('open');
                engineeringDrawing.classList.add('open');
            });
        });

        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const featureWrapper = button.closest('.feature-wrapper-mobile');
                if (featureWrapper) {
                    featureWrapper.classList.add('hidden');
                    featureWrapper.classList.remove('visible');
                }
                featureContainer.classList.remove('open');
                engineeringDrawing.classList.remove('open');
            });
        });
    });



    //Toggle Features
    document.querySelectorAll(".text-overlay, .text-overlay-mobile").forEach(section => {
        const toggleContainers = section.querySelectorAll(".toggle-container");

        toggleContainers.forEach((container, index) => {
            const content = container.nextElementSibling;

            if (index === 0) {
                container.classList.add("active");
                content.classList.add("open");
            }

            container.addEventListener("click", function() {
                toggleContainers.forEach(item => {
                    if (item !== this) {
                        item.classList.remove("active");
                        item.nextElementSibling.classList.remove("open");
                    }
                });

                const isActive = this.classList.contains("active");

                if (isActive) {
                    content.classList.remove("open");
                    this.classList.remove("active");
                } else {
                    content.classList.add("open");
                    this.classList.add("active");
                }
            });
        });
    });
</script>
