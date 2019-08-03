@extends('front.base')

@section('style')
    <style>
        @media (max-width: 380px and min-width: 310px) {
            .title1{
                font-size: 35px!important;
            }
            .title2{
                font-size: 15px!important;
            }
            .title3{
                font-size: 30px!important;
            }
            .title4{
                font-size: 20px!important;
            }
        }
        @media (max-width: 420px) {
            .title1{
                font-size: 35px!important;
            }
            .title2{
                font-size: 15px!important;
            }
            .title3{
                font-size: 30px!important;
            }
            .title4{
                font-size: 20px!important;
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
                width: 50% !important;
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
                top: 0px !important;
            }

            .moda {
                padding-top: 61px !important;
                padding-bottom: 61px !important;

            }
            .moda .modal-content{
                width: 356px !important;
            }

        }

        /* .part_5 {
            display: block;
        } */
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
            padding-left:25%;
            width:17%;
        }

        .img_center {
            margin-left:auto;
            margin-right:auto;
        }

        .moda {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 701; /* Sit on top */
            padding-top: 138px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 86%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

        }

        /* Modal Content */
        .moda .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            border-radius: 16px;
            width: 730px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        .clos {
            color: #05acf0;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .clos:hover,
        .clos:focus {
            color: #05acf0;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            /*background-color: #5cb85c;*/
            color: #05acf0;
            border-bottom: 1px solid;
        }

        .modal-body {padding: 2px 16px 20px;margin: 0}



    </style>

@endsection

@section('body')
    <body class="home" >
@endsection


@section('content')


    <div class="slider">
        @foreach($slides as $slide)
            <div class="slick-slide">
                <img style="height:100%; width:100%;object-fit:cover;" src="{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->main_image}}">
                <div class="caption" style="z-index: 1">
                    <div class="part_1">
                        <h1 class="title1" style="text-align: left;font-family: {{$slide->title1_style}};font-size: {{$slide->title1_size}};
                                color:{{$slide->title1_color}}">{{$slide->title1}}</h1>

                        <h3 class="title2" style="float: left;font-family: {{$slide->title2_style}};font-size: {{$slide->title2_size}};
                                color:{{$slide->title2_color}}">{{$slide->title2}}</h3><br>
                        </div>
                    <div class="part_2">
                        @if($slide->right_image != '')

                        <img class="img_center" style="width:40%;" src="{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->right_image}}">

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

                        <img class="img_center" style="width:40%;bottom:5%; top:0; right :5% ; z-index:-1;position:absolute;" src="{{asset('assets_anwarhx/img/slider')}}/{{$slide->id}}/{{$slide->right_image}}">

                        @endif
                    </div>

                </div>
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

    <div id="myModa" class="moda">

        <div class="modal-content">
            <div class="modal-header">
                <span class="clos">&times;</span>
                <h2>Book Online</h2>
            </div>
            <div class="modal-body row">
                <br>
                <form class="form-horizontal form_contact">
                    
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1">
                    <label class="mdl-textfield__label" for="sample1">Text...</label>
                </div>
                    <div class="form-group contact_input">
                        <div class="col-sm-10">
                            <input type="text"  id="first_name" name="first_name" placeholder="Enter first name" autocomplete="off" required>
                        </div>
                        <label class="control-label col-sm-2" for="first_name" style="float: right">First Name : </label>

                    </div>
                    <div class="form-group contact_input">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" autocomplete="off" required>
                        </div>
                        <label class="control-label col-sm-2" for="last_name" style="float: right">Last Name :</label>

                    </div>
                    <div class="form-group contact_input">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Enter contact No" autocomplete="off" required>
                        </div>
                        <label class="control-label col-sm-2" for="contact_no" style="float: right">Contact No : </label>

                    </div>

                    <div class="form-group contact_input">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="make" name="make" placeholder="Enter make" autocomplete="off" required>
                        </div>
                        <label class="control-label col-sm-2" for="make" style="float: right">Make : </label>

                    </div>
                    <div class="form-group contact_input">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" name="model" placeholder="Enter model" autocomplete="off" required>
                        </div>
                        <label class="control-label col-sm-2" for="model" style="float: right">Model : </label>

                    </div>
                    <div class="form-group contact_input">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="year" name="year" placeholder="Enter year" autocomplete="off" required>
                        </div>
                        <label class="control-label col-sm-2" for="year" style="float: right">Year:</label>

                    </div>

                    <div class="form-group contact_input">
                        <div class="col-sm-10">
                            <input type="datetime-local" id="datetime" name="datetime" required>
                        </div>
                        <label class="control-label col-sm-2" for="datetime" style="float: right">Datetime:</label>

                    </div>
                    <br>

                    <div class="form-group contact_input">
                        <div class="col-sm-offset-2">
                            <button type="submit" class="btn btn-default"><b>Submit</b></button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>

        $('.bookonline').click(function () {
            $('#myModa').css('display','block');

        });

        $('span.clos').click(function () {
            $('#myModa').css('display','none');
        });

        $(window).click(function(e) {
            if (e.target == $('#myModa')) {
                $('#myModa').css('display','none');
            }
        });

        modal = document.getElementById("myModa");

        window.onclick = function(event)
        {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection