@extends('admin.basic')

@section('style')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('assets_admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <style>
        table.stocks tr td{
            text-align: center;
            vertical-align: middle
        }
    </style>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MANAGE STOCKS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row" style="margin: 0;margin-bottom: 10px">
                                <a href="{{asset('/admin/create_stock')}}" class="btn btn-primary" style="float: right">Create New</a>

                            </div>

                            <input type="hidden" id="base_url" value="{{asset('')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div>

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable stocks">
                                    <thead>
                                    <tr>
                                        <th style="width:3%">No</th>
                                        <th style="width: 10%">Stock Image</th>
                                        <th style="width: 10%">Warranty</th>
                                        <th style="width: 13%">Name</th>
                                        <th style="width: 6%">Price</th>
                                        <th style="width: 9%">Make</th>
                                        <th style="width: 9%">Model</th>
                                        <th>Year</th>
                                        <th>Odometer</th>
                                        <th>Description</th>
                                        <th style="width: 11%">STATUS</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tfoot>

                                    <tr>
                                        <th style="width:3%">No</th>
                                        <th style="width: 10%">Stock Image</th>
                                        <th style="width: 10%">Warranty</th>
                                        <th style="width: 13%">Name</th>
                                        <th style="width:6%">Price</th>
                                        <th style="width:9%">Make</th>
                                        <th style="width: 9%">Model</th>
                                        <th>Year</th>
                                        <th>Odometer</th>
                                        <th>Description</th>
                                        <th style="width: 11%">STATUS</th>
                                        <th>Action</th>

                                    </tr>

                                    </tfoot>
                                    <tbody>
                                    <?php $n=1 ?>
                                    @foreach($stocks as $stock)
                                        <tr>
                                            <td>{{$n}}</td>
                                            <td><img style="width: 95%" src="{{asset('/image/stock')}}/{{$stock->id}}/{{$stock->stock_image}}"/></td>
                                            <td><img style="width: 95%" src="{{asset('/image/stock')}}/{{$stock->id}}/{{$stock->warranty}}"/></td>
                                            <td>{{$stock->name}}</td>
                                            <td>{{$stock->price}}</td>
                                            <td>{{$stock->make}}</td>
                                            <td>{{$stock->stock_model}}</td>
                                            <td>{{$stock->year}}</td>
                                            <td>{{$stock->odometer}}</td>
                                            <td>{{$stock->description}}</td>
                                            <td>
                                                @if($stock->status == 'on')
                                                    <div class="switch">
                                                        <label style="color: red;font-weight: bold">OFF<input type="checkbox" value="{{$stock->id}}" class="stock_status" checked><span class="lever"></span><span style="color:green">ON</span></label>
                                                    </div>
                                                @else
                                                    <div class="switch">
                                                        <label style="color: red;font-weight: bold">OFF<input type="checkbox" value="{{$stock->id}}" class="stock_status"><span class="lever"></span><span style="color:green">ON</span></label>
                                                    </div>
                                                @endif
                                            </td>
                                            <td><button type="button" data-toggle="modal" data-target="#deleteStockModal"
                                                        class="btn btn-danger" data-id="{{$stock->id}}">Delete</button> </td>
                                        </tr>
                                        <?php $n+=1 ?>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delete Modal HTML -->
    <div id="deleteStockModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content modal-col-deep-orange">
                <form action="{{url('admin/delete_stock')}}" method="post">

                    <input name="_token" type="hidden" value="{{csrf_token()}}">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Record</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this Record?</p>
                        <p><small>This action cannot be undone.</small></p>
                        <input type="hidden" name="id" id="u_id" value="">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-link waves-effect" value="Delete">
                        <input type="button" class="btn-link waves-effect" data-dismiss="modal" value="Cancel">
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('assets_admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <script src="{{asset('assets_admin/js/pages/tables/jquery-datatable.js')}}"></script>

    <script>
        url_base = $("input#base_url").val();

        $(".stock_status").click(function () {

            $.ajax({
                type:'post',
                url:url_base + 'admin/check_stock',
                data:{
                    'id':$(this).val(),
                    "_token" :$("input[name=_token]").val()},
                success:function (response) {
                    console.log(response)
                }
            })
        });

        $('#deleteStockModal').on('show.bs.modal',function(event) {
            console.log('modal opened');
            button = $(event.relatedTarget);

            u_id = button.data('id');

            const modal = $(this);
            modal.find('.modal-body #u_id').val(u_id);
        });

        $(document).ready(function () {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "1000",
                "hideDuration": "1000",
                "timeOut": "4000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            @if(Session::get('success')){
                toastr['success']("New Stock Created Successfully.", "Success!");
            }
            @endif

            @if(Session::get('delete')){
                toastr['success']("Deleted Successfully.", "Success!");
            }
            @endif

        });

    </script>
@endsection