<!-- Start footer section -->
<footer class="footer__section footer__bg">
    <div class="container">
        <div class="main__footer " style="padding: 2% 0 2% 0">
            <div class="row d-flex" style="justify-content: space-between;">

                <div class="col-lg-2 col-md-4">
                    <div class="footer__widget">
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.index', app()->getLocale()) }}">
                                    <img class="main__logo--img" src="{{ asset('front/img/logo/nav-logo.png') }}"
                                        alt="logo-img">
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text">
                                    Oregano, "Meghino St."
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="tel: +373689453923">
                                    Phone
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text" href="mailto:olay@mail.com">
                                    olay@mail.com
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <ul class="social__share footer__social d-flex">
                                    @foreach ($socials as $social)
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank">
                                                <img src="{{ asset('storage/social/' . $social->img) }}" alt="Icons">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title">Menu <button class="footer__widget--button"
                                aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.index', app()->getLocale()) }}">
                                    Home
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.about', app()->getLocale()) }}">
                                    About Us
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.project', app()->getLocale()) }}">
                                    Projects
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.blog', app()->getLocale()) }}">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title">Services <button class="footer__widget--button"
                                aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                    transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list">
                                @foreach ($services as $service)
                                    <a class="footer__widget--menu__text"
                                        href="{{ route('front.single.service', ['locale' => app()->getLocale(), 'slug' => $service->slug]) }}">
                                        {{ $service->title }}
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title">
                            Help
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.faq', app()->getLocale()) }}">
                                    FAQ
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.terms', app()->getLocale()) }}">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.privacy', app()->getLocale()) }}">
                                    Privacy & Cookies
                                </a>
                            </li>
                            <li class="footer__widget--menu__list">
                                <a class="footer__widget--menu__text"
                                    href="{{ route('front.contact', app()->getLocale()) }}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom--inenr d-flex justify-content-center align-items-center">
                <p class="copyright__content mb-0">
                    <span class="text__secondary">
                        © 2023
                    </span> Powered by
                    <a class="copyright__content--link" target="_blank"
                        href="{{ route('front.index', app()->getLocale()) }}">
                        RoyalSystems
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End footer section -->
