<!DOCTYPE html>
<html lang="en-us" class="no-js">

<head>
    <meta charset="utf-8">
    <title>Account Disabled</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Madeon08">

    <!-- ============== Resources style ============== -->
    <link rel="stylesheet" href="{{ asset('admin/css/style-flat.css') }}"/>

    <!-- Modernizr runs quickly on page load to detect features -->
    <script src="{{ asset('front/js/modernizr.js') }}"></script>
</head>

<body>

<div id="container">

    <div class="overlay"></div>

    <div class="item-title">

        <div id="message"></div>

        <div class="link-bottom">
            <a class="link-icon" href="{{ route('admin.index', ['locale' => app()->getLocale()]) }}"><i
                    class="icon ion-ios-home"></i> HOME</a>
            {{--            <a class="link-icon" href="mailto:someone@example.com"><i class="icon ion-ios-compose"></i> WRITE US</a>--}}
        </div>

    </div>

</div>

<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
<!-- ********** Resources jQuery ********** -->
<!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->

<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.easings.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('admin/js/main-flat.js') }}"></script>

</body>

</html>
