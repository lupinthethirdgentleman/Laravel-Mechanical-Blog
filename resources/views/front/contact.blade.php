@extends('front.base')

@section('style')

    <style>
        .form_contact{
            font-size: 15px;
        }
        .form_contact input{
            border-radius: 4px;
            padding: 4px;
            margin-left: 5px;
        }
        .form_contact div div.col-sm-10{
            float: right;
        }
        .form_contact button{
            padding: 5px 15px;
            border-radius: 4px;
            background-color: #00b3ff;
            cursor: pointer;
        }
        .contact_input{
            display: inline-block; width: 31%
        }
        @media (max-width: 990px) {
            .contact_input{
                display: inline-block; width: 46%
            }
            .form_contact{
                color: black;
            }
        }
        @media (max-width: 590px) {
            .contact_input{
                display: inline-block; width: 96%
            }
            .contact_input div{width:70%}
            .contact_input label{width:30%}
            .contact_input div input{width:90%}

            .moda {
                padding-top: 61px !important;
                padding-bottom: 61px !important;

            }
            .moda .modal-content{
                width: 356px !important;
            }
            .form_contact{
                color: black;
            }
            .contact_input{
                margin-bottom: 10px;
            }

        }


        /* The Modal (background) */
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

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
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

        .modal-footer {
            padding: 2px 16px;
            /*background-color: #5cb85c;*/
            color: #05acf0;;
        }


    </style>

@endsection


@section('body')
    <body class="contact" >
@endsection


@section('content')

    <div class="container">

        <div class="contact_wrap">
            <a href="tel:08 8369 1899"><i class="fa fa-phone" aria-hidden="true"></i> {{$contact->phone}}</a>
            <a href="maito:justjap@mail.com"><i class="fa fa-envelope" aria-hidden="true"></i> {{$contact->email}}</a>
            <a href="http://4%20jacobsen%20crescent%2C%20holden%20hill/"><i class="fa fa-home" aria-hidden="true"></i> {{$contact->address}}</a>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3274.411129725323!2d138.66964441499752!3d-34.8458955778588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0b5a57fceac01%3A0xfa507c74f99c0000!2sJust+Jap+Automotive!5e0!3m2!1sen!2sro!4v1467290780281" width="758" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>




    </div>



@endsection


@section('footer')
    <div class="container">

        <div class="abs"><a class="bookonline" href="#">Book Online</a></div>
        <a class="cta" href="tel:08 8369 1899">Call Now</a>
        <h1></h1>



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


    <!-- The Modal -->
    <div id="myModa" class="moda">

        <div class="modal-content">
            <div class="modal-header">
                <span class="clos">&times;</span>
                <h2>Contact Info</h2>
            </div>
            <div class="modal-body row">
                <br>
                <form class="form-horizontal form_contact" method="post" action="{{asset('contact/post_message')}}">
                    {{csrf_field()}}
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