@extends('layouts.master')
@section('title', 'Home')
@section('content')

    <div id="pagewrap" class="pagewrap">
        <div id="html-content" class="wrapper-content">
            <div class="page-container">
                <div class="top-header top-bg-parallax">
                    <div data-parallax="scroll" data-image-src="{{asset('images/slider/slider2-bg1.jpg')}}" class="slides parallax-window">
                        <div class="slide-content slide-layout-02">
                            <div class="container">
                                <div class="slide-content-inner"><img src="{{asset('images/slider/slider2-icon.png')}}" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="500" alt="fooday" class="slide-icon img img-responsive animated">
                                    <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000" class="slide-title animated">XÔI KHANG</h3>
                                    <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>NGON TRUYỀN THỐNG</span></span></p>
                                    <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="text"><span><span class="text-large"> GIỮ TINH HOA </span></span></span></p>

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
                            <div class="col-md-6 colsm-12"><img src="{{asset('images/pages/home.jpg')}}" alt="" class="img img-responsive wow zoomIn"></div>
                            <div class="col-md-6 col-sm-12">
                                <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                                    <p class="top-title"><span>Giới Thiệu</span></p>
                                    <h3 class="title">Câu Chuyện Khởi Nghiệp</h3>
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
                                                    <div class="item-left"><img src="{{Voyager::image( $product->image )}}" alt="" class="img img-responsive">
                                                        <div class="content-wrapper"><a class="title">{{$product->product_name}}</a>
                                                            <div class="dot">.....................................................................</div>
                                                            <div class="des">{{$product->short_description}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount">{{$product->presentPrice()}}<span class="price-symbol">VNĐ</span></span></div>
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
                                <div class="col-md-3 col-sm-6 col-xs-12">
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
                                        <div data-slide-toshow="3" class="cat-wrapper-02 main-slider col-md-8">
                                            @foreach($categories as $category)
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                                                    <a href="{{route('menu')}}"><h5 class="cat-title">{{$category->name}}</h5></a>
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
                                                        <div class="item"><img src="{{Voyager::image( $category->image )}}" alt="" class="img img-responsive"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-7 col-sm-12">
                                                    <div class="products">

                                                            @foreach($category->products as  $product)
                                                        <div class="item product-01">
                                                            <div class="item-left">
                                                                <h5 class="title">{{$product->product_name}}</h5>
                                                                <div class="des">{{$product->short_description}}</div>
                                                            </div>
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount">{{$product->presentPrice()}}</span>VNĐ</div>
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
                                <div class="grid-wrap-item"><a href="{{Voyager::image($feature_images[0]->value)}}" class="gallery-title title">{{($feature_images[0]->title)}}</a>
                                    <div class="img-wrap"><img src="{{Voyager::image($feature_images[0]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="{{Voyager::image($feature_images[5]->value)}}" class="gallery-title title">{{($feature_images[5]->title)}}</a>
                                    <div class="img-wrap"><img src="{{Voyager::image($feature_images[5]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="{{Voyager::image($feature_images[1]->value)}}" class="gallery-title title">{{($feature_images[1]->title)}}</a>
                                    <div class="img-wrap"><img src="{{Voyager::image($feature_images[1]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-3 grid-item-h2">
                                <div class="grid-wrap-item"><a href="{{Voyager::image($feature_images[3]->value)}}" class="gallery-title title">{{($feature_images[3]->title)}}</a>
                                    <div class="img-wrap"><img src="{{Voyager::image($feature_images[3]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="{{Voyager::image($feature_images[4]->value)}}" class="gallery-title title">{{($feature_images[4]->title)}}</a>
                                    <div class="img-wrap"><img src="{{Voyager::image($feature_images[4]->value)}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="{{Voyager::image($feature_images[2]->value)}}" class="gallery-title title">{{($feature_images[2]->title)}}</a></a>
                                    <div class="img-wrap"><img src="{{Voyager::image($feature_images[2]->value)}}" alt="" class="img img-responsive"></div>
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
                                            <div class="team-img"><img id="myImg" src="{{Voyager::image($feature_images[7]->value)}}" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[7]->title)}}</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInUp">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="{{Voyager::image($feature_images[8]->value)}}"  width="261" height="195" alt=""  ></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[8]->title)}}</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInRight">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="{{Voyager::image($feature_images[9]->value)}}"  alt="" class="img img-responsive" ></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[9]->title)}}</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="{{Voyager::image($feature_images[8]->value)}}" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">{{($feature_images[8]->title)}}</p>
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
                                            <div data-width="75" class="nav-slider">
                                                <ul class="slides list-inline">
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/right-arrow.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/right-arrow.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/right-arrow.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/right-arrow.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
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
                                                <p><span>Post By </span><a href="#">Admin</a></p>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="blog-featured-img"><img src="{{Voyager::image( $blog->image )}}" alt="fooday" class="img img-responsive"></div>
                                        <div class="blog-content">
                                            <div class="blog-date"><span class="day">{{$blog->created_at->format('d')}}</span><span class="month">{{$blog->created_at->format('F')}}</span><span class="year">{{$blog->created_at->format('y')}}</span></div>
                                            <h3 class="blog-title"><a href="#" class="swin-transition">{{$blog->title}}</a></h3>
                                            <p class="blog-description">{{$blog->excerpt}}</p>
                                            <div class="blog-readmore"><a href="{{route('blog.detail',$blog->slug)}}" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swin-btn-wrap center mtxxl"><a href="{{route('blog')}}" class="swin-btn center btn-transparent"> <span>Đến Trang Blog</span></a></div>
                    </div>
                </section>
            </div>

@endsection
