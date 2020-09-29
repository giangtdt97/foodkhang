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

                                        <div class="swin-sc swin-sc-contact-form light mtl">
                                            <form  action="">
                                                 <div class="form-group">
                                                     <div class="swin-btn-wrap center">
                                                         <i></i>
                                                         <i class="fa fa-phone">
                                                         <input type="text" class="form-controller input search"  name="search" required="true"></i>
                                                         {{ csrf_field() }}
                                                         <div class="form-group">
                                                             <div class="swin-btn-wrap center"><button type="submit" class="swin-btn center form-submit"><span>Kiểm Tra Đơn Hàng</span></button></div>
                                                         </div>
                                                     </div>
                                                 </div>

                                            @if(isset($data))
                                                @if ($data-> isEmpty())
                                                      <h2>Sorry, no results found for the Order.</h2>
                                                  @else
                                                 <table class="table table-bordered table-hover">
                                                     <thead>
                                                     <tr>
                                                         <th>Name</th>
                                                         <th>Phone</th>
                                                         <th>Status</th>
                                                         <th>Service</th>
                                                     </tr>
                                                     </thead>
                                                     <tbody>
                                                      @foreach ($data as $order)
                                                          <tr>
                                                              <td>{{$order->customer_name}}</td>
                                                              <td>{{$order->phone_number}}</td>
                                                              <td class="text-danger">{{$order->status}}</td>
                                                            @foreach($order->services as $service)
                                                                  <td>{{$service->name}}</td>
                                                            @endforeach
                                                          </tr>
                                                      @endforeach
                                                      @endif
                                                      @endif
                                                     </tbody>
                                                 </table>
                                            </form>
                                        </div>
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
                                        @foreach($feature_service as $feature_service)
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="item icon-box-02 wow fadeInUpShort">
                                                    <div class="wrapper-icon"><i class="{{$feature_service->icon}}"></i></div>
                                                    <h4 class="title">{{$feature_service->name}}</h4>
                                                    <div class="description">{{$feature_service->description}}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
@endsection
