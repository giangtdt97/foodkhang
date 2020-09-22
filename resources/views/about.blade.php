@extends('layouts.master')
@section('title', 'About')
@section('content')
    <div id="pagewrap" class="pagewrap">
        <div id="html-content" class="wrapper-content">
            <div class="page-container">
                <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-about">
                    <div class="container">
                        <div class="title-wrapper">
                            <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Giới Thiệu</div>
                            <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Chúng tôi mang đến cho bạn hương vị không thể quên</div>
                        </div>
                    </div>
                </div>
                <div class="page-content-wrapper">
                    <section class="ab-timeline-section padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div class="swin-sc swin-sc-title style-2">
                                <h3 class="title"><span>Câu chuyện Xôi Khang</span></h3>
                            </div>
                            <div data-item="3" class="swin-sc swin-sc-timeline-2">
                                <div class="main-slider">
                                    <div class="slides">
                                        @foreach($abouts as $about)
                                        <div class="timeline-item item swin-transition">
                                            <div class="timeline-item-wrap"><span class="timeline-year swin-transition">{{$about->year}}</span></div><img src="{{Voyager::image( $about->image )}}" alt="fooday" class="img img-responsive">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="nav-slider">
                                    <div class="slides">
                                        @foreach($abouts as $about)
                                        <div class="timeline-content-item">
                                            {!! $about->context !!}
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="ab-testimonial-section padding-top-100 padding-bottom-100">
                        <div class="container"><img src="{{asset('images/background/ab_team_01.png')}}" alt="" class="img-left img-bg img-deco img-responsive">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <div class="swin-sc swin-sc-testimonial style-2 option-2">
                                        <div class="main-slider flexslider">
                                            <div class="slides">
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Timothy Doe</span> <span class="position">Customer</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Ut enim ad minim veniam, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Sarah	Ruiz</span> <span class="position">Customer</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Consectetur adipisicing elit, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Tracey Lewis</span> <span class="position">Customer</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Quis nostrud exercitation ullamco laboris, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Jamie	Erickson</span> <span class="position">Customer</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="featured-section padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="swin-sc swin-sc-title">
                                        <p class="top-title"><span>Sản Phẩm Đặc Trưng</span></p>
                                        <h3 class="title">Ba nhóm sản Phẩm chính</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{asset('images/featured-box-bg-1.jpg')}}" alt="fooday" class="box-bg">
                                                <div class="box-inner">
                                                    <h4 class="box-title">Xôi Chè Sạch </h4>
                                                    <div class="box-content">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                                                    <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Đến Menu</span></a></div>
                                                    <div class="showcase"><img src="{{asset('images/feature-box-bg.jpg')}}" alt="" class="img-responsive img-showcase">
                                                        <div class="title-showcase">Xôi Chè Sạch</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="0.5s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{asset('images/featured-box-bg-1.jpg')}}" alt="fooday" class="box-bg">
                                                <div class="box-inner">
                                                    <h4 class="box-title">Măm cúng </h4>
                                                    <div class="box-content">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                                                    <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Đến Menu</span></a></div>
                                                    <div class="showcase"><img src="{{asset('images/feature-box-bg-2.jpg')}}" alt="" class="img-responsive img-showcase">
                                                        <div class="title-showcase">Măm cúng </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="1s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{asset('images/featured-box-bg-1.jpg')}}" alt="fooday" class="box-bg">
                                                <div class="box-inner">
                                                    <h4 class="box-title">Rau câu 3D</h4>
                                                    <div class="box-content">🎊🎊Những mẫu bánh rau cau 3D luôn là những quà tặng ấn tương, gây đươc nhiều thiện cảm cho người "đặc biệt" đ<span id="dots">...</span><span id="more">ược nhận món quà này.

                                                        👍🏻👍🏻Với những hoạ tiết thật công phu, cách phối màu sang trọng, vị ngọt thanh và béo ngậy trong từng lớp rau câu... Sẽ không làm thất vọng những khách hàng khá kỹ tính đa tin tưởng va chon Xôi Khang là người làm nên những món quà mang tên RAU CÂU 3D.

                                                            Bánh Rau câu 3D phong phú về mẫu - size bánh - giá bán hợp lý theo từng têu cầu của khách hàng .

                                                        </span><button onclick="myFunction()" id="myBtn">Chi Tiết</button></div>
                                                    <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Đến Menu</span></a></div>
                                                    <div class="showcase"><img src="{{asset('images/feature-box-bg-3.jpg')}}" alt="" class="img-responsive img-showcase">
                                                        <div class="title-showcase">Rau câu 3D</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection


