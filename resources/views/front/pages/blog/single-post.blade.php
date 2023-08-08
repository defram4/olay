@extends('layouts.front_second')
@section('title', $postMeta->title)
@section('content')

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <div class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">Beauty Unveiled</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a
                                        href="{{ route('front.index', app()->getLocale()) }}">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Blog details</span></li>
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
                            <img src="{{ asset('front/img/other/about-blog.jpg') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__content padding__left">
                            <h3 class="about__content--subtitle">About post</h3>
                            <h2 class="about__content--title">Discover the Magic Behind Effective Skincare</h2>
                            <p class="about__content--desc">
                                Learn about the superhero ingredients that can make a significant difference in your
                                skincare routine. From the moisture-binding magic of hyaluronic acid to the
                                collagen-boosting properties of peptides, we will uncover the science behind these
                                remarkable ingredients. <br> <br>
                                Discover the remarkable benefits of antioxidant-rich botanical extracts like green tea and
                                vitamin C, which protect your skin from environmental damage and promote a youthful
                                complexion. Dive into the world of retinol, a powerful ingredient that aids in reducing fine
                                lines, improving texture, and promoting cellular turnover.
                            </p>
                            <!-- <a class="about__conten--btn primary__btn" href="about.html">VIEW MORE</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TODO End about section -->

        <!--TODO Start blog section -->
        <section class="blog__section blog__section--bg" style="padding-top: 5%; padding-bottom: 5%;">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Explore Beauty Secrets and Expert Advice</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="single_blog.html">
                                        <img class="blog__card--thumbnail__img"
                                            src="{{ asset('front/img/blog/blog1.jpg') }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="blog__card--content height1">
                                    <h3 class="blog__card--title">
                                        <a href="">
                                            Unlock the Secrets to Flawless Skin
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        Dive into the world of skincare science as our experts demystify key ingredients and
                                        their transformative effects, guiding you towards a radiant complexion.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="single_blog.html">
                                        <img class="blog__card--thumbnail__img"
                                            src="{{ asset('front/img/blog/blog2.png') }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="blog__card--content height1">
                                    <h3 class="blog__card--title">
                                        <a href="">
                                            Makeup Mastery
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        Unlocking the Secrets to Achieving Flawless Looks for Every Occasion"
                                        Elevate your makeup game with expert tips, tricks, and tutorials, empowering you to
                                        create flawless looks that enhance your natural beauty and leave a lasting
                                        impression.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="single_blog.html">
                                        <img class="blog__card--thumbnail__img"
                                            src="{{ asset('front/img/blog/blog3.png') }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="blog__card--content height1">
                                    <h3 class="blog__card--title">
                                        <a href="">
                                            Hair Transformations
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        Explore a plethora of hair transformations and find the perfect style to express
                                        your individuality, with insights and inspiration from our skilled hairstylists.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="single_blog.html">
                                        <img class="blog__card--thumbnail__img"
                                            src="{{ asset('front/img/blog/blog4.png') }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="blog__card--content height1">
                                    <h3 class="blog__card--title">
                                        <a href="">
                                            Nail Art Extravaganza
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        Unleashing Creativity with the Latest Trends and Stunning Designs"
                                        Delve into the world of nail art as we showcase the hottest trends and provide
                                        step-by-step tutorials to achieve stunning designs that will make your nails a
                                        masterpiece.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="single_blog.html">
                                        <img class="blog__card--thumbnail__img"
                                            src="{{ asset('front/img/blog/blog5.png') }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="blog__card--content height1">
                                    <h3 class="blog__card--title">
                                        <a href="">
                                            Escape and Indulge
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        Embark on a journey of ultimate relaxation as we delve into the world of luxurious
                                        spa treatments, offering insights and recommendations for rejuvenating experiences.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="single_blog.html">
                                        <img class="blog__card--thumbnail__img"
                                            src="{{ asset('front/img/blog/blog6.png') }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="blog__card--content height1">
                                    <h3 class="blog__card--title">
                                        <a href="">
                                            Hair Color Chronicles
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        From Subtle to Bold, Discover the Hottest Color Trends of the Season"
                                        Journey through the captivating world of hair color as we unveil the season's
                                        hottest trends, showcasing stunning transformations that will inspire your next
                                        salon visit.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="single_blog.html">
                                        <img class="blog__card--thumbnail__img"
                                            src="{{ asset('front/img/blog/blog7.png') }}" alt="blog-img">
                                    </a>
                                </div>
                                <div class="blog__card--content height1">
                                    <h3 class="blog__card--title">
                                        <a href="">
                                            The Path to Radianc
                                        </a>
                                    </h3>
                                    <p style="text-align: justify;">
                                        Skincare Routines and Tips for Achieving a Youthful and Glowing Complexion"
                                        Discover the secrets to radiant skin with expert skincare routines, product
                                        recommendations, and tips that will revitalize your complexion and unveil your inner
                                        glow.
                                    </p>
                                </div>
                            </article>
                        </div>
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


    </main>


@endsection


{{-- <small> --}}
{{--    {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }} --}}
{{-- </small> --}}

{{-- <h1>{{ $post->title }}</h1> --}}
{{-- <h3>{{ $post->sub_title }}</h3> --}}

{{-- <img src="{{ storage('post', $post->img) }}" alt=""> --}}

{{-- <p>{!! $post->text !!}</p> --}}



{{--    Relevant Posts --}}

{{-- <br><br><br> --}}

{{-- <h1>Relevant Posts</h1> --}}

{{-- @foreach ($relevantPosts as $relevantPost) --}}

{{--    <a href="{{ route('front.single.blog', ['locale'=>app()->getLocale(), 'slug'=>$post->slug]) }}"> --}}

{{--        <img src="{{ storage('post', $relevantPost->img) }}" alt=""> --}}

{{--        <h5>{{ $relevantPost->title }}</h5> --}}

{{--        <h6>{{ $relevantPost->sub_title }}</h6> --}}

{{--    </a> --}}

{{-- @endforeach --}}
