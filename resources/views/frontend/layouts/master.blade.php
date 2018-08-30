<!DOCTYPE html><html lang="vi" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="expires" content="0">
    <meta name="resource-type" content="document">
    <meta name="distribution" content="global">
    <meta name="author" content="Gold Sun CNC Technology">
    <meta name="google-site-verification" content=" " /><meta name="copyright" content="Copyright (c) 2018 by Gold Sun CNC Technology">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <meta name="rating" content="general">
    <link rel="shortcut icon" href="http://goldsuncnc.com.vn/favicon.ico" type="image/x-icon" /><title>Gold Sun CNC Technology</title>
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon.ico')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <link rel="StyleSheet" href="{{asset('frontend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet"   href="{{asset('frontend/assets/css/demo.css')}}">
    <link rel="stylesheet"   href="{{asset('frontend/assets/css/jquery.mmenu.all.css')}}">
    <link rel="stylesheet"  href="{{asset('frontend/assets/css/highslide.css')}}" />
    <link rel="stylesheet"  href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}" />
    <link rel="StyleSheet" href="{{asset('frontend/style.css')}}">
    <link rel="StyleSheet" href="{{asset('frontend/assets/css/style.responsive.css')}}">


</head>

<div id="page">
    <div class="mmheader">
        <a href="#menu"><span></span></a>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="/">@lang('menu.home')</a></li>
            <li><a href="{{URL::route('about-us.index')}}">@lang('menu.intro')</a></li>
            <li>
                <a href="#">@lang('menu.product')</a>
                <ul>
                    <li>
                        <a href="">Máy CNC</a>
                        <ul>
                            <li><a href="#">Máy Điêu Khắc</a></li>
                            <li><a href="#">Máy Cắt Dây</a></li>
                            <li><a href="#">Máy Tiện</a></li>
                            <li><a href="#">Máy Xung</a></li>
                            <li><a href="#">Máy gia công trung tâm, máy phay CNC</a></li>
                            <li><a href="#">Máy đục lỗ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Máy Công Cụ</a>
                        <ul>
                            <li><a href=#">Máy cưa vòng</a></li>
                            <li><a href="#">Máy tiện vạn năng</a></li>
                            <li><a href="#">Máy mài mặt phẳng</a></li>
                            <li><a href="#">Máy chấn tôn</a></li>
                            <li><a href="#">Máy cắt tôn</a></li>
                            <li><a href="#">Máy cán ren</a></li>
                            <li><a href="#">Máy phay giường</a></li>
                            <li><a href="#">Máy phay cạnh</a></li>
                            <li><a href="#">Máy uốn ống</a></li>
                            <li><a href="#">Máy phay chóp</a></li>
                            <li><a href="#">Máy phay đầu ngang</a></li>
                            <li><a href="#">Máy khoan</a></li>
                            <li><a href="#">Máy Phay</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Máy móc Thiết bị khác</a>
                        <ul>
                            <li><a href="#">Máy phun cát</a></li>
                            <li><a href="#">Máy mài dao</a></li>
                            <li><a href="#">Lò Nung Trung Tần</a></li>
                            <li><a href="#">Lò Cao Tần</a></li>
                            <li><a href="#">Robot Công Nghiệp</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Vật Tư Linh Kiện</a>								</li>
                </ul>
            </li>
            <li><a href="#">@lang('menu.news')</a></li>
            <li><a href="#">@lang('menu.tech')</a></li>
            <li><a href="{{URL::route('after-sale.index')}}">@lang('menu.after_sale')</a></li>
            <li><a href="{{URL::route('contact.index')}}">@lang('menu.contact')</a></li>
        </ul>
    </nav>
</div>
<header>
    <div class="header-top"><div class="container"><div class="row">
                <div class="logo col-xs-9 col-sm-9 col-md-12 col-lg-3">
                    <a href="/" title="Logo"><img src="{{asset('frontend/assets/img/logo.PNG')}}" alt="Logo" class="img-responsive"></a>		</div>
                <div class="menutop col-xs-12 col-sm-12 col-md-11 col-lg-8">
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <div class="collapse navbar-collapse" id="menu-site-default">

                            <script>

                                function setActive() {
                                    aObj = document.getElementById('nav').getElementsByTagName('a');
                                    for(i=1;i<aObj.length;i++) {
                                        if(document.location.href.indexOf(aObj[i].href)>=0) {
                                            aObj[i].className='active';
                                        }
                                    }
                                }
                                window.onload = setActive;
                            </script>
                            <ul class="nav navbar-nav">
                                <li><a href="/">@lang('menu.home')</a></li>
                                <li><a href="{{URL::route('about-us.index')}}">@lang('menu.intro')</a></li>
                                <li class="dropdown">
                                    <a href="#">@lang('menu.product')</a>
                                    <ul class="dropmenu">
                                        <li class="dropdown2">
                                            <a href="http://goldsuncnc.com.vn/may-cnc.html">Máy CNC</a>
                                            <ul class="dropdown-menu2" role="menu">
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=182">Máy Điêu Khắc</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=183">Máy Cắt Dây</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=184">Máy Tiện</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=185">Máy Xung</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=186">Máy gia công trung tâm, máy phay CNC</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=189">Máy đục lỗ</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown2">
                                            <a href="http://goldsuncnc.com.vn/may-cong-cu.html">Máy Công Cụ</a>
                                            <ul class="dropdown-menu2" role="menu">
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=187">Máy cưa vòng</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=188">Máy tiện vạn năng</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=190">Máy mài mặt phẳng</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=191">Máy chấn tôn</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=192">Máy cắt tôn</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=193">Máy cán ren</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=194">Máy phay giường</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=195">Máy phay cạnh</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=196">Máy uốn ống</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=197">Máy phay chóp</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=198">Máy phay đầu ngang</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=199">Máy khoan</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=200">Máy Phay</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown2">
                                            <a href="http://goldsuncnc.com.vn/may-moc-thiet-bi-khac.html">Máy móc Thiết bị khác</a>
                                            <ul class="dropdown-menu2" role="menu">
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=205">Máy phun cát</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=204">Máy mài dao</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=203">Lò Nung Trung Tần</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=201">Lò Cao Tần</a></li>
                                                <li class="li_con2"><a href="index.php?f=products&do=categories&id=202">Robot Công Nghiệp</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown2"><a href="http://goldsuncnc.com.vn/vat-tu-linh-kien.html">Vật Tư Linh Kiện</a>								</li>
                                    </ul>
                                </li>
                                <li class=""><a href="#">@lang('menu.news')</a></li>
                                <li class="#"><a href="#">@lang('menu.tech')</a></li>
                                <li class=""><a href="{{URL::route('after-sale.index')}}">@lang('menu.after_sale')</a></li>
                                <li class=""><a href="{{URL::route('contact.index')}}">@lang('menu.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="show_lang col-xs-3 col-sm-3 col-md-1 col-lg-1">
                    <ul>
                        <li><a href="{{URL::route('switchLang','vi')}}"><img src="{{asset('frontend/assets/img/vn.png')}}"></a></li>
                        <li><a href="{{URL::route('switchLang','en')}}"><img src="{{asset('frontend/assets/img/el.png')}}"></a></li>
                    </ul>
                </div>
            </div></div></div>

</header>
@yield('content')
<footer>
    <div class="footmsg"><div class="container"><div class="row">
                <div class="info col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <p class="title-ft">@lang('category.contact_us')</p>
                    <div class="phone-ft">
                        <a href="tel:Tel: 024.37.87.20.35 - HotLine: 0904.121.830" title="">Tel: 024.37.87.20.35 - HotLine: 0904.121.830</a>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/cncgiacongtrungtam/" title="" target="_blank"><img src="{{asset('frontend/assets/img/f1.png')}}" alt=""></a>
                        <a href="#" title="" target="_blank"><img src="{{asset('frontend/assets/img/f2.png')}}" alt=""></a>
                        <a href="" title="" target="_blank"><img src="{{asset('frontend/assets/img/f3.png')}}" alt=""></a>
                        <a href="#" title="" target="_blank"><img src="{{asset('frontend/assets/img/f6.png')}}" alt=""></a>
                        <a href="#" title="" target="_blank"><img src="{{asset('frontend/assets/img/f7.png')}}" alt=""></a>
                        <a href="#" title="" target="_blank"><img src="{{asset('frontend/assets/img/f8.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-menui col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <p class="title-ft">Danh mục sản phẩm</p>
                    <ul>
                        @forelse($categoryParentNull as $ctfooter)
                        <li><a href="" title="Máy CNC">{{$ctfooter['name_'.$local]}}</a></li>
                            @empty
                        @endforelse
                    </ul>
                </div>	 	<div class="col-menui col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <p class="title-ft">@lang('menu.service')</p>
                    <ul>
                        <li><a href="#" title="Chế độ hậu mãi">@lang('menu.after_sale')</a></li>	 		</ul>
                </div>	 	<div class="col-menui col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <p class="title-ft">@lang('menu.news')</p>
                    <ul>
                        <li><a href="#" title="2017">2017</a></li><li><a href="#" title="2016">2016</a></li><li><a href="#" title="2015">2015</a></li><li><a href="#" title="2014">2014</a></li>	 		</ul>
                </div>	 	<div class="col-menui col-xs-6 col-sm-3 col-md-2 col-lg-2">
                    <p class="title-ft">@lang('menu.contact')</p>
                    <ul>
                        <li><a href="#" title="Thông tin liên hệ">@lang('category.contact')</a></li><li><a href="#" title="Hỗ trợ trực tuyến">@lang('category.support')</a></li>	 		</ul>
                </div>		</div></div></div>

    <div class="sent-mail"><div class="container">
            <p>Goldsun CNC CO., LTD © Copyright 2017 All Rights Reserved</p>
        </div></div>

</footer>
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.mmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/highslide-with-gallery.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/colud_zoom_old.js')}}"> </script>

<script type="text/javascript">

    $(function() {
        $('nav#menu').mmenu();
    });


    $('.slide-prd').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout:3000,
        autoplaySpeed: 600,
        nav: false,
        dots:false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            399: {
                items: 2,
            },
            768: {
                items: 4,
            },
            991: {
                items: 5,
            },
            1200: {
                items: 6,
            }
        }
    });
    $('.slide-prd-category').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout:3000,
        autoplaySpeed: 600,
        nav: false,
        dots:false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            399: {
                items: 2,
            },
            768: {
                items: 4,
            },

        }
    });
</script>

<script type="text/javascript">
    hs.graphicsDir = 'http://goldsuncnc.com.vn/templates/Adoosite/images/graphics/';
    hs.align = 'center';
    hs.transitions = ['expand', 'crossfade'];
    hs.fadeInOut = true;
    hs.dimmingOpacity = 0.8;
    hs.outlineType = 'rounded-white';
    hs.captionEval = 'this.thumb.alt';
    hs.marginBottom = 105;
    hs.numberPosition = 'caption';


    hs.addSlideshow({
        interval: 5000,
        repeat: false,
        useControls: true,
        overlayOptions: {
            className: 'text-controls',
            position: 'bottom center',
            relativeTo: 'viewport',
            offsetY: -60
        },
        thumbstrip: {
            position: 'bottom center',
            mode: 'horizontal',
            relativeTo: 'viewport'
        }
    });
</script>