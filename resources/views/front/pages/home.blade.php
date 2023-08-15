@extends('layouts.front')
{{-- @section('title', $meta->title) --}}
@section('content')
    {{-- INCLUDE YOUR CODE HERE --}}

    {{--    Services --}}
    {{-- <h1>-Services-</h1>
    @include('front.components.services', ['services' => $services]) --}}

    {{-- Blog --}}
    {{-- <h1>-Reviews-</h1>
    @include('front.components.reviews') --}}
    {{-- Blog --}}
    {{-- <h1>-Blog-</h1>
    @include('front.components.posts_home_page', ['posts' => $posts]) --}}

    {{-- Customers Logo --}}
    {{-- <h1>-Customer Logos-</h1>
    @include('front.components.customer_logo', ['customers' => $customers]) --}}

    <main class="main__content_wrapper">

        <!--TODO Start slider section -->
        <section class="hero__slider--section">
            <div class="hero__slider--activation swiper">

                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <div class="home__two--slider__items"
                                style="background: url({{ asset('storage/banner/' . $banner->big_img) }})">
                                <div class="container">
                                    <div class="slider__items--inner">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="slider__content">
                                                    <h2 class="slider__maintitle text__primary h1">
                                                        {!! $banner->title_1 !!}
                                                    </h2>
                                                    <p class="slider__desc">
                                                        {!! $banner->text !!}
                                                    </p>
                                                    <div class="header__account">
                                                        <a class="primary__btn slider__btn" href="{!! $banner->btn_url !!}">
                                                            {!! $banner->btn_text !!}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="hero__slider--thumbnail text-right"
                                                    style="background-color:transparent;">
                                                    <img class="slider__layer--img style2"
                                                        src="{{ asset('storage/banner/' . $banner->small_img) }}"
                                                        alt="slider-img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <!--TODO End slider section -->

        <!--TODO Start about section -->
        <section class="about__Section section--padding">
            <div class="container">
                <div class="row align-items-center" style="text-align:justify; transform: translatex(-3%);">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__thumbnail padding__left position-relative">
                            <img src="{{ asset('front/img/other/about.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__content padding__left">
                            <h3 class="about__content--subtitle">About</h3>
                            <h2 class="about__content--title">Enhancing Your Natural Glow</h2>
                            <p class="about__content--desc">
                                Welcome to Radiant Beauty, where we believe that every individual possesses their unique
                                radiance waiting to be unveiled. Our salon is dedicated to enhancing your natural beauty,
                                empowering you to embrace your authentic self. Step into a haven of tranquility and indulge
                                in a personalized journey of self-care and rejuvenation.
                            </p>
                            <p>
                                Our highly skilled team of beauty experts is committed to delivering exceptional service and
                                tailored treatments that cater to your specific needs. From revitalizing facials and
                                expertly crafted hairstyling to meticulous nail art and soothing massages, we offer a
                                comprehensive range of services to enhance your appearance and nurture your well-being.
                            </p>
                            <a class="about__conten--btn primary__btn"
                                href="{{ route('front.about', app()->getLocale()) }}">More about</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TODO End about section -->

        <!--TODO  Services start -->
        <section class="team__section" style="padding-bottom: 2%;">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">Services</h2>
                </div>
                <div class="team__container d-flex">
                    <div class="row" style="justify-content: center; align-items:center; margin: 0 auto">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/service1.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Facial Treatments</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/service2.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Body Waxing</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/service3.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Nail Care and Art</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/service4.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Eyebrow Shapin</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/service5.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Makeup Application</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/service6.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Massage Therapy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--TODO  Services end -->

        <!--TODO Start counter banner section -->
        <div class="counterup__banner--section counterup__banner__bg2" id="funfactId">
            <div class="container">
                <div class="row row-cols-1 align-items-center">
                    <div class="col">
                        <div
                            class="counterup__banner--inner position__relative d-flex align-items-center justify-content-between">
                            <div class="counterup__items text-center"
                                style="display:flex; flex-direction: column; justify-content: center; align-items: center;">
                                <h2 class="counterup__title">
                                    Triumphs of our Salon
                                </h2>
                                <span class="counterup__number js-counter" data-count="80">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">
                                    Marvels of our Salon
                                </h2>
                                <span class="counterup__number js-counter" data-count="100">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">
                                    Insights into our Salon's Success
                                </h2>
                                <span class="counterup__number js-counter" data-count="80">0</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">
                                    Wonders
                                </h2>
                                <span class="counterup__number js-counter" data-count="70">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--TODO End counter banner section -->

        <!-- TODO Cta copy -->
        <section class="advice__banner--section" style="padding-top: 5%; padding-bottom: 5%;">
            <div class="advice__banner--box position-relative">
                <img class="advice__banner--thumbnail height_260 border-radius-5" style="width: 100%;"
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

        <!-- TODO Why choose us start -->
        <section class="team__section" style="padding-bottom: 2%;">
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
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w2.png') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">Relaxation and Pampering</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center team__items-hover">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w3.png') }}"
                                        alt="team img">
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

        <!--TODO Start blog section -->
        <section class="blog__section blog__section--bg " style="padding-top: 4%; padding-bottom: 3%;">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Blog</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($newses as $news)
                            <div class="swiper-slide">
                                <article class="blog__card">
                                    <div class="blog__card--thumbnail">
                                        <a class="blog__card--thumbnail__link"
                                            href="{{ route('front.single_blog', ['locale' => app()->getLocale(), 'slug' => $news->slug]) }}">
                                            <img class="blog__card--thumbnail__img"
                                                src="{{ asset('storage/news/' . $news->img) }}" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="blog__card--content height1">
                                        <h3 class="blog__card--title">
                                            <a
                                                href="{{ route('front.single_blog', ['locale' => app()->getLocale(), 'slug' => $news->slug]) }}">
                                                {!! $news->title !!}
                                            </a>
                                        </h3>
                                        <p style="text-align: justify;">
                                            {!! $news->text !!}
                                        </p>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
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
                    </div>
                </div>
            </div>
        </section>
        <!--TODO End blog section -->

        <!-- TODO Cal to action 2 start-->
        <section class="newsletter__section" style="margin: 5% 0 5% 0;">
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
        <section class="contact__section  d-flex" id="contact1" style="padding-bottom: 5%;">
            <div class="main__contact--area" style="justify-content: center; align-items: center; margin: 0 auto;">
                <div class="contact__form">
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
                    const scrollToY = redSpanTopOffset - windowHeight / 3; // Adjust the value as needed

                    window.scrollTo({
                        top: scrollToY,
                        behavior: 'smooth'
                    });
                }
            });
        </script>
    @endpush
@endsection
