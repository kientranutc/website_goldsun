@extends('frontend.layouts.master')
@section('content')
<section>
    <!-- Slide home -->
    <div class="slide">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>	  </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://goldsuncnc.com.vn/files/adv/adv_slide-1-_12.jpg" alt="" class="img-responsive">
                </div><div class="item ">
                    <img src="http://goldsuncnc.com.vn/files/adv/adv_3_63.jpg" alt="" class="img-responsive">
                </div>	  </div>

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
                                    <a href="" title="T-500 High Speed Tapping Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t500_41.jpg" alt="T-500 High Speed Tapping Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="" title="T-500 High Speed Tapping Center">MÁY CNC</a>
                                </div>
                            </div>
                        </div>
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="" title="B-800/4B Glass Engraving Machine"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/b-800-4b_90.jpg" alt="B-800/4B Glass Engraving Machine"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="" title="B-800/4B Glass Engraving Machine">MÁY CÔNG CỤ</a>
                                </div>
                            </div>
                        </div>
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="" title="T-8 Box way Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t8_42.jpg" alt="T-8 Box way Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="" title="T-8 Box way Vertical Machining Center">MÁY MỌC THIẾT BỊ KHÁC</a>
                                </div>
                            </div>
                        </div>
                        <div class="prd">
                            <div class="prd-in">
                                <div class="img-prd">
                                    <a href="" title="T-V856 Parts Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-v856_08.jpg" alt="T-V856 Parts Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="" title="T-V856 Parts Machining Center">VẬT TƯ LINH KIỆN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="prd-home"><div class="container"><div class="row">
                <div class="prd-cat">
                    <div class="title-cat">@lang('category.top_products')</div>
                    <div class="line"></div>
                    <div class="slide-prd owl-theme"><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/c-650-cnc-engravingmilling-machine-339.html" title="C-650 CNC Engraving&Milling Machine"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/c-650_97.jpg" alt="C-650 CNC Engraving&Milling Machine"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/c-650-cnc-engravingmilling-machine-339.html" title="C-650 CNC Engraving&Milling Machine">C-650 CNC Engraving&Milling Machine</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500c-high-speed-tapping-center-338.html" title="T-500C High Speed Tapping Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-500c_62.jpg" alt="T-500C High Speed Tapping Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500c-high-speed-tapping-center-338.html" title="T-500C High Speed Tapping Center">T-500C High Speed Tapping Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500h-high-speed-tapping-center-337.html" title="T-500H High Speed Tapping Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-500h_21.jpg" alt="T-500H High Speed Tapping Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500h-high-speed-tapping-center-337.html" title="T-500H High Speed Tapping Center">T-500H High Speed Tapping Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-600-high-speed-tapping-center-336.html" title="T-600 High Speed Tapping Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-600_69.jpg" alt="T-600 High Speed Tapping Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-600-high-speed-tapping-center-336.html" title="T-600 High Speed Tapping Center">T-600 High Speed Tapping Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-700-high-speed-tapping-center-335.html" title="T-700 High Speed Tapping Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-700_24.jpg" alt="T-700 High Speed Tapping Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-700-high-speed-tapping-center-335.html" title="T-700 High Speed Tapping Center">T-700 High Speed Tapping Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-11l-line-rail-vertical-machining-center-334.html" title="T-11L Line Rail Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-11l_73.jpg" alt="T-11L Line Rail Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-11l-line-rail-vertical-machining-center-334.html" title="T-11L Line Rail Vertical Machining Center">T-11L Line Rail Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-12l-line-rail-vertical-machining-center-333.html" title="T-12L Line Rail Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-12l_29.jpg" alt="T-12L Line Rail Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-12l-line-rail-vertical-machining-center-333.html" title="T-12L Line Rail Vertical Machining Center">T-12L Line Rail Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-13-box-way-vertical-machining-center-322.html" title="T-13 Box way Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-12_43.jpg" alt="T-13 Box way Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-13-box-way-vertical-machining-center-322.html" title="T-13 Box way Vertical Machining Center">T-13 Box way Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-15-box-ways-vertical-machining-center-321.html" title="T-15 Box ways Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-16_98.jpg" alt="T-15 Box ways Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-15-box-ways-vertical-machining-center-321.html" title="T-15 Box ways Vertical Machining Center">T-15 Box ways Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-16-box-ways-vertical-machining-center-320.html" title="T-16 Box ways Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-16_32.jpg" alt="T-16 Box ways Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-16-box-ways-vertical-machining-center-320.html" title="T-16 Box ways Vertical Machining Center">T-16 Box ways Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-18-box-way-vertical-machining-center-319.html" title="T-18 Box way Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-18_80.jpg" alt="T-18 Box way Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-18-box-way-vertical-machining-center-319.html" title="T-18 Box way Vertical Machining Center">T-18 Box way Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-11g-gear-head-vertical-machining-center-318.html" title="T-11G Gear Head Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-11g_05.jpg" alt="T-11G Gear Head Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-11g-gear-head-vertical-machining-center-318.html" title="T-11G Gear Head Vertical Machining Center">T-11G Gear Head Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500b-high-speed-tapping-center-317.html" title="T-500B High Speed Tapping Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-500b_79.jpg" alt="T-500B High Speed Tapping Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500b-high-speed-tapping-center-317.html" title="T-500B High Speed Tapping Center">T-500B High Speed Tapping Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-v856-parts-machining-center-316.html" title="T-V856 Parts Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t-v856_08.jpg" alt="T-V856 Parts Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-v856-parts-machining-center-316.html" title="T-V856 Parts Machining Center">T-V856 Parts Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-8-box-way-vertical-machining-center-315.html" title="T-8 Box way Vertical Machining Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t8_42.jpg" alt="T-8 Box way Vertical Machining Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-8-box-way-vertical-machining-center-315.html" title="T-8 Box way Vertical Machining Center">T-8 Box way Vertical Machining Center</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/b-8004b-glass-engraving-machine-314.html" title="B-800/4B Glass Engraving Machine"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/b-800-4b_90.jpg" alt="B-800/4B Glass Engraving Machine"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/b-8004b-glass-engraving-machine-314.html" title="B-800/4B Glass Engraving Machine">B-800/4B Glass Engraving Machine</a>
                                </div>
                            </div></div><div class="prd"><div class="prd-in">
                                <div class="img-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500-high-speed-tapping-center-313.html" title="T-500 High Speed Tapping Center"><img class="img-responsive" src="http://goldsuncnc.com.vn/files/products/t500_41.jpg" alt="T-500 High Speed Tapping Center"></a>
                                </div>
                                <div class="title-prd">
                                    <a href="http://goldsuncnc.com.vn/t-500-high-speed-tapping-center-313.html" title="T-500 High Speed Tapping Center">T-500 High Speed Tapping Center</a>
                                </div>
                            </div></div></div></div>	</div></div></div>

    <div class="news-home">
        <div class="container">
            <div class="row">
                <div class="news-left col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="title-cat">@lang('category.us_contact')</div>
                    <div class="line"></div>		<div class="img-news-home">
                        <a href="#" title="Công ty TNHH Máy móc và Vật tư Goldsun"><img src="http://goldsuncnc.com.vn/files/news/2017_09/1499053023_07.jpg" alt="Công ty TNHH Máy móc và Vật tư Goldsun" class="img-responsive"></a>
                    </div>
                    <div class="title-news-home"><a href="#" title="@lang('category.intro.title')">@lang('category.intro.title')</a></div>
                    <div class="bottom-news-home">
                        <p>
                            @lang('category.intro.content')&nbsp;</p>		</div>
                    <div class="chitiet"><a href="" title="@lang('category.intro.title')">[ @lang('category.more') ]</a></div>
                </div>
                <div class="news-center col-xs-12 col-sm-12 col-md-2 col-lg-2">

                </div>
                <div class="news-right col-xs-12 col-sm-12 col-md-5 col-lg-5">

                    <div class="title-cat">@lang('category.news')</div>
                    <div class="line"></div>		<div class="newsest">
                        <div class="date-news">
                            <p class="p1"><span>25</span></p>
                            <p class="p2"><span>09/2017</span></p>
                        </div>
                        <div class="title-newsest"><a href="http://goldsuncnc.com.vn/hau-mai/che-do-hau-mai-tu-goldsun.html" title="Chế độ hậu mãi từ GOLDSUN">Chế độ hậu mãi từ GOLDSUN</a></div>
                        <div class="hometext"><p>
                                <span style="text-align: justify;">C&oacute; mặt tại Việt Nam từ năm 1994, hiện nay, mạng lưới kh&aacute;ch h&agrave;ng của C&ocirc;ng ty ch&uacute;ng t&ocirc;i được trải rộng khắp từ miền Bắc tới miền Nam Việt Nam với hơn 1000 sản phẩm m&aacute;y c&aacute;c loại. Do đ&oacute;, để tiện phục vụ nhu cầu sản xuất v&agrave; giải quyết nhanh ch&oacute;ng c&aacute;c sự cố thiết bị, C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; lập Chi nh&aacute;nh C&ocirc;ng ty tại H&agrave; Nội, văn ph&ograve;ng đại diện tại T.P Hồ Ch&iacute; Minh, B&igrave;nh Dương. Tất cả c&aacute;c VPĐD C&ocirc;ng ty ch&uacute;ng t&ocirc;i lu&ocirc;n c&oacute; kỹ sư Trung Quốc thường trực 24/24 giờ để kịp thời khắc phục sự cố m&aacute;y của Qu&iacute; kh&aacute;ch h&agrave;ng cũng như hỗ trợ kh&aacute;ch h&agrave;ng về mặt kỹ thuật.</span></p></div>
                    </div>
                    <div class="newsest">
                        <div class="date-news">
                            <p class="p1"><span>17</span></p>
                            <p class="p2"><span>09/2017</span></p>
                        </div>
                        <div class="title-newsest"><a href="http://goldsuncnc.com.vn/tin-tuc-su-kien/hoi-thao-ky-thuat-cong-nghe-cnc.html" title="Hội thảo kỹ thuật công nghệ CNC">Hội thảo kỹ thuật công nghệ CNC</a></div>
                        <div class="hometext"><p>
                                <span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">Ng&agrave;y 15/9/2010, tại trường Cao đẳng nghề kỹ thuật c&ocirc;ng nghiệp Việt Nam - H&agrave;n Quốc, TP.Vinh, đ&atilde; diễn ra hội thảo kỹ thuật c&ocirc;ng nghệ CNC trong sản xuất, đ&agrave;o tạo v&agrave; c&aacute;c phần mềm ứng dụng.</span></p></div>
                    </div>
                    <div class="newsest">
                        <div class="date-news">
                            <p class="p1"><span>17</span></p>
                            <p class="p2"><span>09/2017</span></p>
                        </div>
                        <div class="title-newsest"><a href="http://goldsuncnc.com.vn/tin-tuc-su-kien/giao-trinh-cong-nghe-cnc.html" title="Giáo trình Công nghệ CNC">Giáo trình Công nghệ CNC</a></div>
                        <div class="hometext"><p>
                                <span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; text-align: justify;">CNC &ndash; viết tắt cho Computer(ized) Numerical(ly) Control(led) (điều khiển bằng m&aacute;y t&iacute;nh) &ndash; đề cập đến việc điều khiển bằng m&aacute;y t&iacute;nh c&aacute;c m&aacute;y m&oacute;c kh&aacute;c với mục đ&iacute;ch sản xuất (c&oacute; t&iacute;nh lập lại) c&aacute;c bộ phận kim kh&iacute; (hay c&aacute;c vật liệu kh&aacute;c) phức tạp, bằng c&aacute;ch sử dụng c&aacute;c chương tr&igrave;nh viết bằng k&iacute; hiệu chuy&ecirc;n biệt theo ti&ecirc;u chuẩn EIA-274-D, thường gọi l&agrave; m&atilde; G. CNC được ph&aacute;t triển cuối thập ni&ecirc;n 1940 đầu thập ni&ecirc;n 1950 ở ph&ograve;ng th&iacute; nghiệm Servomechanism của trường MIT.</span></p></div>
                    </div>
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
