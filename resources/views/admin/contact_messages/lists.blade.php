@extends('admin.basic')

@section('style')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('assets_admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

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

                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th style="width:3%">No</th>
                                        <th style="width: 13%">First Name</th>
                                        <th style="width: 13%">Last Name</th>
                                        <th style="width: 13%">Contact No</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Year</th>
                                        <th>Datetime</th>
                                        {{--<th style="width: 10%">STATUS</th>--}}
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th style="width:3%">No</th>
                                        <th style="width: 13%">First Name</th>
                                        <th style="width: 13%">Last Name</th>
                                        <th style="width: 13%">Contact No</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Year</th>
                                        <th>Datetime</th>

                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $n = 1 ?>
                                    @foreach($messages as $message)
                                        <td>{{$n}}</td>
                                        <td>{{$message->first_name}}</td>
                                        <td>{{$message->last_name}}</td>
                                        <td>{{$message->contact_No}}</td>
                                        <td>{{$message->make}}</td>
                                        <td>{{$message->m_model}}</td>
                                        <td>{{$message->year}}</td>
                                        <td>{{$message->datetime}}</td>
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


@endsection