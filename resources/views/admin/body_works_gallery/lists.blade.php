@extends('admin.basic')

@section('style')

    <!-- Light Gallery Plugin Css -->
    <link href="{{asset('assets_admin/plugins/light-gallery/css/lightgallery.css')}}" rel="stylesheet">
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

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BODY WORKS GALLERY
                                <small>All pictures taken from body works gallery</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#createBodyPhotoModal" data-toggle="modal">Create New</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">

                                <input type="hidden" id="base_url" value="{{asset('')}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                @foreach($galleries as $gallery)

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        @if($gallery->extension == 'image')
                                            <a href="{{asset('image/bodyworks_gallery')}}/{{$gallery->photo_name}}" data-sub-html="Demo Description">
                                                <img style="width: 100%;height: 229px" class="img-responsive thumbnail" src="{{asset('image/bodyworks_gallery')}}/{{$gallery->photo_name}}">
                                            </a>
                                        @else
                                            <video style="width: 100%;height: 229px" class="thumbnail" controls>
                                                <source src="{{asset('image/bodyworks_gallery')}}/{{$gallery->photo_name}}" type="video/mp4">
                                                <source src="{{asset('image/bodyworks_gallery')}}/{{$gallery->photo_name}}" type="video/ogg">
                                                Your browser does not support HTML5 video.
                                            </video>

                                        @endif


                                        @if($gallery->status == 'on')
                                            <div class="switch" style="text-align: center;display: inline-block">
                                                <label style="color: red;font-weight: bold">OFF<input type="checkbox" value="{{$gallery->id}}" class="body_gallery_status" checked><span class="lever"></span><span style="color:green">ON</span></label>
                                            </div>
                                        @else
                                            <div class="switch" style="text-align: center;display: inline-block">
                                                <label style="color: red;font-weight: bold">OFF<input type="checkbox" value="{{$gallery->id}}" class="body_gallery_status"><span class="lever"></span><span style="color:green">ON</span></label>
                                            </div>
                                        @endif
                                        <button type="button" data-toggle="modal" data-target="#deleteBgalleryModal" style="text-align: center;display: inline-block;float: right"
                                                class="btn btn-danger" data-id="{{$gallery->id}}">Delete</button>

                                    </div>

                                @endforeach


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upload Photo Modal HTML -->
    <div id="createBodyPhotoModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="padding: 15px">
                <form action="{{url('admin/create_body_works_gallery')}}" method="post" enctype="multipart/form-data">

                    <input name="_token" type="hidden" value="{{csrf_token()}}">

                    <div class="modal-header">
                        <h4 class="modal-title">Upload Photos</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <input id="photo" accept="video/*" name="photos[]" type="file" class="file" data-show-upload="false" data-browse-on-zone-click="true" multiple required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">Upload</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteBgalleryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content modal-col-deep-orange">
                <form action="{{url('admin/delete_Bgallery')}}" method="post">

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
    <!-- Light Gallery Plugin Js -->
    <script src="{{asset('assets_admin/plugins/light-gallery/js/lightgallery-all.js')}}"></script>
    <script src="{{asset('assets_admin/js/pages/medias/image-gallery.js')}}"></script>

    <script src="{{asset('fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('fileinput/js/fileinput.min.js')}}"></script>

    <script>
        url_base = $("input#base_url").val();

        $(".body_gallery_status").click(function () {

            $.ajax({
                type:'post',
                url:url_base + 'admin/check_body_gallery',
                data:{
                    'id':$(this).val(),
                    '_token' :$("input[name=_token]").val()},
                success:function (response) {
                    console.log(response)
                }
            })
        });

        $('#deleteBgalleryModal').on('show.bs.modal',function(event) {
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
                toastr['success']("New Photo Created Successfully.", "Success!");
            }
            @endif

            @if(Session::get('delete')){
                toastr['success']("Deleted Successfully.", "Success!");
            }
            @endif

        });

    </script>

@endsection