<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15" style="height: 90px">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a href="{{ route('admin.index', ['locale' => app()->getLocale()]) }}">
                        <img src="{{ asset('/admin/media/photos/Logo_rs.png') }}" alt="" width="100%">
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{ asset('/front//media/avatars/avatar15.jpg') }}"
                    alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="#!">
                    <img class="img-avatar" src="{{ asset('/admin/media/avatars/avatar15.jpg') }}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase"
                            href="{{ route('admin.user_details_show', ['locale' => app()->getLocale()]) }}">{{ auth()->user()->name }}</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark"
                            href="{{ route('logout', ['locale' => app()->getLocale()]) }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="si si-logout"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout', ['locale' => app()->getLocale()]) }}"
                            method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">

                <li>
                    <a href="{{ route('admin.widget.index', ['locale' => app()->getLocale()]) }} ">
                        <i class="fa fa-life-saver"></i>
                        <span class="sidebar-mini-hide">{{ __('Support') }}</span>
                    </a>
                </li>

                <li>
                    <a href="https://instructions.royalsystems.md" target="_blank">
                        <i class="fa-question fa "></i>
                        <span class="sidebar-mini-hide">{{ __('Instructions') }}</span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('admin.inbox', ['locale' => app()->getLocale()]) }}">
                        <i class="fa fa-envelope-open"></i>
                        <span class="sidebar-mini-hide">{{ __('Inbox') }}</span>
                    </a>
                </li>
                <hr>
                @can('is-admin')
                    <li>
                        <a href="{{ route('admin.langs.index', ['locale' => app()->getLocale()]) }}"><i
                                class="fa fa-language"></i><span class="sidebar-mini-hide">{{ __('Languages') }}</span></a>
                    </li>

                    <li>
                        <a class="{{ Route::currentRouteName() == 'admin.pages.index' ? 'active' : '' }}"
                            href="{{ route('admin.pages.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-chain"></i>
                            <span class="sidebar-mini-hide">{{ __('Pages') }}</span>
                        </a>
                    </li>

                    <li>
                        <a class="{{ Route::currentRouteName() == 'admin.socials.index' ? 'active' : '' }}"
                            href="{{ route('admin.socials.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-share-square-o" aria-hidden="true"></i>
                            <span class="sidebar-mini-hide">{{ __('Social media') }}</span>
                        </a>
                    </li>

                    <hr>
                    <li>
                        <a href="{{ route('admin.banners.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-newspaper-o"></i>
                            <span class="sidebar-mini-hide">
                                {{ __('Banner') }}
                            </span>
                        </a>
                    </li>

                    {{-- <li>
                        <a href="{{ route('admin.blog', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-newspaper-o"></i><span class="sidebar-mini-hide">{{ __('Blog') }}</span></a>
                    </li> --}}

                    <li>
                        <a class="{{ Route::currentRouteName() == 'admin.newses.index' ? 'active' : '' }}"
                            href="{{ route('admin.newses.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa-regular fa-newspaper"></i>
                            <span class="sidebar-mini-hide">{{ __('Blog') }}</span>
                        </a>
                    </li>

                    <li>
                        <a class="{{ Route::currentRouteName() == 'admin.services.index' ? 'active' : '' }}"
                            href="{{ route('admin.services.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-chain"></i>
                            <span class="sidebar-mini-hide">{{ __('Service') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'admin.projects.index' ? 'active' : '' }}"
                            href="{{ route('admin.projects.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-rocket"></i>
                            <span class="sidebar-mini-hide">{{ __('Projects') }}</span>
                        </a>
                    </li>

                    {{-- <li>
                        <a class="{{ Route::currentRouteName() == 'admin.teams.index' ? 'active' : '' }}"
                            href="{{ route('admin.teams.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span class="sidebar-mini-hide">{{ __('Team') }}</span>
                        </a>
                    </li> --}}

                    {{-- <li>
                        <a class="{{ Route::currentRouteName() == 'admin.galleries.index' ? 'active' : '' }}"
                            href="{{ route('admin.galleries.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <span class="sidebar-mini-hide">{{ __('Gallery') }}</span>
                        </a>
                    </li> --}}

                    {{-- <li>
                        <a class="{{ Route::currentRouteName() == 'admin.customerLogos.index' ? 'active' : '' }}"
                            href="{{ route('admin.customerLogos.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <span class="sidebar-mini-hide">{{ __('Customer logo') }}</span>
                        </a>
                    </li> --}}

                    {{-- <li>
                        <a class="{{ Route::currentRouteName() == 'admin.partnerLogos.index' ? 'active' : '' }}"
                            href="{{ route('admin.partnerLogos.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <span class="sidebar-mini-hide">{{ __('Partner logo') }}</span>
                        </a>
                    </li> --}}

                    {{-- <li>
                        <a class="{{ Route::currentRouteName() == 'admin.reviews.index' ? 'active' : '' }}"
                            href="{{ route('admin.reviews.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-user"></i>
                            <span class="sidebar-mini-hide">{{ __('Reviews') }}</span>
                        </a>
                    </li> --}}

                    <li>
                        <a class="{{ Route::currentRouteName() == 'admin.testimonials.index' ? 'active' : '' }}"
                            href="{{ route('admin.testimonials.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-user"></i>
                            <span class="sidebar-mini-hide">{{ __('Testimonial') }}</span>
                        </a>
                    </li>

                    {{-- <li>
                        <a class="{{ Route::currentRouteName() == 'admin.why_chooses.index' ? 'active' : '' }}"
                            href="{{ route('admin.why_chooses.index', ['locale' => app()->getLocale()]) }}">
                            <i class="fa fa-user"></i>
                            <span class="sidebar-mini-hide">{{ __('Why choose us') }}</span>
                        </a>
                    </li> --}}

                    {{-- FAQ Terms Cookies --}}
                    <li
                        class="{{ request()->segment(3) == 'faq' || request()->segment(3) == 'term' || request()->segment(3) == 'policy' ? 'open' : '' }}">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-question"></i><span
                                class="sidebar-mini-hide">{{ __('Faq | Terms | Cookie') }}</span></a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.faqs.index', ['locale' => app()->getLocale()]) }}">
                                    <span class="sidebar-mini-hide">{{ __('FAQ') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.terms.index', ['locale' => app()->getLocale()]) }}">
                                    <span class="sidebar-mini-hide">{{ __('Terms & Conditions') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.policies.index', ['locale' => app()->getLocale()]) }}">
                                    <span class="sidebar-mini-hide">{{ __('Policy & Cookies') }}</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{-- TODO:COMENT THIS li WHEN YOU FINISH PROJECT --}}
                    <li
                        class="{{ request()->segment(3) == 'contents' || request()->segment(3) == 'images' ? 'open' : '' }}">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i
                                class="si si-book-open"></i><span
                                class="sidebar-mini-hide">{{ __('Web content') }}</span></a>
                        <ul>

                            <li>
                                <a class="{{ Route::currentRouteName() == 'admin.contents.index' ? 'active' : '' }}"
                                    href="{{ route('admin.contents.index', ['locale' => app()->getLocale()]) }}">
                                    <span class="sidebar-mini-hide">{{ __('Content') }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteName() == 'admin.images.index' ? 'active' : '' }}"
                                    href="{{ route('admin.images.index', ['locale' => app()->getLocale()]) }}">
                                    <span class="sidebar-mini-hide">{{ __('Images') }}</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <hr>

                    {{--                      TODO:UNCOMENT WHEN YOU DO ADMIN 2 --}}

                    {{--                    <li --}}
                    {{--                        class="{{ (request()->segment(3) == 'pages') || (request()->segment(3) == 'contents') || (request()->segment(3) == 'images') ||  (request()->segment(3) == 'customer-logos')  ? 'open' : '' }} --}}
                    {{--                            "> --}}
                    {{--                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-book-open"></i><span --}}
                    {{--                                class="sidebar-mini-hide">{{ __('Front Pages') }}</span></a> --}}
                    {{--                        <ul> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.menu_footer')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.menu_footer', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Menu Footer') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.home')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.home', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Home page') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.about')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.about', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('About Us') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.service')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.service', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Services') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.single-service')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.single-service', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Single-Services') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.project')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.project', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Projects') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.single-project')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.single-project', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Single-Project') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}


                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.blog')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.blog', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Blog') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.single-post')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.single-post', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Single-Blog') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.contact')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.contact', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Contact') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.faq')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.faq', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Faq') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.privacy')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.privacy', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Privacy & Cookies') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                            <li> --}}
                    {{--                                <a class="{{ (Route::currentRouteName() == 'admin2.terms')  ? 'active' : '' }}" --}}
                    {{--                                   href="{{ route('admin2.terms', ['locale' => app()->getLocale()]) }}"> --}}
                    {{--                                    <span class="sidebar-mini-hide">{{ __('Terms & Conditions') }}</span> --}}
                    {{--                                </a> --}}
                    {{--                            </li> --}}

                    {{--                        </ul> --}}
                    {{--                    </li> --}}
                @endcan

            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->




</nav>
<!-- END Sidebar -->
