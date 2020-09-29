
<footer>

    <div class="footer-top"></div>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ft-widget-area">
                        <div class="ft-area1">
                            <div class="swin-wget swin-wget-about">
                                <div class="wget-about-content">
                                    <p>Xôi khang là nơi gìn giữ bản sắc văn hoá và tinh hoà dân tộc Việt thể hiện qua phương pháp chế biến và sự phối hợp các nguyên liệu thuần Việt, để tạo thành những sản phẩm mang hồn và tinh thần của quê hương. CHúng tôi tự hào mang đến cho quý khách những sản phẩm và dịch vụ giá trị nhất, an toàn và thuần Việt Nhất.  </p>
                                </div>
                                <div class="about-contact-info clearfix">
                                    <div class="address-info">
                                        <div class="info-icon"><a href="{{route('contact')}}"><i class="fa fa-map-marker"></i></a></div>
                                        <div class="info-content">
                                            <p>{{setting('site.site_address')}}</p>

                                        </div>
                                    </div>
                                    <div class="phone-info">
                                        <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                                        <div class="info-content">
                                            <a href="tel:{{setting('site.site_phone')}}"><p>{{setting('site.site_phone')}}</p></a>
                                            <a href="tel:{{setting('site.site_phone2')}}"> <p>{{setting('site.site_phone2')}}</p></a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="clearfix"><a class="wget-logo"><img src="assets/images/logo-ft.png" alt="" class="img img-responsive"></a>
                                            <ul class="socials socials-about list-unstyled list-inline">
                                                <li><a href="https://www.facebook.com/Xoikhang.vn/"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="tel:{{setting('site.site_phone')}}"><i class="fa fa-commenting-o"></i></a></li>
                                                <li><a href="{{route('contact')}}"><i class="fa fa-map-marker"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-contact-info">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ft-fixed-area">
                        <div class="reservation-box">
                            <div class="reservation-wrap">
                                <h3 class="res-title">Giờ Mở Cửa</h3>
                                <div class="res-date-time">
                                    <div class="res-date-time-item">
                                        <div class="res-date">
                                            <div class="res-date-item">
                                                <div class="res-date-text">
                                                    <p>Thứ 2 đến Thứ 7 :</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="res-time">
                                            <div class="res-time-item">
                                                <p>6AM - 11:30AM</p>
                                                <p>3PM - 9PM</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="res-date-dot">.......................................</div>
                                    <div class="res-date-time-item">
                                        <div class="res-date">
                                            <div class="res-date-item">
                                                <div class="res-date-text">
                                                    <p>Chủ Nhật:</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="res-time">
                                            <div class="res-time-item">
                                                <p>6AM - 11:30AM</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <h3 class="res-title">Liên Hệ Đặt Hàng</h3>
                                <p class="res-number">{{setting('site.site_phone')}}</p>
                                <p class="res-number">{{setting('site.site_phone2')}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- Load Facebook SDK for JavaScript -->
<!-- Your Chat Plugin code -->
<div>
{{--    <style>--}}
{{--        #totop{box-shadow:0 0 10px 0 rgba(0,0,0,0.2);position:fixed;bottom:60px;left:1.5%;display:none;z-index:9999;background:#96b125;border:3px solid #fff;border-radius:50%;height:47px;width:47px;text-align:center;transition:all .2s linear}--}}
{{--    </style>--}}
{{--    <div>--}}
{{--        <a id="totop" href="tel:{{setting('site.site_phone')}}" class="animated"><i class="fa fa-phone"></i></a>--}}
{{--    </div>--}}
    <style>
        .hotline-phone-ring {position: relative;visibility: visible;background-color: transparent;width: 110px;height: 110px;cursor: pointer;z-index: 11;-webkit-backface-visibility: hidden;-webkit-transform: translateZ(0);transition: visibility .5s;right: 0;bottom: 140px;display: block;}.hotline-phone-ring-circle {right: 10px}.hotline-phone-ring-circle-fill {right: 25px}.hotline-phone-ring-img-circle {right: 37px}
    </style>
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:{{setting('site.site_phone')}}" class="pps-btn-img">
                    <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>
    </div>


<div id="fb-root" ></div>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="{{setting('site.pageId')}}"
         theme_color="#96b125">
    </div>
    <style>
        .zalo-chat-widget{bottom: 90px!important;right: 20px!important;}
    </style>
<div class="zalo-chat-widget" data-oaid="1375671240982213476" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420" ></div>
</div>
<div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
    <div class="loader-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
            <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
        </svg>
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
        <div class="sk-circle sk-circle-out">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>

</div>
<!-- jQuery-->
<script src="{{asset('vendors/jquery-1.10.2.min.js')}}" ></script>
<!-- Bootstrap JavaScript-->
<script defer src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Vendors-->
<script defer  src="{{asset('vendors/flexslider/jquery.flexslider-min.js')}}"></script>
<script defer  src="{{asset('vendors/swipebox/js/jquery.swipebox.min.js')}}"></script>
<script  defer src="{{asset('vendors/slick/slick.min.js')}}"></script>
<script  defer src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script  defer src="{{asset('vendors/jquery-countTo/jquery.countTo.min.js')}}"></script>
<script  defer src="{{asset('vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script defer  src="{{asset('vendors/parallax/parallax.min.js')}}"></script>
<script  defer src="{{asset('vendors/gmaps/gmaps.min.js')}}"></script>
<script defer  src="{{asset('vendors/audiojs/audio.min.js')}}"></script>
<script defer  src="{{asset('vendors/vide/jquery.vide.min.js')}}"></script>
<script  defer src="{{asset('vendors/pageloading/js/svgLoader.min.js')}}"></script>
<script defer  src="{{asset('vendors/pageloading/js/classie.min.js')}}"></script>
<script defer  src="{{asset('vendors/pageloading/sidebartransition/js/sidebarEffects.min.js')}}"></script>
<script  defer src="{{asset('vendors/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script defer  src="{{asset('vendors/wowjs/wow.min.js')}}"></script>
<script defer  src="{{asset('vendors/skrollr.min.js')}}"></script>
<script defer  src="{{asset('vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script defer  src="{{asset('vendors/jquery-cookie/js.cookie.js')}}"></script>
<script defer  src="{{asset('vendors/ajax/libs/jquery-easing/1.3/jquery.easing.min.js')}}" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Own script-->
<script  defer src="{{asset('js/layout.js')}}"></script>
<script  defer src="{{asset('js/elements.js')}}"></script>
<script  defer src="{{asset('js/widget.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.user-support').click(function(event) {
            $('.social-button-content').slideToggle();
        });
    });
</script>
<script type="text/javascript" >
    $(document).ready(function() {
        var $el, $ps, $up, totalHeight;

        $(".sidebar-box .button").click(function () {
            console.log("test")
            totalHeight = 0

            $el = $(this);
            $p = $el.parent();
            $up = $p.parent();
            $ps = $up.find("p:not('.read-more')");

            // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
            $ps.each(function () {
                totalHeight += $(this).outerHeight();
            });

            $up
                .css({
                    // Set height to prevent instant jumpdown when max height is removed
                    "height": $up.height(),
                    "max-height": 9999
                })
                .animate({
                    "height": totalHeight
                });

            // fade out read-more
            $p.fadeOut();

            // prevent jump-down
            return false;

        });
    });
</script>
<script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function(){

        var src = $(this).attr('src');
        var modal;
        function removeModal(){ modal.remove(); $('body').off('keyup.modal-close'); }
        modal = $('<div>').css({
            background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
            backgroundSize: 'contain',
            width:'100%', height:'100%',
            position:'fixed',
            zIndex:'10000',
            top:'0', left:'0',
            cursor: 'zoom-out'
        }).click(function(){
            removeModal();
        }).appendTo('body');
        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); }
        });
    });
</script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v8.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<script src="https://sp.zalo.me/plugins/sdk.js" ></script>



