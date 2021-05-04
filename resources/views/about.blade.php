@extends('layouts.master')
@section('title', 'Giới Thiệu')
@section('content')
    <style type="text/css">
        .sidebar-box {
            max-height: 100%;
            min-height: 150px;
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
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
        }
        .mobi-block{
            display: none;
        }
        .web-block{
            display: block;
        }
        .read-more-show{
            cursor:pointer;
            color: #96b125;;
        }
        .read-more-hide{
            cursor:pointer;
            color: #96b125;;
        }

        .hide_content{
            display: none;
        }
        @media (min-width: 0) and (max-width: 576px){
            .mobi-block{
                display: block;
            }
            .web-block{
                display: none;
            }
            .img-res{
                height:100px ;
                width:190px;
            }
            .read-more-show{
                cursor:pointer;
                color: #96b125;;
            }
            .read-more-hide{
                cursor:pointer;
                color: #96b125;;
            }

            .hide_content{
                display: none;
            }
            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }

    </style>
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
                            <div data-item="3" class="swin-sc swin-sc-timeline-2 web-block">
                                <div class="main-slider">
                                    <div class="slides">
                                        @foreach($abouts as $about)
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"></div>
                                                <img src="{{Voyager::image( $about->image )}}" alt="++{{$about->year}}++" height="209px" width="380px" >
                                                <div class="centered" style="font-size: 32px;color: white; white-space: nowrap;">{{$about->year}}</div>
                                            </div>
                                        @endforeach
                                        @foreach($abouts as $about)
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"></div>
                                                <img src="{{Voyager::image( $about->image )}}" alt="++{{$about->year}}++" height="209px" width="380px" >
                                                <div class="centered" style="font-size: 32px;color: white;white-space: nowrap;">{{$about->year}}</div>
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
                                        @foreach($abouts as $about)
                                            <div class="timeline-content-item">
                                                {!! $about->context !!}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="swin-sc swin-sc-timeline-2 mobi-block">
                                <div class="main-slider">
                                    <div class="slides">
                                        @foreach($abouts as $about)
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"></div>
                                                <img src="{{Voyager::image( $about->image )}}" alt="++{{$about->year}}++" class="img-res">
                                                <div class="centered" style="font-size: 14px;color: white;white-space: nowrap;">{{$about->year}}</div>
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
                                        <h3 class="title" style="margin-top: 15px;">Nhóm sản Phẩm chính</h3>
                                    </div>
                                    <div class="row">
                                        @foreach($feature_products as $feature_product)
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div data-wow-delay="1s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{Voyager::image($feature_product->background_image)}}" alt="fooday" class="box-bg">
                                                    <div class="box-inner" >
                                                        <h4 class="box-title" style="font-size: 24px;">{{$feature_product->product_name}}</h4>
                                                        <div class=" sidebar-box">
                                                            @if(strlen($feature_product->description) >= 100)
                                                                <p style="font-family: Roboto;">{{(substr($feature_product->description,0,100))}}
                                                            <span class="read-more-show hide_content" style="white-space: nowrap">Xem Thêm <i class="fa fa-angle-down"></i></span>
                                                            <span class="read-more-content">{{substr($feature_product->description,100,strlen($feature_product->description))}}
                                                                <span class="read-more-hide hide_content" style="white-space: nowrap">Xem Ít Hơn <i class="fa fa-angle-up"></i></span>
                                                            </span>
                                                                </p>
                                                            @else
                                                            <p style="font-family: Roboto;">{{$feature_product->description}}</p>
                                                            @endif
                                                        </div>
                                                        <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Đến Menu</span></a></div>
                                                        <div class="showcase"><img src="{{Voyager::image($feature_product->image)}}" alt="" class="img-responsive img-showcase">
{{--                                                            <div class="title-showcase" style="font-size: 28px;">{{$feature_product->product_name}}</div>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hotline-phone-ring-wrap bottom-right mobi-block">
                                                    <div class="hotline-phone-ring" style="bottom: 0;">
{{--                                                        <div class="hotline-phone-ring-circle"></div>--}}
                                                        <div class="hotline-phone-ring-circle-fill"></div>
                                                        <div class="hotline-phone-ring-img-circle">
                                                            <i class="fa fa-bars" style="color: white"></i>
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

@endsection


