@extends('admin.basic')

@section('style')

    <link href="{{asset('fileinput/css/fileinput.css')}}" rel="stylesheet" />

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
                                CREATE NEW STOCK
                            </h2>
                        </div>
                        <div class="body" style="padding-bottom: 80px">
                            <input type="hidden" id="base_url" value="{{asset('')}}">

                            <form action="{{asset('admin/post_create_stock')}}" class="form-horizontal" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                <br>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter stock name" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                                <label for="price">Price $</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="price" name="price" class="form-control" placeholder="Enter stock price" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                                <label for="make">Make</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                                <div class="">
                                                    <div class="form-line">
                                                        {{--<input type="text" id="make" name="make" class="form-control" placeholder="Enter stock make" required>--}}
                                                        {{--<label for="sel1">Select list:</label>--}}
                                                        <select class="form-control" id="make" name="make">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                                <label for="model">Model</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">

                                                        <select class="form-control" id="model" name="stock_model" required>
                                                            @foreach($sub_categories as $sub_category)
                                                                <option value="{{$sub_category->subcategory_name}}">{{$sub_category->subcategory_name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                                <label for="year">Year</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="year" name="year" class="form-control" placeholder="Enter stock year" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="form-group">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="description" name="description" class="form-control" placeholder="Enter stock description" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row clearfix">
                                    <div class="form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="stock_image">Stock Image</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                        <input id="stock_image" name="stock_image" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" required>

                                    </div>
                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="stock_image_1">Image 1</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                                <input id="stock_image_1" name="stock_image_1" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="stock_image_2">Image 2</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                                <input id="stock_image_2" name="stock_image_2" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true">

                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row clearfix">
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="stock_image_3">Image 3</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                                <input id="stock_image_3" name="stock_image_3" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="stock_image_4">Image 4</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="padding-right: 40px">

                                                <input id="stock_image_4" name="stock_image_4" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true">

                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <br>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-4 col-xs-offset-2 col-lg-2 col-md-3 col-xs-4">
                                        <button type="submit" class="btn btn-lg bg-purple waves-effect">SUBMIT</button>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                                        <a href="{{asset('/admin/stock')}}" class="btn btn-lg bg-red waves-effect">CANCEL</a>
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

    <script src="{{asset('fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/fileinput.min.js')}}"></script>

    <script>
        url_base = $("input#base_url").val();

        $('select#make').change(function () {

            $.ajax({
                type:'get',
                data:{'id':$(this).val()},
                url:url_base + 'admin/get_models',
                success:function (response) {
                    console.log(response);
                    $('select#model').html('');

                    for (i=0;i<response.length;i++){
                        $('select#model').append('<option value="'+response[i]["subcategory_name"]+'">'+response[i]["subcategory_name"]+'</option>')
                    }
                }
            })
        })
    </script>
@endsection