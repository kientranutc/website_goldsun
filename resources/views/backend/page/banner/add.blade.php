@extends('backend.layouts.master')
@section('link')

@stop
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm mới banner</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{URL::route('banner.post-add')}}" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <label for="exampleInputPassword1">Ảnh banner</label>
                            <div class="image-content" style="text-align: center">
                               <p> <img src="{{asset('backend/img/image_empty.png')}}" style="cursor: pointer" width="100px" height="100px" title="click để thêm ảnh" id="image" alt=""></p>
                                <input type="hidden" name="image" id="image-input" value="{{old('image')}}">
                                <p class="text-danger">{{$errors->first('image')}}</p>
                            </div>
                            <div class="form-group {{($errors->has('link'))?"has-error":""}}">
                                <label for="exampleInputPassword1">Link liên kết</label>
                                <input type="text" name="link" value="{{old('link')}}" class="form-control" id="exampleInputPassword1" placeholder="Linh liên kết">
                                <p class="text-danger">{{$errors->first('link')}}</p>
                            </div>
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
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label><input type="radio" name="active" id="optionsRadios2" value="0">
                                                Ẩn
                                            </label>
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