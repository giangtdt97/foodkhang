@extends('layouts.master')
@section('title', 'Service Detail')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Chi Tiết Dịch Vụ</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Chúng Tôi Hy Vọng Đem Lại Trải Nghiệm Tốt Nhất Cho Bạn Về Dịch Vụ XÔI KHANG</div>
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
                                            @php $images = json_decode($service->images);@endphp
                                            @foreach($images as $multimage)
                                                <div class="featured-image-item"><img data-enlargeable style="cursor: zoom-in" src="{{ Voyager::image($service->getThumbnail($multimage, 'medium')) }}" alt="fooday" class="" height="200" width="200"></div>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div data-width="150" class="nav-slider">

                                        <ul class="slides list-inline">
                                            @php $images = json_decode($service->images);@endphp
                                            @foreach($images as $multimage)
                                                <div class="featured-image-item"><img src="{{ Voyager::image($service->getThumbnail($multimage, 'small')) }}" alt="fooday" class="" height="100" width="100"></div>
                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-summary">
                                <div class="product-title">
                                    <div class="title">{{$service->name}},</div>
                                </div>
                                <div class="product-price">
                                    <div class="price">{{$service->presentPrice()}}<span class="currency-symbol">VNĐ</span></div>
                                </div>
                                <div class="product-info">
                                    <ul class="list-inline">
                                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a><span>4 Reviews</span></li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <p>{{$service->short_description}}</p>

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
                                        {!! $service->description !!}
                                        <div class="item">
                                            <div class="wg-contact"><i class="fa fa-mobile-phone"></i><span>:{{setting('site.site_phone')}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="{{Voyager::image($service->getThumbnail($service->image,'medium'))}}" height="500" alt="" class="img-decorate">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-4"></div>
                            <div class="col-lg-6 col-md-8">
                                <div class="swin-sc swin-sc-title  light">

                                    <p class="top-title"><span> {{$service->name}}</span></p>

                                </div>
                                <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div data-height="200" class="products nav-slider">
                                                @foreach($service->products as  $product)
                                                    <div class="item product-01">
                                                        <div class="item-left"><a href="{{route('product.show',$product->slug)}}"><img src="{{Voyager::image( $product->image )}}" alt="" class="img img-responsive"></a>
                                                            <div class="content-wrapper"><a href="{{route('product.show',$product->slug)}}" class="title">{{$product->product_name}}</a>
                                                                <div class="dot">.....................................................................</div>
                                                                <div class="des">{{$product->short_description}}</div>
                                                            </div>
                                                        </div>
                                                        <div class="item-right"></div>
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
        </div>
    </div>
@endsection
