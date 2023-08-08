@extends('layouts.front_second')
@section('title', $meta->title)
@section('content')

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <div class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title">Expert Insights, Tips, and Trends</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items">
                                    <a href="{{ route('front.index', app()->getLocale()) }}">
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span>Blogs</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->

        <!--TODO Start blog section -->
        <section class="blog__section blog__section--bg" style="padding-top: 5%; padding-bottom: 5%;">
            <div class="container">
                {{-- <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Explore Beauty Secrets and Expert Advice</h2>
                </div> --}}
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" style="cursor:default;">
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
                                    <a class="blog__card--thumbnail__link" style="cursor:default;">
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
                                    <a class="blog__card--thumbnail__link" style="cursor:default;">
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
                                    <a class="blog__card--thumbnail__link" style="cursor:default;">
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
                                    <a class="blog__card--thumbnail__link" style="cursor:default;">
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
                                    <a class="blog__card--thumbnail__link" style="cursor:default;">
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
                                    <a class="blog__card--thumbnail__link" style="cursor:default;">
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


    {{-- Blog --}}
    {{-- <h1>-Blog-</h1>
    @include('front.components.posts_home_page', ['posts' => $posts]) --}}



@endsection


{{-- @forelse($posts as $post) --}}

{{--    img - {{ asset('storage/post/'. $post->img ) }} --}}

{{--    link - {{ route('front.single.blog', ['locale'=>app()->getLocale(), 'slug'=>$post->slug]) }} --}}

{{--    title - {{ $post->title }} --}}

{{--    excerpt - {{ $post->excerpt }} --}}

{{--    subtitle - {{ $post->sub_title }} --}}

{{--    text - {!! $post->text !!} --}}

{{-- @empty --}}
{{--    <h4>No posts added</h4> --}}
{{-- @endforelse --}}
