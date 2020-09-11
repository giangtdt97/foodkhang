@extends('layouts.master')
@section('title', 'Contact')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-contact">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Liên Hệ</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Let us know if you have any concern about our menu, service or other information you want to have</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="ct-info-section padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.7976552316554!2d106.67009231500417!3d10.97864035843015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d12658d743af%3A0x4360e229cd7e3653!2zODZhIMSQxrDhu51uZyAzMC80LCBQaMO6IEhvw6AsIFRo4bunIEThuqd1IE3hu5l0LCBCw6xuaCBExrDGoW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1599642804241!5m2!1svi!2s" width="750" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="col-md-4">
                            <div class="swin-sc swin-sc-title style-2 text-left">
                                <p class="title"><span>Thông Tin Liên Hệ</span></p>
                            </div>
                            <div class="swin-sc swin-sc-contact">
                                <div class="media item">
                                    <div class="media-left">
                                        <div class="wrapper-icon"><i class="icons fa fa-map-marker"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading title">Địa Chỉ</h4>
                                        <div class="description">{{setting('site.site_address')}}</div>
                                    </div>
                                </div>
                                <div class="media item">
                                    <div class="media-left">
                                        <div class="wrapper-icon"><i class="icons fa fa-phone"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading title">Số Điện Thoại 1</h4>
                                        <div class="description">{{setting('site.site_phone')}}</div>
                                    </div>
                                </div>
                                <div class="media item">
                                    <div class="media-left">
                                        <div class="wrapper-icon"><i class="icons fa fa-phone"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading title">Số Điện Thoại 2</h4>
                                        <div class="description">{{setting('site.site_phone2')}}</div>
                                    </div>
                                </div>
                                <div class="media item">
                                    <div class="media-left">
                                        <div class="wrapper-icon"><i class="icons fa fa-envelope"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading title">E-Mail</h4>
                                        <div class="description">
                                            <p>hello@fooday.com</p>
                                            <p>contact@fooday.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map-section padding-bottom-100">
            </section>
        </div>
    </div>
@endsection
