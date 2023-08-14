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
                            <h1 class="breadcrumb__content--title">Terms of Service: Your Agreement with Our Beauty Salon
                            </h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a
                                        href="{{ route('front.index', app()->getLocale()) }}">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Terms</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->
        <!-- TODO FAQ section start -->
        <section class="faq__section " style="padding-top: 4%;">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one border-bottom" id="accordionExample">
                        {{-- <h3 class="face__step--title mb-30">General Terms and Conditions</h3> --}}
                        <div class="row">
                            @foreach ($terms as $term)
                                <div class="col-lg-12" style="margin-bottom: 1%;">
                                    <div class="accordion__container">
                                        <div class="accordion__items">
                                            <h2 class="accordion__items--title">
                                                <button class="faq__accordion--btn accordion__items--button">
                                                    {!! $term->title !!}
                                                    <span class="accordion__items--button__icon">
                                                        <svg class="accordion__items--button__icon--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="25.355"
                                                            height="20.394" viewBox="0 0 512 512">
                                                            <path
                                                                d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </h2>
                                            <div class="accordion__items--body">
                                                <p class="accordion__items--body__desc">
                                                    {!! $term->text !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div></div>
                </div>

            </div>
        </section>
        <!-- TODO FAQ section end -->

        <!-- TODO Cal to action 2 start-->
        <section class="newsletter__section" style="margin: 0% 0 4% 0;">
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
    </main>

    {{-- @foreach ($terms as $term)

        <h4>{{ $term->title }}</h4>
        <p>{{ $term->text }}</p>

    @endforeach --}}
@endsection
