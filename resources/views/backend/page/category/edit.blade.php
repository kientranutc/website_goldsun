@extends('backend.layouts.master')
@section('link')

@stop
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cập nhật danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{URL::route('category.post-add')}}" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <label for="exampleInputPassword1">Ảnh danh mục</label>
                            <div class="image-content">
                                <p> <img src="{{(empty($dataEdit->image))?asset('backend/img/image_empty.png'):$dataEdit->image}}" style="cursor: pointer" width="100px" height="100px" title="click để thêm ảnh" id="image" alt=""></p>
                                <input type="hidden" name="image" id="image-input" value="{{old('image')?old('image'):$dataEdit->image}}">
                                <p class="text-danger">{{$errors->first('image')}}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('name_en'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Tên danh mục (Tiếng việt)</label>
                                        <input type="text" name="name_en" value="{{old('name_en')?old('name_en'):$dataEdit->name_en}}" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục (Tiếng việt)">
                                        <p class="text-danger">{{$errors->first('name_en')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('name_vi'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Tên danh mục (Tiếng anh)</label>
                                        <input type="text" name="name_vi" value="{{old('name_vi')?old('name_vi'):$dataEdit->name_vi}}" class="form-control" id="exampleInputPassword1" placeholder="Tên danh mục (Tiếng anh)">
                                        <p class="text-danger">{{$errors->first('name_vi')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('parent_id'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Danh mục (Cha/con)</label>
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option value="">Chọn danh muc(cha/con)</option>
                                            {{$helper->parent($dataCategory, $dataEdit->id)}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Trạng Thái</label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" {{($dataEdit->active==1)?"checked":""}} name="active" id="optionsRadios1" value="1">
                                                        Hiển thị
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="radio">
                                                    <label><input type="radio"  {{($dataEdit->active==0)?"checked":""}} name="active" id="optionsRadios2" value="0">
                                                        Ẩn
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
@section('script')
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
        });
    </script>

@stop