@extends('layouts.front_second')
{{-- @section('title', $serviceMeta->title) --}}
@section('content')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <div class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">
                                Unveiling Beauty: Discover Our Exquisite Services
                            </h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a
                                        href="{{ route('front.index', app()->getLocale()) }}">
                                        Home
                                    </a></li>
                                <li class="breadcrumb__content--menu__items"><span>
                                        Service
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->

        <!--TODO Start about section -->
        <section class="about__Section section--padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="about__thumbnail  position-relative" style="float: left; padding: 0 2% 0% 0;">
                            <img src="{{ asset('storage/service/' . $service->img) }}" alt="img">
                        </div>
                        <div class="about__content ">
                            <h3 class="about__content--subtitle">
                                {{ $service->title }}
                            </h3>
                            <h2 class="about__content--title">
                                {{ $service->sub_title }}
                            </h2>
                            <p class="about__content--desc" style="text-align: justify;">
                                {{ $service->text }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--TODO End about section -->

        <!-- TODO Cal to action 2 start-->
        <section class="newsletter__section"
            style="margin-bottom: 5%;
           background: url({{ asset('front/img/banner/cta2.png') }}); background-size:cover;">
            <div class="container">
                <div class="newsletter__inner--style2 ">

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

        <!-- TODO Why choose us start -->
        <section class="team__section" style="padding-bottom: 5%;">
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
                        Contact Us</a>
                </div>
            </div>
        </section>
        <!-- TODO Cta copy -->

        <!-- TODO Our Project start -->
        <section class="product__section section--paddfront
             container" style="padding-bottom:5%;">
            <div class="section__heading text-center mb-40">
                <h2 class="section__heading--maintitle">
                    Our projects
                </h2>
            </div>
            <div class="product__section--inner">
                <div class="row mb--n30">
                    @foreach ($projects as $project)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block"
                                        href="{{ route('front.single.project', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}">
                                        <img class="product__card--thumbnail__img product__primary--img"
                                            src="{{ asset('storage/project/' . $project->img_1) }}" alt="product-img1">
                                        <img class="product__card--thumbnail__img product__secondary--img"
                                            src="{{ asset('storage/project/' . $project->img_2) }}" alt="product-img2">
                                    </a>
                                </div>
                                <div class="product__card--content text-center height">
                                    <h3 class="product__card--title">
                                        <a
                                            href="{{ route('front.single.project', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}">
                                            {{ $project->title }}
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        {!! Str::limit($project->text, 200) !!}
                                    </p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                    <div class="product__load--more text-center">
                        <a class="load__more--btn primary__btn"
                            href="{{ route('front.project', app()->getLocale()) }}">All projects</a>
                    </div>
                </div>

            </div>

        </section>
        <!-- TODO Our Project end -->

        <!--TODO Start testimonial section -->
        <section class="testimonial__section testimonial__bg " style="padding: 5% 0 5% 0;">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">What Clients Are Saying</h2>
                </div>
                <div class="testimonial__section--inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__items">
                                <div class="testimonial__author d-flex align-items-center">
                                    <div class="testimonial__author__thumbnail">
                                        <img src="{{ asset('front/img/other/team1.png') }}" alt="testimonial-img">
                                    </div>
                                    <div class="testimonial__author--text">
                                        <h3 class="testimonial__author--title">Michael Linda</h3>
                                        <span class="testimonial__author--subtitle">Beautician</span>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">
                                        Amazing salon! Skilled stylists, friendly staff, and a welcoming atmosphere. My
                                        haircut turned out fantastic. Highly recommend!
                                    </p>
                                    <img class="testimonial__vector--icon"
                                        src="{{ asset('front/img/icon/vector-icon.webp') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__items">
                                <div class="testimonial__author d-flex align-items-center">
                                    <div class="testimonial__author__thumbnail">
                                        <img src="{{ asset('front/img/other/team2.png') }}" alt="testimonial-img">
                                    </div>
                                    <div class="testimonial__author--text">
                                        <h3 class="testimonial__author--title">Anett Deckson</h3>
                                        <span class="testimonial__author--subtitle">Dev</span>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">
                                        Top-notch salon! Excellent service, talented professionals, and a wide range of
                                        treatments. Always leave feeling pampered and beautiful.
                                    </p>
                                    <img class="testimonial__vector--icon"
                                        src="{{ asset('front/img/icon/vector-icon.webp') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__items">
                                <div class="testimonial__author d-flex align-items-center">
                                    <div class="testimonial__author__thumbnail">
                                        <img src="{{ asset('front/img/other/team3.png') }}" alt="testimonial-img">
                                    </div>
                                    <div class="testimonial__author--text">
                                        <h3 class="testimonial__author--title">Maerell Adapi</h3>
                                        <span class="testimonial__author--subtitle">CEO</span>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">
                                        Fantastic experience! The esthetician was knowledgeable, and the facial left my skin
                                        glowing. Can't wait to return for more rejuvenating treatments.
                                    </p>
                                    <img class="testimonial__vector--icon"
                                        src="{{ asset('front/img/icon/vector-icon.webp') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__items">
                                <div class="testimonial__author d-flex align-items-center">
                                    <div class="testimonial__author__thumbnail">
                                        <img src="{{ asset('front/img/other/team4.png') }}" alt="testimonial-img">
                                    </div>
                                    <div class="testimonial__author--text">
                                        <h3 class="testimonial__author--title">Marieta Areno</h3>
                                        <span class="testimonial__author--subtitle">Photographer</span>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">
                                        Outstanding salon! The nail technicians are meticulous, and the manicure lasted for
                                        weeks. Relaxing ambiance and impeccable service. A hidden gem!
                                    </p>
                                    <img class="testimonial__vector--icon"
                                        src="{{ asset('front/img/icon/vector-icon.webp') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__items">
                                <div class="testimonial__author d-flex align-items-center">
                                    <div class="testimonial__author__thumbnail">
                                        <img src="{{ asset('front/img/other/team5.jpg') }}" alt="testimonial-img"
                                            style="width:70px; height:70px;">
                                    </div>
                                    <div class="testimonial__author--text">
                                        <h3 class="testimonial__author--title">Marien Areki</h3>
                                        <span class="testimonial__author--subtitle">Dev</span>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <p class="testimonial__desc">
                                        Love this salon! The makeup artist created a stunning look for my special event.
                                        Professional, friendly, and exceeded my expectations. Will be back!
                                    </p>
                                    <img class="testimonial__vector--icon"
                                        src="{{ asset('front/img/icon/vector-icon.webp') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__pagination swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!--TODO End testimonial section -->

        <!--TODO Start services section -->
        <section class="blog__section bg" style="margin-top: 4%; padding: 0% 0 5% 0;">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Services</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($services as $service)
                            <div class="swiper-slide">
                                <article class="blog__card">
                                    <div class="blog__card--thumbnail">
                                        <a class="blog__card--thumbnail__link"
                                            href="{{ route('front.single.service', ['locale' => app()->getLocale(), 'slug' => $service->slug]) }}">
                                            <img class="blog__card--thumbnail__img"
                                                src="{{ asset('storage/service/' . $service->img) }}">
                                        </a>
                                    </div>
                                    <div class="blog__card--content height1">
                                        <h3 class="blog__card--title" style="text-align: center;">
                                            <a
                                                href="{{ route('front.single.service', ['locale' => app()->getLocale(), 'slug' => $service->slug]) }}">
                                                {{ $service->title }}
                                            </a>
                                        </h3>

                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class=" -chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--TODO End services section -->

        <!-- TODO Contact Form start -->
        <section class="contact__section  d-flex" style="padding: 0% 0 5% 0;">
            <div class="main__contact--area container"
                style="justify-content: center; align-items: center; margin: 0 auto;">
                <div class="contact__form">
                    <h3 class="contact__form--title mb-30">Contact</h3>
                    {{-- <h3 class=" mb-30" style="color:#3c3837;">Get in Touch for Expert Consultation</h3> --}}
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

{{-- <h1> --}}
{{--    {{ $service->title }} --}}
{{-- </h1> --}}

{{-- <img src="{{ asset('storage/service/'. $service->img ) }}" alt="Image"> --}}

{{-- <h4> --}}
{{--    {{ $service->sub_title }} --}}
{{-- </h4> --}}
{{-- <p> --}}
{{--    {{ $service->text }} --}}
{{-- </p> --}}
{{-- <p> --}}
{{--    {{ \Carbon\Carbon::parse($service->created_at)->format('d-m-Y') }} --}}
{{-- </p> --}}

{{-- <span> --}}
{{--        <a href="{{ route('front.single.service', ['locale'=>app()->getLocale(), 'slug'=>$service->slug]) }}"> --}}
{{--            Link to single service --}}
{{--        </a> --}}
{{--    </span> --}}
