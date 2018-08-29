@extends('backend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/all.css')}}">
@stop
@section('content')
    <section class="content">
        <div class="row">
            <!-- form start -->
            <form role="form" action="{{URL::route('news.post-add')}}" method="post">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới tin tức</h3>
                    </div>
                    <!-- /.box-header -->
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('name_en'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Tiêu đề (Tiếng việt)</label>
                                        <input type="text" name="name_en" value="{{old('name_en')}}" class="form-control" id="exampleInputPassword1" placeholder="Tiêu đề (Tiếng việt)">
                                        <p class="text-danger">{{$errors->first('name_en')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('name_vi'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Tiêu đề (Tiếng anh)</label>
                                        <input type="text" name="name_vi" value="{{old('name_vi')}}" class="form-control" id="exampleInputPassword1" placeholder="Tiêu đề (Tiếng anh)">
                                        <p class="text-danger">{{$errors->first('name_vi')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Ảnh tin tức</label>
                                    <div class="image-content">
                                        <p> <img src="{{asset('backend/img/image_empty.png')}}" style="cursor: pointer" width="100px" height="100px" title="click để thêm ảnh" id="image" alt=""></p>
                                        <input type="hidden" name="image" id="image-input" value="{{old('image')}}">
                                        <p class="text-danger">{{$errors->first('image')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="active" id="optionsRadios1" value="1" checked="">
                                                        Hiển thị
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="radio">
                                                    <label><input type="radio" name="actives" id="optionsRadios2" value="0">
                                                        Ẩn
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung (Tiếng việt)</label>
                                    <textarea name="description_vi" class="form-control" id="description_vi" cols="30" rows="10">{{old('description_vi')}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung(Tiếng anh)</label>
                                    <textarea name="description_en" class="form-control" id="description_en" cols="30" rows="10">{{old('description_en')}}</textarea>
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