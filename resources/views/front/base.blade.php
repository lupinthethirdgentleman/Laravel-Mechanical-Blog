<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Auto Repair Adelaide - Just Jap Auto</title>
    <meta http-equiv="Content-Type" content="text/html;">
    <meta name="description" content="For Auto Repair Adelaide at an Affordable Price and on Time Delivery at Just Jap Auto in Adelaide, Which Provides Best Services For All Your Auto Repair .">
    <meta name="keywords" content="Auto Repair Adelaide">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="icon" href="{{asset('image/favicon.png')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets_anwarhx/css/slick.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets_anwarhx/css/slick-theme.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets_anwarhx/css/style.css')}}" media="all">

    <link href="{{asset('assets_anwarhx/css/css')}}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">

    <script async="" src="{{asset('assets_anwarhx/js/analytics.js')}}"></script>
    <script src="{{asset('assets_anwarhx/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets_anwarhx/js/slick.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}" type="text/css" charset="utf-8" />
    
    



    @yield('style')

</head>

@yield('body')

<header>
    <div class="container" style="padding-left: 0">
        <div class="logo">
            <a href="{{asset('/')}}"><img src="{{asset('assets_anwarhx/img/logo')}}/{{$contact->logo}}" alt="Just Jap Auto Care"></a>
        </div>
        
        <nav class="mainnav">
            <ul>
                <li><a class="li1" href="/" title="Home">Home</a></li>
                <li><a class="li2" href="/mechanical" title="Mechanical">Mechanical</a></li>
                <li><a class="li3" href="/tyres" title="Tyres">Tyres</a></li>
                <li><a class="li4" href="/body_works" title="Body Works">Body Works</a></li>
                <li><a class="li5" href="/toyota_spares" title="Toyota Spares">Toyota Spares</a></li>
                <li><a class="li6 {{Request::is('contact')?'active':''}}" href="/contact" title="Contact">Contact</a></li>
                <li><a class="li7 {{Request::is('stock')?'active':''}}" href="/stock" title="Stock">Stock Listings</a></li>

            </ul>
        </nav>

        <!-- <div class="bars"><i class="fa fa-bars" aria-hidden="true"></i></div>

        <div class="btrigger">
            <ul>
                <li><a class="li1 active" href="/" title="Home">Home</a></li>
                <li><a class="li2" href="/mechanical" title="Mechanical">Mechanical</a></li>
                <li><a class="li3" href="/tyres" title="Tyres">Tyres</a></li>
                <li><a class="li4" href="/body_works" title="Body Works">Body Works</a></li>
                <li><a class="li5" href="/toyota_spares" title="Toyota Spares">Toyota Spares</a></li>
                <li><a class="li6" href="/contact" title="Contact">Contact</a></li>
                <li><a class="li7" href="/stock" title="Stock">Stock Listings</a></li>

            </ul>
        </div> -->
    </div>
</header>

<main>

    @yield('content')

</main>

<footer>

    @yield('footer')


</footer>

    @yield('script')
<script src="{{asset('assets_anwarhx/js/scripts.js')}}"></script>

</body>

</html>