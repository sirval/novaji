@extends('layouts.app')

@section('css')
  <!-- site Favicon -->
  <link rel="icon" href="{{ asset('assets/images/favicon/favicon-7.png') }}" sizes="32x32" />
  <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/favicon-7.png') }}" />
  <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/favicon-7.png') }}" />

  <!-- css Icon Font -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/ecicons.min.css') }}" />

  <!-- css All Plugins Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/countdownTimer.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.theme.default.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.css') }}" />

  <!-- Main Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/demo7.css') }}" />
@endsection

@section('content')
{{-- @include('layouts.overlay') --}}
@include('layouts.navbar')
@include('layouts.sidebar')
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items">
                <li>
                    <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                            src="assets/images/product-image/55_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="single-product-left-sidebar.html" class="cart_pro_title">Roasted Almonds, Pumpkin Snacks</a>
                        <span class="cart-price"><span>$49.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                            src="assets/images/product-image/64_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Lemon - Seedless</a>
                        <span class="cart-price"><span>$8.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                            src="assets/images/product-image/71_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">lichi - organic</a>
                        <span class="cart-price"><span>$25.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right">$300.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">VAT (20%) :</td>
                            <td class="text-right">$60.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color">$360.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="cart.html" class="btn btn-primary">View Cart</a>
                <a href="checkout.html" class="btn btn-secondary">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- Ekka Cart End -->

<!--  category Section Start -->
<!--  For developer (More icons find in https://www.svgrepo.com/) -->
<section class="section ec-category-section section-space-p">
    <div class="container">
        <div class="row d-none">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="ec-title">Top Category</h2>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-15 margin-minus-t-15" data-animation="fadeIn">
            <div id="ec-cat-slider">
            <div class="ec_cat_content ec_cat_content_1 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-1">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/drink-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>juice & drinks <span title="Category Items">(53)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="ec_cat_content ec_cat_content_2 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-2">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/fruits-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>Fresh Fruits <span title="Category Items">(58)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="ec_cat_content ec_cat_content_3 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-3">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/dried-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>Snack & Spice <span title="Category Items">(76)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="ec_cat_content ec_cat_content_4 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-4">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/vegetable-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>Vegetables <span title="Category Items">(49)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="ec_cat_content ec_cat_content_5 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-5">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/dairy-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>Dairy & Milk <span title="Category Items">(25)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="ec_cat_content ec_cat_content_6 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-6">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/sea-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>Sea food <span title="Category Items">(35)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="ec_cat_content ec_cat_content_7 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-7">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/bakery-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>bakery <span title="Category Items">(89)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="ec_cat_content ec_cat_content_8 col-sm-12 col-md-6 col-lg-3">
                <div class="ec_cat_inner ec_cat_inner-8">
                    <div class="ec-category-image">
                        <img src="assets/images/icons/vegetable-7.svg" class="svg_img" alt="drink" />
                    </div>
                    <div class="ec-category-desc">
                        <h3>Vegetables <span title="Category Items">(65)</span></h3>
                        <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      <!-- Main Slider Start -->
      <div class="ec-main-slider section section-space-pb-30">
        <div class="container">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">fresh & healthy</h2>
                                    <h1 class="ec-slide-title">Organic Fruits</h1>
                                    <div class="ec-slide-desc">
                                        <p>starting at $ <b>29</b>.99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Organic & healthy</h2>
                                    <h1 class="ec-slide-title">fresh vegetables</h1>
                                    <div class="ec-slide-desc">
                                        <p>starting at $ <b>20</b>.00</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            </div>
    </div>
    </div>  
    <!-- Main Slider End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">

                <!-- Sidebar area start -->
                <div class="ec-side-cat-overlay"></div>
                <div class="col-lg-3 sidebar-dis-991">
                    <div class="cat-sidebar">
                        <div class="cat-sidebar-box">
                            <div class="ec-sidebar-wrap">
                                <!-- Sidebar Category Block -->
                                <div class="ec-sidebar-block">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="assets/images/icons/vegetable-7.svg" class="svg_img" alt="drink" />Vegetable</div>
                                                <ul style="display: block;">
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Tomato <span title="Available Stock">- 25 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Asparagus <span title="Available Stock">- 52 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Coriander<span title="Available Stock">- 500 g</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Lemon <span title="Available Stock">- 35 kg</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="assets/images/icons/dairy-7.svg" class="svg_img" alt="drink" />dairy</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Milk <span title="Available Stock">- 25 l</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Yoghurt <span title="Available Stock">- 52 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Cheese <span title="Available Stock">- 40 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Paneer <span title="Available Stock">- 35 kg</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="assets/images/icons/sea-7.svg" class="svg_img" alt="drink" />Seafood</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">lobster <span title="Available Stock">-</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">mussels <span title="Available Stock">- 52 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">shrimp <span title="Available Stock">- 40 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">snapper <span title="Available Stock">- 35 kg</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="assets/images/icons/bakery-7.svg" class="svg_img" alt="drink" />bakery</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Cake <span title="Available Stock">- 4 pcs</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">pastry <span title="Available Stock">- 52 pcs</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Bread <span title="Available Stock">- 10 pack</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Rusk Toast<span title="Available Stock">- 35 pack</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="assets/images/icons/drink-7.svg" class="svg_img" alt="drink" />drink</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Energy Drink <span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">cold coffee <span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Milk Shake <span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Soft Drink <span title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="assets/images/icons/fruits-7.svg" class="svg_img" alt="drink" />Fruits</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Mango <span title="Available Stock">- 20 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Allpe <span title="Available Stock">- 52 pack</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Bue berry <span title="Available Stock">- 40 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Lichi <span title="Available Stock">- 35 kg</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img src="assets/images/icons/dried-7.svg" class="svg_img" alt="drink" />Dried Fruit</div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Almond <span title="Available Stock">- 25 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Cashewnuts <span title="Available Stock">- 52 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Dates <span title="Available Stock">- 40 kg</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a href="#">Dried Figs <span title="Available Stock">- 35 kg</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Category Block -->
                                <!-- Sidebar Price Block -->
                                <div class="ec-sidebar-block ec-price-clock">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">Price</h3>
                                    </div>
                                    <div class="ec-sb-block-content es-price-slider">
                                        <div class="ec-price-filter">
                                            <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                                data-max="250" data-step="5"></div>
                                            <div class="ec-price-input">
                                                <label class="filter__label"><input type="text"
                                                        class="filter__input"></label>
                                                <span class="ec-price-divider"></span>
                                                <label class="filter__label"><input type="text"
                                                        class="filter__input"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-sidebar-slider">
                            <div class="ec-sb-slider-title">Best Sellers</div>
                            <div class="ec-sb-pro-sl">
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/79_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Californian Almonds Value Pack</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$52.00</span>
                                                <span class="new-price">$45.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/80_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Lemon Seedless</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$10.00</span>
                                                <span class="new-price">$7.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/81_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Farm Eggs - Brown</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$5.00</span>
                                                <span class="new-price">$3.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/82_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cake and pastry</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$12.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/83_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Blue Berry</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$12.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/84_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Onion - Hybrid</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
                                                <span class="new-price">$45.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/85_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cheese</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$35.00</span>
                                                <span class="new-price">$25.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                src="assets/images/product-image/86_1.jpg" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Apple</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
                                                <span class="new-price">$13.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> 

                <!-- Product area start -->
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title">New Products</h2>
                            </div>
                        </div>

                        <!-- Tab Start -->
                        <div class="col-md-12 ec-pro-tab">
                            <ul class="ec-pro-tab-nav nav justify-content-end">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                        href="#all">All</a></li>
                              
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>

                    <!-- Button trigger modal -->

                 

                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <!-- 1st Product tab start -->
                                <div class="tab-pane fade show active" id="all">
                                    {{-- <div class="tab-pane fade show active"> --}}
                                        {{-- <a href="{{ view('create_product') }}" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Product</a> --}}
                                    {{-- </div> --}}
                                    <div class="row">
                                        @foreach ($products as $product)
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <span class="label veg">
                                                                <span class="dot"></span>
                                                            </span>
                                                            <img class="main-image"
                                                                src="assets/images/product-image/50_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/50_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="assets/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="assets/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="assets/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="assets/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="#"><h6 class="ec-pro-stitle">{{ $product->name }}</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Banana Chips</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">${{ $product->price }}</span>
                                                            
                                                        </span>
                                                        @if (Auth::user()->role_id == 'admin')
                                                        <div>
                                                            <button class="btn btn-info btn-sm">update</button>
                                                            <button class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                            
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        @endforeach
                                    </div>
                                        
                               
                            </div>
                        </div>
                    </div>

                 
                    <div class="row space-t-50" data-animation="fadeIn">
                        <!--  Special Section Start -->
                        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Deal of the day</h2>
                                </div>
                            </div>

                            <div class="ec-spe-products">
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive" src="assets/images/product-image/77_1.jpg" alt="">                                                                              
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Organic Mango 20kg Box</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$199.00</span>
                                                <span class="old-price">$200.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>15</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-1"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive"
                                                            src="assets/images/product-image/78_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Fresh organic Apple 12 Pcs</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$199.00</span>
                                                <span class="old-price">$200.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>20</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-2"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Special Section End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!--  Testimonial, Banner & Service Section Start -->
    <section class="section ec-ser-spe-section section-space-p">
        <div class="container" data-animation="fadeIn">
            <div class="row">
                <!-- ec Testimonial Start -->
                <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb" data-animation="slideInRight">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Testimonial</h2>
                        </div>
                    </div>
                    <div class="ec-test-outer">
                        <ul id="ec-testimonial-slider">
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="assets/images/testimonial/1.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="assets/images/testimonial/quotes.svg" class="svg_img test_svg"
                                                alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="assets/images/testimonial/2.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="assets/images/testimonial/quotes.svg" class="svg_img test_svg"
                                                alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="assets/images/testimonial/3.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="assets/images/testimonial/quotes.svg" class="svg_img test_svg"
                                                alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ec Testimonial end -->
                <!-- ec Banner Start -->
                <div class="col-md-6 col-sm-12">
                    <div class="ec-banner-inner">
                        <div class="ec-banner-block ec-banner-block-1">
                            <div class="banner-block">
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-disc">25% discount</span>
                                        <span class="ec-banner-title">Vegetables & Fruits</span>
                                        <span class="ec-banner-stitle">Starting @ $10</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="#">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Banner End -->
                <!--  Service Section Start -->
                <div class="ec-services-section col-lg-3 col-md-3 col-sm-3">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Our Services</h2>
                        </div>
                    </div>
                    <div class="ec_ser_block">
                        <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="assets/images/icons/service_4_1.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Worldwide Delivery</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_2 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="assets/images/icons/service_4_2.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Next Day delivery</h2>
                                    <p>UK Orders Only</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_3 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="assets/images/icons/service_4_3.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Best Online Support</h2>
                                    <p>Hours: 8AM -11PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_4 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="assets/images/icons/service_4_4.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Return Policy</h2>
                                    <p>Easy & Free Return</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_5 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="assets/images/icons/service_4_5.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>30% money back</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Service End -->
            </div>
        </div>
    </section>
    <!--  End Testimonial, Banner & Service Section Start -->

    <!--  Blog Section Start -->
    <section class="section ec-blog-section section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blog-slider owl-carousel" data-animation="fadeIn">
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="assets/images/blog-image/17.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Vegetarian</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Curbside Grocery Trends: How to Win the Pickup Battle.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Robin</span> / Jan 18, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="assets/images/blog-image/18.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Organic</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Grocery Retail KPIs 2021 Guide for Grocery Executives.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Admin</span> / Apr 06, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="assets/images/blog-image/19.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Fresh Fruits</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">EBT Grocers: Claim Your Share of SNAP Online Revenue.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Selsa</span> / Feb 10, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="assets/images/blog-image/20.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Dessert</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Curbside Grocery Trends: How to Win the Pickup Battle.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Pawar</span> / Mar 15, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="assets/images/blog-image/21.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Soups</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">6 Food Retail Industry Digital Strategies for 2021.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Natly</span> / Jun 02, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="assets/images/blog-image/22.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Organics</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Why Should be Concerned About Instacart Patents.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Admin</span> / Feb 10, 2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt">
        <div class="container">
            <h2 class="d-none">Instagram</h2>
            <div class="ec-insta-wrapper" data-animation="fadeIn">
                <div class="ec-insta-outer">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/79_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/80_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/81_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/82_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/83_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/84_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/85_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="assets/images/product-image/86_1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-newletter section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="footer-cat-inner">
                        <div class="footer-cat-block">
                            <div class="footer-cat-stitle">Brands Directory</div>
                            <div class="block">
                                <span class="footer-cat-title">Fast Food : </span>
                                <a href="#">Pizza</a><span> | </span>
                                <a href="#">Burger's</a><span> | </span>
                                <a href="#">Chicken Sandwich</a><span> | </span>
                                <a href="#">Cherry Limeade</a><span> | </span>
                                <a href="#">Cheese Burger</a><span> | </span>
                                <a href="#">Chocolate Frosty</a>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">Milks and Dairies : </span>
                                <a href="#">Milk</a><span> | </span>
                                <a href="#">Paneer</a><span> | </span>
                                <a href="#">Butter</a><span> | </span>
                                <a href="#">Yogurt</a><span> | </span>
                                <a href="#">Cheese</a><span> | </span>
                                <a href="#">Whipping cream</a><span> | </span>
                                <a href="#">Curd</a><span> | </span>
                                <a href="#">Milkshake</a><span> | </span>
                                <a href="#">Sweets</a><span> | </span>
                                <a href="#">Chocolate</a>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">Vegetables : </span>
                                <a href="#">asparagus</a><span> | </span>
                                <a href="#">Broccoli</a><span> | </span>
                                <a href="#">Cucumber</a><span> | </span>
                                <a href="#">Pumpkin</a><span> | </span>
                                <a href="#">Capsicum</a><span> | </span>
                                <a href="#">Radish</a><span> | </span>
                                <a href="#">ginger</a><span> | </span>
                                <a href="#">mushroom</a><span> | </span>
                                <a href="#">Lettuce</a><span> | </span>
                                <a href="#">coriender</a><span> | </span>
                                <a href="#">Jackfruit</a>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">Baking material : </span>
                                <a href="#">Brownies</a><span> | </span>
                                <a href="#">cookies</a><span> | </span>
                                <a href="#">cupcakes</a><span> | </span>
                                <a href="#">granola bars</a><span> | </span>
                                <a href="#">lemon bars</a><span> | </span>
                                <a href="#">muffins</a><span> | </span>
                                <a href="#">pretzel sticks</a><span> | </span>
                                <a href="#">rice Crispy treats</a><span> | </span>
                                <a href="#">sweet rolls</a><span> | </span>
                                <a href="#">cake balls</a><span> | </span>
                                <a href="#">cake slices</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Popular Categories</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Fashion</a></li>
                                        <li class="ec-footer-link"><a href="#">Electronic</a></li>
                                        <li class="ec-footer-link"><a href="#">Cosmetic</a></li>
                                        <li class="ec-footer-link"><a href="#">Health</a></li>
                                        <li class="ec-footer-link"><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Products</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Our Company</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="track-order.html">Delivery</a></li>
                                        <li class="ec-footer-link"><a href="privacy-policy.html">Legal Notice</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Terms and conditions</a></li>
                                        <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                        <li class="ec-footer-link"><a href="checkout.html">Secure payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Services</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-cont-social">
                            <div class="ec-footer-contact">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading">Contact</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            <li class="ec-footer-link ec-foo-location"><span><img
                                                        src="assets/images/icons/foo-location.svg"
                                                        class="svg_img foo_svg" alt="" /></span>
                                                <p>2548 Broaddus Maple Court, Madisonville KY 4783, USA</p>
                                            </li>
                                            <li class="ec-footer-link ec-foo-call"><span><img
                                                        src="assets/images/icons/foo-wp.svg" class="svg_img foo_svg"
                                                        alt="" /></span><a href="tel:+919999999999">+91 999 999 9999</a>
                                            </li>
                                            <li class="ec-footer-link ec-foo-mail"><span><img
                                                        src="assets/images/icons/foo-mail.svg" class="svg_img foo_svg"
                                                        alt="" /></span><a
                                                    href="mailto:support@demo.email">support@demo.email</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-footer-social">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading marg-b-0 s-head">Follow Us</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-instagram"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-twitter-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-facebook-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-linkedin-square"
                                                            aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Footer payment -->
                        <div class="footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-center">
                                <div class="payment-link">
                                    <img src="assets/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                        <!-- Footer Copyright Start -->
                        <div class="footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © <a class="site-name" href="index.html">Ekka</a> all
                                    rights reserved. Powered by Ekka</div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/52_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/52_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/54_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/54_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/55_2.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/52_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/52_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/54_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/54_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/55_2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">premium quality organic trail mix dried fruit</a></h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="new-price">$199.00</span>
                                    <span class="old-price">$200.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span>250 g</span></li>
                                                <li><span>500 g</span></li>
                                                <li><span>1 kg</span></li>
                                                <li><span>2 kg</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Click To Call -->
    <div class="ec-cc-style cc-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cc-panel">			
            <!-- Panel Content -->
            <div class="cc-header">
                <img src="assets/images/whatsapp/profile_01.jpg" alt="profile image"/>
                <h2>John Mark</h2>
                <p>Tachnical Manager</p>
            </div>
            <div class="cc-body">
                <p><b>Hey there &#128515;</b></p>
                <p>Need help ? just give me a call.</p>
            </div>
            <div class="cc-footer">
                <a href="tel:+919099153528" class="cc-call-button">
                    <span>Call me</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <!--/ End Floating Panel Container -->

        <!-- Start Right Floating Button-->
        <div class="cc-button cc-right-bottom">
            <img src="assets/images/icons/call.svg" class="svg_img cc-call-svg" alt="call image" />
        </div>
        <!--/ End Right Floating Button-->

    </div>
    <!-- Click To Call end -->

    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-6 disp-no-767">
                <img src="assets/images/banner/newsletter-7.png" alt="newsletter">
            </div>
            <div class="col-md-6">
                <div id="ec-popnews-box-content">
                    <h2>Stay home, stay safe & get your daily needs from Ekka shop.</h2>
                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                    <form id="ec-popnews-form" action="#" method="post">
                        <input type="email" name="newsemail" placeholder="Email Address" required />
                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->
    
    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span
                            class="ec-cart-noti ec-header-count ec-cart-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                        <img src="assets/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assets/images/product-image/53_1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>Mixed Nut Dry Fruits</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
</section>
@endsection
@section('scripts')
      <!-- Vendor JS -->
      <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
      <script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>
      <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
      <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
      <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
  
      <!--Plugins JS-->
      
      <script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/countdownTimer.min.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/nouislider.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/scrollup.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/slick.min.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/infiniteslidev2.js')}}"></script>
      <script src="{{ asset('assets/js/plugins/click-to-call.js')}}"></script>
  
      <!-- Main Js -->
      <script src="{{ asset('assets/js/vendor/index.js')}}"></script>
      <script src="{{ asset('assets/js/demo-7.js')}}"></script>
@endsection
