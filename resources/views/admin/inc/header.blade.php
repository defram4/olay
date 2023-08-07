<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                    data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Left Section -->
        <div class="d-flex">
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">{{ app()->getLocale() }}</span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200"
                         aria-labelledby="page-header-user-dropdown">
                        @foreach(getLangs() as $lang)
                            <a class="dropdown-item"
                               href="{{ url(substr_replace(request()->path(), $lang->code, 0, 2)) }}">
                                {{ $lang->code }}
                            </a>
                            <div class="dropdown-divider"></div>
                        @endforeach

                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">{{ auth()->user()->name }}</span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200"
                         aria-labelledby="page-header-user-dropdown">
                        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                        <a class="dropdown-item" href="{{ url('/') }}">
                            <i class="si si-home mr-5"></i> {{ __('Front') }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"
                           href="{{ route('admin.user_details_show', ['locale' => app()->getLocale()]) }}">
                            <i class="si si-wrench mr-5"></i> {{ __('Settings') }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout', ['locale' => app()->getLocale()]) }}"
                              method="POST" class="d-none">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{ route('logout', ['locale' => app()->getLocale()]) }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="si si-logout mr-5"></i> {{ __('Logout') }}
                        </a>

                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
    </div>
    <!-- END Header Content -->
</header>
