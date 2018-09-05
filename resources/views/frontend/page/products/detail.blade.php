@extends('frontend.layouts.master')
@section('link')
    <style>
        .img-prd {
            height: 188px !important;
        }
    </style>
@stop
@section('content')
<section>
    <div class="url-head">
        <div class="container">
            <div class='welcome'>
                <h1>{{$productDetail['name_'.$local]}}</h1>
            </div>
            <div class='link_detail'><a href='/'>
                    @if($local=='vi')
                        Trang chủ
                    @else
                        Home
                    @endif
                    &nbsp;/</a>
                <a href="javascript:void(0)" >
                    {{$productDetail['name_'.$local]}}
                </a></div>
        </div>        </div>
    </div>
    <div class="page-home">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="detail-product">
                        <div class="left-prd">
                            <div class="img-detail">
                                <img class="img-responsive" src=" {{$productDetail['image']}}" alt=" {{$productDetail['name_'.$local]}}">
                            </div>
                        </div>
                        <div class="chitiet-bottom">
                            <div class="title-prdcode"><span>
                                    @if($local=='vi')
                                        Chi tiết
                                        @else
                                        Description
                                    @endif
                                </span></div>
                            <div class="desc">
                                <div id="div1">
                                    <p>
                                        &nbsp;
                                    </p>
                                    <div class="table-responsive">
                                    {!! $productDetail['description_'.$local]!!}
                                    </div>
                                </div>
                                <p>
                                    &nbsp;
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_orther">
                    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                        <div class='title-cat'> @if($local=='vi')
                                Sản phẩm khác
                            @else
                                Product other
                            @endif</div>
                        <div class='line'></div>
                    </div>
                    <div class="prd col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="prd-in">
                            <div class="img-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tam-co-lon-356.html" title="MÁY GIA CÔNG TRUNG TÂM CỠ LỚN"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/11_55.jpg" alt="MÁY GIA CÔNG TRUNG TÂM CỠ LỚN"></a>
                            </div>
                            <div class="title-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tam-co-lon-356.html" title="MÁY GIA CÔNG TRUNG TÂM CỠ LỚN">MÁY GIA CÔNG TRUNG TÂM CỠ LỚN</a>
                            </div>
                        </div>
                    </div>
                    <div class="prd col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="prd-in">
                            <div class="img-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tamkieu-dung-351.html" title="MÁY GIA CÔNG TRUNG TÂM(KIỂU ĐỨNG)"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/6_19.jpg" alt="MÁY GIA CÔNG TRUNG TÂM(KIỂU ĐỨNG)"></a>
                            </div>
                            <div class="title-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tamkieu-dung-351.html" title="MÁY GIA CÔNG TRUNG TÂM(KIỂU ĐỨNG)">MÁY GIA CÔNG TRUNG TÂM(KIỂU ĐỨNG)</a>
                            </div>
                        </div>
                    </div>
                    <div class="prd col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="prd-in">
                            <div class="img-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tam-cnc-347.html" title="MÁY GIA CÔNG TRUNG TÂM CNC"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/2_77.jpg" alt="MÁY GIA CÔNG TRUNG TÂM CNC"></a>
                            </div>
                            <div class="title-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tam-cnc-347.html" title="MÁY GIA CÔNG TRUNG TÂM CNC">MÁY GIA CÔNG TRUNG TÂM CNC</a>
                            </div>
                        </div>
                    </div>
                    <div class="prd col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="prd-in">
                            <div class="img-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tam-cnc-gsvm8050el3-gsvm1050el3-346.html" title="MÁY GIA CÔNG TRUNG TÂM CNC GSVM8050EL3 - GSVM1050EL3"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/1_64.jpg" alt="MÁY GIA CÔNG TRUNG TÂM CNC GSVM8050EL3 - GSVM1050EL3"></a>
                            </div>
                            <div class="title-prd">
                                <a href="http://goldsuncnc.com.vn/may-gia-cong-trung-tam-cnc-gsvm8050el3-gsvm1050el3-346.html" title="MÁY GIA CÔNG TRUNG TÂM CNC GSVM8050EL3 - GSVM1050EL3">MÁY GIA CÔNG TRUNG TÂM CNC GSVM8050EL3 - GSVM1050EL3</a>
                            </div>
                        </div>
                    </div>
                    <div class="prd col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="prd-in">
                            <div class="img-prd">
                                <a href="http://goldsuncnc.com.vn/t-18-box-way-vertical-machining-center-319.html" title="T-18 Box way Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-18_80.jpg" alt="T-18 Box way Vertical Machining Center"></a>
                            </div>
                            <div class="title-prd">
                                <a href="http://goldsuncnc.com.vn/t-18-box-way-vertical-machining-center-319.html" title="T-18 Box way Vertical Machining Center">T-18 Box way Vertical Machining Center</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop