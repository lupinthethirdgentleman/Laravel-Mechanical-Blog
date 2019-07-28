@extends('front.base')

@section('style')
    <link href="{{asset('light-gallery/css/lightgallery.css')}}" rel="stylesheet">
    <style>
        .row1{
            display: table;
            width: 100%;
        }
        .row2{
            display: table;
            width: 100%;
            padding-bottom: 200px;
        }
        .col-4{
            margin: 5px;
            float: inherit;
            height: 180px;
            overflow: hidden;
            width: 31.1%;
            display: inline-block;
        }
        .col-4.one{width:20% }
        .col-4.two{width:53% }
        .col-4.three{width:20% }

        .col-4 .gallery_img_height{
            width: 100%;

            height: auto;
            padding: 1px;
            /*border: 1px solid gray;*/
            border-radius: 4px;
        }

        .col-4 .gallery_img_width{
            width: auto;
            height: 100%;
            padding: 1px;
            /*border: 1px solid gray;*/
            border-radius: 4px;
        }
        
        .col-3{
            padding: 5px;
            float: left;
            width: 23%;
            text-align: center;
            font-weight: normal;

        }
        .col-3.third{
            width: 27%;
        }
        .col-3.forth{
            width: 17%;
        }
        .col-3 h3{
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 7px;
        }
        .row1 img.dot{
            width: 10px;
            float: left;
            padding-top: 33px
        }
        .col-3 span{
            font-family: Cambria;
            font-style: italic;
            color: gray;
        }

        @media (max-width: 990px) {
            .col-3{
                width: 250px;
            }
            .col-3.third{
                width: 250px;
            }
            .col-3.forth{
                width: 250px;
            }
            .mechanical .icon4{
                width: 55%;
            }
            .col-4 {
                height: 140px;
            }
            .row2{
                padding-bottom: 100px;
            }
        }
        @media (max-width: 768px) {
            .col-4{
                width: 47%;
            }
            .col-4.one{
                width: 47%;
            }
            .col-4.two{
                width: 47%;
            }
            .col-4.three{
                width: 47%;
            }
            .col-4.one img{
                width: 100%;
                height: auto;
            }
            .col-4.three img{
                width: 100%;
                height: auto;
            }
            .row2{
                padding-bottom: 100px;
            }
        }

        @media (max-width: 480px) {
            .serivce{
                margin-bottom: 25px;
            }
            .serivce img{
                margin-left: 70px;
                margin-right: 70px;
            }
            .col-3{
                margin-left: 55px;

            }
            .row1 img.dot {
                width: 10px;
                float: left;
                padding-top: 33px;
                text-align: center;
                margin-left: 45%;
            }
            .col-4{
                width: 97%;
            }
            .col-4.one{
                width: 97%;
            }
            .col-4.two{
                width: 97%;
            }
            .col-4.three{
                width: 97%;
            }
            .row2{
                padding-bottom: 100px;
            }
        }
    </style>
@endsection

@section('body')
    <body class="mechanical inner" >
@endsection

@section('content')
    <div class="header-image">
        <img src="assets_anwarhx/img/mh.jpg" alt="header-image">
    </div>
    <div class="container">
        <h2 class="text-uppercase" style="text-align: center;">ADELIADE AUTO SERVICE &nbsp;<img src="image/dot.png" style="width: 16px">&nbsp; CAR SERVICE &nbsp;<img src="image/dot.png" style="width: 16px">&nbsp; MECHANICAL REPAIRS</h2>
        <img src="image/heade.png" alt="body-image" width="100%">

        <div class="row" style="text-align: center">
            <h2 class="serivce"><img src="image/line.png">&nbsp;&nbsp; OUR SERVICES &nbsp;&nbsp;<img src="image/line.png"></h2>
            <h3 style="font-family: Cambria;font-style: italic;font-weight: normal;color: gray;margin-top: -14px">Friendly, Professional and Reliable our core value</h3>
        </div>

        <div class="row1">
            <div class="col-3">
                <h3>SERVICE / REPAIRS</h3>
                <span>Log book Servicing are welcome <br> All Makes and models</span>
                <br><br>
                <div class="icon1">
                </div>
            </div>
            <img class="dot" src="image/dot.png">
            <div class="col-3">
                <h3>ENGINE RECONS</h3>
                <span>All Recons Includes <br> Parts and Labour Warranty</span>
                <br><br>
                <div class="icon2">
                </div>

            </div>
            <img class="dot" src="image/dot.png">
            <div class="col-3 third">
                <h3>SUSPENSION & BRAKES</h3>
                <span>Broken Bushes and Noisey ride <br> we can take care of it</span>
                <br><br>
                <div class="icon3">
                </div>

            </div>
            <img class="dot" src="image/dot.png">
            <div class="col-3 forth">
                <h3>DIAGNOSIS</h3>
                <span>All Electrical Repairs <br> Warning lights on Dash</span>
                <br><br>
                <div class="icon4">
                </div>

            </div>

        </div>

        <div class="row" style="text-align: center;margin-top: 65px">
            <h2 class="serivce"><img src="image/line.png">&nbsp;&nbsp; IMAGE GALLERY &nbsp;&nbsp;<img src="image/line.png"></h2>
            <h3 style="font-family: Cambria;font-style: italic;font-weight: normal;color: gray;margin-top: -14px">Quality And Standards, Some of our previous works</h3>
        </div>

        <div class="row2">
            <div class="gallery row1 list-unstyled clearfix" id="aniimated-thumbnials">

                @for($i = 0 ; $i<$n;$i++)
                    <div class="col-4">

                        @if($galleries[0+6*$i]->extension == 'image')
                            <a href="{{asset('image/mech_gallery')}}/{{$galleries[0+6*$i]->photo_name}}" data-sub-html="Demo Description">
                                <img class="gallery_img_height" src="{{asset('image/mech_gallery')}}/{{$galleries[0+6*$i]->photo_name}}">
                            </a>
                        @else
                            <video class="gallery_img_height" controls>
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[0+6*$i]->photo_name}}" type="video/mp4">
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[0+6*$i]->photo_name}}" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                        @endif


                    </div>

                    <div class="col-4">

                        @if($galleries[1+6*$i]->extension == 'image')
                            <a href="{{asset('image/mech_gallery')}}/{{$galleries[1+6*$i]->photo_name}}" data-sub-html="Demo Description">
                                <img class="gallery_img_height" src="{{asset('image/mech_gallery')}}/{{$galleries[1+6*$i]->photo_name}}">
                            </a>
                        @else
                            <video class="gallery_img_height" controls>
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[1+6*$i]->photo_name}}" type="video/mp4">
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[1+6*$i]->photo_name}}" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                        @endif

                    </div>

                    <div class="col-4">
                        @if($galleries[2+6*$i]->extension == 'image')
                            <a href="{{asset('image/mech_gallery')}}/{{$galleries[2+6*$i]->photo_name}}" data-sub-html="Demo Description">
                                <img class="gallery_img_height" src="{{asset('image/mech_gallery')}}/{{$galleries[2+6*$i]->photo_name}}">
                            </a>
                        @else
                            <video class="gallery_img_height" controls>
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[2+6*$i]->photo_name}}" type="video/mp4">
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[2+6*$i]->photo_name}}" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                        @endif

                    </div>
                    <div class="col-4 one">
                        @if($galleries[3+6*$i]->extension == 'image')
                            <a href="{{asset('image/mech_gallery')}}/{{$galleries[3+6*$i]->photo_name}}" data-sub-html="Demo Description">
                                <img class="gallery_img_width" src="{{asset('image/mech_gallery')}}/{{$galleries[3+6*$i]->photo_name}}">
                            </a>
                        @else
                            <video class="gallery_img_width" controls>
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[3+6*$i]->photo_name}}" type="video/mp4">
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[3+6*$i]->photo_name}}" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                        @endif

                    </div>
                    <div class="col-4 two">
                        @if($galleries[4+6*$i]->extension == 'image')
                            <a href="{{asset('image/mech_gallery')}}/{{$galleries[4+6*$i]->photo_name}}" data-sub-html="Demo Description">
                                <img class="gallery_img_height" src="{{asset('image/mech_gallery')}}/{{$galleries[4+6*$i]->photo_name}}">
                            </a>
                        @else
                            <video width="100%" class="gallery_img_height" controls>
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[4+6*$i]->photo_name}}" type="video/mp4">
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[4+6*$i]->photo_name}}" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                        @endif
                    </div>
                    <div class="col-4 three">

                        @if($galleries[5+6*$i]->extension == 'image')

                            <a href="{{asset('image/mech_gallery')}}/{{$galleries[5+6*$i]->photo_name}}" data-sub-html="Demo Description">
                                <img class="gallery_img_width" src="{{asset('image/mech_gallery')}}/{{$galleries[5+6*$i]->photo_name}}">
                            </a>

                        @else
                            <video width="100%" class="gallery_img_width" controls>
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[5+6*$i]->photo_name}}" type="video/mp4">
                                <source src="{{asset('image/mech_gallery')}}/{{$galleries[5+6*$i]->photo_name}}" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>
                        @endif
                    </div>

                @endfor

            </div>
        </div>

    </div>

    <script>
        $('.li2').addClass('active');
    </script>

    <div class="darkbg">
        <div class="hover1 hover">
            <h2>We Service All Makes and Models</h2>
            <h4>At Just Jap Auto Care Centre, We service all makes and model, Our Workshop is Equipped with Latest software to help us meet your vehicle's need at the time of service</h4>
            <img src="assets_anwarhx/img/modals/mh1.jpg">
            <strong>Minor Service</strong>
            We Change the engine oil and oil filter.<br>
            With this service we also do a compulsory<br>
            Brake inspection, check and top up fluids<br>
            and Report any finding during the inspection.<br>
            <strong> Major Service.</strong>
            <p>To keep your car running like a clock work you will need to do a major service after a certain amount of Kilometre. During this service Technicians will have full inception of the vehicle, including removing parts to check necessary Parts against ware and tare.</p>
            Major Service Includes<br>
            -Change Engine Oil + Oil Filter<br>
            -Remove and Replace Spark plugs<br>
            -Change or Top-up Engine Coolant<br>
            -Change or Top-up Brake Fluids<br>
            -Change or Top-up Transmission Fluid<br>
            -Change or Top-up Power steering fluid<br>
            -79 Point Safety Check with Report.<br>
            -OBD 2 Computer Scan<br>
            <small>(Change or Top-up is Subjected to Condition of the Items or Fluids. Extra Charges may occur for Replacement of fluids or parts).</small>

        </div>
        <div class="hover2 hover">
            <h2>Log Book Service</h2>
            <h4>Maintain Your vehicle and keep a service history</h4>
            <img src="assets_anwarhx/img/modals/mh2.jpg">
            <p>Log book Serving is the the most effective way to maintain you vehicle, Not Only that but you will also preserve the value of your car.</p>
            <p>Just Jap Auto Care Centre strictly follows manufacturers guidelines on parts, materiel and Fluids.</p>
            <p>This ensures your car is update when it comes to worn parts and fluids.</p>
            <a class="mct" href="tel:08 8369 1899">Call Us now For Great Log book Service deals.</a>
        </div>
        <div class="hover3 hover">
            <h2>All Suspension And Brake Services.</h2>
            <img src="assets_anwarhx/img/modals/mh3.jpg">
            <p>To Ensure Safety and Reliability and it necessary to have your Suspension checked. Cracked bushes and out lined suspension components can lead serious steering malfunction and Lose of Control. This Will Also Cause un-even and costly tyre ware.</p>
            <p>At Just Jap Auto Care Centre We can Inspect and Report on all suspension and brake problems. If you have Unnecessary noise or knocking sound coming from your Vehicle while hit a bump, changing direction or apply brake while driving. your vehicle might be in need of urgent attention. </p>
            <a class="mct" href="tel:08 8369 1899">Don't Risk it Call us and book an appointment for an inspection.</a>
        </div>
        <div class="hover4 hover">
            <h2>Computer Diagnostics and Troubleshooting</h2>
            <img src="assets_anwarhx/img/modals/mh4.jpg">
            <p>Do you have and engine light showing up on the dashboard? Your Vehicles on board computer has picked up a fault in the Emissions or Electrical Components of your Vehicle. It is Necessary to have the your Vehicle check as soon as possible to avoid costly repairs mechanically. </p>
            <p>At Just Jap we are Equipped with the Latest computer and software to read and rectify any problem your vehicle may have. Our Experienced staff can troubleshoot any Electrical problems.</p>
            <a class="mct" href="tel:08 8369 1899">Call us for a free consultations for any issues electrical related.</a>
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


@section('script')

    <script src="{{asset('/light-gallery/js/lightgallery-all.js')}}"></script>
    <script src="{{asset('/js/image-gallery.js')}}"></script>


@endsection