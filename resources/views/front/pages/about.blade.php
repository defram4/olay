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
                                        About
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
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__thumbnail padding__left position-relative">
                            <img src="{{ asset('front/img/other/about.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__content padding__left">
                            <h3 class="about__content--subtitle">
                                About
                            </h3>
                            <h2 class="about__content--title">
                                Enhancing Your Natural Glow
                            </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TODO End about section -->

        <!--TODO Start video banner section -->
        <section class="video__banner--section position-relative section--padding pb-0">
            <img class="video__banner--section__thumbnail" src="{{ asset('front/img/banner/banner-about.jpg') }}"
                alt="img">
            <div class="video__banner--wrapper">
                <div class="container">
                    <div class="video__banner--inner d-flex align-items-end">
                        <div class="video__banner--box position-relative">
                            <img class="video__banner--box__thumbnail" src="{{ asset('front/img/banner/banner3.jpg') }}"
                                alt="banner-img">
                            <div class="bideo__play">
                                <a class="bideo__play--icon glightbox"
                                    href="https://www.youtube.com/watch?v=-FnrCZJw6TE&pp=ygUYYmVhdXR5IHNhbG9uIHNob3J0IHZpZGVv"
                                    data-gallery="video">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.5 9.13398C17.1667 9.51888 17.1667 10.4811 16.5 10.866L1.5 19.5263C0.833335 19.9112 9.70611e-07 19.4301 1.00426e-06 18.6603L1.76136e-06 1.33975C1.79501e-06 0.569945 0.833335 0.0888201 1.5 0.47372L16.5 9.13398Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Video Play</span>
                                </a>
                            </div>
                        </div>
                        <div class="video__banner--content">
                            <h2 class="video__banner--content__title">
                                Beauty products that really work
                            </h2>
                            <p class="video__banner--content__desc">
                                Our formulations have proven efficacy, contain organic
                                ingredients only and are 100% cruelty free
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TODO End video banner section -->

        <!-- TODO Cta copy -->
        <section class="advice__banner--section" style="padding-top: 5%;">
            <div class="advice__banner--box position-relative">
                <img class="advice__banner--thumbnail height_260 border-radius-5" style="width: 100%;"
                    src="{{ asset('front/img/banner/cta1.jpg') }}" alt="banner">
                <div class="advice__banner--content style2">
                    <h2 class="advice__banner--title">
                        Transform Your Look Today!
                    </h2>
                    <p class="advice__banner--desc mb-30">
                        Book an Appointment and Unleash Your True Beauty
                    </p>
                    <a class="advice__banner--btn primary__btn" href="{{ route('front.contact', app()->getLocale()) }}">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>
        <!-- TODO Cta copy -->

        <!-- TODO Our Project start -->
        <section class="product__section section--paddfront
             container"
            style="padding-bottom:5%; padding-top:3%;">
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
                                        {!! $project->text !!}
                                    </p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                    <div class="product__load--more text-center">
                        <a class="load__more--btn primary__btn" href="{{ route('front.project', app()->getLocale()) }}">All
                            projects</a>
                    </div>
                </div>

            </div>

        </section>
        <!-- TODO Our Project end -->

        <!-- TODO Cal to action 2 start-->
        <section class="newsletter__section">
            <div class="container">
                <div class="newsletter__inner--style2 newsletter__bg2"
                    style="background: url({{ asset('front/img/banner/cta2.png') }})">
                    <div class="newsletter__style2--content text-center">
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

        <!--TODO Start team members section -->
        <section class="team__section " style="padding-top: 4%;">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">
                        Our Team
                    </h2>
                </div>
                <div class="team__container">
                    <div class="row mb--n30" style="display:flex; justify-content:center;">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/team1.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">
                                        Helen Gregori
                                    </h3>
                                    <span class="team__content--subtitle">
                                        CEO
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/team2.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">
                                        Marine Del-Piero
                                    </h3>
                                    <span class="team__content--subtitle">
                                        Hairdresser
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/team2.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">
                                        Marine Del-Piero
                                    </h3>
                                    <span class="team__content--subtitle">
                                        Hairdresser
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img" src="{{ asset('front/img/other/team2.jpg') }}"
                                        alt="team img">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">
                                        Marine Del-Piero
                                    </h3>
                                    <span class="team__content--subtitle">
                                        Hairdresser
                                    </span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--TODO End team members section -->

        <!--TODO Start testimonial section -->
        <section class="testimonial__section testimonial__bg " style="padding: 5% 0 2% 0;">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">What Clients Are Saying</h2>
                </div>
                <div class="testimonial__section--inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial__items">
                                    <div class="testimonial__author d-flex align-items-center">
                                        <div class="testimonial__author__thumbnail">
                                            <img src="{{ asset('storage/testimonial/' . $testimonial->img) }}"
                                                alt="testimonial-img">
                                        </div>
                                        <div class="testimonial__author--text">
                                            <h3 class="testimonial__author--title">{!! $testimonial->name !!}</h3>
                                            <span class="testimonial__author--subtitle">{!! $testimonial->function !!}</span>
                                        </div>
                                    </div>
                                    <div class="testimonial__content">
                                        <p class="testimonial__desc">
                                            {!! $testimonial->text !!}
                                        </p>
                                        <img class="testimonial__vector--icon"
                                            src="{{ asset('front/img/icon/vector-icon.webp') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="testimonial__pagination swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!--TODO End testimonial section -->

    </main>



    {{-- Customers Logo --}}
    {{-- @include('front.components.customer_logo', ['customers' => $customers]) --}}
@endsection
