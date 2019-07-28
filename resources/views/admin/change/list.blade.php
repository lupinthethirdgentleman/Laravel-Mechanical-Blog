@extends('admin.basic')

@section('style')
    <link href="{{asset('fileinput/css/fileinput.css')}}" rel="stylesheet"/>
    <style>
        .file-caption.icon-visible .file-caption-name {
            padding-left: 24px;
        }
    </style>

@endsection
<!-- @section('content') -->

    <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">
                <!-- Contextal Classes -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <ul class="list-group">
                                <!-- <li class="list-group-item list-group-item-success" style="font-size: 28px;padding-left: 30px"><i class="material-icons">E-mail</i> : {{$info->email}}</li> -->
                                <!-- <li class="list-group-item list-group-item-info" style="font-size: 28px;padding-left: 30px"><i class="material-icons">email</i>  {{$info->email}}</li> -->

                            </ul>
                            <div style="text-align: center">
                                <button type="button" class="btn btn-lg bg-purple" data-toggle="modal"
                                        data-target="#editUserModal" data-email = "{{$info->email}}" data-password = "{{$info->password}}"
                                         style="font-size: 20px">Update User Information</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Contextal Classes -->
                <!-- Contextual Classes With Linked Items -->

            </div>
        </div>
    </section>

    <div id="editUserModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 15px">
                <form action="{{url('admin/update_user_info')}}" method="post">
                <!-- {{url('admin/update_contact_info')}} -->
                    <input name="_token" type="hidden" value="{{csrf_token()}}">

                    <div class="modal-header">
                        <h4 class="modal-title">Update User Information</h4>

                    </div>
                    <div class="modal-body">

                        <label for="email">New E-mail</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-line">
                                <input type="email" id="email" name="email" class="form-control" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <!-- <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> -->
                            </div>
                        </div>

                        <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <!-- <label for="c_password">Current Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                        </div>

                        <label for="n1_password">New Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" id="n1_password" name="n1_password" class="form-control" required>
                            </div>
                        </div> -->

                        <label for="password">New Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" id="password" name="password" class="form-control" required>
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


@endsection