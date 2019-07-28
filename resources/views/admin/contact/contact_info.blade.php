@extends('admin.basic')

@section('style')
    <link href="{{asset('fileinput/css/fileinput.css')}}" rel="stylesheet"/>
    <style>
        .file-caption.icon-visible .file-caption-name {
            padding-left: 24px;
        }
    </style>

@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">
                <!-- Contextal Classes -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CONTACT INFORMATION
                                <small>Phone number, Email, Address for contact</small>
                            </h2>

                        </div>
                        <div class="body">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-success" style="font-size: 28px;padding-left: 30px"><i class="material-icons">phone</i>  {{$info->phone}}</li>
                                <li class="list-group-item list-group-item-info" style="font-size: 28px;padding-left: 30px"><i class="material-icons">email</i>  {{$info->email}}</li>
                                <li class="list-group-item list-group-item-warning" style="font-size: 28px;padding-left: 30px"><i class="material-icons">home</i> {{$info->address}}</li>

                            </ul>
                            <div style="text-align: center">
                                <button type="button" class="btn btn-lg bg-purple" data-toggle="modal"
                                        data-target="#editContactModal" data-phone = "{{$info->phone}}" data-email = "{{$info->email}}"
                                        data-address = "{{$info->address}}" style="font-size: 20px">Update Contact Information</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- #END# Contextal Classes -->
                <!-- Contextual Classes With Linked Items -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LOGO IMAGE
                                <small>Change logo image of site.</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="list-group" style="height: 178px">
                                <br>
                                <img src="{{asset('assets_anwarhx/img/logo')}}/{{$info->logo}}">
                            </div>

                            <div style="text-align: center">
                                <button type="button" class="btn btn-lg bg-light-blue" data-toggle="modal"
                                        data-target="#changeLogoModal" style="font-size: 20px">Change Logo</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Edit Modal HTML -->
    <div id="editContactModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 15px">
                <form action="{{url('admin/update_contact_info')}}" method="post">

                    <input name="_token" type="hidden" value="{{csrf_token()}}">

                    <div class="modal-header">
                        <h4 class="modal-title">Update Contact Information</h4>

                    </div>
                    <div class="modal-body">

                        <label for="phone">Phone number</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="phone" name="phone" class="form-control" required>
                            </div>
                        </div>
                        <label for="email">Email</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <label for="address">Address</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="address" name="address" class="form-control" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Change Logo Modal HTML -->
    <div id="changeLogoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 15px">
                <form action="{{url('admin/change_logo')}}" method="post" enctype="multipart/form-data">

                    <input name="_token" type="hidden" value="{{csrf_token()}}">

                    <div class="modal-header">
                        <h4 class="modal-title">Change Logo</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <input id="logo" name="logo_image" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/fileinput.min.js')}}"></script>

    <script>

        $(document).ready(function () {
            $('#editContactModal').on('show.bs.modal',function(event) {


                button = $(event.relatedTarget);
                // console.log(button.data);
                phone = button.data('phone');
                email = button.data('email');
                address = button.data('address');

                const modal = $(this);
                modal.find('.modal-body #phone').val(phone);
                modal.find('.modal-body #email').val(email);
                modal.find('.modal-body #address').val(address);

            });
        });


    </script>



@endsection