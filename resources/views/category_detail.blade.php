@extends('layouts.master')
@section('title', 'Category Detail')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">MÓN ĂN THEO DANH MỤC</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Xôi Khang Mang Đến Niềm Vui Trọn Vẹn</div>
                </div>
            </div>
        </div>
    <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="{{asset('images/product/product-decorate.jpg')}}" alt="" class="img-responsive img-decorate">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4"></div>
                <div class="col-lg-6 col-md-8">
                    <div class="swin-sc swin-sc-title text-left light">

                        <p class="top-title"><span>MÓN ĂN THEO DANH MỤC </span></p>

                    </div>
                    <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                        <div class="row">
                            <div class="col-md-12">
                                <div data-height="200" class="products nav-slider">
                                    @foreach($category->products as  $product)
                                        <div class="item product-01">
                                            <div class="item-left"><a href="{{route('product.show',$product->slug)}}"><img src="{{Voyager::image( $product->image )}}" alt="" width="140" height="70" class="img img-responsive"></a>
                                                <div class="content-wrapper"><a href="{{route('product.show',$product->slug)}}" class="title">{{$product->product_name}}</a>
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
    </div>
@endsection
