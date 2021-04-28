@extends('layouts.master')
@section('title', 'Blog Xôi Khang')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">blog's xôi khang</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Hạnh phúc là cho đi và phục vụ</div>
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
                                                <div class="blog-featured-img"><img src="{{Voyager::image( $blog->image, 'small' )}}" alt="fooday" class="img img-responsive"></div>
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
                                                                <cite title="Source Title">{{$blog->quote_author}}</cite>
                                                            </footer>
                                                        </blockquote>
                                                        {!! $blog->body !!}
                                                    </div>
                                                    <div class="blog-footer clearfix">
                                                        <div class="blog-share">
                                                            <ul class="socials list-unstyled list-inline">
                                                                 <li><a href="https://www.facebook.com/sharer/sharer.php?u={{route('blog.detail')}}&display=popup"><i class="fa fa-facebook"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="blog-tags"><strong>Tags:</strong>
                                                            @foreach($blog->tags as $tag)
                                                                 <a href="{{route('tag.detail',$tag->slug)}}" class="tag">{{$tag->name}}</a>.
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
