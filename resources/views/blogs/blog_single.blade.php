@extends('layouts.master')
@section('title', 'Single Blog')
@section('content')
    @php

           if(isset(session('view'))){
               $view = session('view');
               array_push($view,$blog->slug);
               session()->flash('view', $view );
           }else{
           session()->flash('view', [$blog->slug]);
           }

           var_dump(session('view'));
    @endphp
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Bài Viết Chi Tiết</div>
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
                                                <div class="blog-featured-img"><img src="{{Voyager::image( $blog->image )}}" alt="fooday" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-meta-info">
                                                        <div class="blog-date"><span class="day">{{$blog->created_at->format('d')}}</span><span class="month">{{$blog->created_at->format('F')}}</span><span class="year">{{$blog->created_at->format('y')}}</span></div>
                                                        <div class="blog-info clearfix">
                                                            <div class="blog-info-item blog-author">
                                                                <p><span>Post By :</span><a href="#">Admin</a></p>
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                        <h3 class="blog-title"><a href="#" class="swin-transition">{{$blog->title}}</a></h3>
                                                    </div>
                                                    <div class="blog-content-inner">
                                                        <p>{{$blog->excerpt}}</p>
                                                        <blockquote>
                                                            {!! $blog->quote !!}
                                                            <footer>
                                                                <cite title="Source Title">/ Food Blogger</cite>
                                                            </footer>
                                                        </blockquote>
                                                        {!! $blog->body !!}
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
                                <div class="swin-widget widget-tag">
                                    <div class="title-widget">TAG</div>
                                    <div class="widget-body widget-content clearfix">
                                        <ul class="list-unstyled list-inline">
                                            @foreach($blog->tags as $tag)
                                                <li><a href="{{route('tag.detail',$tag->slug)}}" class="tag">{{$tag->name}}</a></li>
                                            @endforeach
                                        </ul>
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
