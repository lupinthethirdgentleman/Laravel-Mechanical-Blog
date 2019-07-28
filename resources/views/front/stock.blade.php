@extends('front.base')

@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: 'open sans';
        }
        * {
            /* -webkit-box-sizing: border-box; */
            -moz-box-sizing: border-box;
            box-sizing: initial;
        }
        .col-3{width: 22%;margin:5px;display: inline-block}
        .row{
            padding-left: 20px;
        }
        .stock_img img{
            border: 1px solid #8080808a;
            padding: 6px;
            border-radius: 4px;
        }
        .stock_img button{
            border-radius: 25px;
            padding-left: 30px;
            padding-right: 30px
        }

        .stock_img_div{
            width: 31%;
            padding-bottom: 20px;
            display: inline-block;

        }
        .name{
            color: #05acf0;margin-top: 0
        }
        .col-6{width: 45%;display: inline-block;float: left}

        @media (max-width: 990px) {
            .stock_img_div{
                width: 49%;
            }
        }
        @media (max-width: 590px) {
            .row{
                padding-left: 12%;
            }
            .stock_img_div{
                width: 97%;
            }
            .col-3{width: 95%;margin:5px;display: inline-block;}

            .moda {
                padding-top: 61px !important;
                padding-bottom: 61px !important;

            }
            .moda .modal-content{
                width: 356px !important;
            }
            .name{
                color: #05acf0;margin-top: 20px;margin-bottom: 0;
            }
            .price{
                margin-top: 7px;
            }
            .col-6{width: 95%;display: inline-block;float: left}

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
            color: #05acf0;;
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
    <body>
@endsection

@section('content')

    <div class="header-image">
        <img src="{{asset('assets_anwarhx/img/mh.jpg')}}" alt="header-image">
    </div>

    <div class="container" style="padding-top: 20px;padding-bottom: 157px;">
        <h2 style="color: #05acf0; font-weight: 600">Members Listing</h2>
        <hr>

        <div>
            <h3 style="color: #05acf0">Search Product</h3>
            <div class="row">

                <div class="col-3">
                    <input class="form-control" style="width: 90%;padding: 3px 12px;" type="text" placeholder="Make">
                </div>
                <div class="col-3">
                    <input class="form-control" style="width: 90%;padding: 3px 12px;" type="text" placeholder="Model">
                </div>
                <div class="col-3">
                    <input class="form-control" style="width: 90%;padding: 3px 12px;" type="text" placeholder="Year">
                </div>

                <div class="col-3">
                    <button class="btn btn-primary btn-lg" style="margin-left: 30px;padding: 9px 30px;border-radius: 25px;">Search</button>
                </div>

            </div>
        </div>
        <hr>

        <div class="row stock_img">

            @foreach($stocks as $stock)

                <div class="stock_img_div">
                    <img height="150" width="270" src="{{asset('image/stock')}}/{{$stock->id}}/{{$stock->stock_image}}">
                    <h3 style="color: #05acf0;">{{$stock->name}}</h3>
                    <p>Date added: {{$stock->created_at}}</p>
                    <button type="button" class="btn btn-primary btn-lg details" data-id = "{{$stock->id}}"
                            data-name="{{$stock->name}}" data-price="{{$stock->price}}" data-make="{{$stock->make}}"
                            data-model="{{$stock->stock_model}}" data-year="{{$stock->year}}"
                            data-description="{{$stock->description}}" data-image="{{$stock->stock_image}}"
                            data-image_1 = "{{$stock->image_1}}" data-image_2 = "{{$stock->image_2}}"
                            data-image_3 = "{{$stock->image_3}}" data-image_4 = "{{$stock->image_4}}" >Details</button>
                </div>

            @endforeach


            <!-- The Modal -->
            <div id="myModa" class="moda">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="clos">&times;</span>
                        <h2>Details</h2>
                    </div>
                    <div class="modal-body row">
                        <br>
                        <div class="col-6 col-sm-6">
                            <img class="stock_modal_img" style="width: 95%" height="190" src="image/stock/product3.png">
                            <div style="margin-top: 10px">
                                <img class="stock_modal_img_1" width="27%" height="60" src="image/stock/product3.png">
                                <img class="stock_modal_img_2" width="27%" height="60" src="image/stock/product3.png">
                                <img class="stock_modal_img_3" width="27%" height="60" src="image/stock/product3.png">

                            </div>
                        </div>

                        <div class="col-6 col-sm-6" style="font-weight: bold">
                            <h3 class="name">Part name goes here</h3>
                            <h3 class="price" style="color: #05acf0;">$430</h3>
                            <span>Make : <span class="make">Toyota</span></span><br>
                            <span>Model : <span class="model">Corolla</span></span><br>
                            <span>Year : <span class="year">2007</span></span><br>

                            <h5 class="description">Lorem ipsum dolor sit amet, consetetur adipiscing ellt. Sed ned mattls massa. Ut non tellus non est lacinia sulsmod quis vitae nunc. Aliquam ve</h5>
                            <p>Uploaded by wodville motors</p>
                            <span style="color: #05acf0;">View other listings from this member</span><br>
                            <div style="margin: 10px">
                                <button type="button" class="btn btn-primary" style="padding: 8px 20px;">Add to Cart</button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-default" style="padding: 8px 20px;color: #05acf0;border: 1px solid #05acf0">Members Profile</button>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>



@endsection

@section('footer')
    <div class="container">
        <div class="abs stock" style="z-index: 599;"><a href="#">Book Online</a></div>
        <a class="cta stock" style="z-index: 599;" href="tel:08 8369 1899">Call Now</a>
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
@endsection

@section('script')
    <script>
        $('.details').click(function () {

            $('#myModa h3.name').text($(this).data("name"));
            $('#myModa h3.price').text("$"+$(this).data("price"));
            $('#myModa span.make').text($(this).data("make"));
            $('#myModa span.model').text($(this).data("model"));
            $('#myModa span.year').text($(this).data("year"));
            $('#myModa h5.description').text($(this).data("description"));
            $('#myModa img.stock_modal_img').attr('src','image/stock/'+$(this).data("id")+'/'+$(this).data("image"));

            if ($(this).data("image_1") != ''){
                $('#myModa img.stock_modal_img_1').attr('src','image/stock/'+$(this).data("id")+'/'+$(this).data("image_1"));
            }else {
                $('#myModa img.stock_modal_img_1').attr('src','image/stock/'+$(this).data("id")+'/'+$(this).data("image"));

            }

            if ($(this).data("image_2") != ''){
                $('#myModa img.stock_modal_img_2').attr('src','image/stock/'+$(this).data("id")+'/'+$(this).data("image_2"));

            }else {
                $('#myModa img.stock_modal_img_2').attr('src','image/stock/'+$(this).data("id")+'/'+$(this).data("image"));

            }

            if ($(this).data("image_3") != ''){
                $('#myModa img.stock_modal_img_3').attr('src','image/stock/'+$(this).data("id")+'/'+$(this).data("image_3"));
            }else {
                $('#myModa img.stock_modal_img_3').attr('src','image/stock/'+$(this).data("id")+'/'+$(this).data("image"));

            }


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