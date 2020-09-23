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
                                                        <p>{{setting('site.comment01')}}</p>
                                                    </div>
                                                    <div class="testi-info"><span class="position">Khách Hàng</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>{{setting('site.comment02')}}</p>
                                                    </div>
                                                    <div class="testi-info"><span class="position">Khách Hàng</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>{{setting('site.comment03')}}</p>
                                                    </div>
                                                    <div class="testi-info"><span class="position">Khách Hàng</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>{{setting('site.comment04')}}</p>
                                                    </div>
                                                    <div class="testi-info"><span class="position">Khách Hàng</span></div>
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
                                        <h3 class="title">Nhóm sản Phẩm chính</h3>
                                    </div>
                                    <div class="row">
                                        @foreach($feature_products as $feature_product)
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="1s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{Voyager::image($feature_product->background_image)}}" alt="fooday" class="box-bg">
                                                <div class="box-inner ">
                                                    <h4 class="box-title">{{$feature_product->product_name}}</h4>
                                                    <div class=" sidebar-box">
                                                    <p class="box-content">{{$feature_product->description}}</p>
                                                    <p class="read-more"><a href="javascript:void(0)" class="button">Xem Thêm</a></p>
                                                    </div>
                                                    <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Đến Menu</span></a></div>
                                                    <div class="showcase"><img src="{{Voyager::image($feature_product->image)}}" alt="" class="img-responsive img-showcase">
                                                        <div class="title-showcase">{{$feature_product->product_name}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .sidebar-box {
            max-height: 120px;
            position: relative;
            overflow: hidden;
        }
        .sidebar-box .read-more {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            margin: 0; padding: 30px 0;

            /* "transparent" only works here because == rgba(0,0,0,0) */
            background-image: linear-gradient(to bottom, transparent, black);
        }
    </style>
@endsection


