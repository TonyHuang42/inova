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
            margin-bottom: 8px;
            position: relative;
        }

        .toggle-container .arrow {
            position: relative;
            top: 7px;
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .toggle-container.active .arrow {
            transform: rotate(90deg);
        }

        .toggle-content {
            margin-bottom: 0;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out, margin-bottom 0.3s ease-out;
        }

        .toggle-content.open {
            margin-bottom: 1rem;
            max-height: 500px;
            opacity: 1;
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
                    <div class="faq">
                        <div class="faq-item">
                            <div class="toggle-container align-items-center">
                                <h3>Partnership Opportunities</h3>
                                <i class="fa-solid fa-angle-right arrow position-static"></i>
                            </div>
                            <div class="toggle-content">
                                {{-- @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif --}}

                                {{-- <form action="{{ route('contact.submit') }}" method="POST"> --}}
                                <form>
                                    {{-- @csrf --}}
                                    <div class="row gy-md-0">
                                        <div class="col-md-6">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6 mt-md-0 mt-3">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="button mt-3">
                                        <span class="button-text">SEND MESSAGE</span>
                                    </button>
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
