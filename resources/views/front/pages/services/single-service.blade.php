@extends('layouts.front_second')
@section('title', $serviceMeta->title)
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
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__thumbnail padding__left position-relative">
                            <img src="{{ asset('front/img/other/about.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__content padding__left">
                            <h3 class="about__content--subtitle">
                                Revitalize Your Skin
                            </h3>
                            <h2 class="about__content--title">
                                Experience the Ultimate Rejuvenation for a Radiant Complexion
                            </h2>
                            <p class="about__content--desc">
                                Welcome to our esteemed beauty salon, where we invite you to immerse yourself in the
                                transformative world of our signature facial treatment. Our dedicated team of skilled
                                estheticians has crafted a pampering experience designed to bring out the natural beauty and
                                radiance of your skin. <br>
                                Indulge in our Signature Facial, a luxurious and comprehensive skincare ritual that combines
                                expert techniques with premium products to deliver remarkable results. From the moment you
                                step into our serene oasis, you'll be enveloped in a soothing ambiance, ready to embark on a
                                journey of profound relaxation and skin revitalization.
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
        <section class="img__width--text__section" style="padding-bottom: 5%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="img__width--banner">
                            <img class="border-radius-5 and" src="{{ asset('front/img/banner/why.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="img__width--right__sidebar">
                            <div class="img__width--content">
                                <h2 class="img__width--content__title">
                                    Why Choose Us
                                </h2>
                                <p class="img__width--content__desc">
                                    When it comes to your beauty needs, choosing our salon is the ultimate choice for a
                                    transformative and unforgettable experience. Our expert team of skilled professionals is
                                    dedicated to providing exceptional service, ensuring you leave feeling confident and
                                    beautiful. With a personalized approach, we take the time to understand your unique
                                    desires and tailor our treatments to exceed your expectations. We pride ourselves on
                                    using only the highest quality products, ensuring optimal results and the utmost care
                                    for your hair, skin, and nails. <br> <br> Offering a comprehensive range of services,
                                    from cutting-edge hairstyling to luxurious spa treatments, we have everything you need
                                    to enhance your natural beauty. Step into our relaxing and welcoming salon environment,
                                    where hygiene and client satisfaction are our top priorities. Choose us and indulge in a
                                    beauty experience that will leave you feeling pampered, refreshed, and ready to conquer
                                    the world.
                                </p>


                                <ul class="img__width--content__logo d-flex">
                                    <li class="img__width--logo__list">
                                        <span><img src="{{ asset('front/img/icon/icon-img1.webp') }}" alt="icon"></span>
                                        <span class="img__width--logo__text">Expertise and Skill</span>
                                    </li>
                                    <li class="img__width--logo__list">
                                        <span><img src="{{ asset('front/img/icon/icon-img2.webp') }}" alt="icon"></span>
                                        <span class="img__width--logo__text">Relaxation and Pampering</span>
                                    </li>
                                    <li class="img__width--logo__list">
                                        <span><img src="{{ asset('front/img/icon/icon-img3.webp') }}" alt="icon"></span>
                                        <span class="img__width--logo__text">Range of Services</span>
                                    </li>
                                    <li class="img__width--logo__list">
                                        <span><img src="{{ asset('front/img/icon/icon-img4.webp') }}" alt="icon"></span>
                                        <span class="img__width--logo__text"> High-care</span>
                                    </li>
                                    <li class="img__width--logo__list">
                                        <span><img src="{{ asset('front/img/icon/icon-img5.webp') }}" alt="icon"></span>
                                        <span class="img__width--logo__text">Trends and Innovation</span>
                                    </li>
                                    <li class="img__width--logo__list">
                                        <span><img src="{{ asset('front/img/icon/icon-img6.webp') }}" alt="icon"></span>
                                        <span class="img__width--logo__text">Personalized Attention</span>
                                    </li>
                                </ul>

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
             container">
            <div class="section__heading text-center mb-40">
                <h2 class="section__heading--maintitle">
                    Our projects
                </h2>
            </div>
            <div class="product__section--inner">
                <div class="row mb--n30">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr1.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr1-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Redefining Glamour
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Step into our Beauty Haven and experience a world of luxurious pampering, expert
                                    styling, and personalized beauty treatments that will leave you feeling like
                                    royalty.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr2.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr2-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Glow Up Projec
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Embark on a transformative journey with our Glow Up Project, where our skilled team of
                                    beauty professionals will enhance your natural beauty, leaving you with a radiant and
                                    confident glow.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr3.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr3-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Beauty Revamp
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Discover the power of a Beauty Revamp as our talented stylists and beauty experts work
                                    their magic to revitalize your look, bringing out your inner beauty and redefining your
                                    style.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr4.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr4-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Empowering You Beauty
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Project Confidence is all about empowering you to embrace your unique beauty. Let our
                                    salon be the canvas where you unleash your confidence.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr5.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr5-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Beauty Makeover Project
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Join us on The Beauty Makeover Project, where our team of skilled professionals will
                                    work closely with you to unveil your true potential. Experience a personalized beauty
                                    journey that will leave you looking and feeli.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr6.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr6-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Beauty Renaissance
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Indulge in our Beauty Renaissance project and let us guide you through a revitalizing
                                    experience that transcends physical transformation. Discover a renewed sense of self and
                                    embrace the beauty that lies within.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr7.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr7-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Beauty Evolution
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Witness the transformative power of our Beauty Evolution project, where our experts will
                                    guide you through a personalized journey of self-discovery and help you embrace a new
                                    and improved version of yourself.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 custom-col mb-30">
                        <article class="product__card">
                            <div class="product__card--thumbnail">
                                <a class="product__card--thumbnail__link display-block">
                                    <img class="product__card--thumbnail__img product__primary--img"
                                        src="{{ asset('front/img/product/main-product/pr8.png') }}" alt="product-img">
                                    <img class="product__card--thumbnail__img product__secondary--img"
                                        src="{{ asset('front/img/product/main-product/pr8-1.png') }}" alt="product-img">
                                </a>
                            </div>
                            <div class="product__card--content text-center height">
                                <h3 class="product__card--title">
                                    <a>
                                        Redefining Elegance
                                    </a>
                                </h3>
                                <p style="text-align: justify;">
                                    Join Project Glam and experience the epitome of elegance and sophistication. Let our
                                    salon's talented team of beauty professionals elevate your style with exquisite
                                    treatments and personalized services that exude glamour.
                                </p>
                            </div>
                        </article>
                    </div>


                </div>

            </div>

        </section>
        <!-- TODO Our Project end -->

        <!--TODO Start testimonial section -->
        <section class="testimonial__section testimonial__bg " style="padding: 5% 0 0% 0;">
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

        <!--TODO  Services start -->
        <section class="team__section" style="padding-bottom: 5%; padding-top:5%;">
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

        <!-- TODO Contact Form start -->
        <section class="contact__section  d-flex">
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
