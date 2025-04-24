@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@push('styles')
    <style>
        .faq-item {
            margin-bottom: 24px;
        }

        .toggle-container {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            /* margin-bottom: 8px; */
            position: relative;
        }

        .toggle-container .arrow {
            position: relative;
            top: 8px;
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .toggle-container.active .arrow {
            transform: rotate(90deg);
        }

        .toggle-content {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        }

        .toggle-content.open {
            max-height: 100px;
            opacity: 1;
        }

        .partnership-toggle-content.open {
            max-height: 600px;
            opacity: 1;
        }

        .form-control, .form-control:focus {
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
    </style>
@endpush

@section('content')
    <div class="support-banner"></div>
    <div class="bg-black text-white">
        <div class="container">
            <div class="row section-padding gx-lg-5">
                <div class="col-lg-8">
                    <h3>Frequently Asked Questions</h3>
                    <p>Ultrices vitae auctor eu augue. Volutpat sed cras ornare arcu dui vivamus. Nulla porttitor massa id neque aliquam vestibulum morbi. Nulla posuere sollic itudin enenatis a condim entum vitae sapien pelle ntesque turpis massa tincidunt dui. Eu tincidunt aliquam.</p>
                    <div class="faq">
                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>Can I use two SIM cards and a microSD card at the same time?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Yes, Northlight supports dual SIM and a microSD card simultaneously. You don’t have to sacrifice one for the other.</p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>How do I replace my battery?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Simply remove your phone case and you will see the battery with a slot at the bottom. Lift the bottom of the battery up and replace it with a new one. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>Can I use two SIM cards and a microSD card at the same time?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Yes, Northlight supports dual SIM and a microSD card simultaneously. You don’t have to sacrifice one for the other.</p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>How do I replace my battery?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Simply remove your phone case and you will see the battery with a slot at the bottom. Lift the bottom of the battery up and replace it with a new one. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>Can I use two SIM cards and a microSD card at the same time?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Yes, Northlight supports dual SIM and a microSD card simultaneously. You don’t have to sacrifice one for the other.</p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>How do I replace my battery?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Simply remove your phone case and you will see the battery with a slot at the bottom. Lift the bottom of the battery up and replace it with a new one. </p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>Can I use two SIM cards and a microSD card at the same time?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Yes, Northlight supports dual SIM and a microSD card simultaneously. You don’t have to sacrifice one for the other.</p>
                        </div>

                        <div class="faq-item">
                            <div class="toggle-container">
                                <h4>How do I replace my battery?</h4>
                                <i class="fa-solid fa-angle-right arrow"></i>
                            </div>
                            <p class="toggle-content">Simply remove your phone case and you will see the battery with a slot at the bottom. Lift the bottom of the battery up and replace it with a new one. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact">
                        <div class="faq-item">
                            <div class="toggle-container align-items-center">
                                <h3>Partnership Opportunities</h3>
                                <i class="fa-solid fa-angle-right arrow position-static"></i>
                            </div>
                            <div class="toggle-content partnership-toggle-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p class="text-white">Email: <a href="mailto:partnership@example.com">partnership@example.com</a></p>
                                <p class="text-white">Phone: <a href="tel:1234567890">(123) 456-7890</a></p>
                                
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                {{-- <form action="{{ route('contact.submit') }}" method="POST"> --}}
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
                    </div>
                    <img src="{{ asset('img/support/p5-img-02.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll(".faq, .contact").forEach(section => {
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
