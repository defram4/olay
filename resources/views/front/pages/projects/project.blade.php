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
                                Our Transformative Creations
                            </h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items">
                                    <a href="{{ route('front.index', app()->getLocale()) }}">
                                        Home
                                    </a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span>Projects</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->

        <!-- TODO Our Project start -->
        <section class="product__section section--paddfront
             container"
            style="padding-bottom:5%; padding-top:5%;">
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
                </div>

            </div>

        </section>
        <!-- TODO Our Project end -->

        <!-- TODO Cal to action 2 start-->
        <section class="newsletter__section"
            style="background: url({{ asset('front/img/banner/cta2.png') }}); background-size:cover;">
            <div class="container">
                <div class="newsletter__inner--style2 ">

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

        <!--TODO Start testimonial section -->
        <section class="testimonial__section  " style="padding: 5% 0 2% 0;">
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

    </main>
@endsection


{{-- @forelse($projects as $project) --}}
{{--    --}}
{{--    img - {{ asset('storage/project/'. $project->img ) }} --}}
{{--    --}}
{{--    link - {{ route('front.single.project', ['locale'=>app()->getLocale(), 'slug'=>$project->slug]) }} --}}
{{--    --}}
{{--    title - {{ $project->title }} --}}
{{--    --}}
{{--    subtitle - {{ $project->sub_title }} --}}
{{--    --}}
{{--    text -  {{ $project->text }} --}}

{{--    {{ \Carbon\Carbon::parse($project->created_at)->format('d-m-Y') }} --}}

{{-- @empty --}}
{{--    <h1>No Projects Loaded</h1> --}}
{{-- @endforelse --}}
