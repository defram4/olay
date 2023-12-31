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
                            <h1 class="breadcrumb__content--title">Beauty Reimagined</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items">
                                    <a href="{{ route('front.index', app()->getLocale()) }}">
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span>Project</span></li>
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
                        <div class="about__thumbnail position-relative" style="float:left; padding: 0 2% 2% 0;">
                            <img src="{{ asset('storage/project/' . $project->img_1) }}" alt="img">
                        </div>
                        <div class="about__content">
                            <h3 class="about__content--subtitle">{{ $project->title }}</h3>
                            <h2 class="about__content--title">{{ $project->sub_title }}</h2>
                            <p class="about__content--desc">
                                {{ $project->text }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--TODO End about section -->

        <!--TODO Start collection Photo section -->
        <section class="shop__collection--section" style="padding-bottom: 3%;">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Gallery</h2>
                </div>
                <div class="shop__collection--column5 swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="shop__collection--card text-center">
                                <a class="shop__collection--link">
                                    <img class="shop__collection--img" src="{{ asset('front/img/project/project-s1.jpg') }}"
                                        alt="icon-img">
                                    <!-- <h3 class="shop__collection--title mb-0">Necklaces</h3> -->
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop__collection--card text-center">
                                <a class="shop__collection--link">
                                    <img class="shop__collection--img" src="{{ asset('front/img/project/project-s2.jpg') }}"
                                        alt="icon-img">
                                    <!-- <h3 class="shop__collection--title mb-0">Necklaces</h3> -->
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop__collection--card text-center">
                                <a class="shop__collection--link">
                                    <img class="shop__collection--img" src="{{ asset('front/img/project/project-s3.jpg') }}"
                                        alt="icon-img">
                                    <!-- <h3 class="shop__collection--title mb-0">Necklaces</h3> -->
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop__collection--card text-center">
                                <a class="shop__collection--link">
                                    <img class="shop__collection--img" src="{{ asset('front/img/project/project-s4.jpg') }}"
                                        alt="icon-img">
                                    <!-- <h3 class="shop__collection--title mb-0">Necklaces</h3> -->
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop__collection--card text-center">
                                <a class="shop__collection--link">
                                    <img class="shop__collection--img" src="{{ asset('front/img/project/project-s5.jpg') }}"
                                        alt="icon-img">
                                    <!-- <h3 class="shop__collection--title mb-0">Necklaces</h3> -->
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shop__collection--card text-center">
                                <a class="shop__collection--link">
                                    <img class="shop__collection--img"
                                        src="{{ asset('front/img/project/project-s6.jpg') }}" alt="icon-img">
                                    <!-- <h3 class="shop__collection--title mb-0">Necklaces</h3> -->
                                </a>
                            </div>
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
        <!--TODO End collection Photo section -->
    </main>
@endsection

{{-- <h1> --}}
{{--    {{ $project->title }} --}}
{{-- </h1> --}}

{{-- <img src="{{ asset('storage/project/'. $project->img ) }}" alt="Image"> --}}

{{-- <h4> --}}
{{--    {{ $project->sub_title }} --}}
{{-- </h4> --}}
{{-- <p> --}}
{{--    {{ $project->text }} --}}
{{-- </p> --}}
{{-- <p> --}}
{{--    {{ \Carbon\Carbon::parse($project->created_at)->format('d-m-Y') }} --}}
{{-- </p> --}}

{{-- <span> --}}
{{--        <a href="{{ route('front.single.project', ['locale'=>app()->getLocale(), 'slug'=>$project->slug]) }}"> --}}
{{--            Link to single project --}}
{{--        </a> --}}
{{--    </span> --}}
