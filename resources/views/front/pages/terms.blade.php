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
        <section class="faq__section " style="padding-top: 5%;">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one border-bottom" id="accordionExample">
                        <h3 class="face__step--title mb-30">General Terms and Conditions</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Liability and Responsibility
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                While we take every precaution to provide a safe and pleasant experience,
                                                our salon cannot be held liable for any damages, injuries, or loss of
                                                personal belongings that may occur during your visit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Client Conduct
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                We maintain a respectful and inclusive environment for all clients and
                                                staff. Any inappropriate or disrespectful behavior towards our team or other
                                                clients may result in refusal of service and termination of the appointment.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Privacy and Data Protection
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                We respect your privacy and handle your personal information in accordance
                                                with applicable data protection laws. We use your information solely for
                                                appointment management, communication, and salon-related purposes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Service Guarantee
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                We strive to provide excellent services. If, for any reason, you are not
                                                satisfied with your service, please let us know within 48 hours, and we will
                                                make every effort to resolve the issue to your satisfaction.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Intellectual Property
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                All content, including logos, images, and text, on our salon's website and
                                                social media platforms are protected by intellectual property rights and may
                                                not be reproduced, modified, or used without our prior written consent.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Modifications to Terms
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                Our salon reserves the right to update or modify these terms and conditions
                                                at any time. Any changes will be effective immediately upon posting on our
                                                website or other communication channels.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div></div>
                </div>
                <div class="faq__section--inner">
                    <div class="face__step one border-bottom" id="accordionExample">
                        <h3 class="face__step--title mb-30">Booking and Appointments</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Appointment Confirmation
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                When you book an appointment with our beauty salon, you will receive a
                                                confirmation either by email or SMS. It is your responsibility to review the
                                                details and notify us promptly if any changes or corrections are needed.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Late Arrival Policy
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                We understand that unexpected delays may occur. However, arriving
                                                excessively late for your appointment may result in a shortened or
                                                rescheduled session to ensure fairness to other clients and maintain our
                                                schedule.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Cancellation and No-Show Policy
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                We kindly request a minimum of 24 hours' notice for any appointment
                                                cancellations. Failure to cancel or reschedule within this timeframe, as
                                                well as no-shows, may result in a cancellation fee being charged.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Rescheduling and Availability
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                If you need to reschedule your appointment, please inform us as soon as
                                                possible. We will make every effort to accommodate your request, subject to
                                                availability.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Payment Terms
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                Payment for services is due at the time of the appointment. We accept cash,
                                                credit cards, or any other payment methods specified by our salon. In the
                                                case of package purchases or gift vouchers, the specific terms and
                                                conditions outlined at the time of purchase apply.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Gift Voucher Terms
                                                <span class="accordion__items--button__icon">
                                                    <svg class="accordion__items--button__icon--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.355" height="20.394"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </h2>
                                        <div class="accordion__items--body">
                                            <p class="accordion__items--body__desc">
                                                Gift vouchers are non-refundable and cannot be redeemed for cash. They must
                                                be presented at the time of redemption, and any unused portion may not be
                                                carried forward or exchanged for cash.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
        <!-- TODO FAQ section end -->

        <!-- TODO Cal to action 2 start-->
        <section class="newsletter__section " style="padding-bottom: 5%;">
            <div class="container">
                <div class="newsletter__inner--style2 newsletter__bg2">
                    <div class="newsletter__style2--content text-center">
                        <h2 class="newsletter__style2--content__title">Book Your Beauty Transformation Today!</h2>
                        <p class="newsletter__style2--content__desc">Unlock Your Radiance and Experience Unforgettable
                            Makeovers.</p>
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
    </main>

    {{-- @foreach ($terms as $term)

        <h4>{{ $term->title }}</h4>
        <p>{{ $term->text }}</p>

    @endforeach --}}


@endsection
