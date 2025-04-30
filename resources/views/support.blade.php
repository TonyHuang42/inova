@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@push('styles')
    <style>
        .faq {
            counter-reset: faq-counter;
        }

        .faq-question {
            font-size: 22px;
            display: flex;
            align-items: center;
            background: #fff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(99deg, #616161 0, #fff0 50%);
            background-size: 200% 100%;
            background-position-x: 100%;
            transition: background-position .8s cubic-bezier(.25, .1, .14, .91);
        }

        .toggle-container:hover .faq-question{
            background-position-x: 0;
        }

        .faq-question::before {
            font-size: 22px;
            counter-increment: faq-counter;
            content: counter(faq-counter, decimal-leading-zero);
            margin-right: 1.5rem;
            flex-shrink: 0;
            color: #999;
            background: none;
            -webkit-background-clip: border-box;
            -webkit-text-fill-color: initial;
        }

        .faq-question span {
            display: inline-block;
        }

        .faq-item {
            margin-bottom: 24px;
        }

        .toggle-container {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* margin-bottom: 8px; */
            position: relative;
        }

        .toggle-container.active {
            border-bottom: 1px solid #282828;
        }

        .arrow {
            font-size: 24px;
            margin-top: -4px;
        }

        .toggle-container .arrow {
            position: relative;
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .toggle-container.active .arrow {
            transform: rotate(180deg);
        }

        .toggle-content {
            margin-top: 8px;
            padding-left: 52px;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        }

        .form-control,
        .form-control:focus {
            /* padding-left: 0; */
            background-color: transparent;
            color: white;
            border: none;
            border-bottom: 1px solid #282828;
            border-radius: 0;
            box-shadow: none;
        }

        .form-control::placeholder {
            color: #b6b6b6;
            opacity: 0.5;
            font-weight: 100;
        }

        a {
            color: #fff;
        }

        ul {
            color: #b6b6b6;
        }

        .form-container {
            background-color: #191919;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 636px;
        }

        @media only screen and (max-width: 1399px) {
            .form-container {
                height: 655px;
            }
        }

        @media only screen and (max-width: 1199px) {
            .form-container {
                height: 710px;
            }
        }

        @media only screen and (max-width: 991px) {
            .form-container {
                height: auto;
                padding: 48px 24px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="support-banner"></div>
    <div class="bg-black text-white">
        <div class="container">
            <div class="row section-padding gx-lg-5">
                <div class="col-lg-8">
                    <h3 class="mb-3">Frequently Asked Questions</h3>
                    <p>Before reaching out, take a look at some of the most common questions we get. From SIM card setup to microSD storage, these answers can help you get started quickly and confidently.</p>
                    <div class="faq pt-3">
                        <div class="faq-item">
                            <div class="toggle-container">
                                <h5 class="faq-question">Can I use dual SIMs and a microSD at the same time?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <p class="toggle-content">Yes, Northlight supports dual SIMs and a microSD card simultaneously. You don’t have to sacrifice one for the other.</p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h5 class="faq-question">How do I replace my battery?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <p class="toggle-content">Simply remove your phone case and you will see the battery with a slot at the bottom. Lift the bottom of the battery up and replace it with a new one. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h5 class="faq-question">How do I know which SIM card I'm using?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <p class="toggle-content">You can check and switch your active SIM through your phone’s SIM settings. Go to Settings > Network & Internet > SIMs to manage preferences for calls, texts, and data. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h5 class="faq-question">How do I manage storage with a microSD card?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <p class="toggle-content">Once inserted, your microSD card will appear in your device storage settings. In the Files app, you can move images, downloads, documents, videos, and audio between internal and external storage. Note that apps cannot be moved to external storage. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h5 class="faq-question">How do I access files saved on my microSD card?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <p class="toggle-content">You can access those files by inserting the microSD card back into your phone, or by using a microSD card reader connected to a laptop, PC, or other devices. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h5 class="faq-question">What is the storage capacity?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <p class="toggle-content">Northlight comes with 32GB of built-in storage and supports microSD cards up to 512GB for additional space. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h5 class="faq-question">How do I remove or insert my SIM or microSD card?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <div class="toggle-content question-7">
                                <p>Remove the phone case to access the slots at the top-right corner. There are three slots:</p>
                                <ul>
                                    <li>Nano-SIM (top slot)</li>
                                    <li>Micro-SIM (bottom slot)</li>
                                    <li>MicroSD card (directly above the micro-SIM, stacked vertically)</li>
                                </ul>
                                <p>Make sure each card goes in current orientation. </p>
                            </div>
                        </div>

                        <div class="faq-item mb-0">
                            <div class="toggle-container">
                                <h5 class="faq-question">Where can I buy INOVA products?</h5>
                                <i class="fa-solid fa-caret-down arrow"></i>
                            </div>
                            <p class="toggle-content">We’re currently available on the Best Buy Marketplace. You can find us on the Best Buy website or contact us directly at sales@i-nova.ca for more details. </p>
                        </div>
                    </div>
                </div>

                <div class="form-container col-xl-3 offset-xl-1 col-lg-4">
                    <div class="row">
                        <h3 class="mb-3">Get in Touch</h3>
                        <p>Whether you're looking to purchase, become a distributor, or explore business opportunities, we’d love to hear from you. Use the form below or reach us directly by email. </p>
                        <p class="text-white">Email: <a href="mailto:marketing@i-nova.ca">marketing@i-nova.ca</a></p>
                    </div>
                    <div class="row mt-1">
                        @if (session('success'))
                            <div class="alert alert-secondary">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('support.submit') }}" method="POST">
                            @csrf
                            <div class="row gy-0">
                                <div class="col-lg-12 col-6">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-lg-12 col-6 mt-lg-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div type="submit" class="mt-4" style="cursor: auto;">
                                <button type="submit" class="button button--filled">
                                    <span>Send Message</span>
                                    <i class="fa-solid fa-caret-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row bottom-padding">
                <div class="col-lg col-12">
                    <h3 class="mb-3">Accessories</h3>
                    <p>For more power, data, and everyday convenience.</p>
                </div>

                <div class="col-lg col-md-3 col-6">
                    <img src="{{ asset('img/home/inova_accessory_battery.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg col-md-3 col-6">
                    <img src="{{ asset('img/home/inova_accessory_charger.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg col-md-3 col-6">
                    <img src="{{ asset('img/home/inova_accessory_microSDcard.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg col-md-3 col-6">
                    <img src="{{ asset('img/support/instagram-img-03.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll(".faq").forEach(section => {
            const toggleContainers = section.querySelectorAll(".toggle-container");

            toggleContainers.forEach(container => {
                const content = container.nextElementSibling;
                // if (index === 0) {
                //     container.classList.add("active");
                //     content.classList.add("open");
                // }

                container.addEventListener("click", function() {
                    // toggleContainers.forEach(item => {
                    //     if (item !== this) {
                    //         item.classList.remove("active");
                    //         item.nextElementSibling.classList.remove("open");
                    //     }
                    // });

                    const isActive = this.classList.contains("active");

                    if (isActive) {
                        content.style.maxHeight = null;
                        content.style.opacity = 0;
                        this.classList.remove("active");
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                        content.style.opacity = 1;
                        this.classList.add("active");
                    }
                });
            });
        });
    </script>
@endpush
