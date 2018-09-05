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
                    @if(!empty($productRelate))
                        @forelse($productRelate as $item)
                        <div class="prd col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="{{URL::route('product.detail',['slug'=>$item['slug_'.$local]])}}" title="{{$item['name_'.$local]}}">
                                        <img class="img-responsive" src="{{$item['image']}}" alt="MÁY GIA CÔNG TRUNG TÂM CỠ LỚN">
                                    </a>
                                </div>
                                <div class="title-prd">
                                    <a href=""{{URL::route('product.detail',['slug'=>$item['slug_'.$local]])}}" title="{{$item['name_'.$local]}}">{{$item['name_'.$local]}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                            @endforelse
                        @endif

                </div>
            </div>
        </div>
    </div>
</section>
@stop