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
                            <img src="{{ asset('storage/news/' . $news->img) }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__content padding__left">
                            <h3 class="about__content--subtitle">{!! $news->title !!}</h3>
                            <h2 class="about__content--title">{!! $news->sub_title !!}</h2>
                            <p class="about__content--desc">
                                {!! $news->text !!}
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
                                            href="{{ route('front.single_news', ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}">
                                            <img class="blog__card--thumbnail__img"
                                                src="{{ asset('storage/news/' . $news->img) }}" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="blog__card--content height1">
                                        <h3 class="blog__card--title">
                                            <a
                                                href="{{ route('front.single_news', ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}">
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
