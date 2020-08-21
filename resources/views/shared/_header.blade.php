
<header class="header-transparent">
    <div class="header-top top-layout-02">
        <div class="container">
            <div class="topbar-left">
                <div class="topbar-content">
                    <div class="item">
                        <div class="wg-contact"><i class="fa fa-map-marker"></i><span>157 White Oak Drive Kansas City</span></div>
                    </div>
                    <div class="item">
                        <div class="wg-contact"><i class="fa fa-phone"></i><span>012 987 650</span></div>
                    </div>
                </div>
            </div>
            <div class="topbar-right">
                <div class="topbar-content">
                    <div class="item">
                        <ul class="socials-nb list-inline wg-social">
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="open-offcanvas">&#9776;</div>

            <div class="header-logo"><a href="{{route('home')}}" class="logo logo-static"><img src="{{asset('images/logo-white.png')}}" alt="fooday" class="logo-img"></a><a href="{{route('home')}}" class="logo logo-fixed"><img src="{{asset('images/logo.png')}}" alt="fooday" class="logo-img"></a></div>
            <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                    <ul id="main-nav" class="nav nav-pills">
                        <li class="nav-item {{(strpos(Route::currentRouteName(), 'home')===0) ? 'active' : ''}} "><a href="{{route('home')}}" class="dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                        </li>
                        <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}" ><a href="{{route('about')}}">About</a></li>
                        <li class="nav-item {{ (request()->is('reservation')) ? 'active' : '' }}" ><a href="{{route('reservation')}}">Reservation</a></li>
                        <li ><a href="menu-grid-2.html">Menu</a>
                        </li>
                        <li class="nav-item {{ (request()->is('blog')) ? 'active' : '' }}"><a href="{{route('blog')}}">Blog</a>
                        <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

