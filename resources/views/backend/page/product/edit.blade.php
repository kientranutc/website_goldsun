@extends('backend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/all.css')}}">
@stop
@section('content')
    <section class="content">
        <div class="row">
            <!-- form start -->
            <form role="form" action="{{URL::route('product.post-edit', ["id"=>$dataEdit->id])}}" method="post">
                <!-- left column -->
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa sản phẩm</h3>
                        </div>
                        <!-- /.box-header -->
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('name_vi'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Tên sản phẩm (Tiếng việt)</label>
                                        <input type="text" name="name_vi" value="{{old('name_vi')?old('name_vi'):$dataEdit->name_vi}}" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm (Tiếng việt)">
                                        <p class="text-danger">{{$errors->first('name_vi')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('name_en'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Tên sản phẩm(Tiếng anh)</label>
                                        <input type="text" name="name_en" value="{{old('name_en')?old('name_en'):$dataEdit->name_en}}" class="form-control" id="exampleInputPassword1" placeholder="Tên sản phẩm (Tiếng anh)">
                                        <p class="text-danger">{{$errors->first('name_en')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Ảnh sản phẩm</label>
                                    <div class="image-content">
                                        <p> <img src="{{asset('backend/img/image_empty.png')}}" style="cursor: pointer" width="100px" height="100px" title="click để thêm ảnh" id="image" alt=""></p>
                                        <input type="hidden" name="image" id="image-input" value="{{($helper->checkImage($dataEdit->image))?$dataEdit->image:"http://goldsunmachinery.vn/backend/img/image_empty.png"}}">
                                        <p class="text-danger">{{$errors->first('image')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="active" {{($dataEdit->active==1)?"checked":""}} id="optionsRadios1" value="1" checked="">
                                                        Hiển thị
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <label><input type="radio" {{($dataEdit->active==0)?"checked":""}} name="active" id="optionsRadios2" value="0">
                                                        Ẩn
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sản phẩm HOT</label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" {{($dataEdit->is_host==1)?"checked":""}}  name="is_hot" id="optionsRadios1" value="1">
                                                        Hiển thị
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <label><input type="radio"  {{($dataEdit->is_host==0)?"checked":""}} name="is_hot" id="optionsRadios2" value="0">
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
                                        <textarea name="description_vi" class="form-control" id="description_vi" cols="30" rows="10">
                                            {{old('description_vi')?ld('description_vi'):$dataEdit->description_vi}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung(Tiếng anh)</label>
                                        <textarea name="description_en" class="form-control" id="description_en" cols="30" rows="10">
                                          {{old('description_en')?ld('description_en'):$dataEdit->description_en}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Danh mục</h3>
                        </div>
                        <div class="box-body" style="overflow-y: scroll; height: 600px">
                            <ul class="nav">
                                @forelse($dataCategoryParentNull as $item)
                                    <li>
                                        <div class="form-group">
                                            <label for="{{$item->id}}">
                                                <input type="checkbox" name="category[]" {{ in_array($item->id,explode(',',$dataEdit->category_id))?"checked":""}} value="{{$item->id}}" id="{{$item->id}}" class="flat-red">
                                                {{$item->name_vi}}
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <ul class="nav" style="margin-left: 30px">
                                            <?php
                                            $dataChild = $category->getCategoryParent($item->id);

                                            ?>
                                            @forelse($dataChild as $val)
                                                <li>
                                                    <div class="form-group">
                                                        <label for="{{$val->id}}">
                                                            <input type="checkbox" name="category[]"  {{(in_array($val->id, explode(',',$dataEdit->category_id)))?"checked":""}}  id="{{$val->id}}" value="{{$val->id}}" class="flat-red" >
                                                            {{$val->name_vi}}
                                                        </label>
                                                    </div>
                                                </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
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