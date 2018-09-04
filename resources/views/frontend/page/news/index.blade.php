@extends('frontend.layouts.master')
@section('content')
    <section>
        <div class="url-head">
            <div class="container">
                <div class='welcome'>
                    <h2>
                        @if($local=='vi')
                        Tin tức & sự kiên
                            @else
                        News & event
                            @endif
                    </h2>
                </div>
                <div class='link_detail'><a href='/'>
                        @if($local=='vi')
                            Trang chủ
                        @else
                            Home
                        @endif
                        &nbsp;/</a>
                    <a href="javascript:void(0)" >
                        @if($local=='vi')
                            Tin tức & sự kiên
                        @else
                            News & event
                        @endif
                    </a></div>
            </div>
        </div>
        <div class="page-home">
            <div class="container">
                <div class="row">
                    @forelse($news as $item)
                    <div class="prd col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="news-in">
                            <div class="img-news">
                                <a href="" title="{{$item['name_'.$local]}}">
                                    <img class="img-responsive" src="{{$item['image']}}" alt="{{$item['image']}}">
                                </a>
                            </div>
                            <div class="title-news">
                                <a href="" title="{{$item['name_'.$local]}}">{{$item['name_'.$local]}}</a>
                            </div>
                            <div class="text-prd">
                                    <span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                                        {!! $item['description_'.$local]!!}
                                    </span>

                            </div>
                            <div class="more-prd"><a href="{{URL::route('news.frontend-detail',['slug'=>$item['slug_'.$local]])}}" title="">@lang('category.more')</a></div>
                        </div>
                    </div>
                        @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@stop