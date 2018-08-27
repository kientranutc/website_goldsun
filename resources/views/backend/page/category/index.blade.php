@extends('backend.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@stop
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{URL::route('category.add')}}" class="btn btn-success">Thêm mới</a>
                    <br>
                    <br>
                    <h3 class="box-title">Danh sách danh mục</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục(Tiếng việt)</th>
                            <th>Tên danh mục(Tiếng anh)</th>
                            <th>Tên danh mục(Cha/con)</th>
                            <th>Ảnh</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $item)
                            <tr>
                                <td>
                                    {{$item['id']}}
                                </td>
                                <td>{{$item['name_vi']}}</td>
                                <td>{{$item['name_en']}}</td>
                                <td>{{(empty($item['child']))?"":"--".$item['child']}}</td>
                                <td>
                                    <img src="{{$item['image']}}" width="100px" height="100px" alt="">
                                </td>
                                <td class="text-center">
                                    @if($item['active']==1)
                                        <span class="btn btn-success"> Hiển thị</span>
                                    @else
                                        <span class="btn btn-danger">Ẩn</span>
                                    @endif
                                </td>
                                <td><b> {{$item['created_at']}}</b></td>
                                <td class="text-center">
                                    <a href="{{URL::route('category.edit',['id'=>$item['id']])}}" title="sửa" class="btn btn-primary"><i class="fa fa-refresh"></i> Sửa</a>
                                    <a href="{{URL::route('category.delete',['id'=>$item['id']])}}" onclick="return confirm('Bạn có muôn xóa danh mục này không ?');" title="Xóa" class="btn btn-danger"><i class="fa fa-trash"></i> Xóa</a>

                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
    @stop
@section('script')
    <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example2').DataTable({
                pagingType: "full_numbers",
                ordering:true,
                info:false,
                dom: 'Bfrtip',
                language: {
                    "paginate": {
                        "first":"Đầu",
                        "previous": "Trước",
                        "next":"Tiếp",
                        "last":"cuối"
                    },
                    "sLengthMenu": "Xem _MENU_ bản ghi",
                    "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                    "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                    "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                    'sSearchPlaceholder':'Tìm kiếm',
                    processing: "<div id='divloader'></div>",
                },
                //responsive: true,
                searching: false,
                lengthMenu: [[50, 100,150, 200, 500, -1], [50, 100,150, 200, 500, 'ALL']],
            })
        })
    </script>
@stop