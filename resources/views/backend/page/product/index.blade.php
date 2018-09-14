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
                        <a href="{{URL::route('product.add')}}" class="btn btn-success">Thêm mới</a>
                        <br>
                        <br>
                        <h3 class="box-title">Danh sách sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm(Tiếng việt)</th>
                                <th>Tên sản phẩm(Tiếng anh)</th>
                                <th>Tên danh mục</th>
                                <th>Ảnh</th>
                                <th>Trạng thái</th>
                                <th>Sản phẩm nổi bật</th>
                                <th>Nội dung</th>
                                <th>Ngày tạo</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($product as $item)
                                <tr>
                                    <td>
                                        {{$item->id}}
                                    </td>
                                    <td>{{$item->name_vi}}</td>
                                    <td>{{$item->name_en}}</td>
                                    <td>{{$category->getCategory($item->category_id)}}</td>
                                    <td><img src="{{($helper->checkImage($item->image))?$item->image:"http://goldsunmachinery.vn/backend/img/image_empty.png"}}" alt="" width="70px" height="70px"></td>
                                    <td class="text-center">
                                        @if($item['active']==1)
                                            <span class="btn btn-success"> Hiển thị</span>
                                        @else
                                            <span class="btn btn-danger">Ẩn</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($item['is_host']==1)
                                            <span class="btn btn-danger">Sản phẩm nổi bật</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm show-description" data-id="{{$item->id}}">Hiển thị nội dung</button>
                                    </td>
                                    <td><b> {{$item['created_at']}}</b></td>
                                    <td class="text-center">
                                        <a href="{{URL::route('product.edit',['id'=>$item['id']])}}" title="sửa" class="btn btn-primary"><i class="fa fa-refresh"></i> Sửa</a>
                                        <a href="{{URL::route('product.delete',['id'=>$item['id']])}}" onclick="return confirm('Bạn có muốn xóa sản phẩm này không ?');" title="Xóa" class="btn btn-danger"><i class="fa fa-trash"></i> Xóa</a>
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

            $(document).on('click', '.show-description', function () {
               var id = $(this).data('id');
               $('#modalDescription').modal('show').find('.content-change').load("/admin/san-pham/chi-tiet/"+id);
            });
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
                searching: true,
                lengthMenu: [[50, 100,150, 200, 500, -1], [50, 100,150, 200, 500, 'ALL']],
            })
        })
    </script>
@stop