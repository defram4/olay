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
                                                        {!! $banner->title_2 !!}
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
                                    <a class="product__card--thumbnail__link display-block">
                                        <img class="product__card--thumbnail__img product__primary--img"
                                            src="{{ asset('storage/project/' . $project->img_1) }}" alt="product-img1">
                                        <img class="product__card--thumbnail__img product__secondary--img"
                                            src="{{ asset('storage/project/' . $project->img_2) }}" alt="product-img2">
                                    </a>
                                </div>
                                <div class="product__card--content text-center height">
                                    <h3 class="product__card--title">
                                        <a>
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
        <section class="blog__section blog__section--bg " style="padding-top: 5%; padding-bottom: 3%;">
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
                                            href="{{ route('front.blog', app()->getLocale()) }}">
                                            <img class="blog__card--thumbnail__img"
                                                src="{{ asset('storage/news/' . $news->img) }}" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="blog__card--content height1">
                                        <h3 class="blog__card--title">
                                            <a
                                                href="{{ route('front.single.project', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}">
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

        <!-- TODO Contact Form start -->
        <section class="contact__section  d-flex" style="padding-bottom: 5%;">
            <div class="main__contact--area" style="justify-content: center; align-items: center; margin: 0 auto;">
                <div class="contact__form">
                    <h3 class="contact__form--title mb-30">Contact</h3>
                    <h3 class=" mb-30" style="color:#3c3837;">Get in Touch for Expert Consultation</h3>
                    <form class="contact__form--inner" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input1">First Name <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="firstname" id="input1"
                                        placeholder="Your First Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input2">Last Name <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="lastname" id="input2"
                                        placeholder="Your Last Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input3">Phone Number <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="number" id="input3"
                                        placeholder="Phone number" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input4">Email <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="email" id="input4"
                                        placeholder="Email" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input4">Subject <span
                                            class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="text" id="input4"
                                        placeholder="Subject" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact__form--list mb-15">
                                    <label class="contact__form--label" for="input5">Write Your Message <span
                                            class="contact__form--label__star">*</span></label>
                                    <textarea class="contact__form--textarea" name="message" id="input5" placeholder="Write Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="contact__form--btn primary__btn" type="submit"> <span>Submit Now</span></button>
                    </form>
                </div>
            </div>
        </section>
        <!-- TODO Contact Form end -->
    </main>
@endsection
