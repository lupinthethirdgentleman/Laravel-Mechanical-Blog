@extends('front.base')

@section('body')
    <body class="toyota-spares inner" >
@endsection


@section('content')

    <div class="header-image">
        <img src="assets_anwarhx/img/sh.jpg" alt="header-image">
    </div>
    <div class="container">
        <h1>Toyota Spare Parts</h1>
        <img src="assets_anwarhx/img/sb.jpg" alt="body-image">
        <h2>See our range of services below: </h2>
        <h2>Car Parts and Auto Parts</h2>
        <div class="icons">
            <div>
                <div class="icon1 icon">
                    Linked to multimple supplier
                </div>
                <div class="icon2 icon">
                    Genuine and Aftermarket Parts
                </div>
                <div class="icon3 icon">
                    <br>On site Fittings available
                </div>
                <div class="icon4 icon">
                    Free Car Removal Services
                </div>
            </div>

        </div>
    </div>

    <script>
        $('.li5').addClass('active');
    </script>
    <div class="darkbg">
        <div class="hover1 hover">
            <h2>Linked to multimple supplier</h2>
            <img src="assets_anwarhx/img/modals/sh1.jpg">
            <p><strong>“A Powerful Online Parts Search Coming Soon.” ...in the main while Give us a call!</strong></p>
            <a class="mct" href="tel:08 8369 1899">Call now</a>

        </div>
        <div class="hover2 hover">
            <h2>Genuine and Aftermarket Parts</h2>
            <img src="assets_anwarhx/img/modals/sh2.jpg">
            <p><strong>“A Powerful Online Parts Search Coming Soon.” ...in the main while Give us a call!</strong></p>
            <a class="mct" href="tel:08 8369 1899">Call now</a>
        </div>
        <div class="hover3 hover">
            <h2>On site Fittings available</h2>
            <img src="assets_anwarhx/img/modals/sh3.jpg">
            <p><strong>“A Powerful Online Parts Search Coming Soon.” ...in the main while Give us a call!</strong></p>
            <a class="mct" href="tel:08 8369 1899">Call now</a>
        </div>
        <div class="hover4 hover">
            <h2>Free Car Removal Services</h2>
            <img src="assets_anwarhx/img/modals/sh4.jpg">
            <p><strong>“A Powerful Online Parts Search Coming Soon.” ...in the main while Give us a call!</strong></p>
            <a class="mct" href="tel:08 8369 1899">Call now</a>
        </div>
    </div>

@endsection


@section('footer')
    <div class="container">
        <div class="abs"><a href="#">Book Online</a></div>
        <a class="cta" href="tel:08 8369 1899">Call Now</a>

        <p align="justify"></p>
        <div class="social">
            <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="http://www.justjapautocare.com.au/#"><i class="fa fa-rss" aria-hidden="true"></i></a>
        </div>
        <div class="copyright">© 2019 Just Jap auto care center. All rights reserved. </div>
    </div>
@endsection