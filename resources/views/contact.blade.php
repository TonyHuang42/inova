@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@push('styles')
    <style>
        .faq {
            counter-reset: faq-counter;
        }

        .faq-question {
            display: flex;
            align-items: center;
        }

        .faq-question::before {
            counter-increment: faq-counter;
            content: counter(faq-counter, decimal-leading-zero);
            margin-right: 1.5rem;
            flex-shrink: 0;
            color: #b6b6b6;
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

        .arrow {
            font-size: 20px;
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
            padding-left: 52px;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        }

        .toggle-content.open {
            max-height: 200px;
            opacity: 1;
        }

        .partnership-toggle-content.open {
            /* max-height: 600px; */
            max-height: 300px;
            opacity: 1;
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
            opacity: 1;
        }

        a {
            color: #fff;
        }

        ul {
            color: #b6b6b6;
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
                                <h4 class="faq-question">Can I use dual SIMs and a microSD at the same time?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <p class="toggle-content">Yes, Northlight supports dual SIMs and a microSD card simultaneously. You don’t have to sacrifice one for the other.</p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4 class="faq-question">How do I replace my battery?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <p class="toggle-content">Simply remove your phone case and you will see the battery with a slot at the bottom. Lift the bottom of the battery up and replace it with a new one. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4 class="faq-question">How do I know which SIM card I'm using?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <p class="toggle-content">You can check and switch your active SIM through your phone’s SIM settings. Go to Settings > Network & Internet > SIMs to manage preferences for calls, texts, and data. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4 class="faq-question">How do I manage storage with a microSD card?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <p class="toggle-content">Once inserted, your microSD card will appear in your device storage settings. In the Files app, you can move images, downloads, documents, videos, and audio between internal and external storage. Note that apps cannot be moved to external storage. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4 class="faq-question">How do I access files saved on my microSD card?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <p class="toggle-content">You can access those files by inserting the microSD card back into your phone, or by using a microSD card reader connected to a laptop, PC, or other devices. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4 class="faq-question">What is the storage capacity?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <p class="toggle-content">Northlight comes with 32GB of built-in storage and supports microSD cards up to 512GB for additional space. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4 class="faq-question">How do I remove or insert my SIM or microSD card?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <div class="toggle-content">
                                <p>Remove the phone case to access the slots at the top-right corner. There are three slots:</p>
                                <ul>
                                    <li>Nano-SIM (top slot)</li>
                                    <li>Micro-SIM (bottom slot)</li>
                                    <li>MicroSD card (directly above the micro-SIM, stacked vertically)</li>
                                </ul>
                                <p>Make sure each card goes in current orientation. </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4 class="faq-question">Where can I buy INOVA products?</h4>
                                <i class="fa-solid fa-caret-up arrow"></i>
                            </div>
                            <p class="toggle-content">We’re currently available on the Best Buy Marketplace. You can find us on the Best Buy website or contact us directly at sales@i-nova.ca for more details. </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 offset-xl-1 col-lg-4">
                    {{-- <div class="contact">
                        <div class="faq-item">
                            <div class="toggle-container align-items-center">
                                <h3>Partnership Opportunities</h3>
                                <i class="fa-solid fa-caret-up arrow position-static"></i>
                            </div>
                            <div class="toggle-content partnership-toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p class="text-white">Email: <a href="mailto:partnership@example.com">partnership@example.com</a></p>
                                <p class="text-white">Phone: <a href="tel:1234567890">(123) 456-7890</a></p>
                                
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <form>
                                    @csrf
                                    <div class="row gy-xl-0">
                                        <div class="col-xl-6">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="col-xl-6 mt-xl-0 mt-3">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                        </div>
                                        <div class="col-xl-6 mt-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-xl-6 mt-3">
                                            <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div type="submit" class="mt-3">
                                        <a class="button button--filled" href="" target="_self">
                                            <span>Send Message</span>
                                            <i class="fa-solid fa-caret-right"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <img src="{{ asset('img/support/p5-img-02.jpg') }}" alt="" class="img-fluid d-none d-lg-block"> --}}
                    <div class="row bottom-padding-sm">
                        <h3 class="mb-3">Get in Touch</h3>
                        {{-- <h4>Interested in working with us or carrying INOVA products?</h4> --}}
                        <p>Whether you're looking to purchase, become a distributor, or explore business opportunities, we’d love to hear from you. Use the form below or reach us directly by phone or email. </p>
                        <p class="text-white">Email: <a href="mailto:partnership@example.com">partnership@example.com</a></p>
                        <p class="text-white">Phone: <a href="tel:1234567890">(123) 456-7890</a></p>
                    </div>
                    <div class="row">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form>
                            @csrf
                            <div class="row gy-0">
                                <div class="col-6">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="col-6 mt-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-6 mt-3">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div type="submit" class="mt-4">
                                <a class="button button--filled" href="" target="_self">
                                    <span>Send Message</span>
                                    <i class="fa-solid fa-caret-right"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- <div class="row bottom-padding">
                <div class="col-xl-5 col-lg-6">
                    <h3 class="mb-3">Get in Touch</h3>
                    <h4>Interested in working with us or carrying INOVA products?</h4>
                    <p>Whether you're looking to purchase, become a distributor, or explore business opportunities, we’d love to hear from you. Use the form below or reach us directly by phone or email. </p>
                    <p class="text-white">Email: <a href="mailto:partnership@example.com">partnership@example.com</a></p>
                    <p class="text-white">Phone: <a href="tel:1234567890">(123) 456-7890</a></p>
                </div>
                <div class="offset-xl-1 col-lg-6">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form>
                        @csrf
                        <div class="row gy-0">
                            <div class="col-6">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-6">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="col-6 mt-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="col-6 mt-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="col-12 mt-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div type="submit" class="mt-3">
                            <a class="button button--filled" href="" target="_self">
                                <span>Send Message</span>
                                <i class="fa-solid fa-caret-right"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div> --}}

            <div class="row bottom-padding">
                <div class="col-lg col-12">
                    <h3 class="mb-3">Accessories</h3>
                    <p>For more power, data, and everyday convenience.</p>
                    {{-- <a href="" class="d-inline-flex align-items-center gap-3 mb-3">
                        <i class="fa-brands fa-instagram social-icon"></i>
                        <p class="mb-0">@INOVA</p>
                    </a><br>
                    <a href="" class="d-inline-flex align-items-center gap-3">
                        <i class="fa-brands fa-square-facebook social-icon"></i>
                        <p class="mb-0">@INOVA</p>
                    </a> --}}
                </div>

                <div class="col-lg col-4">
                    <img src="{{ asset('img/home/inova_accessory_battery.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg col-4">
                    <img src="{{ asset('img/home/inova_accessory_charger.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg col-4">
                    <img src="{{ asset('img/home/inova_accessory_microSDcard.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll(".faq").forEach(section => {
            const toggleContainers = section.querySelectorAll(".toggle-container");

            toggleContainers.forEach((container, index) => {
                const content = container.nextElementSibling;

                // if (index === 0) {
                //     container.classList.add("active");
                //     content.classList.add("open");
                // }

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
@endpush
