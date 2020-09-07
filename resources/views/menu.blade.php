@extends('layouts.master')
@section('title', 'Menu')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Menu Grid 02</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">The various dishes are waiting for your coming to enjoy its</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="menu-grid-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                       <div class="row">
                            <div class="col-md-12">
                                <div data-slide-toshow="3" class="cat-wrapper-02 cat-images main-slider">
                                    @foreach($categories as $category)
                                    <div class="item">
                                        <div class="cat-image"><a href="javascript:void(0)"><img src="{{ asset ('images/product/pd-cat-breakfast.png')}}" alt="" class="img img-responsive">{{$category->name}}</a></div>
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
                                                <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{Voyager::image( $product->image )}}" alt="" width="140" height="70">
                                                        <div class="group-btn"><a href="{{route('product.show',$product->slug)}}" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a></div>
                                                    </div>
                                                    <h5 class="title">{{$product->product_name}}</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>{{$product->price}}</span>
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
            <section class="menu-banner-section banner-section padding-top-100 padding-bottom-100"><img src="{{asset('images/background/lemon.png')}}" alt="" class="img-left img-bg img-deco img-responsive"><img src="asset{{'images/background/vegetable_03.png'}}" alt="" class="img-right img-bg img-deco img-responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="content-wrapper">
                                <h2 class="heading-title">Let's Make Your Meal be Fantastic With<span class="text-large"> FOODAY</span>Awesome Menu!</h2>
                                <div class="swin-btn-wrap"><a href="#" class="swin-btn"><span>Book Table</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
