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
            text-transform: uppercase;
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
        .logo_left{position: absolute;top: 140px;width: 394px;}

        @media (max-width: 990px) {
            .logo_left{
                position: absolute;
                top: 0;
                width: 333px;
            }
            .col-3{
                width: 250px;
            }
            .col-3.third{
                width: 250px;
            }
            .col-3.forth{
                width: 250px;
            }
            .body-works .icon4{
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
            .logo_left{
                position: absolute;
                top: 0;
                width: 250px;
            }
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
            .logo_left{
                position: absolute;
                top: 0;
                width: 155px;
            }
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
                padding-top: 20px;
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
    <body class="body-works inner" >
@endsection


@section('content')

    <div class="header-image">
        <img src="assets_anwarhx/img/bh.jpg" alt="header-image">
    </div>
    <div class="container">

        <h2 style="float: right">PAINT &nbsp;<img src="image/dot.png" style="width: 16px">&nbsp; PANEL REPAIRS</h2>
        <img src="image/body_header.png" width="100%">
        <img src="image/body_bu.png" class="logo_left" style="">

        <div class="row" style="text-align: center">
            <h2 class="serivce"><img src="image/line.png">&nbsp;&nbsp; OUR SERVICES &nbsp;&nbsp;<img src="image/line.png"></h2>
            <h3 style="font-family: Cambria;font-style: italic;font-weight: normal;color: gray;margin-top: -14px">Friendly, Professional and Reliable our core value</h3>
        </div>

        <div class="row1">
            <div class="col-3">
                <h3>Quality Repairs</h3>
                <span>There is no Compromise <br> We work with Gurantee</span>
                <br><br>
                <div class="icon1">
                </div>
            </div>
            <img class="dot" src="image/dot.png">
            <div class="col-3">
                <h3>Genuine Parts</h3>
                <span>Only use Genuine <br> parts Only</span>
                <br><br>
                <div class="icon2">
                </div>

            </div>
            <img class="dot" src="image/dot.png">
            <div class="col-3 third">
                <h3>Private & Insurance</h3>
                <span>All Private and Insurance <br> jobs are welcome</span>
                <br><br>
                <div class="icon3">
                </div>

            </div>
            <img class="dot" src="image/dot.png">
            <div class="col-3 forth">
                <h3>Custom Jobs</h3>
                <span>Customs Paint or Panel <br> modification</span>
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

                @for($i = 0 ; $i<$n ; $i++)
                    <div class="col-4">
                        @if($galleries[$i]->extension == 'image')

                            <a href="{{asset('image/bodyworks_gallery')}}/{{$galleries[$i]->photo_name}}" data-sub-html="Demo Description">
                                <img class="gallery_img_height" src="{{asset('image/bodyworks_gallery')}}/{{$galleries[$i]->photo_name}}">
                            </a>
                        @else
                            <video class="gallery_img_height" controls>
                                <source src="{{asset('image/bodyworks_gallery')}}/{{$galleries[$i]->photo_name}}" type="video/mp4">
                                <source src="{{asset('image/bodyworks_gallery')}}/{{$galleries[$i]->photo_name}}" type="video/ogg">
                                Your browser does not support HTML5 video.
                            </video>

                        @endif
                    </div>
                    

                @endfor


            </div>
        </div>


    </div>

    <script>
        $('.li4').addClass('active');
    </script>
    <div class="darkbg">
        <div class="hover1 hover">
            <h2>Quality Repair No Compromise</h2>
            <img src="assets_anwarhx/img/modals/bh1.jpg">
            <p><strong>Quality Job At an affordable price!</strong></p>
            <p>Our highly Experienced Panel Beater and Spray Painter Will Ensure to get high Quality finnish at an affordable price.</p>
            <p><strong>How Do we Do it?</strong></p>
            <p>With Experience comes knowledge and Deep understand how to remove and reassemble Parts, with help of manufactures guidelines and Installation procedure we will insure to minimise time spend on the car, and removal of unnecessary parts while repairing your vehicle.</p>
            <p><strong>Dose this effect Quality?</strong></p>
            <p>Since a Quality job is the driving force of our workshop. We take all the necessary Steps to Ensure our 'No Compromise Policy' is not effected.</p>

            <a class="mct" href="tel:08 8369 1899">Call Us Now For a Free Quote.</a>

        </div>
        <div class="hover2 hover">
            <h2>Only Use Genuine Part</h2>
            <img src="assets_anwarhx/img/modals/bh2.jpg">
            <p>To Ensure quality workmanship and maintain your vehicle's Value, It is Highly recommended to use GENUINE parts only. This will only ensure that all your parts are as good as they ones which are removed.</p>
            <small>At Just Jap We will Never use “aftermarket parts” unless there is absolutely no other options. </small>
        </div>
        <div class="hover3 hover">
            <h2>Private And Insurance Jobs Are Welcome.</h2>
            <h4>At Just Jap No job is too small or too big.</h4>
            <img src="assets_anwarhx/img/modals/bh3.jpg">
            <p><strong>We welcome all type of customers Private or Insured.</strong></p>
            <p>If you need help getting your Car back on the road but not financially fit, We Can Help you.</p>
            <p>If your insured and Needs Repairs.</p>
            <p>You Can Have your Car Repaired For FREE! Terms And Conditions Apply</p>
            <p><strong>How?</strong> Simple. We will Cover your Insurance excess.</p>
            <p><strong>Not Insured?</strong> We can help you there as well.</p>
            <small>Since you Don't have Insurance excess for us to pay. We will credit that money towards your Final Bill. Terms and Conditions Apply.</small>
            <p>Contact Us for Terms And Conditions.</p>
            <a class="mct" href="tel:08 8369 1899">Call us to Discuss what we can Do to Help you</a>
        </div>
        <div class="hover4 hover">
            <h2>Custom Paint Jobs And Body Works</h2>
            <h4>At Just Jap we can take care of all type of Custom Paint jobs. Including Special Pearls Exclusively. Available from just jap only.</h4>
            <img src="assets_anwarhx/img/modals/bh4.jpg">
            <p>Check our List of Customised pearls paints.</p>
            <p><strong>Custom Body Works.</strong></p>
            <p>We can Help with all types of metal shaping and CNC Design and productions.</p>
            <a class="mct" href="tel:08 8369 1899">Call us If you have any Questions</a>
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