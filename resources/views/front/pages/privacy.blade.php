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
                            <h1 class="breadcrumb__content--title">Protecting Your Privacy: Our Commitment to Privacy and
                                Data Protection</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a
                                        href="{{ route('front.index', app()->getLocale()) }}">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span>Privacy</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumb section -->

        <!-- TODO Privacy section start -->
        <section class="faq__section " style="padding-top: 5%;">
            <div class="container">
                <div class="faq__section--inner">
                    <div class="face__step one border-bottom" id="accordionExample">
                        <h3 class="face__step--title mb-30">Collection and Use of Personal Information</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Information We Collect
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
                                                We collect personal information such as your name, contact details, and
                                                appointment preferences when you book a service with our beauty salon. This
                                                information is necessary for scheduling appointments and providing
                                                personalized services.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Purpose of Collection
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
                                                We use the collected information to manage appointments, communicate with
                                                you regarding your bookings, and provide you with a tailored beauty
                                                experience. We may also use your information to send important updates,
                                                promotions, or relevant salon-related information, with your consent.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Data Protection
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
                                                We prioritize the security of your personal information. We implement
                                                industry-standard measures to protect your data from unauthorized access,
                                                disclosure, or misuse. Your information is stored securely and accessed only
                                                by authorized personnel.
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
                                                Third-Party Disclosure
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
                                                We do not sell, trade, or transfer your personal information to outside
                                                parties. However, we may share your information with trusted third-party
                                                service providers who assist us in operating our salon, such as online
                                                booking platforms or payment processors, strictly for salon-related
                                                purposes.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Retention Period
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
                                                We retain your personal information for as long as necessary to fulfill the
                                                purposes for which it was collected and comply with applicable legal and
                                                regulatory requirements. After this period, your data will be securely and
                                                permanently deleted.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Your Rights
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
                                                You have the right to access, update, correct, or delete your personal
                                                information. If you wish to exercise these rights or have any concerns about
                                                the handling of your data, please contact our salon directly.
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
                        <h3 class="face__step--title mb-30">Cookies and Website Analytics</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion__container">
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Use of Cookies
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
                                                Our website may use cookies to enhance your browsing experience. Cookies are
                                                small text files that are stored on your device and help us analyze website
                                                traffic, remember your preferences, and provide personalized content.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Cookie Management
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
                                                You can control and manage cookies through your browser settings. You have
                                                the option to accept or decline cookies. However, please note that disabling
                                                cookies may impact certain functionalities of our website.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Website Analytics
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
                                                We may use website analytics tools to analyze user behavior, track website
                                                performance, and improve our online services. These tools may collect
                                                anonymized data, such as IP addresses and browsing patterns, to generate
                                                aggregated insights.
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
                                                Third-Party Links
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
                                                Our website may contain links to third-party websites. We are not
                                                responsible for the privacy practices or content of these external sites. We
                                                encourage you to review their privacy policies before providing any personal
                                                information.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Children's Privacy
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
                                                Our services and website are not directed towards individuals under the age
                                                of 13. We do not knowingly collect or store personal information from
                                                children. If you believe a child has provided us with personal information,
                                                please contact us immediately.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion__items">
                                        <h2 class="accordion__items--title">
                                            <button class="faq__accordion--btn accordion__items--button">
                                                Updates to Privacy Policy
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
                                                We may update our privacy policy from time to time to reflect changes in our
                                                practices or legal requirements. We recommend reviewing our privacy policy
                                                periodically to stay informed about how we handle your personal information.
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
        <!-- TODO Privacy section end -->

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

    </main>


    {{-- @foreach ($policies as $policy)
       <h4>{{ $policy->title }}</h4>
       <p>{{ $policy->text }}</p>
   @endforeach --}}


@endsection
