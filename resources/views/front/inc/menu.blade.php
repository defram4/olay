 <!-- Start header area -->
 <header class="header__section header__transparent">
     <div class="main__header position__relative header__sticky">
         <div class="container">
             <div class="main__header--inner d-flex justify-content-between align-items-center">
                 <div class="offcanvas__header--menu__open ">
                     <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                         <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                             viewBox="0 0 512 512">
                             <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                 stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                         </svg>
                         <span class="visually-hidden">Offcanvas Menu Open</span>
                     </a>
                 </div>
                 <!-- Menu header md -->
                 <div class="main__logo">
                     <h1 class="main__logo--title"><a class="main__logo--link"
                             href="{{ route('front.index', app()->getLocale()) }}">
                             <img class="main__logo--img" src="{{ asset('front/img/logo/nav-logo.png') }}"
                                 alt="logo-img">
                         </a></h1>
                 </div>
                 <div class="header__menu d-none d-lg-block">
                     <nav class="header__menu--navigation">
                         <ul class="header__menu--wrapper d-flex">
                             <li class="header__menu--items">
                                 <a class="header__menu--link active" href="index.html">
                                     Home
                                 </a>
                             </li>
                             <li class="header__menu--items">
                                 <a class="header__menu--link"
                                     href="{{ route('front.about', app()->getLocale()) }}">About Us </a>
                             </li>
                             <li class="header__menu--items">
                                 <a class="header__menu--link" href="{{ route('front.service', app()->getLocale()) }}">
                                     Services
                                 </a>
                                 <ul class="header__sub--menu">
                                     <li class="header__sub--menu__items"><a href=""
                                             class="header__sub--menu__link">Body waxing</a></li>
                                     <li class="header__sub--menu__items"><a href=""
                                             class="header__sub--menu__link">Nail care and art</a></li>
                                     <li class="header__sub--menu__items"><a href=""
                                             class="header__sub--menu__link">Massage therapy</a></li>
                                     <li class="header__sub--menu__items"><a href=""
                                             class="header__sub--menu__link">Makeup application</a></li>
                                     <li class="header__sub--menu__items"><a href=""
                                             class="header__sub--menu__link">Eyebrow shapin</a></li>
                                 </ul>
                             </li>
                             <li class="header__menu--items">
                                 <a class="header__menu--link" href="{{ route('front.project', app()->getLocale()) }}">
                                     Projects
                                 </a>
                             </li>
                             <li class="header__menu--items">
                                 <a class="header__menu--link" href="{{ route('front.blog', app()->getLocale()) }}">
                                     Blog
                                 </a>
                             </li>
                             <li class="header__menu--items">
                                 <a class="header__menu--link" href="{{ route('front.contact', app()->getLocale()) }}">
                                     Contacts
                                 </a>
                             </li>
                             <li class="header__menu--items">
                                 <a class="header__menu--link">Language
                                 </a>
                                 <ul class="header__sub--menu">
                                     <li class="header__sub--menu__items"><a class="header__sub--menu__link">Română</a>
                                     </li>
                                     <li class="header__sub--menu__items"><a class="header__sub--menu__link">Русский</a>
                                     </li>
                                     <li class="header__sub--menu__items"><a class="header__sub--menu__link">English</a>
                                     </li>
                                 </ul>
                             </li>
                         </ul>
                     </nav>
                 </div>
                 <div class="header__account">
                     <a class="primary__btn slider__btn" href="{{ route('front.contact', app()->getLocale()) }}">
                         Contact Us
                     </a>
                 </div>
                 <!-- Menu header md end -->
             </div>
         </div>
     </div>
 </header>
 <div class="predictive__search--box ">
     <div class="predictive__search--box__inner">
         <h2 class="predictive__search--title">Search Products</h2>
         <form class="predictive__search--form" action="#">
             <label>
                 <input class="predictive__search--input" placeholder="Search Here" type="text">
             </label>
             <button class="predictive__search--button text-white" aria-label="search button"><svg
                     class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                     height="25.443" viewBox="0 0 512 512">
                     <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                         stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                     <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                         stroke-width="32" d="M338.29 338.29L448 448" />
                 </svg> </button>
         </form>
     </div>
     <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
         <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
             height="30.443" viewBox="0 0 512 512">
             <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="32" d="M368 368L144 144M368 144L144 368" />
         </svg>
     </button>
 </div>

 <!-- Start Telephone header menu -->
 <div class="offcanvas__header">
     <div class="offcanvas__inner">
         <div class="offcanvas__logo">
             <a class="offcanvas__logo_link" href="index.html">
                 <img src="{{ asset('front/img/logo/nav-logo.png') }}" alt="Logo-img" width="155" height="36">
             </a>
             <button class="offcanvas__close--btn" data-offcanvas>close</button>
         </div>
         <!-- Menu telephone start -->
         <nav class="offcanvas__menu">
             <ul class="offcanvas__menu_ul">
                 <li class="offcanvas__menu_li">
                     <a class="offcanvas__menu_item" href="{{ route('front.index', app()->getLocale()) }}">Home</a>
                 </li>
                 <li class="offcanvas__menu_li">
                     <a class="offcanvas__menu_item" href="{{ route('front.about', app()->getLocale()) }}">About
                         Us</a>
                 </li>
                 <li class="offcanvas__menu_li">
                     <a class="offcanvas__menu_item"
                         href="{{ route('front.service', app()->getLocale()) }}">Services</a>
                     <ul class="offcanvas__sub_menu">
                         <li class="offcanvas__sub_menu_li"><a href="single_service.html"
                                 class="offcanvas__sub_menu_item">Body waxing</a></li>
                         <li class="offcanvas__sub_menu_li"><a href="single_service.html"
                                 class="offcanvas__sub_menu_item">Nail care and art</a></li>
                         <li class="offcanvas__sub_menu_li"><a href="single_service.html"
                                 class="offcanvas__sub_menu_item">
                                 Massage therapy</a></li>
                         <li class="offcanvas__sub_menu_li"><a href="single_service.html"
                                 class="offcanvas__sub_menu_item">Makeup application</a></li>
                         <li class="offcanvas__sub_menu_li"><a href="single_service.html"
                                 class="offcanvas__sub_menu_item">Eyebrow shapin</a></li>
                     </ul>
                 </li>
                 <li class="offcanvas__menu_li">
                     <a class="offcanvas__menu_item"
                         href="{{ route('front.project', app()->getLocale()) }}">Projects</a>
                 </li>
                 <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                         href="{{ route('front.blog', app()->getLocale()) }}">Blog</a></li>
                 <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                         href="{{ route('front.contact', app()->getLocale()) }}">Contacts</a></li>
                 <li class="offcanvas__menu_li">
                     <a class="offcanvas__menu_item">
                         Language
                     </a>
                     <ul class="offcanvas__sub_menu">
                         <li class="offcanvas__sub_menu_li">
                             <a class="offcanvas__sub_menu_item">
                                 Română
                             </a>
                         </li>
                         <li class="offcanvas__sub_menu_li">
                             <a class="offcanvas__sub_menu_item">
                                 Русский
                             </a>
                         </li>
                         <li class="offcanvas__sub_menu_li">
                             <a class="offcanvas__sub_menu_item">
                                 English
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- Menu telephone end -->
     </div>
 </div>
 <!-- End Telephone header menu -->
