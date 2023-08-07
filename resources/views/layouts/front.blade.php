<!doctype html>
<html lang="{{ app()->getLocale() }}">


@include('front.inc.header')

<style>
    /* TODO: change collor for cookies btn */
       /*Cookie Consent Begin*/
    #cookieConsent {
        background-color: rgba(20, 20, 20, 0.8);
        min-height: 26px;
        font-size: 14px;
        color: #ccc;
        line-height: 26px;
        padding: 8px 0 8px 30px;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        display: none;
        z-index: 9999;
    }

    #cookieConsent a {
        color: #4B8EE7;
        text-decoration: none;
    }

    #closeCookieConsent {
        float: right;
        display: inline-block;
        cursor: pointer;
        height: 20px;
        width: 20px;
        margin: -15px 0 0 0;
        font-weight: bold;
    }

    #closeCookieConsent:hover {
        color: #FFF;
    }

    #cookieConsent a.cookieConsentOK {
        background-color: #75dab4;
        color: #000;
        display: inline-block;
        border-radius: 5px;
        padding: 0 20px;
        cursor: pointer;
        float: right;
        margin: 0 60px 0 10px;
    }

    #cookieConsent a.cookieConsentOK:hover {
        background-color: #fcfcfc;
    }


    /*Cookie Consent End*/
</style>

<body>


<div id="cookieConsent">
    <div id="closeCookieConsent">x</div>
    {{ __('To provide you with the best website experience, we use ') }}
    <a href="{{ route('front.privacy', app()->getLocale()) }}" target="_blank">
        {{ __('cookies.') }}
    </a>
    <a class="cookieConsentOK">{{ __('Accept') }}</a>
</div>


@include('front.inc.menu')

@yield('content')

@include('front.inc.footer')


<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script>
    $(document).ready(function () {
        let cookieStatus = Cookies.get('cookieStatus');
        if (!cookieStatus) {
            setTimeout(function () {
                $("#cookieConsent").fadeIn(200);
            }, 4000);
        }
        $(".cookieConsentOK").click(function () {
            $("#cookieConsent").fadeOut(200);
            Cookies.set('cookieStatus', true, {expires: (365 * 2)})
        });
        $("#closeCookieConsent").click(function () {
            $("#cookieConsent").fadeOut(200);
        });
    })
</script>

</body>
</html>
