<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index,follow">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('admin.inc.styles')
    @stack('style')
</head>
<body class="font-sans antialiased">
@include('sweetalert::alert')
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">

    <!--Sidebar-->
@include('admin.inc.sidebar')
<!--END mSidebar-->
    <!-- Header -->
@include('admin.inc.header')
<!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
{{--        @include('admin.inc.widget')--}}
    </main>

    <!-- END Main Container -->

    <!-- Footer -->
@include('admin.inc.footer')
<!-- END Footer -->
</div>
@include('admin.inc.scripts')
@stack('script')
</body>
</html>
