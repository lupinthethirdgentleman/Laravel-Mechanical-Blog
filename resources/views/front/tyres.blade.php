@extends('front.base')

@section('body')
    <body class="tyres inner" >
@endsection

@section('content')

    <div class="header-image">
        <img src="assets_anwarhx/img/th.jpg" alt="header-image">
    </div>
    <div class="container">
        <h1>Tyres</h1>
        <img src="assets_anwarhx/img/tb.jpg" alt="body-image">
        <h2>See our range of services below: </h2>
        <div class="icons">
            <div class="icon1 icon">
                Huge Range of New & Used Tyres
            </div>
            <div class="icon2 icon">
                New & Used Alloy wheels to suit All
            </div>
            <div class="icon3 icon">
                Wheel Alignment Suspension Repairs
            </div>
            <div class="icon4 icon">
                Battery to Suit All Make & Models
            </div>
        </div>
    </div>

    <script>
        $('.li3').addClass('active');
    </script>
    <div class="darkbg">
        <div class="hover1 hover">
            <h2>Huge range of New And Used tyres</h2>
            <img src="assets_anwarhx/img/modals/th1.jpg">
            <p>At Just Jap Auto, we have a huge range of New and Used Tyres. With Prices Starting form $30.00 (New) you will be sure to get the absolute best price. Call us now to get a quote.</p>
            <small>We can get a great deal on leading brands</small>

        </div>
        <div class="hover2 hover">
            <h2>New And Used Alloy wheels</h2>
            <img src="assets_anwarhx/img/modals/th2.jpg">
            <p>New Or Used.</p>
            <p>We have Browse wheel and Wheels from all the leading brands.</p>
        </div>
        <div class="hover3 hover">
            <h2>Wheel Alignment Suspension Repairs</h2>
            <h4>It Is Important to do a wheel alignment once every year or every time you put on a new Set of tyres.</h4>
            <img src="assets_anwarhx/img/modals/th3.jpg">
            <p><strong>Why the wheel alignment needs to be done?</strong></p>
            <p>The wheel alignment needs to be done because over time the wheel angles change. This happens as a result of deforming and wear of various rubber bushings in the vehicle suspension and sagging of the springs. Besides that, the wheel alignment needs to be checked after hitting large potholes and curbs, as well as after accidents. The wheel alignment also needs to be done after replacement any of the major suspension or steering components. Similarly, it should be done after lowering or rising the suspension.</p>
            <p><strong>What are the symptoms of improper wheel alignment?</strong></p>
            – the steering wheel is off center when driving straight<br>
            – the vehicle pulls to one side when driving on a straight and level road<br>
            – the vehicle doesn’t hold the road well, feels unstable, wanders from side to side<br>
            – tires screeching when turning<br>
            – tires wear unevenly<br>
            <small>With the latest 3D Wheel Alignment system, It's ensured that your Wheel setup to factory Specs.</small>
        </div>
        <div class="hover4 hover">
            <h2>Battery to Suit All make and Model</h2>
            <img src="assets_anwarhx/img/modals/th4.jpg">
            <p>We have battery to suite all makes and models</p>
            <small>Free Fitments Service available for most makes and Models. Conditions Apply</small>
            <a class="mct" href="tel:08 8369 1899">Call us now to ask price and availability</a>
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