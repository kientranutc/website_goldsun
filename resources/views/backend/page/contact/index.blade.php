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
                        <br>
                        <h3 class="box-title">Danh sách liên hệ</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Địa Chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Email</th>
                                <th>Tiêu Đề</th>
                                <th>Nội Dung</th>
                                <th>Ngày Gửi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($contact as $item)
                                <tr>
                                    <td>
                                        {{$item->id}}
                                    </td>
                                    <td>
                                        <b class="text-success">{{$item->fullname}}</b>
                                    </td>
                                    <td>
                                        <b class="text-danger">{{$item->address}}</b>
                                    </td>
                                    <td>
                                        <b class="text-primary">{{$item->phone}}</b>
                                    </td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->content}}</td>
                                    <td><b> {{$item->created_at}}</b></td>

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
                $('#modalDescription').modal('show').find('.content-change').load("/admin/tin-tuc/chi-tiet/"+id);
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