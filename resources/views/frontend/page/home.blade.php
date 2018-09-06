@extends('frontend.layouts.master')
@section('content')
<section>
    <!-- Slide home -->
    <div class="slide">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>	  </ol>

            <div class="carousel-inner" role="listbox">
                <?php
                $i=1;
                ?>
                @if(!empty($banner))
                    @forelse($banner as $banners)
                        @if($i==1)
                            <div class="item active">
                                <img src="{{$banners->image}}" alt="{{$banners->image}}" class="img-responsive">
                            </div>
                            @else
                            <div class="item ">
                                <img src="{{$banners->image}}" alt="{{$banners->image}}" class="img-responsive">
                            </div>
                            @endif
                        <?php ++$i; ?>
                        @empty
                        @endforelse
                    @else
                <div class="item active">
                    <img src="http://goldsuncnc.com.vn/files/adv/adv_slide-1-_12.jpg" alt="" class="img-responsive">
                </div>
                <div class="item ">
                    <img src="http://goldsuncnc.com.vn/files/adv/adv_3_63.jpg" alt="" class="img-responsive">
                </div>
            @endif
        </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>	</div>
    <!-- End Slide home -->

    <!-- <div class="gioithieu"><div class="container">
            </div></div> -->

    <div class="prd-home">
        <div class="container">
            <div class="row">
                <div class="prd-cat">
                    <div class="title-cat">@lang('category.category')</div>
                    <div class="line"></div>
                    <div class="slide-prd-category owl-theme">
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsunmachinery.vn/1-may-cnc" title="MÁY CNC"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t500_41.jpg" alt="MÁY CNC"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsunmachinery.vn/1-may-cnc" title="MÁY CNC">MÁY CNC</a>
                                </div>
                            </div>
                        </div>
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsunmachinery.vn/13-may-cong-cu" title="MÁY CÔNG CỤ"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/b-800-4b_90.jpg" alt="B-800/4B Glass Engraving Machine"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsunmachinery.vn/13-may-cong-cu" title="MÁY CÔNG CỤ">MÁY CÔNG CỤ</a>
                                </div>
                            </div>
                        </div>
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsunmachinery.vn/27-may-moc-thiet-bi-khac" title="MÁY MỌC THIẾT BỊ KHÁC"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t8_42.jpg" alt="MÁY MỌC THIẾT BỊ KHÁC"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsunmachinery.vn/27-may-moc-thiet-bi-khac" title="MÁY MỌC THIẾT BỊ KHÁC">MÁY MỌC THIẾT BỊ KHÁC</a>
                                </div>
                            </div>
                        </div>
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsunmachinery.vn/33-vat-tu-linh-kien" title="VẬT TƯ LINH KIỆN"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-v856_08.jpg" alt="VẬT TƯ LINH KIỆN"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsunmachinery.vn/33-vat-tu-linh-kien" title="VẬT TƯ LINH KIỆN">VẬT TƯ LINH KIỆN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="prd-home">
        <div class="container">
            <div class="row">
                <div class="prd-cat">
                    <div class="title-cat">@lang('category.top_products')</div>
                    <div class="line"></div>
                    <div class="slide-prd owl-theme">
                        @forelse($product as $pro)
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="{{URL::route('product.detail',['slug'=>$pro['slug_'.$local]])}}" title="{{$pro['name_'.$local]}}">
                                        <img class="img-responsive" src="{{$pro['image']}}" alt="{{$pro['name_'.$local]}}">
                                    </a>
                                </div>
                                <div class="title-prd">
                                    <a href="{{URL::route('product.detail',['slug'=>$pro['slug_'.$local]])}}" title="{{$pro['name_'.$local]}}">{{$pro['name_'.$local]}}</a>
                                </div>
                            </div>
                        </div>
                            @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news-home">
        <div class="container">
            <div class="row">
                <div class="news-left col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="title-cat">@lang('category.us_contact')</div>
                    <div class="line"></div>		<div class="img-news-home">
                        <a href="#" title="Công ty TNHH Máy móc và Vật tư Goldsun"><img src="http://goldsuncnc.com.vn/files/news/2017_09/1499053023_07.jpg" alt="Công ty TNHH Máy móc và Vật tư Goldsun" class="img-responsive"></a>
                    </div>
                    <div class="title-news-home"><a href="{{URL::route('about-us.index')}}" title="@lang('category.intro.title')">@lang('category.intro.title')</a></div>
                    <div class="bottom-news-home">
                        <p>
                            @lang('category.intro.content')&nbsp;</p>		</div>
                    <div class="chitiet"><a href="{{URL::route('about-us.index')}}" title="@lang('category.intro.title')">[ @lang('category.more') ]</a></div>
                </div>
                <div class="news-center col-xs-12 col-sm-12 col-md-2 col-lg-2">

                </div>
                <div class="news-right col-xs-12 col-sm-12 col-md-5 col-lg-5">

                    <div class="title-cat">@lang('category.news')</div>
                    <div class="line">

                    </div>
                    @forelse($newsLimitThree as $news)
                    <div class="newsest">
                        <div class="date-news">
                            <p class="p1"><span>{{$news['news_day']}}</span></p>
                            <p class="p2"><span>{{$news['news_month_year']}}</span></p>
                        </div>
                        <div class="title-newsest"><a href="{{URL::route('news.frontend-detail',['slug'=>$news['slug_'.$local]])}}" title="{{$news['name_'.$local]}}">{{$news['name_'.$local]}}</a></div>
                        <div class="hometext">
                            <p>
                                <span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">
                                    {!!$news['description_'.$local]!!}
                                </span></p></div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div></div></div>

    <div class="partner"><div class="container">
            <div class="title-cat">@lang('category.partners')</div>
            <div class="line"></div>
            <ul><li class="">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider1.PNG')}}" alt="1" class="img-responsive"></a>
                    </div>
                </li><li class="li-ou">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider7.jpg')}}" alt="2" class="img-responsive"></a>
                    </div>
                </li><li class="">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider2.jpg')}}" alt="3" class="img-responsive"></a>
                    </div>
                </li><li class="li-ou">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider8.jpg')}}" alt="4" class="img-responsive"></a>
                    </div>
                </li><li class="">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider3.png')}}" alt="5" class="img-responsive"></a>
                    </div>
                </li><li class="li-ou">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend//assets/img/provider9.png')}}" alt="6" class="img-responsive"></a>
                    </div>
                </li><li class="">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider4.png')}}" alt="7" class="img-responsive"></a>
                    </div>
                </li><li class="li-ou">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider10.png')}}" alt="8" class="img-responsive"></a>
                    </div>
                </li><li class="">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider5.png')}}" alt="9" class="img-responsive"></a>
                    </div>
                </li><li class="li-ou">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider11.png')}}" alt="10" class="img-responsive"></a>
                    </div>
                </li><li class="">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider6.png')}}" alt="11" class="img-responsive"></a>
                    </div>
                </li><li class="li-ou">
                    <div class="you-wp">
                        <a href="http://" title=""><img src="{{asset('frontend/assets/img/provider12.png')}}" alt="12" class="img-responsive"></a>
                    </div>
                </li>	</ul>
        </div>
    </div></div>
    <div class="contact-home"><div class="container"><div class="row">
                <div class="title-cat">@lang('category.contact')</div>
                <div class="line line-2"></div>
                <div class="col-contact col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="http://goldsuncnc.com.vn/lien-he.html" title=""><img src="{{asset('frontend/assets/img/c1.png')}}" alt=""></a>
                    <p class="title-contact">{{config('language_footer.info_contact_'.$local.'.address.title')}}</p>
                    <p class="text-contact"><p>
                    {!! config('language_footer.info_contact_'.$local.'.address.content') !!}
                </div>

                <div class="col-contact col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="http://goldsuncnc.com.vn/lien-he.html" title=""><img src="{{asset('frontend/assets/img/c2.png')}}" alt=""></a>
                    <p class="title-contact">{{config('language_footer.info_contact_'.$local.'.phone.title')}}</p>
                    {!! config('language_footer.info_contact_'.$local.'.phone.content') !!}
                </div>

                <div class="col-contact col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="http://goldsuncnc.com.vn/lien-he.html" title=""><img src="{{asset('frontend/assets/img/c3.png')}}" alt=""></a>
                    <p class="title-contact">Email</p>
                    <p class="text-contact">goldsunvn.cnc@gmail.com  </p>
                </div>
            </div></div></div>
</section>
    @stop
