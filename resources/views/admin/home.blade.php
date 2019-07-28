@extends('admin.basic')

@section('style')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('assets_admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <style>
        table.slides tr td{
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
                                MANAGE SLIDES
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row" style="margin: 0;margin-bottom: 10px">
                                <a href="{{asset('/admin/create_slide')}}" class="btn btn-primary" style="float: right">Create New</a>

                            </div>

                            <input type="hidden" id="base_url" value="{{asset('')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div>

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable slides">
                                    <thead>
                                    <tr>
                                        <th style="width:3%">No</th>
                                        <th style="width: 15%">Main Image</th>
                                        <th style="width: 13%">Right Image</th>
                                        <th style="width: 13%">Left Image</th>
                                        <th>Title 1</th>
                                        <th>Title 2</th>
                                        <th>Title 3</th>
                                        <th>Title 4</th>
                                        <th style="width: 10%">STATUS</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th style="width:3%">No</th>
                                        <th style="width: 15%">Main Image</th>
                                        <th style="width: 13%">Right Image</th>
                                        <th style="width: 13%">Left Image</th>
                                        <th>Title 1</th>
                                        <th>Title 2</th>
                                        <th>Title 3</th>
                                        <th>Title 4</th>
                                        <th style="width: 10%">STATUS</th>
                                        <th>Action</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $n = 1 ?>
                                    @foreach($slides as $slide)

                                        <tr>
                                            <td>{{$n}}</td>
                                            <td><img style="width: 95%;" src="{{asset('/assets_anwarhx/img/slider/')}}/{{$slide->id}}/{{$slide->main_image}}"/></td>
                                            <td>
                                                @if($slide->right_image != '')
                                                    <img style="width: 80%" src="{{asset('/assets_anwarhx/img/slider/')}}/{{$slide->id}}/{{$slide->right_image}}"/></td>
                                                @endif
                                            <td>
                                                @if($slide->left_image != '')
                                                    <img style="width: 80%" src="{{asset('/assets_anwarhx/img/slider/')}}/{{$slide->id}}/{{$slide->left_image}}"/></td>
                                                @endif
                                            <td>{{$slide->title1}}</td>
                                            <td>{{$slide->title2}}</td>
                                            <td>{{$slide->title3}}</td>
                                            <td>{{$slide->title4}}</td>
                                            <td>
                                                @if($slide->status == 'on')
                                                    <div class="switch">
                                                        <label style="color: red;font-weight: bold">OFF<input type="checkbox" class="status" value="{{$slide->id}}" checked><span class="lever"></span><span style="color:green">ON</span></label>
                                                    </div>
                                                @else
                                                    <div class="switch">
                                                        <label style="color: red;font-weight: bold">OFF<input type="checkbox" class="status" value="{{$slide->id}}"><span class="lever"></span><span style="color:green">ON</span></label>
                                                    </div>
                                                @endif
                                            </td>
                                            <td><button type="button" data-toggle="modal" data-target="#deleteSlideModal"
                                                        class="btn btn-danger" data-id="{{$slide->id}}">Delete</button> </td>
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
    <div id="deleteSlideModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content modal-col-deep-orange">
                <form action="{{url('admin/delete_slide')}}" method="post">

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

@endsection

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

        $('.status').click(function () {

            $.ajax({
                type:'post',
                url:url_base + 'admin/check_slide',
                data:{
                    'id':$(this).val(),
                    "_token" :$("input[name=_token]").val()},
                success:function (response) {
                    console.log(response)
                }
            })
        });

        $('#deleteSlideModal').on('show.bs.modal',function(event) {
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
                toastr['success']("New Slide Created Successfully.", "Success!");
            }
            @endif

            @if(Session::get('delete')){
                toastr['success']("Deleted Successfully.", "Success!");
            }
            @endif

        });

    </script>
@endsection