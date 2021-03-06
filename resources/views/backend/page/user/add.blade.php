@extends('backend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/all.css')}}">
@stop
@section('content')
    <section class="content">
        <div class="row">
            <!-- form start -->
            <form role="form" action="{{URL::route('user.post-add')}}" method="post">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới người dùng</h3>
                    </div>
                    <!-- /.box-header -->
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group {{($errors->has('email'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="text" name="email" value="{{old('email')}}" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{($errors->has('name'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Username</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputPassword1" placeholder="username">
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group {{($errors->has('fullname'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Họ Tên</label>
                                        <input type="text" name="fullname" value="{{old('fullname')}}" class="form-control" id="exampleInputPassword1" placeholder="Họ Tên">
                                        <p class="text-danger">{{$errors->first('fullname')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('password'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                                        <p class="text-danger">{{$errors->first('password')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('cp_password'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                                        <input type="password" name="cp_password" value="{{old('cp_password')}}" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu">
                                        <p class="text-danger">{{$errors->first('cp_password')}}</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </div>
                </div>
            </div>
            </form>
        </div>

    </section>
@stop
@section('script')
    <script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
        var host = window.location.href;
        host = host.split('admin');
        tinymce.init({
            editor_selector : "mceEditor",
            selector: 'textarea',
            height: 200,
            plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"],
            toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
            toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
            image_advtab: true,
            menubar: true,
            toolbar_items_size: 'small',
            relative_urls: false,
            remove_script_host: false,
            external_filemanager_path:host[0]+"filemanager/",
            filemanager_title: " Quản lý file",
            external_plugins: {
                "filemanager": host[0]+"/filemanager/plugin.min.js"
            },
            video_template_callback: function(data) {
                return '';
            },

        });
    </script>
    <script>
        $(document).ready(function () {
            //get image default
            var images=$('#image-input').val();
            if (images!='') {
                $('#image').attr('src', images);
            }
            // choose image
            $(document).on('click', '#image', function () {
                $('#imageModal').modal('show');
                $("#imageModal").on('hidden.bs.modal', function(e) {
                    var image=$('#image-input').val();
                    $('#image').attr('src', image);
                });
            });
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })
        });
    </script>

@stop