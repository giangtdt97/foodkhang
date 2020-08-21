@extends('layouts.master')
@section('title', 'Blog Home Page')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Newest Blog </div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">All information and stories from our blog will help you have a best meal for your day</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="page-main col-md-8">
                            <div class="blog-wrapper swin-sc-blog-list">
                                <div class="swin-sc-blog-slider style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item swin-transition">
                                                <div class="blog-featured-img"><img src="{{asset('images/blog/blog-slider-1.jpg')}}" alt="fooday" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <div class="blog-info clearfix">
                                                        <div class="blog-info-item blog-view">
                                                            <p><i class="fa fa-eye"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-comment">
                                                            <p><i class="fa fa-comment"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-author">
                                                            <p><span>Post By </span><a href="#">Admin</a></p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                                                    <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swin-sc-blog-slider style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item swin-transition">
                                                <div class="blog-featured-img"><img src="{{asset('images/blog/blog-slider-2.jpg')}}" alt="fooday" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <div class="blog-info clearfix">
                                                        <div class="blog-info-item blog-view">
                                                            <p><i class="fa fa-eye"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-comment">
                                                            <p><i class="fa fa-comment"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-author">
                                                            <p><span>Post By </span><a href="#">Admin</a></p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                                                    <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swin-sc-blog-slider main-carousel style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item swin-transition">
                                                <div class="item-sliders">
                                                    <div class="blog-featured-img item-sliders"><img src="{{asset('images/blog/blog-slider-4.jpg')}}" alt="fooday" class="img img-responsive"></div>
                                                    <div class="blog-featured-img item-sliders"><img src="{{asset('images/blog/blog-slider-3.jpg')}}" alt="fooday" class="img img-responsive"></div>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <div class="blog-info clearfix">
                                                        <div class="blog-info-item blog-view">
                                                            <p><i class="fa fa-eye"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-comment">
                                                            <p><i class="fa fa-comment"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-author">
                                                            <p><span>Post By </span><a href="#">Admin</a></p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                                                    <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swin-sc-blog-slider video style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item swin-transition">
                                                <div class="blog-featured-img">
                                                    <div class="format-video"><img src="{{asset('images/blog/blog-slider-5.jpg')}}" alt="fooday" class="img img-responsive">
                                                        <div class="swin-sc swin-sc-video">
                                                            <div class="play-wrap"><a href="https://vimeo.com/27814858" class="play-btn swipebox"><i class="play-icon fa fa-play"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <div class="blog-info clearfix">
                                                        <div class="blog-info-item blog-view">
                                                            <p><i class="fa fa-eye"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-comment">
                                                            <p><i class="fa fa-comment"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-author">
                                                            <p><span>Post By </span><a href="#">Admin</a></p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                                                    <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swin-sc-blog-slider style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item swin-transition">
                                                <div class="blog-featured-img">
                                                    <div class="quote-format"><img src="{{asset('images/blog/blog-slider-6.jpg')}}" alt="fooday" class="img img-responsive">
                                                        <div class="quote-text"><i class="fa fa-quote-left quote-icon"></i>The role of a good cook ware in the preparation of a sumptuous meal cannot be overemphasized.</div>
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <div class="blog-info clearfix">
                                                        <div class="blog-info-item blog-view">
                                                            <p><i class="fa fa-eye"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-comment">
                                                            <p><i class="fa fa-comment"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-author">
                                                            <p><span>Post By </span><a href="#">Admin</a></p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swin-sc-blog-slider style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item swin-transition">
                                                <div class="blog-featured-img">
                                                    <div class="audio-format"><img src="{{asset('images/blog/blog-slider-7.jpg')}}" alt="fooday" class="img img-responsive">
                                                        <audio src="{{asset('assets/audio/audio.mp3')}}" preload="auto"></audio>
                                                    </div>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                                    <div class="blog-info clearfix">
                                                        <div class="blog-info-item blog-view">
                                                            <p><i class="fa fa-eye"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-comment">
                                                            <p><i class="fa fa-comment"></i><span>18</span></p>
                                                            <p></p>
                                                        </div>
                                                        <div class="blog-info-item blog-author">
                                                            <p><span>Post By </span><a href="#">Admin</a></p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                    <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                                                    <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-wrapper">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="page-sidebar col-md-4">
                            <!-- search-->
                            <div class="swin-widget widget-search">
                                <div class="title-widget">
                                    <form accept-charset="utf-8" class="search-form">
                                        <input type="search" placeholder="Search" name="s" value="" class="search-input"><span class="search-submit"><i class="fa fa-search"></i></span>
                                    </form>
                                </div>
                            </div>
                            <!-- categories-->
                            <div class="swin-widget widget-categories">
                                <div class="title-widget">Category</div>
                                <div class="widget-body widget-content clearfix"><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span class="text">hot Drink</span><span class="badge">12</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span class="text">spicy food</span><span class="badge">14</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span class="text">New Dishes</span><span class="badge">17</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span class="text">Dessert</span><span class="badge">07</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span class="text">Discount Event</span><span class="badge">06</span></a></div>
                            </div>
                            <!-- recent post-->
                            <div class="swin-widget widget-recent-post">
                                <div class="title-widget">Recent Post</div>
                                <div class="widget-body widget-content clearfix">
                                    <div class="swin-media">
                                        <div class="content-left"><a href="#"><img src="{{asset('images/widget/wg-recent-post1.jpg')}}" alt="..." class="media-object"></a></div>
                                        <div class="content-right"><a href="#" class="heading">
                                                Chinese Spicy Food Is Make
                                                By Jankan-Cook</a>
                                            <div class="info">
                                                <div><i class="swin-icon fa fa-clock-o"></i><span class="text">20 minutes ago</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swin-media">
                                        <div class="content-left"><a href="#"><img src="{{asset('images/widget/wg-recent-post2.jpg')}}" alt="..." class="media-object"></a></div>
                                        <div class="content-right"><a href="#" class="heading">
                                                Recipe Collection From
                                                Master Chef KingDom</a>
                                            <div class="info">
                                                <div><i class="swin-icon fa fa-clock-o"></i><span class="text">06 minutes ago</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swin-media">
                                        <div class="content-left"><a href="#"><img src="{{asset('images/widget/wg-recent-post3.jpg')}}" alt="..." class="media-object"></a></div>
                                        <div class="content-right"><a href="#" class="heading">
                                                The Best Nutrition For Your
                                                Daily Meal</a>
                                            <div class="info">
                                                <div><i class="swin-icon fa fa-clock-o"></i><span class="text">04 hours ago</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tag-->
                            <div class="swin-widget widget-tag">
                                <div class="title-widget">TAG</div>
                                <div class="widget-body widget-content clearfix">
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">Sea Food</a></li>
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">Vegetables Meal</a></li>
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">spicy</a></li>
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">5 start restaurent</a></li>
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">new menu</a></li>
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">traditional food</a></li>
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">drink</a></li>
                                        <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">nutrition</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- gallery-->
                            <div class="swin-widget widget-gallery carousel">
                                <div class="title-widget">Gallery</div>
                                <div class="widget-body widget-content clearfix">
                                    <div class="main-slider">
                                        <div class="item-slide"><img src="{{asset('images/widget/wg-gallery1.jpg')}}" alt="" class="img-responsive showcase"></div>
                                        <div class="item-slide"><img src="{{asset('images/widget/wg-gallery1.jpg')}}" alt="" class="img-responsive showcase"></div>
                                        <div class="item-slide"><img src="{{asset('images/widget/wg-gallery1.jpg')}}" alt="" class="img-responsive showcase"></div>
                                        <div class="item-slide"><img src="{{asset('images/widget/wg-gallery1.jpg')}}" alt="" class="img-responsive showcase"></div>
                                        <div class="item-slide"><img src="{{asset('images/widget/wg-gallery1.jpg')}}" alt="" class="img-responsive showcase"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
