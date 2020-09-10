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
                                    <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text"><span>NGON TRUYỀN THỐNG - GIỮ TINH HOA </span></span></p>
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
                            <div class="col-md-6 colsm-12"><img src="{{asset('images/pages/home1-about.jpg')}}" alt="" class="img img-responsive wow zoomIn"></div>
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
                <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="{{asset('images/product/product-decorate.jpg')}}" alt="" class="img-responsive img-decorate">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-4"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="swin-sc swin-sc-title text-left light">
                                    <p class="top-title"><span>MóN ĐƯỢC ĐỀ XUẤT</span></p>
                                    <h3 class="title">Món Ngon Hàng Tuần</h3>
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
                                                    <div class="item-right"><span class="price woocommerce-Price-amount amount">{{$product->price}}<span class="price-symbol">VNĐ</span></span></div>
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
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div>
                                        <h4 class="title">XÔi sáng/chiều </h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div>
                                        <h4 class="title">Đồ Cúng</h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div>
                                        <h4 class="title">Bánh sinh Nhật</h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div>
                                        <h4 class="title">Chè Các Loại</h4>
                                        <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

{{--                <section class="reservation-section-02 padding-top-100 padding-bottom-100">--}}
{{--                    <div class="container"><img src="{{asset('images/background/home2-img-deco.png')}}" alt="" class="img-deco img-responsive">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 left-wrapper">--}}
{{--                                <div class="form-dark-wrapper">--}}
{{--                                    <div class="swin-sc swin-sc-title style-3 light">--}}
{{--                                        <p class="title"><span>Make A Reservation</span></p>--}}
{{--                                        <p class="subtitle">You can call us directly at <span class="text-default"> 225-88888</span></p>--}}
{{--                                    </div>--}}
{{--                                    <div class="swin-sc swin-sc-contact-form dark mtl">--}}
{{--                                        <form>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-addon">--}}
{{--                                                        <div class="fa fa-phone"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <input type="text" placeholder="Phone" class="form-control">--}}
{{--                                                </div>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>--}}
{{--                                                    <select type="text" placeholder="People" class="form-control">--}}
{{--                                                        <option>1 person</option>--}}
{{--                                                        <option>2 People</option>--}}
{{--                                                        <option>3 People</option>--}}
{{--                                                        <option>4 People</option>--}}
{{--                                                        <option>5 People</option>--}}
{{--                                                        <option>6 People</option>--}}
{{--                                                        <option>7 People</option>--}}
{{--                                                        <option>8 People</option>--}}
{{--                                                        <option>9 People</option>--}}
{{--                                                        <option>10 People</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>--}}
{{--                                                    <input type="text" placeholder="Date" class="form-control datepicker">--}}
{{--                                                </div>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-addon">--}}
{{--                                                        <div class="fa fa-clock-o"></div>--}}
{{--                                                    </div>--}}
{{--                                                    <select type="text" placeholder="Time" class="form-control">--}}
{{--                                                        <option>7:00 AM</option>--}}
{{--                                                        <option>8:00 AM</option>--}}
{{--                                                        <option>9:00 AM</option>--}}
{{--                                                        <option>10:00 AM</option>--}}
{{--                                                        <option>11:00 AM</option>--}}
{{--                                                        <option>12:00 AM</option>--}}
{{--                                                        <option>1:00 PM</option>--}}
{{--                                                        <option>2:00 PM</option>--}}
{{--                                                        <option>3:00 PM</option>--}}
{{--                                                        <option>4:00 PM</option>--}}
{{--                                                        <option>5:00 PM</option>--}}
{{--                                                        <option>6:00 PM</option>--}}
{{--                                                        <option>7:00 PM</option>--}}
{{--                                                        <option>8:00 PM</option>--}}
{{--                                                        <option>9:00 PM</option>--}}
{{--                                                        <option>10:00 PM</option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>	Find Table</span></a></div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="video-wrapper equal-height deco-abs">--}}
{{--                        <div class="swin-sc swin-sc-video">--}}
{{--                            <div class="play-wrap"><a href="https://vimeo.com/27814858" class="play-btn swipebox"><i class="play-icon fa fa-play"></i></a></div>--}}
{{--                        </div>--}}
                    </div>
                </section>
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
                                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                                            @foreach($categories as $category)
                                            <div class="item">
                                                <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                                                    <h5 class="cat-title">{{$category->name}}</h5>
                                                </div>
                                            </div>
                                            @endforeach
{{--                                            <div class="item">--}}
{{--                                                <div class="cat-icons"><i class="icons swin-icon-fish"></i>--}}
{{--                                                    <h5 class="cat-title">Lunch</h5>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="item">--}}
{{--                                                <div class="cat-icons"><i class="icons swin-icon-meat"></i></div>--}}
{{--                                                <h5 class="cat-title">Dinner</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="item">--}}
{{--                                                <div class="cat-icons"><i class="icons swin-icon-ice-cream"></i></div>--}}
{{--                                                <h5 class="cat-title">Desset</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="item">--}}
{{--                                                <div class="cat-icons"><i class="icons swin-icon-dinner"></i></div>--}}
{{--                                                <h5 class="cat-title">Drink</h5>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="nav-slider">
                                            @foreach($categories as $category)
                                            <div class="tab-content">
                                                <div class="col-md-5 col-sm-12">
                                                    <div class="cat-wrapper">
                                                        <div class="item"><img src="{{Voyager::image( $category->image )}}" alt="" class="img img-responsive img-full"></div>
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
                                                            <div class="item-right"><span class="price woocommerce-Price-amount amount">{{$product->price}}</span><span class="price-symbol">VNĐ</span></div>
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
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a>
                                    <div class="img-wrap"><img src="{{asset('images/gallery/gallery-1.jpg')}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a>
                                    <div class="img-wrap"><img src="{{asset('images/gallery/gallery-2.jpg')}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a>
                                    <div class="img-wrap"><img src="{{asset('images/gallery/gallery-3.jpg')}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-3 grid-item-h2">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a>
                                    <div class="img-wrap"><img src="{{asset('images/gallery/gallery-4.jpg')}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-2 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a>
                                    <div class="img-wrap"><img src="{{asset('images/gallery/gallery-5.jpg')}}" alt="" class="img img-responsive"></div>
                                </div>
                            </div>
                            <div class="grid-item col-sm-4 grid-item-h1">
                                <div class="grid-wrap-item"><a href="#" class="gallery-title title">Chicago Beefsteak</a>
                                    <div class="img-wrap"><img src="{{asset('images/gallery/gallery-6.jpg')}}" alt="" class="img img-responsive"></div>
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
                                            <div class="team-img"><img src="{{asset('images/team/team-1.png')}}" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">MICHAEL DOE</p>
                                        <p class="team-position">Head Chef</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInUp">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="{{asset('images/team/team-2.png')}}" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">Teresa Doe</p>
                                        <p class="team-position">Head Chef</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition wow fadeInRight">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="{{asset('images/team/team-3.png')}}" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">BENJAMIN MARK</p>
                                        <p class="team-position">Head Chef</p>
                                        <hr>
                                    </div>
                                    <div class="team-item swin-transition">
                                        <div class="team-img-wrap">
                                            <div class="team-img"><img src="{{asset('images/team/team-4.png')}}" alt="" class="img img-responsive"></div>
                                        </div>
                                        <p class="team-name">Teresa Doe</p>
                                        <p class="team-position">Head Chef</p>
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
                                    <h3 class="title white-color">Khách Hàng của Xôi Khang </h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="swin-sc swin-sc-testimonial style-1">
                                            <div class="main-slider flexslider">
                                                <div class="slides">
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Khách A</span> <span class="position">Customer</span></div>
                                                    </div>
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Khách B</span> <span class="position">Director</span></div>
                                                    </div>
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Khách C</span> <span class="position">Designer</span></div>
                                                    </div>
                                                    <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                        <div class="testi-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                        </div>
                                                        <div class="testi-info"><span class="name">Jamie	Erickson</span> <span class="position">Manager</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-width="150" class="nav-slider">
                                                <ul class="slides list-inline">
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/testi/testi-1.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/testi/testi-2.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/testi/testi-3.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                                    <li class="swin-transition"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{asset('images/testi/testi-4.jpg')}}" alt="fooday" class="img img-responsive swin-transition"></a></li>
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
                            <p class="top-title"><span>Cập Nhật Thêm Từ</span></p>
                            <h3 class="title">Blog của Xôi Khang</h3>
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
