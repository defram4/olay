@extends('layouts.front_second')
{{-- @section('title', $meta->title) --}}
@section('content')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <div class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">
                                Experience the Art of Beauty
                            </h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a
                                        href="{{ route('front.index', app()->getLocale()) }}">
                                        Home
                                    </a></li>
                                <li class="breadcrumb__content--menu__items"><span>
                                        Services
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->

        <!--TODO  Services start -->
        <section class="team__section" style="padding-bottom: 5%; padding-top:5%;">
            <div class="container">
                <div class="team__container d-flex">
                    <div class="row" style="justify-content: center; align-items:center; margin: 0 auto">
                        @foreach ($services as $service)
                            <div class="col-lg-4 col-md-4  mb-30">
                                <div class="team__items text-center">
                                    <div class="team__thumb" style="cursor:pointer;"
                                        onclick="navigateToService('{{ route('front.single.service', ['locale' => app()->getLocale(), 'slug' => $service->slug]) }}')">
                                        <img class="team__thumb--img" src="{{ asset('storage/service/' . $service->img) }}"
                                            alt="team img">
                                    </div>
                                    <div class="team__content ">
                                        <h3 class="team__content--title">
                                            <a
                                                href="{{ route('front.single.service', ['locale' => app()->getLocale(), 'slug' => $service->slug]) }}">
                                                {{ $service->title }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <script>
                    function navigateToService(url) {
                        window.location.href = url;
                    }
                </script>


            </div>
        </section>
        <!--TODO  Services end -->

        <!-- TODO Cta copy -->
        <section class="advice__banner--section" style=" padding-bottom: 5%;">
            <div class="advice__banner--box position-relative">
                <img class="advice__banner--thumbnail height_360 border-radius-5" style="width: 100%;"
                    src="{{ asset('front/img/banner/cta1.jpg') }}" alt="banner">
                <div class="advice__banner--content style2">
                    <h2 class="advice__banner--title">Transform Your Look Today!</h2>
                    <p class="advice__banner--desc mb-30">
                        Book an Appointment and Unleash Your True Beauty
                    </p>
                    <a class="advice__banner--btn primary__btn" href="{{ route('front.index', app()->getLocale()) }}">
                        Contact Us
                    </a>
                </div>
            </div>

        </section>
        <!-- TODO Cta copy -->

        <!-- TODO Why choose us start -->
        <section class="team__section" style="padding-bottom: 3%;">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">Why Choose Us</h2>
                </div>
                <div class="team__container d-flex">
                    <div class="row" style="justify-content: center; align-items:center; margin: 0 auto">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center team__items-hover">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w1.png') }}"
                                        alt=" team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Facial Treatments</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center team__items-hover">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w2.png') }}" alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Relaxation and Pampering</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center team__items-hover">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w3.png') }}" alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Range of Services</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center team__items-hover">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w4.png') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">High-care</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center team__items-hover">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w5.png') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Trends and Innovation</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center team__items-hover">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w6.png') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Personalized Attention</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TODO Why choose us start -->

        <!-- TODO Cal to action 2 start-->
        <section class="newsletter__section" style="margin: 0 0 5% 0;">
            <div class="container">
                <div class="newsletter__inner--style2 newsletter__bg2"
                    style="background: url({{ asset('front/img/banner/cta2.png') }})">
                    <div class="newsletter__style2--content text-center" style="margin-bottom: 0;">
                        <h2 class="newsletter__style2--content__title">
                            Book Your Beauty Transformation Today!
                        </h2>
                        <p class="newsletter__style2--content__desc">
                            Unlock Your Radiance and Experience Unforgettable Makeovers.
                        </p> <br>
                        <a class="advice__banner--btn primary__btn" href="{{ route('front.index', app()->getLocale()) }}"
                            style="">
                            Contact Us
                        </a>
                    </div>

                </div>

            </div>
        </section>
        <!-- TODO Cal to action 2 end-->

        <!-- TODO Contact Form start -->
        <section class="contact__section  d-flex" style="padding-bottom: 5%;">
            <div class="main__contact--area container"
                style="justify-content: center; align-items: center; margin: 0 auto;">
                <div class="contact__form ">
                    <h3 class="contact__form--title mb-30">Contact</h3>
                    <h3 class=" mb-30" style="color:#3c3837;">Get in Touch for Expert Consultation</h3>
                    <form class="contact__form--inner" form id="contact"
                        action="{{ route('front.contact.storage', app()->getLocale()) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="name"> Name <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" type="text" name="name"
                                        value="{{ old('name') }}" autocomplete="off">
                                    @error('name')
                                        <span style="color: red">
                                            {{ __('The name field is required.') }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="phone">Phone <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" type="text" name="phone"
                                        value="{{ old('phone') }}" autocomplete="off">
                                    @error('phone')
                                        <span style="color: red">
                                            {{ __('The phone field is required.') }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="email">Email <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" type="text" name="email"
                                        value="{{ old('email') }}" autocomplete="off">
                                    @error('email')
                                        <span style="color: red">
                                            {{ __('The email field is required.') }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="title">Subject <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" type="text" name="title"
                                        value="{{ old('title') }}" autocomplete="off">
                                    @error('title')
                                        <span style="color: red">
                                            {{ __('The subject field is required.') }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact__form--list mb-15">
                                    <label class="contact__form--label" for="message">Write Your Message <span
                                            class="contact__form--label__star">*</span></label>
                                    <textarea class="contact__form--textarea" id="input5" placeholder="Write Your Message" name="message"
                                        autocomplete="off">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span style="color: red">
                                            {{ __('The message field is required.') }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button class="contact__form--btn primary__btn" type="submit" name="submit" id="submitButton">
                            <span>
                                Submit
                            </span>
                        </button>

                    </form>
                </div>
            </div>
        </section>
        <!-- TODO Contact Form end -->


    </main>
    @push('script')
        <script>
            // Get references to the form and preloader elements
            const form = document.getElementById('submitButton'); // Replace 'contactForm' with your form's ID
            const preloader = document.getElementById('ctn-preloader');
            const pre = document.querySelector('.animation-preloader');
            const letter = document.querySelector('.main__content_wrapper');
            const footer = document.querySelector('.footer__section');
            // Add an event listener to the form submission
            submitButton.addEventListener('click', function(event) {
                pre.style.opacity = '100%';
                letter.style.display = 'none';
                footer.style.display = 'none';
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const redSpan = document.querySelector('span[style="color: red"]');

                if (redSpan) {
                    const redSpanTopOffset = redSpan.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    const scrollToY = redSpanTopOffset - windowHeight / 2.5; // Adjust the value as needed

                    window.scrollTo({
                        top: scrollToY,
                        behavior: 'smooth'
                    });
                }
            });
        </script>
    @endpush
@endsection


{{-- @forelse($services as $service) --}}
{{--    --}}
{{--    img - {{ asset('storage/service/'. $service->img ) }} --}}
{{--    --}}
{{--    link - {{ route('front.single.service', ['locale'=>app()->getLocale(), 'slug'=>$service->slug]) }} --}}
{{--    --}}
{{--    title - {{ $service->title }} --}}
{{--    --}}
{{--    subtitle - {{ $service->sub_title }} --}}
{{--    --}}
{{--    text - {{ $service->text }} --}}

{{-- @empty --}}
{{--    <h1>No services Loaded</h1> --}}
{{-- @endforelse --}}
