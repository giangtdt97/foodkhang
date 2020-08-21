@extends('layouts.master')
@section('title', 'Menu')
@section('content')
    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Menu Grid 02</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">The various dishes are waiting for your coming to enjoy its</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="menu-grid-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                        <div class="row">
                            <div class="col-md-12">
                                <div data-slide-toshow="3" class="cat-wrapper-02 cat-images main-slider">
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-breakfast.png" alt="" class="img img-responsive"></div>
                                    </div>
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-lunch.png" alt="" class="img img-responsive"></div>
                                    </div>
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-dinner.png" alt="" class="img img-responsive"></div>
                                    </div>
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="products nav-slider">
                                    <div class="item-slick">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="{{route('menu_detail')}}" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01c.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01c.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01c.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01c.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01l.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-01d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="menu-banner-section banner-section padding-top-100 padding-bottom-100"><img src="assets/images/background/lemon.png" alt="" class="img-left img-bg img-deco img-responsive"><img src="assets/images/background/vegetable_03.png" alt="" class="img-right img-bg img-deco img-responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="content-wrapper">
                                <h2 class="heading-title">Let's Make Your Meal be Fantastic With<span class="text-large"> FOODAY</span>Awesome Menu!</h2>
                                <div class="swin-btn-wrap"><a href="#" class="swin-btn"><span>Book Table</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="menu-grid-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-product products-01 style-03 woocommerce">
                        <div class="row">
                            <div class="col-md-12">
                                <div data-slide-toshow="2" class="cat-wrapper-02 cat-images main-slider">
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive"></div>
                                    </div>
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-drink.png" alt="" class="img img-responsive"></div>
                                    </div>
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-dinner.png" alt="" class="img img-responsive"></div>
                                    </div>
                                    <div class="item">
                                        <div class="cat-image"><img src="assets/images/product/pd-cat-dessert.png" alt="" class="img img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="products nav-slider">
                                    <div class="item-slick">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1c.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1g.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1k.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1h.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1l.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1d.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1e.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1b.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1c.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1f.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1k.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1h.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1l.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1g.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="assets/images/product/product-circle-1a.jpg" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1b.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1g.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1a.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1b.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1b.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Grandpa's Country Fried</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1c.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1f.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1d.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1e.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1a.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1k.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>17.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1h.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Frish Cheese Chip</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-4 col-xs-12">
                                                <div class="item product-01">
                                                    <div class="block-img"><img src="{{asset('images/product/product-circle-1l.jpg')}}" alt="">
                                                        <div class="group-btn"><a href="#" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="#" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                                                    </div>
                                                    <h5 class="title">Uncle Herschel's Favorite</h5><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>27.0</span>
                                                </div>
                                            </div>
                                        </div>
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
