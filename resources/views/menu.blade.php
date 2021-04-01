@extends('layouts.master')
@section('title', 'Menu')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">DỊCH VỤ BÀN CÚNG TRUYỀN THỐNG</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Xôi Khang Mang Đến Niềm Vui Trọn Vẹn</div>
                </div>
            </div>
        </div>
        <section class="menu-grid-02 padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                    <div class="row">
                        <div class="col-md-12">
                            <div data-slide-toshow="3" class="cat-wrapper-02 cat-images main-slider">
                                @foreach($ultilities as $ultility)
                                    <div class="item">
                                        <div class="item product-01">
                                            <div class="cat-image img-4-3"><a href="javascript:void(0)" ><img src="timthumb.php?src={{Voyager::image( $ultility->getThumbnail($ultility->image ,'medium'))}}&w=250&h=200" alt="" >{{$ultility->name}}</a></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="products nav-slider">
                                    @foreach($ultilities as $ultility)
                                        <div class="item-slick">
                                            <div class="row">
                                                @foreach($ultility->services as  $service)
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="item product-01">
                                                            <div class="block-img"><a href="{{route('service.show',$service->slug)}}"><img src="timthumb.php?src={{Voyager::image( $service->image )}}&w=200&h=130" alt="" ></a></div>
                                                            <h5 class="truncate-overflow-one title">{{$service->name}}</h5>
                                                        </div>
                                                    </div>
                                                @endforeach
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
        <section class="menu-banner-section banner-section padding-top-100 padding-bottom-100"><img src="timthumb.php?src={{asset('images/logoXoiKhang.png')}}&w=200&h=160" alt="" class="img-left img-bg img-deco img-responsive">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="content-wrapper">
                            <h2 class="heading-title">Thực Đơn Dinh Dưỡng! Hãy để<span class="text-large">Xôi Khang</span>được phục vụ bạn</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-content-wrapper">
            <section class="menu-grid-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                       <div class="row">
                            <div class="col-md-12">
                                <div data-slide-toshow="3" class="cat-wrapper-02 cat-images main-slider">
                                    @foreach($categories as $category)
                                    <div class="item">
                                        <div class="cat-image"><a href="javascript:void(0)"><img src="timthumb.php?src={{Voyager::image( $category->image )}}&w=250&h=200" alt="" >{{$category->name}}</a></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="products nav-slider">
                                    @foreach($categories as $category)
                                    <div class="item-slick">
                                        <div class="row">
                                            @foreach($category->products as  $product)
                                                <div class="col-md-3 col-sm-4 col-xs-12" style="padding: 0;">
                                                <div class="item product-01">
                                                    <div class="block-img"><a href="{{route('product.show',$product->slug)}}"><img src="timthumb.php?src={{Voyager::image( $product->image )}}&w=200&h=130" alt="" ></a></div>
                                                    <h5 class="title truncate-overflow-one">{{$product->product_name}}</h5><span class="price woocommerce-Price-amount amount" style="line-height: 1">{{$product->presentPrice()}}<span class="price-symbol">Đ</span></span>
                                                </div>
                                            </div>
                                            @endforeach
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


    </div>
@endsection
