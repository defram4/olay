@extends('layouts.front_second')
{{-- @section('title', $newsMeta->title) --}}
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
                                            href="{{ route('front.single_news', ['locale' => app()->getLocale(), 'slug' => $news->slug]) }}">
                                            <img class="blog__card--thumbnail__img"
                                                src="{{ asset('storage/news/' . $news->img) }}" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="blog__card--content height1">
                                        <h3 class="blog__card--title">
                                            <a
                                                href="{{ route('front.single_news', ['locale' => app()->getLocale(), 'slug' => $news->slug]) }}">
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


    </main>
@endsection



{{-- <small> --}}
{{--    {{ \Carbon\Carbon::parse($news->created_at)->format('d-m-Y') }} --}}
{{-- </small> --}}
{{-- <h2>{!!  $news->title !!}</h2> --}}
{{-- <h5> --}}
{{--    {!!  $news->sub_title  !!} --}}
{{-- </h5> --}}

{{-- img - <img src="{{ asset('storage/news/'. $news->img ) }}" alt=""> --}}

{{-- cover img - <img src="{{ asset('storage/news/'. $news->cover_img ) }}" alt=""> --}}

{{-- <p> --}}
{{--    {!! $news->text !!} --}}
{{-- </p> --}}

{{-- @foreach ($news->gallery as $img) --}}
{{--    <div class="col-md-4 position-relative" style="padding-top: 2%"> --}}
{{--        <img src="{{ asset('storage/news/'. $img->img) }}" alt="gallery img" class="img-fluid"> --}}
{{--    </div> --}}
{{-- @endforeach --}}
