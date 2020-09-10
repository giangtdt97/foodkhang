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
        <div class="widget-body widget-content clearfix">
            @foreach($categories as $category)
            <a href="{{route('category.show',$category->slug)}}" class="link"><i class="icons fa fa-angle-right"></i><span class="text">{{$category->name}}</span></a>
            @endforeach
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
                @foreach($tags as $tag)
                <li><a href="{{route('tag.detail',$tag->slug)}}" class="tag">{{$tag->name}}</a></li>
                @endforeach
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
