@extends('layouts.master')
@section('title', 'Service Detail')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Product Single</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">We hope you will like this product and give us 5 star rating</div>
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
                                        @foreach($service->products as $product)
                                        <div class="slides">
                                            @php $images = json_decode($product->images);@endphp
                                            @foreach($images as $multimage)
                                                <div class="featured-image-item"><img src="{{ Voyager::image($product->getThumbnail($multimage, 'small')) }}" alt="fooday" class="img img-responsive"></div>
                                            @endforeach
                                        </div>
                                        @endforeach
                                    </div>
                                    <div data-width="150" class="nav-slider">
                                        @foreach($service->products as $product)
                                        <ul class="slides list-inline">
                                            @php $images = json_decode($product->images);@endphp
                                            @foreach($images as $multimage)
                                                <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="{{ Voyager::image($product->getThumbnail($multimage, 'small')) }}" alt="fooday" class="img img-responsive swin-transition"></a></li>
                                            @endforeach
                                        </ul>
                                        @endforeach
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
                                    <div class="price">{{$service->price}}<span class="currency-symbol">VNĐ</span></div>
                                </div>
                                <div class="product-info">
                                    <ul class="list-inline">
                                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a><span>4 Reviews</span></li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <p>{{$service->short_description}}</p>

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
            </div>
        </div>
    </div>
@endsection
