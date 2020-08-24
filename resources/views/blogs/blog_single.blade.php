@extends('layouts.master')
@section('title', 'Single Blog')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Blog Single</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">All information and stories from our blog will help you have a best meal for your day</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="container">
                <div class="padding-top-100 padding-bottom-100">
                    <div class="row">
                        <div class="page-main col-md-8">
                            <div class="blog-wrapper swin-blog-single">
                                <div class="swin-sc-blog-slider style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item">
                                                <div class="blog-featured-img"><img src="{{asset('images/blog/blog-05.jpg')}}" alt="fooday" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-meta-info">
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
                                                        <h3 class="blog-title"><a href="#" class="swin-transition">{{$blog->title}}</a></h3>
                                                    </div>
                                                    <div class="blog-content-inner">
                                                        <p>{{$blog->excerpt}}</p>
                                                        <blockquote>
                                                            <p>The role of a good cook ware in the preparation of a sumptuous meal cannot be overempha.</p>
                                                            <footer>KELLY DOE
                                                                <cite title="Source Title">/ Food Blogger</cite>
                                                            </footer>
                                                        </blockquote>
                                                        <p>Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utm aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse utinti cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                                        <p>Laboris nisi utm aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptat velit esse utinti cillum dolore eu fugiat nulla pariatur.</p>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12">
                                                                <p><img src="{{asset('images/blog/blog-single-01.jpg')}}" alt="fooday" class="img img-responsive center-block"></p>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                                <p><img src="{{asset('images/blog/blog-single-02.jpg')}}" alt="fooday" class="img img-responsive center-block"></p>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                                <p><img src="{{asset('images/blog/blog-single-03.jpg')}}" alt="fooday" class="img img-responsive center-block"></p>
                                                            </div>
                                                        </div>
                                                        <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utm aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse utin.</p>
                                                    </div>
                                                    <div class="blog-footer clearfix">
                                                        <div class="blog-share">
                                                            <ul class="socials list-unstyled list-inline">
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-navigation clearfix">
                                    <div class="navi-item next-post pull-right"><a href="#">Next<i class="fa fa-chevron-right"></i></a></div>
                                    <div class="navi-item prev-post pull-left"><a href="#">Previous<i class="fa fa-chevron-left"></i></a></div>
                                </div>
                                <div class="blog-author-area">
                                    <div class="media">
                                        <div class="author-image media-left"><a href="#"><img src="{{asset('images/blog/blog-author.jpg')}}" alt="fooday" class="media-object"></a></div>
                                        <div class="media-body">
                                            <p class="author-name media-heading">KELLY DOE</p>
                                            <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                                            <ul class="socials-nb list-inline">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-comment">
                                    <div class="comment-heading swin-sc swin-sc-title style-2 text-left">
                                        <p class="title"><span>3 Comments</span></p>
                                    </div>
                                    <div class="comment-area">
                                        <div class="comment-list media-list list-unstyledl">
                                            <div class="comment-item media">
                                                <div class="author-comment-image media-left"><a href="#"><img src="{{asset('images/blog/blog-comment-avatar01.jpg')}}" alt="fooday" class="media-object"></a></div>
                                                <div class="media-body">
                                                    <p class="author-comment-name media-heading">Andy Doe</p>
                                                    <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                                                    <ul class="list-inline">
                                                        <li class="comment-date">25.12.2016</li>
                                                        <li class="comment-reply"><a href="#"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                                    </ul>
                                                    <div class="comment-item media">
                                                        <div class="author-comment-image media-left"><a href="#"><img src="{{asset('images/blog/blog-comment-avatar02.jpg')}}" alt="fooday" class="media-object"></a></div>
                                                        <div class="media-body">
                                                            <p class="author-comment-name media-heading">Mary Louis</p>
                                                            <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                                                            <ul class="list-inline">
                                                                <li class="comment-date">25.12.2016</li>
                                                                <li class="comment-reply"><a href="#"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-item media">
                                                <div class="author-comment-image media-left"><a href="#"><img src="{{asset('images/blog/blog-comment-avatar03.jpg')}}" alt="fooday" class="media-object"></a></div>
                                                <div class="media-body">
                                                    <p class="author-comment-name media-heading">Kelvin Tang</p>
                                                    <p>Picasio ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.</p>
                                                    <ul class="list-inline">
                                                        <li class="comment-date">25.12.2016</li>
                                                        <li class="comment-reply"><a href="#"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-form">
                                        <div class="comment-heading swin-sc swin-sc-title style-2 text-left">
                                            <p class="title"><span>Leave Comments</span></p>
                                        </div>
                                        <div class="swin-sc swin-sc-contact-form light mtl margin-bottom-100">
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
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="swin-btn-wrap"><a href="#" class="swin-btn form-submit"> <span>Send</span></a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('shared._blog_sidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
