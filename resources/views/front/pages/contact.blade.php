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
                            <h1 class="breadcrumb__content--title">Get in touch</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a
                                        href="{{ route('front.index', app()->getLocale()) }}">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Contact</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->

        <!-- TODO Contact section start -->
        <section class="feature__section section--padding">
            <div class="container">
                <div class="feature__inner d-flex justify-content-between">
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">
                            <img src="{{ asset('front/img/other/feature1.jpg') }}" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Adress</h2>
                            <p class="feature__content--desc">Oregano, "Meghino St. 48"</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">
                            <img src="{{ asset('front/img/other/feature2.jpg') }}" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Phone</h2>
                            <p class="feature__content--desc">+3647 35648 3526</p>
                        </div>
                    </div>
                    <div class="feature__items d-flex align-items-center">
                        <div class="feature__icon">
                            <img src="{{ asset('front/img/other/feature3.jpg') }}" alt="img">
                        </div>
                        <div class="feature__content">
                            <h2 class="feature__content--title h3">Mail</h2>
                            <p class="feature__content--desc">olay@mail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TODO Contact section end -->

        <!-- TODO Contact Form start -->
        <section class="contact__section  d-flex" style="padding-bottom: 5%;">
            <div class="main__contact--area container"
                style="justify-content: center; align-items: center; margin: 0 auto;">
                <div class="contact__form">
                    <h3 class="contact__form--title mb-30">Contact</h3>
                    {{-- <h3 class=" mb-30" style="color:#3c3837;">Get in Touch for Expert Consultation</h3> --}}
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

        <!-- Start contact map area -->
        <div class="contact__map--area col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <iframe style=""
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21751.49961716119!2d28.82800534999999!3d47.04145815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sro!2s!4v1691501847420!5m2!1sro!2s"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <!-- End contact map area -->

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




    {{--    CONTACT FORM --}}

    {{-- <form id="contact"
          action="{{ route('front.contact.storage', app()->getLocale()) }}"
          method="post">
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   autocomplete="off">
            <span>
             name
            </span>
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <input type="text"
                   name="email"
                   value="{{ old('email') }}"
                   autocomplete="off">

            <span>
                                  email
                                </span>
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <input type="text"
                   name="title"
                   value="{{ old('title') }}"
                   autocomplete="off">

            <span>
                                 subject
                                </span>
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <div class="form-group">
                                <textarea name="message"
                                          autocomplete="off">{{ old('message') }}</textarea>

                <span>
                                 message
                                </span>
            </div>
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <button type="submit"
                    name="submit">
                <strong>
                   submit
                </strong>
            </button>
        </div>
    </form>

    @if ($errors->any())
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="aler alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif --}}
    {{--  END  CONTACT FORM --}}
@endsection
