
<header class="header-transparent">
    <div class="header-top top-layout-02">
        <div class="container">
            <div class="topbar-left">
                <div class="topbar-content">
                    <div class="item">
                        <div class="wg-contact"><i class="fa fa-map-marker"></i><span>{{setting('site.site_address')}}</span></div>
                    </div>
                    <div class="item">
                        <div class="wg-contact"><i class="fa fa-phone"></i><a href="tel:{{setting('site.site_phone')}}"><span>{{setting('site.site_phone')}}</span></a></div>
                    </div>
                    <div class="item">
                        <ul class="socials-nb list-inline wg-social">
                            <li><a href="https://www.facebook.com/Xoikhang.vn/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="tel:{{setting('site.site_phone')}}"><i class="fa fa-commenting-o"></i></a></li>
                            <li><a href="{{route('contact')}}"><i class="fa fa-map-marker"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="open-offcanvas">&#9776;</div>

           <div class="header-logo">{{-- <a href="{{route('home')}}" class="logo logo-static"><img src="{{asset('images/logoXoiKhang.png')}}" alt="fooday" class="logo-img"  height="80" ></a>--}}<a href="{{route('home')}}" class="logo logo-fixed"><img src="{{asset('images/logoXoiKhang.png')}}" alt="fooday" class="logo-img"   height="50" ></a></div>
            <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                    <ul id="main-nav" class="nav nav-pills">
                        <li class="nav-item {{(strpos(Route::currentRouteName(), 'home')===0) ? 'active' : ''}} "><a href="{{route('home')}}" class="dropdown-toggle">Trang Chủ</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                        </li>
                        <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}" ><a href="{{route('about')}}">Giới Thiệu</a></li>
                        <li class="nav-item {{ (request()->is('menu')) ? 'active' : '' }}"><a href="{{route('menu')}}">Thực Đơn</a></li>
                        <li class="nav-item {{ (request()->is('reservation')) ? 'active' : '' }}" ><a href="{{route('reservation')}}">Theo Dõi Đơn Hàng</a></li>
                        <li class="nav-item {{ (request()->is('blog')) ? 'active' : '' }}"><a href="{{route('blog')}}">Bài Viết</a>
                        <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{route('contact')}}">Liên Hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

