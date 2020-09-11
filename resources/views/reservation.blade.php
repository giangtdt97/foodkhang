@extends('layouts.master')
@section('title', 'Reservation')
@section('content')
    <div id="pagewrap" class="pagewrap">
        <div id="html-content" class="wrapper-content">
            <div class="page-container">
                <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-reservation">
                    <div class="container">
                        <div class="title-wrapper">
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Theo Dõi Đơn Hàng</div>
                            <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Just a few click to make the reservation online for saving your time and money</div>
                        </div>
                    </div>
                </div>
                <div class="page-content-wrapper">
                    <section class="section-reservation-form padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div class="section-content">
                                <div class="swin-sc swin-sc-title style-2">
                                    <h3 class="title"><span>Theo Dõi Đơn Hàng</span></h3>
                                </div>
                                <div class="reservation-form">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p class="reservation-form-title text-center">Chúng tôi rất hân hạnh phục vụ quý khách, vui lòng  nhập số điện thoại để kiểm tra đơn hàng</p>
                                        </div>
                                    </div>
                                     <div class="swin-sc swin-sc-contact-form light mtl">
                                      <form method="post" action="../search" role="search">
                                        <div class="form-group">

                                            <div class="swin-btn-wrap center">

                                                    <div class="fa fa-phone"></div>
                                                <input type="text" class="form-controller" id="search" name="search">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="swin-btn-wrap center"><button type="submit" class="swin-btn center form-submit"><span>Kiểm Tra Đơn Hàng</span></button></div>
                                        </div>
                                      </form>
{{--                                        @if(isset($orders))--}}
{{--                                        <table class="table table-bordered table-hover">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th>Customer Name</th>--}}
{{--                                                <th>Phone Number</th>--}}
{{--                                                <th>Status</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody>--}}
{{--                                                @foreach ($orders as $order)--}}
{{--                                                    <tr>--}}
{{--                                                        <td>{{$order->customer_name}}</td>--}}
{{--                                                        <td>{{$order->phone_number}}</td>--}}
{{--                                                        <td>{{$order->status}}</td>--}}
{{--                                                    </tr>--}}
{{--                                                @endforeach--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                        @endif--}}

                                      </div>
                                </div>
                                <div class="section-deco"><img src="{{asset('images/pages/reservation-showcase.png')}}" alt="fooday" class="img-deco"></div>
                            </div>
                        </div>
                    </section>
                    <section data-bottom-top="background-position: 50% 100px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="section-reservation-service padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div class="section-content">
                                <div class="swin-sc swin-sc-title style-2 light">
                                    <h3 class="title"><span>Dịch Vụ Nổi Bật</span></h3>
                                </div>
                                <div class="swin-sc swin-sc-iconbox light">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div>
                                                <h4 class="title">Cúng mừng Thôi Nôi</h4>
                                                <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div>
                                                <h4 class="title"> Cúng mừng Đầy Tháng</h4>
                                                <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div>
                                                <h4 class="title">Cúng Tết Đoan Ngọ</h4>
                                                <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div>
                                                <h4 class="title">Cúng Các Lễ khác</h4>
                                                <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
@endsection
