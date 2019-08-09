@extends('admin.basic')

@section('style')

    <!-- Dropzone Css -->
    <link href="{{asset('assets_admin/plugins/dropzone/dropzone.css')}}" rel="stylesheet">
    <!-- Multi Select Css -->
    <link href="{{asset('assets_admin/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
    <!-- Bootstrap Spinner Css -->
    <link href="{{asset('assets_admin/plugins/jquery-spinner/css/bootstrap-spinner.css')}}" rel="stylesheet">
    <!-- Bootstrap Tagsinput Css -->
    <link href="{{asset('assets_admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{asset('assets_admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{asset('assets_admin/plugins/nouislider/nouislider.min.css')}}" rel="stylesheet" />

    <link href="{{asset('fileinput/css/fileinput.css')}}" rel="stylesheet" />
    <style>
        .file-caption.icon-visible .file-caption-name {
            padding-left: 24px;
        }
    </style>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREATE NEW SLIDE
                            </h2>
                        </div>
                        <div class="body" style="padding-bottom: 80px">
                            <br>

                            <form action="{{asset('admin/post_create_slide')}}" class="form-horizontal" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                            <label for="title1">Slide Title 1</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="title1" name="title1" class="form-control" placeholder="Enter your slide title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-7">
                                        <div class="col-sm-4">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                <label for="title1_size">Font Size</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title1_size" name="title1_size">
                                                            <option value="16px">16px</option>
                                                            <option value="18px">18px</option>
                                                            <option value="20px">20px</option>
                                                            <option value="22px">22px</option>
                                                            <option value="24px">24px</option>
                                                            <option value="26px">26px</option>
                                                            <option value="28px">28px</option>
                                                            <option value="30px">30px</option>
                                                            <option value="32px">32px</option>
                                                            <option value="34px">34px</option>
                                                            <option value="36px">36px</option>
                                                            <option value="38px">38px</option>
                                                            <option value="40px">40px</option>
                                                            <option value="42px">42px</option>
                                                            <option value="44px">44px</option>
                                                            <option value="46px">46px</option>
                                                            <option value="48px">48px</option>
                                                            <option value="50px">50px</option>
                                                            <option value="52px">52px</option>
                                                            <option value="54px">54px</option>
                                                            <option value="56px">56px</option>
                                                            <option value="58px">58px</option>
                                                            <option value="60px">60px</option>
                                                            <option value="62px">62px</option>
                                                            <option value="64px">64px</option>
                                                            <option value="66px">66px</option>
                                                            <option value="68px">68px</option>
                                                            <option value="70px">70px</option>
                                                            <option value="72px">72px</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding:0">
                                                    <label for="title1_color">Font Color</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                    <div class="form-group" style="padding-top: 5px; float: right">

                                                            <input type="color" id="title1_color" name="title1_color"  value="#000000">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding: 0;text-align: center">
                                                <label for="title1_style">Font Style</label>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title1_style" name="title1_style">

                                                            <option value="normal" style="font-family: normal,sans-serif">Normal</option>

                                                            <option value="Agency FB" style="font-family: Agency FB,sans-serif">Agency FB</option>
                                                            <option value="Algerian" style="font-family: Algerian,sans-serif">Algerian</option>
                                                            <option value="Aguafina Script" style="font-family: Aguafina Script, cursive;!important;">Aguafina Script</option>
                                                            <option value="Blackadder ITC" style="font-family: Blackadder ITC, Helvetica, sans-serif!important;">Blackadder ITC</option>
                                                            <option value="Blackoak Std" style="font-family: Blackoak Std,sans-serif">Blackoak Std</option>
                                                            <option value="Bodoni MT" style="font-family: Bodoni MT,sans-serif">Bodoni MT</option>
                                                            <option value="Book Antiqua" style="font-family: Book Antiqua,sans-serif">Book Antiqua</option>
                                                            <option value="Bradley Hand ITC" style="font-family: Bradley Hand ITC,sans-serif">Bradley Hand ITC</option>
                                                            <option value="Britannic" style="font-family: Britannic, Bold,sans-serif">Britannic Bold</option>
                                                            <option value="Lobster" style="font-family: Lobster, cursive;">Lobster</option>
                                                            <option value="Brush Script Std" style="font-family: Brush Script Std,sans-serif">Brush Script Std</option>
                                                            <option value="Castellar" style="font-family: Castellar,sans-serif">Castellar</option>
                                                            <option value="Charlemagne Std" style="font-family: Charlemagne Std,sans-serif">Charlemagne Std</option>
                                                            <option value="Cooper Black" style="font-family: Cooper Black,sans-serif">Cooper Black</option>
                                                            <option value="Engravers MT" style="font-family: Engravers MT,sans-serif">Engravers MT</option>
                                                            <option value="federal_escort_expaexpandedIt" style="font-family: federal_escort_expaexpandedIt,serif;">Federal Escort Expanded</option>
                                                            <option value="Forte" style="font-family: Forte,sans-serif">Forte</option>
                                                            <option value="Goudy Stout" style="font-family: Goudy Stout,sans-serif">Goudy Stout</option>
                                                            <option value="Harrington" style="font-family: Harrington,sans-serif">Harrington</option>
                                                            <option value="Hobo Std" style="font-family: Hobo Std,sans-serif">Hobo Std</option>
                                                            <option value="Impact" style="font-family: Impact,sans-serif">Impact</option>
                                                            <option value="Kristen ITC" style="font-family: Kristen ITC,sans-serif">Kristen ITC</option>
                                                            <option value="Lucida Calligraphy" style="font-family: Lucida Calligraphy,sans-serif">Lucida Calligraphy</option>
                                                            <option value="Magneto" style="font-family: Magneto,sans-serif">Magneto</option>
                                                            <option value="MV Boli" style="font-family: MV Boli,sans-serif">MV Boli</option>
                                                            <option value="Showcard Gothic" style="font-family: Showcard Gothic,sans-serif">Showcard Gothic</option>
                                                            <option value="'story_bookregular'" style="font-family: 'story_bookregular',sans-serif">story bookregular</option>


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Title 2-->
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                            <label for="title2">Slide Title 2</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="title2" name="title2" class="form-control" placeholder="Enter your slide title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-7">
                                        <div class="col-sm-4">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                <label for="title2_size">Font Size</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title2_size" name="title2_size">
                                                            <option value="16px">16px</option>
                                                            <option value="18px">18px</option>
                                                            <option value="20px">20px</option>
                                                            <option value="22px">22px</option>
                                                            <option value="24px">24px</option>
                                                            <option value="26px">26px</option>
                                                            <option value="28px">28px</option>
                                                            <option value="30px">30px</option>
                                                            <option value="32px">32px</option>
                                                            <option value="34px">34px</option>
                                                            <option value="36px">36px</option>
                                                            <option value="38px">38px</option>
                                                            <option value="40px">40px</option>
                                                            <option value="42px">42px</option>
                                                            <option value="44px">44px</option>
                                                            <option value="46px">46px</option>
                                                            <option value="48px">48px</option>
                                                            <option value="50px">50px</option>
                                                            <option value="52px">52px</option>
                                                            <option value="54px">54px</option>
                                                            <option value="56px">56px</option>
                                                            <option value="58px">58px</option>
                                                            <option value="60px">60px</option>
                                                            <option value="62px">62px</option>
                                                            <option value="64px">64px</option>
                                                            <option value="66px">66px</option>
                                                            <option value="68px">68px</option>
                                                            <option value="70px">70px</option>
                                                            <option value="72px">72px</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding:0">
                                                    <label for="title2_color">Font Color</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                    <div class="form-group" style="padding-top: 5px; float: right">

                                                        <input type="color" id="title2_color" name="title2_color"  value="#000000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding: 0;text-align: center">
                                                <label for="title2_style">Font Style</label>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title2_style" name="title2_style">

                                                            <option value="normal" style="font-family: normal,sans-serif" >Normal</option>

                                                            <option value="Agency FB" style="font-family: Agency FB,sans-serif">Agency FB</option>
                                                            <option value="Algerian" style="font-family: Algerian,sans-serif">Algerian</option>
                                                            <option value="Aguafina Script" style="font-family: Aguafina Script, cursive;!important;">Aguafina Script</option>
                                                            <option value="Blackadder ITC" style="font-family: Blackadder ITC, Helvetica, sans-serif!important;">Blackadder ITC</option>
                                                            <option value="Blackoak Std" style="font-family: Blackoak Std,sans-serif">Blackoak Std</option>
                                                            <option value="Bodoni MT" style="font-family: Bodoni MT,sans-serif">Bodoni MT</option>
                                                            <option value="Book Antiqua" style="font-family: Book Antiqua,sans-serif">Book Antiqua</option>
                                                            <option value="Bradley Hand ITC" style="font-family: Bradley Hand ITC,sans-serif">Bradley Hand ITC</option>
                                                            <option value="Britannic" style="font-family: Britannic, Bold,sans-serif">Britannic Bold</option>
                                                            <option value="Lobster" style="font-family: Lobster, cursive;">Lobster</option>
                                                            <option value="Brush Script Std" style="font-family: Brush Script Std,sans-serif">Brush Script Std</option>
                                                            <option value="Castellar" style="font-family: Castellar,sans-serif">Castellar</option>
                                                            <option value="Charlemagne Std" style="font-family: Charlemagne Std,sans-serif">Charlemagne Std</option>
                                                            <option value="Cooper Black" style="font-family: Cooper Black,sans-serif">Cooper Black</option>
                                                            <option value="Engravers MT" style="font-family: Engravers MT,sans-serif">Engravers MT</option>
                                                            <option value="federal_escort_expaexpandedIt" style="font-family: federal_escort_expaexpandedIt,serif;">Federal Escort Expanded</option>
                                                            <option value="Forte" style="font-family: Forte,sans-serif">Forte</option>
                                                            <option value="Goudy Stout" style="font-family: Goudy Stout,sans-serif">Goudy Stout</option>
                                                            <option value="Harrington" style="font-family: Harrington,sans-serif">Harrington</option>
                                                            <option value="Hobo Std" style="font-family: Hobo Std,sans-serif">Hobo Std</option>
                                                            <option value="Impact" style="font-family: Impact,sans-serif">Impact</option>
                                                            <option value="Kristen ITC" style="font-family: Kristen ITC,sans-serif">Kristen ITC</option>
                                                            <option value="Lucida Calligraphy" style="font-family: Lucida Calligraphy,sans-serif">Lucida Calligraphy</option>
                                                            <option value="Magneto" style="font-family: Magneto,sans-serif">Magneto</option>
                                                            <option value="MV Boli" style="font-family: MV Boli,sans-serif">MV Boli</option>
                                                            <option value="Showcard Gothic" style="font-family: Showcard Gothic,sans-serif">Showcard Gothic</option>
                                                            <option value="'story_bookregular'" style="font-family: 'story_bookregular',sans-serif">story bookregular</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <!-- Title 3 -->
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                            <label for="title3">Slide Title 3</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="title3" name="title3" class="form-control" placeholder="Enter your slide title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-7">
                                        <div class="col-sm-4">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                <label for="title3_size">Font Size</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title3_size" name="title3_size">
                                                            <option value="16px">16px</option>
                                                            <option value="18px">18px</option>
                                                            <option value="20px">20px</option>
                                                            <option value="22px">22px</option>
                                                            <option value="24px">24px</option>
                                                            <option value="26px">26px</option>
                                                            <option value="28px">28px</option>
                                                            <option value="30px">30px</option>
                                                            <option value="32px">32px</option>
                                                            <option value="34px">34px</option>
                                                            <option value="36px">36px</option>
                                                            <option value="38px">38px</option>
                                                            <option value="40px">40px</option>
                                                            <option value="42px">42px</option>
                                                            <option value="44px">44px</option>
                                                            <option value="46px">46px</option>
                                                            <option value="48px">48px</option>
                                                            <option value="50px">50px</option>
                                                            <option value="52px">52px</option>
                                                            <option value="54px">54px</option>
                                                            <option value="56px">56px</option>
                                                            <option value="58px">58px</option>
                                                            <option value="60px">60px</option>
                                                            <option value="62px">62px</option>
                                                            <option value="64px">64px</option>
                                                            <option value="66px">66px</option>
                                                            <option value="68px">68px</option>
                                                            <option value="70px">70px</option>
                                                            <option value="72px">72px</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding:0">
                                                    <label for="title3_color">Font Color</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                    <div class="form-group" style="padding-top: 5px; float: right">

                                                        <input type="color" id="title3_color" name="title3_color"  value="#000000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding: 0;text-align: center">
                                                <label for="title3_style">Font Style</label>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title3_style" name="title3_style">

                                                            <option value="normal" style="font-family: normal,sans-serif">Normal</option>

                                                            <option value="Agency FB" style="font-family: Agency FB,sans-serif">Agency FB</option>
                                                            <option value="Algerian" style="font-family: Algerian,sans-serif">Algerian</option>
                                                            <option value="Aguafina Script" style="font-family: Aguafina Script, cursive;!important;">Aguafina Script</option>
                                                            <option value="Blackadder ITC" style="font-family: Blackadder ITC, Helvetica, sans-serif!important;">Blackadder ITC</option>
                                                            <option value="Blackoak Std" style="font-family: Blackoak Std,sans-serif">Blackoak Std</option>
                                                            <option value="Bodoni MT" style="font-family: Bodoni MT,sans-serif">Bodoni MT</option>
                                                            <option value="Book Antiqua" style="font-family: Book Antiqua,sans-serif">Book Antiqua</option>
                                                            <option value="Bradley Hand ITC" style="font-family: Bradley Hand ITC,sans-serif">Bradley Hand ITC</option>
                                                            <option value="Britannic" style="font-family: Britannic, Bold,sans-serif">Britannic Bold</option>
                                                            <option value="Lobster" style="font-family: Lobster, cursive;">Lobster</option>
                                                            <option value="Brush Script Std" style="font-family: Brush Script Std,sans-serif">Brush Script Std</option>
                                                            <option value="Castellar" style="font-family: Castellar,sans-serif">Castellar</option>
                                                            <option value="Charlemagne Std" style="font-family: Charlemagne Std,sans-serif">Charlemagne Std</option>
                                                            <option value="Cooper Black" style="font-family: Cooper Black,sans-serif">Cooper Black</option>
                                                            <option value="Engravers MT" style="font-family: Engravers MT,sans-serif">Engravers MT</option>
                                                            <option value="federal_escort_expaexpandedIt" style="font-family: federal_escort_expaexpandedIt,serif;">Federal Escort Expanded</option>
                                                            <option value="Forte" style="font-family: Forte,sans-serif">Forte</option>
                                                            <option value="Goudy Stout" style="font-family: Goudy Stout,sans-serif">Goudy Stout</option>
                                                            <option value="Harrington" style="font-family: Harrington,sans-serif">Harrington</option>
                                                            <option value="Hobo Std" style="font-family: Hobo Std,sans-serif">Hobo Std</option>
                                                            <option value="Impact" style="font-family: Impact,sans-serif">Impact</option>
                                                            <option value="Kristen ITC" style="font-family: Kristen ITC,sans-serif">Kristen ITC</option>
                                                            <option value="Lucida Calligraphy" style="font-family: Lucida Calligraphy,sans-serif">Lucida Calligraphy</option>
                                                            <option value="Magneto" style="font-family: Magneto,sans-serif">Magneto</option>
                                                            <option value="MV Boli" style="font-family: MV Boli,sans-serif">MV Boli</option>
                                                            <option value="Showcard Gothic" style="font-family: Showcard Gothic,sans-serif">Showcard Gothic</option>
                                                            <option value="'story_bookregular'" style="font-family: 'story_bookregular',sans-serif">story bookregular</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Title 4 -->
                                <div class="row clearfix">
                                    <div class="col-sm-5">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                                            <label for="title4">Slide Title 4</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="title4" name="title4" class="form-control" placeholder="Enter your slide title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-7">
                                        <div class="col-sm-4">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                <label for="title4_size">Font Size</label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title4_size" name="title4_size">
                                                            <option value="16px">16px</option>
                                                            <option value="18px">18px</option>
                                                            <option value="20px">20px</option>
                                                            <option value="22px">22px</option>
                                                            <option value="24px">24px</option>
                                                            <option value="26px">26px</option>
                                                            <option value="28px">28px</option>
                                                            <option value="30px">30px</option>
                                                            <option value="32px">32px</option>
                                                            <option value="34px">34px</option>
                                                            <option value="36px">36px</option>
                                                            <option value="38px">38px</option>
                                                            <option value="40px">40px</option>
                                                            <option value="42px">42px</option>
                                                            <option value="44px">44px</option>
                                                            <option value="46px">46px</option>
                                                            <option value="48px">48px</option>
                                                            <option value="50px">50px</option>
                                                            <option value="52px">52px</option>
                                                            <option value="54px">54px</option>
                                                            <option value="56px">56px</option>
                                                            <option value="58px">58px</option>
                                                            <option value="60px">60px</option>
                                                            <option value="62px">62px</option>
                                                            <option value="64px">64px</option>
                                                            <option value="66px">66px</option>
                                                            <option value="68px">68px</option>
                                                            <option value="70px">70px</option>
                                                            <option value="72px">72px</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding:0">
                                                    <label for="title4_color">Font Color</label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                                    <div class="form-group" style="padding-top: 5px; float: right">

                                                        <input type="color" id="title4_color" name="title4_color"  value="#000000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 form-control-label" style="padding: 0;text-align: center">
                                                <label for="title4_style">Font Style</label>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select class="form-control" id="title4_style" name="title4_style">

                                                            <option value="normal" style="font-family: normal,sans-serif">Normal</option>

                                                            <option value="Agency FB" style="font-family: Agency FB,sans-serif">Agency FB</option>
                                                            <option value="Algerian" style="font-family: Algerian,sans-serif">Algerian</option>
                                                            <option value="Aguafina Script" style="font-family: Aguafina Script, cursive;!important;">Aguafina Script</option>
                                                            <option value="Blackadder ITC" style="font-family: Blackadder ITC, Helvetica, sans-serif!important;">Blackadder ITC</option>
                                                            <option value="Blackoak Std" style="font-family: Blackoak Std,sans-serif">Blackoak Std</option>
                                                            <option value="Bodoni MT" style="font-family: Bodoni MT,sans-serif">Bodoni MT</option>
                                                            <option value="Book Antiqua" style="font-family: Book Antiqua,sans-serif">Book Antiqua</option>
                                                            <option value="Bradley Hand ITC" style="font-family: Bradley Hand ITC,sans-serif">Bradley Hand ITC</option>
                                                            <option value="Britannic" style="font-family: Britannic, Bold,sans-serif">Britannic Bold</option>
                                                            <option value="Lobster" style="font-family: Lobster, cursive;">Lobster</option>
                                                            <option value="Brush Script Std" style="font-family: Brush Script Std,sans-serif">Brush Script Std</option>
                                                            <option value="Castellar" style="font-family: Castellar,sans-serif">Castellar</option>
                                                            <option value="Charlemagne Std" style="font-family: Charlemagne Std,sans-serif">Charlemagne Std</option>
                                                            <option value="Cooper Black" style="font-family: Cooper Black,sans-serif">Cooper Black</option>
                                                            <option value="Engravers MT" style="font-family: Engravers MT,sans-serif">Engravers MT</option>
                                                            <option value="federal_escort_expaexpandedIt" style="font-family: federal_escort_expaexpandedIt,serif;">Federal Escort Expanded</option>
                                                            <option value="Forte" style="font-family: Forte,sans-serif">Forte</option>
                                                            <option value="Goudy Stout" style="font-family: Goudy Stout,sans-serif">Goudy Stout</option>
                                                            <option value="Harrington" style="font-family: Harrington,sans-serif">Harrington</option>
                                                            <option value="Hobo Std" style="font-family: Hobo Std,sans-serif">Hobo Std</option>
                                                            <option value="Impact" style="font-family: Impact,sans-serif">Impact</option>
                                                            <option value="Kristen ITC" style="font-family: Kristen ITC,sans-serif">Kristen ITC</option>
                                                            <option value="Lucida Calligraphy" style="font-family: Lucida Calligraphy,sans-serif">Lucida Calligraphy</option>
                                                            <option value="Magneto" style="font-family: Magneto,sans-serif">Magneto</option>
                                                            <option value="MV Boli" style="font-family: MV Boli,sans-serif">MV Boli</option>
                                                            <option value="Showcard Gothic" style="font-family: Showcard Gothic,sans-serif">Showcard Gothic</option>
                                                            <option value="'story_bookregular'" style="font-family: 'story_bookregular',sans-serif">story bookregular</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <br>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="desktop_image">Desktop Image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                        <input id="desktop_image" name="desktop_image" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" required>

                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="mobile_image">Mobile Image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                        <input id="mobile_image" name="mobile_image" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" required>

                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="main_image">Slide Main Image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                        <input id="main_image" name="main_image" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" required>

                                    </div>

                                </div>

                                <br>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="right_image">Slide Right Image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                        <input id="right_image" name="right_image" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" >

                                    </div>

                                </div>

                                <br>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="left_image">Slide Left Image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                        <input id="left_image" name="left_image" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" >

                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-4 col-xs-offset-2 col-lg-2 col-md-3 col-xs-4">
                                        <button type="submit" class="btn btn-lg bg-purple waves-effect">SUBMIT</button>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                                        <a href="{{asset('/admin')}}" class="btn btn-lg bg-red waves-effect">CANCEL</a>
                                    </div>
                                </div>


                            </form>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

    <!-- Dropzone Plugin Js -->
    <script src="{{asset('assets_admin/plugins/dropzone/dropzone.js')}}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{asset('assets_admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{asset('assets_admin/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{asset('assets_admin/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('assets_admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="{{asset('assets_admin/plugins/nouislider/nouislider.js')}}"></script>

    <script src="{{asset('fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/fileinput.min.js')}}"></script>

@endsection