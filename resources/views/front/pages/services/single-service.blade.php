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
        <section class="newsletter__section" style="padding-bottom: 5%;">
            <div class="container">
                <div class="newsletter__inner--style2 newsletter__bg2"
                    style="background: url({{ asset('front/img/banner/cta2.png') }})">
                    <div class="newsletter__style2--content text-center">
                        <h2 class="newsletter__style2--content__title">
                            Book Your Beauty Transformation Today!
                        </h2>
                        <p class="newsletter__style2--content__desc">
                            Unlock Your Radiance and Experience Unforgettable Makeovers.
                        </p>
                    </div>
                    <div class="newsletter__style2">
                        <form class="newsletter__style2--form position-relative" action="#">
                            <label>
                                <input class="newsletter__style2--input__field" placeholder="Your contact..."
                                    type="text">
                            </label>
                            <button class="newsletter__style2--button" type="submit">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M29.9952 0.623615C30.0015 0.570629 30.0019 0.518014 29.9945 0.46614C29.9935 0.458359 29.9942 0.450948 29.9929 0.443167C29.9819 0.38277 29.9602 0.325709 29.9319 0.271982C29.9289 0.266053 29.9285 0.259754 29.9255 0.253826C29.9205 0.244933 29.9125 0.240487 29.9072 0.231965C29.8959 0.214179 29.8872 0.194171 29.8735 0.177867C29.8565 0.157118 29.8359 0.141926 29.8169 0.124511C29.8065 0.115248 29.7975 0.104502 29.7868 0.0963506C29.7422 0.0618913 29.6935 0.0355836 29.6415 0.0189097C29.6322 0.0159455 29.6228 0.015575 29.6135 0.0133518C29.5695 0.00223589 29.5245 -0.00183991 29.4788 0.0007538C29.4635 0.00149486 29.4491 0.00297701 29.4338 0.00520019C29.4208 0.00742337 29.4075 0.00594116 29.3945 0.0089054L0.39103 7.21794C0.187339 7.2687 0.0333207 7.45471 0.00465061 7.68444C-0.0236861 7.91417 0.0793261 8.13982 0.263015 8.2495L8.10494 12.9408L10.5476 21.5964C10.5502 21.6056 10.5559 21.6123 10.5589 21.6212C10.5659 21.6419 10.5762 21.6605 10.5856 21.6805C10.6052 21.7227 10.6279 21.7613 10.6559 21.7961C10.6632 21.8053 10.6659 21.8172 10.6739 21.8257C10.6812 21.8335 10.6906 21.8361 10.6983 21.8435C10.7313 21.8754 10.7673 21.9009 10.8066 21.9224C10.8223 21.931 10.8359 21.9421 10.8519 21.9484C10.9066 21.971 10.964 21.9854 11.0243 21.9854C11.028 21.9854 11.0316 21.9854 11.0353 21.9854C11.095 21.9839 11.1516 21.9691 11.205 21.9458C11.2186 21.9398 11.23 21.9295 11.243 21.9224C11.2853 21.8991 11.3243 21.8709 11.3593 21.8354C11.366 21.8287 11.3747 21.8265 11.381 21.8191L15.3845 17.2953L23.1121 21.9184C23.1857 21.9625 23.2674 21.9851 23.3491 21.9851C23.4118 21.9851 23.4751 21.9721 23.5348 21.9454C23.6721 21.8846 23.7781 21.7587 23.8245 21.6023L29.9782 0.72477C29.9829 0.708467 29.9832 0.691422 29.9865 0.674748C29.9902 0.657704 29.9932 0.64103 29.9952 0.623615ZM25.8127 2.0383L8.52566 11.9311L1.91754 7.97753L25.8127 2.0383ZM24.7743 3.88317L12.2704 14.5437C12.2694 14.5444 12.2688 14.5459 12.2681 14.5467C12.2308 14.5789 12.1984 14.6185 12.1701 14.663C12.1641 14.6723 12.1584 14.6815 12.1531 14.6912C12.1474 14.7015 12.1401 14.7104 12.1348 14.7212C12.1168 14.7582 12.1038 14.7968 12.0941 14.8357C12.0938 14.8375 12.0924 14.839 12.0921 14.8409L10.986 19.438L9.12373 12.8393L24.7743 3.88317ZM11.9967 19.5388L12.8945 15.8068L14.467 16.7476L11.9967 19.5388ZM23.0597 20.6263L13.4926 14.9027L28.5244 2.08684L23.0597 20.6263Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M4.29907 29.9997C4.17239 29.9997 4.04571 29.9464 3.94836 29.84C3.75134 29.6248 3.74867 29.2731 3.94236 29.0541L8.70693 23.6711C8.90062 23.4517 9.21732 23.4495 9.41401 23.6644C9.61104 23.8797 9.6137 24.2313 9.42001 24.4503L4.65578 29.8337C4.55777 29.9445 4.42842 29.9997 4.29907 29.9997Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M12.1428 27.8176C12.0161 27.8176 11.8895 27.7642 11.7921 27.6579C11.5951 27.4426 11.5924 27.091 11.7861 26.872L16.5503 21.4893C16.7444 21.2703 17.0607 21.2677 17.2574 21.4826C17.4545 21.6979 17.4571 22.0495 17.2634 22.2685L12.4995 27.6516C12.4015 27.762 12.2722 27.8176 12.1428 27.8176Z"
                                        fill="white"></path>
                                    <path
                                        d="M2.81079 23.2369C2.68411 23.2369 2.55743 23.1835 2.46008 23.0772C2.26306 22.8619 2.26039 22.5103 2.45408 22.2913L5.93616 18.357C6.12985 18.138 6.44656 18.1354 6.64325 18.3503C6.84027 18.5656 6.84294 18.9172 6.64925 19.1362L3.1675 23.0705C3.06949 23.1813 2.94014 23.2369 2.81079 23.2369Z"
                                        fill="currentColor"></path>
                                </svg>
                            </button>
                        </form>
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
                                    <img class="team__thumb--img" src="{{ asset('front/img/icon/w4.png') }}" alt="team img">
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
                <img class="advice__banner--thumbnail height_260 border-radius-5" style="width: 100%;"
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

        <!--TODO Start blog section -->
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
        <!--TODO End blog section -->

        <!-- TODO Contact Form start -->
        <section class="contact__section  d-flex" style="padding: 0% 0 5% 0;">
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
