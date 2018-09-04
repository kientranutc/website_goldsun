@extends('backend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/all.css')}}">
@stop
@section('content')
    <section class="content">
        <div class="row">
            <!-- form start -->
            <form role="form" action="{{URL::route('user.post-edit')}}" method="post">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Đổi mật khẩu</h3>
                        </div>
                        <!-- /.box-header -->
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('password_old'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Mật khẩu cũ</label>
                                        <input type="password" name="password_old" value="{{old('password_old')}}" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu cũ">
                                        <p class="text-danger">{{$errors->first('password_old')}}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('password'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Mật khẩu mới</label>
                                        <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu mới">
                                        <p class="text-danger">{{$errors->first('password')}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{($errors->has('cp_password'))?"has-error":""}}">
                                        <label for="exampleInputPassword1">Nhập lại mật khẩu mới</label>
                                        <input type="password" name="cp_password" value="{{old('cp_password')}}" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu mới">
                                        <p class="text-danger">{{$errors->first('cp_password')}}</p>
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
            </form>
        </div>

    </section>
@stop
@section('script')


@stop