<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{\Auth::user()->fullname}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Danh Mục Quản lý</li>
            <li class="{{(Route::currentRouteName()=="category.index")?"active":""}}"><a href="{{URL::route('category.index')}}"><i class="fa fa-book"></i> <span>Danh mục</span></a></li>
            <li class="{{(Route::currentRouteName()=="product.index")?"active":""}}"><a href="{{URL::route('product.index')}}"><i class="fa fa-product-hunt text-yellow"></i> <span>Sản phẩm</span></a></li>
            <li class="{{(Route::currentRouteName()=="news.index")?"active":""}}"><a href="{{URL::route('news.index')}}"><i class="fa fa-newspaper-o text-aqua"></i> <span>Tin tức</span></a></li>
            <li class="{{(Route::currentRouteName()=="user.index")?"active":""}}"><a href="{{URL::route('user.index')}}"><i class="fa fa-user-circle-o text-aqua"></i> <span>Người dùng</span></a></li>
            <li class="{{(Route::currentRouteName()=="banner.index")?"active":""}}"><a href="{{URL::route('banner.index')}}"><i class="fa fa-circle-o text-aqua"></i> <span>Banner</span></a></li>
            <li class="{{(Route::currentRouteName()=="contacts.index")?"active":""}}"><a href="{{URL::route('contacts.index')}}"><i class="fa fa-contao text-aqua"></i> <span>Liên hệ</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
