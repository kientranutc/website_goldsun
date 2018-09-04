@extends('frontend.layouts.master')
@section('content')
    <section>
        <div class="url-head">
            <div class="container">
                <div class="welcome">
                    <h1>{{$newsDetail['name_'.$local]}}</h1>
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
                    <div class="tble_tin">
                        <div class="content">
                            <p>
                                <span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                                    {!! $newsDetail['description_'.$local] !!}
                                </span>
                            </p>
                        </div>
                        <div align="right" style="padding-top: 10px"></div>
                    </div>
                </div>
                <div class="title-cat">@lang('category.news_relate')</div>
                <div class="line"></div>
                <ul class="other-news">
                    @if(!empty($newsRelate))
                        @forelse($newsRelate as $newsRelates)
                        <li>
                            <a href="{{URL::route('news.frontend-detail',['slug'=>$newsRelates['slug_'.$local]])}}" class="hometext">{{$newsRelates['name_'.$local]}}</a>
                            <span class="newsothers">({{date('d.m.Y', strtotime($newsRelates['created_at']))}})</span>
                        </li>
                        @empty
                            @endforelse
                        @endif
                </ul>
            </div>
        </div>

    </section>
@stop