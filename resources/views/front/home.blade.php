@extends('front.base')

@section('style')
    <style>
        @media (max-width: 420px) {
            .caption {
                line-height:25px;
            }

            .part_1, .part_2, .part_3, .part_4 {
                margin-bottom: 20px !important;
            }
            .title1{
                font-size: 35px!important;
            }
            .title2{
                font-size: 25px!important;
            }
            .title3{
                font-size: 35px!important;
            }
            .title4{
                font-size: 25px!important;
            }
            /* .title1{
                font-size: 40px!important;
            }
            .title2{
                font-size: 20px!important;
            }
            .title3{
                font-size: 35px!important;
            }
            .title4{
                font-size: 25px!important;
            } */

            .slick-list {
                padding-bottom: 70px;
            }

            .part_5 {
                display:none !important;
            }

            .part_2 {
                display:block !important;
            }

            .part_4 {
                width: 70% !important;
                margin-left:15% !important;
            }

            h1, h2, h3 {
                text-align: center !important;
            }

            .part_3 {
                padding-left: 0 !important;
            }

            .title2 {
                /* padding-left: 0 !important; */
                float: none !important;
            /* display:hidden; */
            }

            .caption {
                top: 10px !important;
            }



        }



        .part_1 {
            padding-left:10%;
            
            /* display:hidden; */
        }

        .part_2 {
            display:none; 
        }

        .part_3 {
            padding-left: 25%;
        }

        .part_4 {
            margin-left:25%;
            width:17%;
        }

        .part_1, .part_2, .part_3, .part_4 {
	    	margin-bottom: 50px;
	    }

        .img_center {
            margin-left:auto;
            margin-right:auto;
        }



    </style>

@endsection

@section('body')
    <body class="home" >
@endsection


@section('content')


    <div class="slider">
        @foreach($slides as $slide)
            <div class="slick-slide">
                <img id="real_img" style="height:100%; width:100%;object-fit:cover;" src="{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->desktop_image}}">
                <!-- <div class="caption" style="z-index: 1">
                    <div class="part_1">
                        <h1 class="title1" style="text-align: left;font-family: {{$slide->title1_style}};font-size: {{$slide->title1_size}};
                                color:{{$slide->title1_color}}">{{$slide->title1}}</h1>

                        <h3 class="title2" style="float: left;font-family: {{$slide->title2_style}};font-size: {{$slide->title2_size}};
                                color:{{$slide->title2_color}}">{{$slide->title2}}</h3><br>
                        </div>
                    <div class="part_2">
                        @if($slide->right_image != '')

                        <img class="img_center responsive_image" style="width:100%;" src="{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->right_image}}">

                        @endif
                    </div>
                    <div class="part_3">
                        <h3 class="title3" style="font-family: {{$slide->title3_style}};font-size: {{$slide->title3_size}};
                                color:{{$slide->title3_color}}">{{$slide->title3}}</h3>
                        <h3 class="title4" style="font-family: {{$slide->title4_style}};font-size: {{$slide->title4_size}};
                                color:{{$slide->title4_color}}">{{$slide->title4}}</h3>    
                    </div>
           
                    <div class="part_4">
                        @if($slide->left_image != '')

                        <img style=" " src="{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->left_image}}">

                        @endif
                    </div>
                    <div class="part_5">
                        @if($slide->right_image != '')

                        <img class="img_center" style="width:60%; top:-70px; right :5% ; z-index:-1;position:absolute;" src="{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->right_image}}">

                        @endif
                    </div>

                </div> -->
            </div>

        @endforeach

    </div>



    <script>
        $('.li1').addClass('active');
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 6000,
        });

        // $('.bookonline').click(function () {
        //     alert("this");
        //     $('#myModa').css('display','block');

        // });

        // $('span.clos').click(function () {
        //     $('#myModa').css('display','none');
        // });

        // $(window).click(function(e) {
        //     if (e.target == $('#myModa')) {
        //         $('#myModa').css('display','none');
        //     }
        // });

        // modal = document.getElementById("myModa");

        // window.onclick = function(event)
        // {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }
    </script>

@endsection


@section('footer')
    <div class="container">
        <div class="abs"><a class="bookonline" href="#">Book Online</a></div>
        <a class="cta" href="tel:08 8369 1899">Call Now</a>
        <h1>Auto Repair Adelaide</h1>
        <p align="justify">Just Jap Auto is your one stop shop for all your Auto Repair Needs in Adelaide. Our workshop is equipped with latest equipment’s to ensure our quality and job accuracy. One stop Auto Repair Adelaide = Just Jap Auto</p>
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
    <script>
    $(window).resize(function() {
        // console.log($(this).width());
        if($(this).width() <= 420) $('#real_img').attr('src', "{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->mobile_image}}");
        else $('#real_img').attr('src', "{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->desktop_image}}");
        // $('#resizeText').text('Width: ' + $(this).width() + ', Height: ' + $(this).height());
    });
    </script>
@endsection