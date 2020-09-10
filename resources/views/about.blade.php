@extends('layouts.master')
@section('title', 'About')
@section('content')
    <div id="pagewrap" class="pagewrap">
        <div id="html-content" class="wrapper-content">
            <div class="page-container">
                <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-about">
                    <div class="container">
                        <div class="title-wrapper">
                            <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Giới Thiệu</div>
                            <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                            <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Chúng tôi mang đến cho bạn hương vị không thể quên</div>
                        </div>
                    </div>
                </div>
                <div class="page-content-wrapper">
                    <section class="ab-timeline-section padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div class="swin-sc swin-sc-title style-2">
                                <h3 class="title"><span>Câu chuyện Xôi Khang</span></h3>
                            </div>
                            <div data-item="3" class="swin-sc swin-sc-timeline-2">
                                <div class="main-slider">
                                    <div class="slides">
                                        <div class="timeline-item item swin-transition">
                                            <div class="timeline-item-wrap"><span class="timeline-year swin-transition">2016-2017</span></div><img src="{{asset('images/timeline/timeline-5.jpg')}}" alt="fooday" class="img img-responsive">
                                        </div>
                                        <div class="timeline-item item swin-transition">
                                            <div class="timeline-item-wrap"><span class="timeline-year swin-transition">2017-2018</span></div><img src="{{asset('images/timeline/timeline-6.jpg')}}" alt="fooday" class="img img-responsive">
                                        </div>
                                        <div class="timeline-item item swin-transition">
                                            <div class="timeline-item-wrap"><span class="timeline-year swin-transition">2018-2019</span></div><img src="{{asset('images/timeline/timeline-7.jpg')}}" alt="fooday" class="img img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-slider">
                                    <div class="slides">
                                        <div class="timeline-content-item">
                                            <p class="timeline-heading"><strong>16.10.2012:</strong>The Begin of Fooday Restaurents</p>
                                            <div class="timeline-content-detail">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                                <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-content-item">
                                            <p class="timeline-heading"><strong>16.10.2016:</strong>The Begin of Fooday Restaurents</p>
                                            <div class="timeline-content-detail">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                                <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-content-item">
                                            <p class="timeline-heading"><strong>16.10.2017:</strong>The Begin of Fooday Restaurents</p>
                                            <div class="timeline-content-detail">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                                <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="ab-testimonial-section padding-top-100 padding-bottom-100">
                        <div class="container"><img src="{{asset('images/background/ab_team_01.png')}}" alt="" class="img-left img-bg img-deco img-responsive">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <div class="swin-sc swin-sc-testimonial style-2 option-2">
                                        <div class="main-slider flexslider">
                                            <div class="slides">
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Timothy Doe</span> <span class="position">Customer</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Ut enim ad minim veniam, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Sarah	Ruiz</span> <span class="position">Customer</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Consectetur adipisicing elit, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Tracey Lewis</span> <span class="position">Customer</span></div>
                                                </div>
                                                <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                                    <div class="testi-content">
                                                        <p>Quis nostrud exercitation ullamco laboris, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                                    </div><img src="{{asset('images/testi/testi-signal.png')}}" alt="" class="testi-signal">
                                                    <div class="testi-info"><span class="name">Jamie	Erickson</span> <span class="position">Customer</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="featured-section padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="swin-sc swin-sc-title">
                                        <p class="top-title"><span>Sản Phẩm Đặc Trưng</span></p>
                                        <h3 class="title">Ba nhóm sản Phẩm chính</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{asset('images/featured-box-bg-1.jpg')}}" alt="fooday" class="box-bg">
                                                <div class="box-inner">
                                                    <h4 class="box-title">Xôi Chè Sạch </h4>
                                                    <div class="box-content">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                                                    <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Read More</span></a></div>
                                                    <div class="showcase"><img src="{{asset('images/feature-box-bg.jpg')}}" alt="" class="img-responsive img-showcase">
                                                        <div class="title-showcase">Xôi Chè Sạch</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="0.5s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{asset('images/featured-box-bg-1.jpg')}}" alt="fooday" class="box-bg">
                                                <div class="box-inner">
                                                    <h4 class="box-title">Măm cúng </h4>
                                                    <div class="box-content">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                                                    <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Read More</span></a></div>
                                                    <div class="showcase"><img src="{{asset('images/feature-box-bg-2.jpg')}}" alt="" class="img-responsive img-showcase">
                                                        <div class="title-showcase">Măm cúng </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="1s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="{{asset('images/featured-box-bg-1.jpg')}}" alt="fooday" class="box-bg">
                                                <div class="box-inner">
                                                    <h4 class="box-title">Rau câu 3D</h4>
                                                    <div class="box-content">🎊🎊Những mẫu bánh rau cau 3D luôn là những quà tặng ấn tương, gây đươc nhiều thiện cảm cho người "đặc biệt" được nhận món quà này.

                                                        👍🏻👍🏻Với những hoạ tiết thật công phu, cách phối màu sang trọng, vị ngọt thanh và béo ngậy trong từng lớp rau câu... Sẽ không làm thất vọng những khách hàng khá kỹ tính đa tin tưởng va chon Xôi Khang là người làm nên những món quà mang tên RAU CÂU 3D.

                                                        Bánh Rau câu 3D phong phú về mẫu - size bánh - giá bán hợp lý theo từng têu cầu của khách hàng .</div>
                                                    <div class="btn-wrap text-center"><a href="{{route('menu')}}" class="btn swin-btn"><span>Read More</span></a></div>
                                                    <div class="showcase"><img src="{{asset('images/feature-box-bg-3.jpg')}}" alt="" class="img-responsive img-showcase">
                                                        <div class="title-showcase">Rau câu 3D</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="partner-section-03 padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div data-item="6" class="swin-sc swin-sc-partner">
                                <div class="main-slider">
                                    <div class="slides">
                                        <div class="item"><img src="{{asset('images/partner/partner-01.png')}}" alt="fooday" class="img img-responsive"></div>
                                        <div class="item"><img src="{{asset('images/partner/partner-02.png')}}" alt="fooday" class="img img-responsive"></div>
                                        <div class="item"><img src="{{asset('images/partner/partner-03.png')}}" alt="fooday" class="img img-responsive"></div>
                                        <div class="item"><img src="{{asset('images/partner/partner-04.png')}}" alt="fooday" class="img img-responsive"></div>
                                        <div class="item"><img src="{{asset('images/partner/partner-01.png')}}" alt="fooday" class="img img-responsive"></div>
                                        <div class="item"><img src="{{asset('images/partner/partner-02.png')}}" alt="fooday" class="img img-responsive"></div>
                                        <div class="item"><img src="{{asset('images/partner/partner-03.png')}}" alt="fooday" class="img img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="counter-section-03 padding-top-100 padding-bottom-100">
                        <div class="container"><img src="{{asset('images/background/vegetable_01.png')}}" alt="" class="img-left img-bg img-responsive"><img src="{{asset('images/background/vegetable_02.png')}}" alt="" class="img-right img-bg img-responsive">
                            <div class="swin-sc swin-sc-counter">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="counter-info item"><span data-from="50" data-to="103" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/dishes</span></div>
                                        <div class="counter-avatar"><img src="{{asset('images/counter-1.png')}}" alt="fooday" class="img img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="counter-info item"><span data-from="2300" data-to="2389" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/customers</span></div>
                                        <div class="counter-avatar"><img src="{{asset('images/counter-2.png')}}" alt="fooday" class="img img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="counter-info item"><span data-from="1" data-to="20" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/awards</span></div>
                                        <div class="counter-avatar"><img src="{{asset('images/counter-3.png')}}" alt="fooday" class="img img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="counter-info item"><span data-from="2500" data-to="2589" data-speed="3000" data-refresh-interval="5" class="number timer">0</span><span class="caption">/working hours</span></div>
                                        <div class="counter-avatar"><img src="{{asset('images/counter-4.png')}}" alt="fooday" class="img img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-reservation-form padding-top-100 padding-bottom-100">
                        <div class="container">
                            <div class="section-content">
                                <div class="swin-sc swin-sc-title style-2">
                                    <h3 class="title"><span>Make Reservation</span></h3>
                                </div>
                                <div class="reservation-form layout-2">
                                    <div class="reservation-form-inner">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> 225-88888</span></p>
                                            </div>
                                        </div>
                                        <div class="swin-sc swin-sc-contact-form light mtl">
                                            <form>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                        <input type="text" placeholder="Username" class="form-control">
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                        <input type="text" placeholder="Email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <div class="fa fa-phone"></div>
                                                        </div>
                                                        <input type="text" placeholder="Phone" class="form-control">
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                                        <select type="text" placeholder="People" class="form-control">
                                                            <option>1 person</option>
                                                            <option>2 People</option>
                                                            <option>3 People</option>
                                                            <option>4 People</option>
                                                            <option>5 People</option>
                                                            <option>6 People</option>
                                                            <option>7 People</option>
                                                            <option>8 People</option>
                                                            <option>9 People</option>
                                                            <option>10 People</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        <input type="text" placeholder="Date" class="form-control datepicker">
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <div class="fa fa-clock-o"></div>
                                                        </div>
                                                        <select type="text" placeholder="Time" class="form-control">
                                                            <option>7:00 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>12:00 AM</option>
                                                            <option>1:00 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>10:00 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>Book Table</span></a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
