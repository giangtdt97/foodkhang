@extends('layouts.master')
@section('title', 'Trang Chủ')
@section('content')
<style>
    .mobi-block{
        display:none;
    }
    .web-block{
        display: block;
    }
    @media (min-width: 0) and (max-width: 576px){
        .mobi-block{
            display: block;
        }
        .web-block{
            display: none;
        }
        .swin-sc-product.products-01.style-02 .products .item-left .title {
            display: table-cell;
            font-size: 20px;
            position: relative;
        }
        .swin-sc-product.products-01.style-02 .products .item-left .title:before {
            content: '';
            position: absolute;
            width: 0;
            border-bottom: 1px dotted #616f7d;
            bottom: 6px;
            left: 102%;
        }
    }
    @media screen and (max-width: 768px){
        .swin-sc-product.products-01.style-02 .products .item-left {
            width: 80%;
        }
        .swin-sc-product.products-01.style-02 .products .item-left .title {
            display: table-cell;
            font-size: 20px;
            position: relative;
        }
    }
    @media screen and (max-width: 320px){
        .swin-sc-product.products-01.style-02 .products .item-left {
            width: 70%;
        }
        .swin-sc-product.products-01.style-02 .products .item-left .title {
            display: table-cell;
            font-size: 20px;
            position: relative;
        }
    }

</style>
    <div id="pagewrap" class="pagewrap">
        <div id="html-content" class="wrapper-content">
            <div class="page-container">
                <div class="top-header top-bg-parallax">
                    <div data-parallax="scroll" data-image-src="{{asset('images/slider/slider2-bg1.jpg')}}" class="slides parallax-window">
                        <div class="slide-content slide-layout-02">
                            <div class="container">
                                <div class="slide-content-inner"><img src="timthumb.php?src={{asset('images/logoXoiKhang.png')}}&w=200&h=160" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="500" alt="fooday" class="slide-icon img img-responsive animated">
                                    <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-title animated"><span><span style="font-family:'Kalam'; font-size:70px;font-style: italic">X</span><span style="font-family:'Cookie';font-style: italic;font-weight: normal;font-size: 50px">ôi</span><span></span><span style="font-family:'hobo-std'; font-size:55px"> KHANG</span></span></h3>
                                    <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="font-change">Ngon Truyền Thống - <span>Giữ Tinh Hoa</span></span></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <section class="about-us-session padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 colsm-12">
                                <div class="swin-widget widget-gallery carousel">
                                <div class="widget-body widget-content clearfix">
                                    <div class="main-slider">
                                        <div class="item-slide"><img style="border-radius: 8px;" src="{{asset('images/pages/b.jpg')}}" alt="" class="img wow zoomIn" width="555px" height="383px"></div>
                                        <div class="item-slide"><img style="border-radius: 8px;" src="{{asset('images/pages/c.jpg')}}" alt="" class="img wow zoomIn" width="555px" height="383px"></div>
                                        <div class="item-slide"><img style="border-radius: 8px;" src="{{asset('images/pages/d.jpg')}}" alt="" class="img wow zoomIn" width="555px" height="383px"></div>
                                        <div class="item-slide"><img style="border-radius: 8px;" src="{{asset('images/pages/a.jpg')}}" alt="" class="img wow zoomIn" width="555px" height="383px"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                                    <p class="top-title"><span>Giới Thiệu</span></p>
                                    <h3 class="title" style="white-space: nowrap;">Câu Chuyện Xôi Khang</h3>
                                </div>
                                <p class="des font-bold text-center">Niềm Đam Mê Bắt Đầu Từ Tinh Hoa Ẩm Thực Việt</p>
                                <p class="des margin-bottom-20 text-center">Phần Giới Thiệu Chung.</p>
                                <div class="swin-btn-wrap center"><a href="{{route('about')}}" class="swin-btn center form-submit btn-transparent"> <span>Giới Thiệu</span></a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><a href="{{route('menu')}}"><img src="{{Voyager::image($feature_images[6]->getThumbnail($feature_images[6]->value,'medium'))}}" alt="" class="img-responsive img-decorate"></a>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-4"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="swin-sc swin-sc-title text-left light">
                                    <p class="top-title"><span>MóN ĐƯỢC ĐỀ XUẤT</span></p>
                                    <h3 class="title">{{($feature_images[6]->title)}}</h3>
                                </div>
                                <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div data-height="200" class="products nav-slider">
                                                @foreach($products as $product)
                                                    <div class="item product-01">
                                                        <div class="item-left"><a href="{{route('product.show',$product->slug)}}"><img src="{{Voyager::image( $product->image )}}" alt="" class="img img-responsive"></a>
                                                            <div class="content-wrapper"><a class="title">{{$product->product_name}}</a>
{{--                                                                <div class="dot">.........................................................</div>--}}
{{--                                                                <div class="des">{{$product->short_description}}</div>--}}
                                                            </div>
                                                        </div>
                                                        <div class="item-right"><span class="price woocommerce-Price-amount amount" style="line-height: 0.5;">{{$product->presentPrice()}}<span class="price-symbol">Đ</span></span></div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="service-section-02 padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="swin-sc swin-sc-title">
                            <p class="top-title"><span>Dịch Vụ</span></p>
                            <h3 class="title">Chúng Tôi Phục Vụ</h3>
                        </div>
                        <div class="swin-sc swin-sc-iconbox">
                            <div class="row">
                                @foreach($feature_service as $feature_service)
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="item icon-box-02 wow fadeInUpShort">
                                            <div class="wrapper-icon"><a href="{{route('menu')}}"><i class="{{$feature_service->icon}}"></i></a></div>
                                            <a href="{{route('menu')}}"> <h4 class="title">{{$feature_service->name}}</h4></a>
                                            <div class="description">{{$feature_service->description}}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <hr>
                <section class="product-sesction-01 padding-bottom-100 padding-top-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Thực Đơn</span></p>
                                    <h3 class="title">Món Đặc Trưng</h3>
                                </div>
                                <div class="swin-sc swin-sc-product products-01 style-02 woocommerce">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div data-slide-toshow="4" class="cat-wrapper-02 main-slider col-md-8">
                                            @foreach($categories as $category)
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                                                    <a href="{{route('category.show',$category->slug)}}"><h5 class="cat-title">{{$category->name}}</h5></a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="nav-slider">
                                            @foreach($categories as $category)
                                            <div class="tab-content">
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="cat-wrapper">
                                                        <div class="item"><img data-enlargeable style="cursor: zoom-in" src="timthumb.php?src={{Voyager::image( $category->image)}}&w=200&h=200&q=100" alt="" class="img img-responsive"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-7 col-sm-12">
                                                    <div class="products">
                                                        @foreach($category->productsSignature as  $product)
                                                        <div class="item product-01" style="padding-top: 10px;margin-bottom: 0;">
                                                            <div class="item-left web-block">
                                                                <a href="{{route('product.show',$product->slug)}}">
                                                                    <h5 class="title">
                                                                        {{$product->product_name}}
                                                                    </h5>
                                                                </a>
                                                                <div class="des">{{$product->short_description}}</div>
                                                            </div>
                                                            <div class="item-left mobi-block">
                                                                <a href="{{route('product.show',$product->slug)}}">
                                                                    <h5 class="title">
                                                                        {{$product->product_name}}
                                                                    </h5>
                                                                </a>
                                                                <div class="des">{{$product->short_description}}</div>
                                                            </div>
                                                            <div class="item-right">
                                                                <span class="price woocommerce-Price-amount amount" style="line-height: 0.5;">{{$product->presentPrice()}}<span class="price-symbol">Đ</span></span>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="gallery-section-01 padding-top-100">
                    <div class="swin-sc swin-sc-title">
                        <p class="top-title"><span>Bộ Sưu Tập</span></p>
                        <h3 class="title white-color">Xôi Khang</h3>
                    </div>
                    <div class="swin-sc swin-sc-isotope">
                        <div class="grid">
                            <div class="grid-sizer col-sm-1"></div>
                            <div class="grid-item col-sm-3 grid-item-h2">
                                <div class="grid-wrap-item"><a href="javascript:void(0)" class="gallery-title title">{{($feature_images[0]->title)}}</a>
                                    <div class="img-wrap"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[0]->value)}}" alt="xoikhang" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="javascript:void(0)" class="gallery-title title">{{($feature_images[5]->title)}}</a>
                                    <div class="img-wrap"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[5]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="javascript:void(0)" class="gallery-title title">{{($feature_images[1]->title)}}</a>
                                    <div class="img-wrap"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[1]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-3 grid-item-h2">
                                <div class="grid-wrap-item"><a href="javascript:void(0)" class="gallery-title title">{{($feature_images[3]->title)}}</a>
                                    <div class="img-wrap"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[3]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="javascript:void(0)" class="gallery-title title">{{($feature_images[4]->title)}}</a>
                                    <div class="img-wrap"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[4]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="javascript:void(0)" class="gallery-title title">{{($feature_images[2]->title)}}</a></a>
                                    <div class="img-wrap"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[2]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="team-section padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>GiỚi Thiệu</span></p>
                                    <h3 class="title">Gia Đình Xôi Khang</h3>
                                </div>
                                <div class="swin-sc swin-sc-team-slider">
                                    <div class="team-item swin-transition wow fadeInLeft">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[7]->value)}}" alt="" class="img" width="280px" height="320px" ></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[7]->title)}}</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInUp">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[10]->value)}}" alt=""  class="img" width="280px" height="320px" ></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[10]->title)}}</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInRight">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[9]->value)}}"  alt="" class="img" width="280px" height="320px" ></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[9]->title)}}</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[8]->value)}}" alt="" class="img" width="280px" height="320px" ></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[8]->title)}}</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img data-enlargeable style="cursor: zoom-in" src="{{Voyager::image($feature_images[11]->value)}}" alt="" class="img" width="280px" height="320px"></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[11]->title)}}</p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="testimonial-section-01 padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Nhận Xét</span></p>
                                    <h3 class="title white-color">Khách Hàng Xôi Khang </h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="swin-sc swin-sc-testimonial style-1">
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
                                            <div data-width="150" class="nav-slider">
                                                <ul class="slides list-inline">

                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><i class="fa fa-arrow-right" style="color: whitesmoke; font-size: 30px;"></i></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><i class="fa fa-arrow-right" style="color: whitesmoke; font-size: 30px;"></i></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><i class="fa fa-arrow-right" style="color: whitesmoke; font-size: 30px;"></i></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><i class="fa fa-arrow-right" style="color: whitesmoke; font-size: 30px;"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="blog-section-03 padding-top-100 padding-bottom-100">
                    <div class="container">
                        <div class="swin-sc swin-sc-title">
                            <p class="top-title"><span>Bài Viết</span></p>
                            <h3 class="title">Blog Xôi Khang</h3>
                        </div>
                        <div class="swin-sc swin-sc-blog-masonry">
                            <div class="grid">
                                <div class="grid-sizer col-md-1 col-sm-1 col-xs-1"></div>
                                @foreach($blogs ?? '' as $blog)
                                <div class="grid-item col-md-6 col-sm-6 grid-item-ha">
                                    <div class="blog-item swin-transition wow fadeInUpShort">
                                        <div class="blog-info clearfix">
                                            <div class="blog-info-item blog-author">
                                                <p><span>Post By </span><a href="javascript:void(0)">Admin</a></p>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="blog-featured-img"><img src="timthumb.php?src={{Voyager::image( $blog->image)}}&w=200&h=200&q=100" alt="fooday"></div>
                                        <div class="blog-content">
                                            <div class="blog-date"><span class="day" style="font-size: 25px">{{$blog->created_at->format('d')}}</span><span class="month" style="font-size: 15px">{{$blog->created_at->format('F')}}</span><span class="year">{{$blog->created_at->format('y')}}</span></div>
                                            <h3 class="blog-title"><a href="{{route('blog.detail',$blog->slug)}}" class="swin-transition">{{$blog->title}}</a></h3>
                                            <p class="blog-description">{{$blog->excerpt}}</p>
                                            <div class="blog-readmore"><a href="{{route('blog.detail',$blog->slug)}}" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swin-btn-wrap center mtxxl web-block"><a href="{{route('blog')}}" class="swin-btn center btn-transparent"> <span>Đến Trang Blog</span></a></div>
                    </div>
                </section>
@endsection
