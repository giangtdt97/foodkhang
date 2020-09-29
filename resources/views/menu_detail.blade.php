@extends('layouts.master')
@section('title', 'Dish Detail')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Chi Tiết Sản Phẩm</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Chúng Tôi Hy Vọng Đem Lại Trải Nghiệm Tốt Nhất Cho Bạn Về Sản Phẩm XÔI KHANG</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="container">
                <section class="product-single padding-top-100 padding-bottom-100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-image">
                                <div class="product-featured-image">
                                    <div class="main-slider">
                                        <div class="slides">
                                            @php $images = json_decode($product->images);@endphp
                                            @foreach($images as $multimage)
                                            <div class="featured-image-item"><img data-enlargeable style="cursor: zoom-in" src="{{ Voyager::image($product->getThumbnail($multimage, 'medium')) }}"height="200" width="400" alt="fooday" class="img img-responsive"></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div data-width="150" class="nav-slider">
                                        <ul class="slides list-inline">
                                            @php $images = json_decode($product->images);@endphp
                                            @foreach($images as $multimage)
                                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{ Voyager::image($product->getThumbnail($multimage, 'small')) }}"height="100" width="100" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-summary">
                                <div class="product-title">
                                    <div class="title">{{$product->product_name}}</div>
                                </div>
                                <div class="product-price">
                                    <div class="price">{{$product->presentPrice()}}<span class="currency-symbol">VNĐ</span></div>
                                </div>
                                <div class="product-info">
                                    <ul class="list-inline">
                                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a><span>4 Reviews</span></li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <p>{{$product->short_description}}</p>
                                </div>
                                <div class="product-meta-info">
                                    <div class="meta-info-item">
                                        <div class="meta-info-caption">Category:</div>
                                        <div class="meta-info-text">
                                            @foreach($product->categories as $category)
                                                <a href="{{route('category.show',$category->slug)}}">{{$category->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="product-share"><span class="caption">Share</span>
                                    <ul class="socials list-unstyled list-inline">
                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-tab-content">
                                <!-- Nav tabs-->
                                <ul role="tablist" class="nav nav-tabs">
                                    <li role="presentation" class="active"><a href="#product-desc-tab" aria-controls="product-desc-tab" role="tab" data-toggle="tab">DESCRIPTIONS</a></li>
                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div id="product-desc-tab" role="tabpanel" class="tab-pane active">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
{{--                <section class="product-related padding-bottom-100">--}}
{{--                    <div class="swin-sc swin-sc-title style-2">--}}
{{--                        <p class="title"><span>You May Also Like</span></p>--}}
{{--                    </div>--}}
{{--                    <div class="swin-sc swin-sc-product products-02 carousel-01 woocommerce">--}}
{{--                        <div class="products nav-slider">--}}
{{--                            <div class="blog-item item swin-transition">--}}
{{--                                <div class="block-img"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">--}}
{{--                                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>--}}
{{--                                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>--}}
{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato fly</a></h5>--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="author">Chef <span class="name">Don Joe</span></div>--}}
{{--                                        <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-item item swin-transition">--}}
{{--                                <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">--}}
{{--                                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>5.0</span></div>--}}
{{--                                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>--}}
{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="author">Chef <span class="name">Don Joe</span></div>--}}
{{--                                        <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-item item swin-transition">--}}
{{--                                <div class="block-img"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">--}}
{{--                                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>20.0</span></div>--}}
{{--                                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>--}}
{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="author">Chef <span class="name">Don Joe</span></div>--}}
{{--                                        <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-item item swin-transition">--}}
{{--                                <div class="block-img"><img src="assets/images/product/product-2e.jpg" alt="" class="img img-responsive">--}}
{{--                                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>--}}
{{--                                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>--}}
{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="author">Chef <span class="name">Don Joe</span></div>--}}
{{--                                        <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-item item swin-transition">--}}
{{--                                <div class="block-img"><img src="assets/images/product/product-2f.jpg" alt="" class="img img-responsive">--}}
{{--                                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>15.0</span></div>--}}
{{--                                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>--}}
{{--                                </div>--}}
{{--                                <div class="block-content">--}}
{{--                                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>--}}
{{--                                    <div class="info">--}}
{{--                                        <div class="author">Chef <span class="name">Don Joe</span></div>--}}
{{--                                        <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
            </div>
        </div>
    </div>
@endsection
