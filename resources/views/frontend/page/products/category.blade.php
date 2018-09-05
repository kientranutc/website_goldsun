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
                <h2>{{$categoryName['name_'.$local]}}</h2>
            </div>
            <div class='link_detail'><a href='/'>
                    @if($local=='vi')
                        Trang chủ
                    @else
                        Home
                    @endif
                    &nbsp;/</a>
                <a href="javascript:void(0)" >
                   {{$categoryName['name_'.$local]}}
                </a></div>
        </div>
        </div>
    </div>
    <div class="page-home">
        <div class="container">
            <div class="row">
                @if(!empty($productForCategory))
                    @forelse($productForCategory as $item)
                    <div class="prd col-xs-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="prd-in">
                            <div class="img-prd">
                                <a href="{{URL::route('product.detail',['slug'=>$item['slug_'.$local]])}}" title="{{$item['name_'.$local]}}"><img class="img-responsive" src="{{$item['image']}}" alt="{{$item['name_'.$local]}}"></a>
                            </div>
                            <div class="title-prd">
                                <a href="{{URL::route('product.detail',['slug'=>$item['slug_'.$local]])}}" title="{{$item['name_'.$local]}}">{{$item['name_'.$local]}}</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endif
                @endif

                <div class="cl"></div>
                <div class="pagging">
                    <div class="page">
                       {{$productForCategory->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop