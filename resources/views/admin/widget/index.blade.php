{{--@include('admin.inc.styles')--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .email .bottom .row.expanded {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .email .bottom .row.expanded input,
    .email .bottom .row.expanded textarea,
    .email .bottom .row.expanded button {
        margin-bottom: 10px;
    }

    .avatar.me {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 10px;
        background-image: url('https://images.royalsystems.co/img/rs/rsw.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    body {
        align-items: center;
        background: #F1EEF1;
        display: flex;
        font-family: sans-serif;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .me {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 10px;
        background-image: url('https://images.royalsystems.co/img/rs/rsw.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    .container {
        position: absolute;
        bottom: 1%;
        top: 1%;
        /*left: 0;*/
    }

    /*.email {*/
    /*    background: #DEDBDF;*/
    /*    border-radius: 16px;*/
    /*    height: 32px;*/
    /*    overflow: hidden;*/
    /*    position: relative;*/
    /*    width: 162px;*/
    /*    -webkit-tap-highlight-color: transparent;*/
    /*    transition: width 300ms cubic-bezier(0.4, 0.0, 0.2, 1),*/
    /*    height 300ms cubic-bezier(0.4, 0.0, 0.2, 1),*/
    /*    box-shadow 300ms cubic-bezier(0.4, 0.0, 0.2, 1),*/
    /*    border-radius 300ms cubic-bezier(0.4, 0.0, 0.2, 1);*/
    /*}*/


    .email {
        position: relative;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #ff0000;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }


    .email:not(.expand) {
        cursor: pointer;
    }

    .email:not(.expand):hover {
        background: #C2C0C2;
    }

    .from {
        position: absolute;
        transition: opacity 200ms 100ms cubic-bezier(0.0, 0.0, 0.2, 1);
    }

    .from-contents {
        display: flex;
        flex-direction: row;
        transform-origin: 0 0;
        transition: transform 300ms cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .to {
        opacity: 0;
        position: absolute;
        transition: opacity 100ms cubic-bezier(0.4, 0.0, 1, 1);
    }

    .to-contents {
        transform: scale(.55);
        transform-origin: 0 0;
        transition: transform 300ms cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .avatar {
        border-radius: 12px;
        height: 24px;
        left: 6px;
        position: relative;
        top: 4px;
        width: 24px;
    }

    .name {
        font-size: 14px;
        line-height: 32px;
        margin-left: 10px;
    }

    .top {
        background: #ff0000;
        display: flex;
        flex-direction: row;
        height: 70px;
        transition: height 300ms cubic-bezier(0.4, 0.0, 0.2, 1);
        /*width: 350px;*/
    }

    .avatar-large {
        border-radius: 21px;
        height: 42px;
        margin-left: 12px;
        position: relative;
        top: 14px;
        width: 42px;
    }

    .name-large {
        color: #efd8ef;
        font-size: 16px;
        line-height: 70px;
        margin-left: 20px;
    }

    .x-touch {
        align-items: center;
        align-self: center;
        cursor: pointer;
        display: flex;
        height: 50px;
        justify-content: center;
        margin-left: auto;
        width: 50px;
    }

    .x {
        background: #ffffff;
        border-radius: 10px;
        height: 20px;
        position: relative;
        width: 20px;
    }

    .x-touch:hover .x {
        background: #676767;
    }

    .line1 {
        background: #000000;
        height: 12px;
        position: absolute;
        transform: translateX(9px) translateY(4px) rotate(45deg);
        width: 2px;
    }

    .line2 {
        background: #000000;
        height: 12px;
        position: absolute;
        transform: translateX(9px) translateY(4px) rotate(-45deg);
        width: 2px;
    }

    .bottom {
        background: #FFF;
        color: #444247;
        font-size: 14px;
        height: 200px;
        padding-top: 5px;
        /*width: 300px;*/
    }

    .row {
        align-items: center;
        display: flex;
        flex-direction: row;
        height: 60px;
    }

    .twitter {
        margin-left: 16px;
        height: 30px;
        position: relative;
        top: 0px;
        width: 30px;
    }

    .medium {
        height: 30px;
        margin-left: 16px;
        position: relative;
        width: 30px;
    }

    .link {
        margin-left: 16px;
    }

    .link a {
        color: #444247;
        text-decoration: none;
    }

    .link a:hover {
        color: #777579;
    }

    .email.expand {
        border-radius: 6px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.10), 0 6px 6px rgba(0, 0, 0, 0.16);
        height: 900px;
        width: 350px;
    }

    .expand .from {
        opacity: 0;
        transition: opacity 100ms cubic-bezier(0.4, 0.0, 1, 1);
    }

    .expand .from-contents {
        transform: scale(1.91);
    }

    .expand .to {
        opacity: 1;
        transition: opacity 200ms 100ms cubic-bezier(0.0, 0.0, 0.2, 1);
    }

    .expand .to-contents {
        transform: scale(1);
    }


</style>


<div class="container">
    <div class="top">

            <a href="{{ URL::previous() }}">
                <i class="fa fa-chevron-circle-left fa-3x" aria-hidden="true" style="color: black;padding-top: 25%;padding-left: 10%"></i>
            </a>

        <img src="{{ asset('/admin/media/photos/logo-black.png') }}" style="padding-left: 3%">

        <div class="name-large">
            <b>
                Support Royal Systems Inc.
            </b>
        </div>

    </div>

    <div class="bottom"
         style="padding-right: 10%; padding-left: 5%; padding-top: 3%; padding-bottom: 6%; height: auto;">
        <div class="row" id="email-form" style="height: auto;">
            <iframe frameborder="0"
                    scrolling="no"
                    src="https://crm.royalsystems.md/ticket-form"
                    width="800px"
                    height="800px">
            </iframe>

        </div>
    </div>

</div>

<script>
    function expandBox() {
        var emailBox = document.querySelector('.email');
        var emailForm = document.querySelector('#email-form');

        emailBox.classList.add('expand');
        emailForm.classList.add('expanded');
    }

    function collapseBox(event) {
        var emailBox = document.querySelector('.email');
        var emailForm = document.querySelector('#email-form');

        emailBox.classList.remove('expand');
        emailForm.classList.remove('expanded');

        event.stopPropagation();
    }
</script>
{{--@include('admin.inc.scripts')--}}
