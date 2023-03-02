@extends('website.master')

@section('title')
    My Ecommerce Site
@endsection

@section('body')
    <div class="banner_slider">
        <div class="hero_area" style="background-image: url('{{asset('/')}}website/assets/images/banner-1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn small rounded" href="shop-grid.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_area bg_2" style="background-image: url('{{asset('/')}}website/assets/images/banner-2.jpg')" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn rounded" href="shop-grid.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero_area bg_2" style="background-image: url('{{asset('/')}}website/assets/images/banner-3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_content">
                            <h1>Best Collection For Home Decoration</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                                id
                                integer neque, vel accumsan dolor diam.</p>
                            <div class="hero_btn">
                                <a class="default_btn rounded" href="shop-grid.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- features area -->
    <section class="features_area  section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row justify-content-center gx-2 gx-md-4">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy"  src="{{asset('/')}}website/assets/images/svg/delivery-van.svg" alt="icon">

                                </div>
                                <div class="feature_content">
                                    <h4>Free shipping</h4>
                                    <p>Orders over $200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy"  src="{{asset('/')}}website/assets/images/svg/money-back.svg" alt="icon">
                                </div>
                                <div class="feature_content">
                                    <h4>Money Returns</h4>
                                    <p>30 Days money return</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div
                                class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                <div class="feature_icon">
                                    <img loading="lazy"  src="{{asset('/')}}website/assets/images/svg/service-hours.svg" alt="icon">
                                </div>
                                <div class="feature_content">
                                    <h4>24/7 Support</h4>
                                    <p>Customer support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- offer deal -->
    <div class="offer_wrp section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single_offercard">
                        <div class="offertext">
                            <h3 class="offer_pers">30% offer</h3>
                            <h4>Free Shipping</h4>
                            <p>Attractive Natural Furniture</p>
                            <a href="shop-grid.html" class="default_btn rounded xs_btn">Shop Now</a>
                        </div>
                        <div class="offerimg">
                            <img loading="lazy"  src="{{asset('/')}}website/assets/images/sofa-1.png" alt="product">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3 mt-sm-0">
                    <div class="single_offercard bg_2">
                        <div class="offertext">
                            <h3 class="offer_pers">50% offer</h3>
                            <h4>Flash Sale</h4>
                            <p>Attractive Natural Furniture</p>
                            <a href="shop-grid.html" class="default_btn rounded xs_btn">Shop Now</a>
                        </div>
                        <div class="offerimg">
                            <img loading="lazy"  src="{{asset('/')}}website/assets/images/sofa-2.png" alt="product">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- top ranking -->
    <section class="top_ranking section_padding_b">
        <div class="container">
            <h2 class="section_title_2 mb-0">Top Ranking</h2>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-6">
                    <h4 class="single_topr_title">Watch</h4>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/apple-watch.png" alt="product">
                            </a>
                            <span class="tag">1</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>Apple Watch </h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$200.00</span>
                                <span class="prev_price">$300.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/watch2.png" alt="product">
                            </a>
                            <span class="tag">2</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4> Callie Smartwatch</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$150.00</span>
                                <span class="prev_price">$200.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/watch3.png" alt="product">
                            </a>
                            <span class="tag">3</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>Cruz Smartwatch</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <h4 class="single_topr_title">Mobile</h4>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/phone-1.png" alt="product">
                            </a>
                            <span class="tag">1</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>Xiaomi Note 7</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/phone-2.png" alt="product">
                            </a>
                            <span class="tag">2</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>iPhone 11 max</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/phone-3.png" alt="product">
                            </a>
                            <span class="tag">3</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>Oppo poco f1</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6">
                    <h4 class="single_topr_title">Laptop</h4>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/laptop-1.png" alt="product">
                            </a>
                            <span class="tag">1</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>Dell inspire 14</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/laptop-2.png" alt="product">
                            </a>
                            <span class="tag">2</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>HP Omen 13</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/laptop-3.png" alt="product">
                            </a>
                            <span class="tag">3</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>HP Pavilion 15</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-6 d-lg-none d-block d-xl-block">
                    <h4 class="single_topr_title">Headphones</h4>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/headphone-1.png" alt="product">
                            </a>
                            <span class="tag">1</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>Bose Headphones</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/headphone-2.png" alt="product">
                            </a>
                            <span class="tag">2</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>COWIN E7 Active </h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_top_ranking">
                        <div class="topr_img">
                            <a href="product-view.html">
                                <img loading="lazy"  src="{{asset('/')}}website/assets/images/headphone-3.png" alt="product">
                            </a>
                            <span class="tag">3</span>
                        </div>
                        <div class="topr_content">
                            <a href="product-view.html">
                                <h4>Beats Headphones</h4>
                            </a>
                            <div class="price">
                                <span class="org_price">$45.00</span>
                                <span class="prev_price">$55.45</span>
                            </div>
                            <div class="rating">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <p class="rating_count">(150)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- categories -->
{{--    <div class="shop_bycat section_padding_b">--}}
{{--        <div class="container">--}}
{{--            <h2 class="section_title_2 mb-0">Shop by category</h2>--}}
{{--            <div class="row gx-2 gy-2">--}}
{{--                <div class="col-lg-4 col-6">--}}
{{--                    <a href="#" class="single_shopbycat bg_1"--}}
{{--                       style="background-image: url({{asset('/')}}website/assets/images/category-1.jpg);">--}}
{{--                        <div class="shopcat_cont">--}}
{{--                            <h4>Bedroom</h4>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="las la-long-arrow-alt-right"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-6">--}}
{{--                    <a href="#" class="single_shopbycat bg_1"--}}
{{--                       style="background-image: url({{asset('/')}}website/assets/images/category-2.jpg);">--}}
{{--                        <div class="shopcat_cont">--}}
{{--                            <h4>Mattresses</h4>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="las la-long-arrow-alt-right"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-6">--}}
{{--                    <a href="#" class="single_shopbycat bg_1"--}}
{{--                       style="background-image: url({{asset('/')}}website/assets/images/category-3.jpg);">--}}
{{--                        <div class="shopcat_cont">--}}
{{--                            <h4>Office</h4>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="las la-long-arrow-alt-right"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-6">--}}
{{--                    <a href="#" class="single_shopbycat bg_1"--}}
{{--                       style="background-image: url({{asset('/')}}website/assets/images/category-4.jpg);">--}}
{{--                        <div class="shopcat_cont">--}}
{{--                            <h4>Outdoor</h4>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="las la-long-arrow-alt-right"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-6">--}}
{{--                    <a href="#" class="single_shopbycat bg_1"--}}
{{--                       style="background-image: url({{asset('/')}}website/assets/images/category-5.jpg);">--}}
{{--                        <div class="shopcat_cont">--}}
{{--                            <h4>Lounges & Sofas</h4>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="las la-long-arrow-alt-right"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-6">--}}
{{--                    <a href="#" class="single_shopbycat bg_1"--}}
{{--                       style="background-image: url({{asset('/')}}website/assets/images/category-6.jpg);">--}}
{{--                        <div class="shopcat_cont">--}}
{{--                            <h4>Living & Dining</h4>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="las la-long-arrow-alt-right"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!--  recomended for you  -->
    <div class="recfor_you section_padding_b">
        <div class="container">
            <h2 class="section_title_2 mb-0">Trending Product</h2>
            <div class="row gy-4">
                @foreach($products as $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single_toparrival">
                            <div class="topariv_img">
                                <img loading="lazy" src="{{asset($product->image)}}" alt="#" height="220"/>
                                <div class="adto_wish">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="prod_soh">
                                    <div class="adto_wish">
                                        <i class="icon-heart"></i>
                                    </div>
                                    <div class="qk_view open_quickview">
                                        <span><i class="las la-eye"></i></span>
                                        Quick View
                                    </div>
                                </div>
                            </div>
                            <div class="topariv_cont">
                                <a href="product-view.html">
                                    <a href="{{route('detail', ['id' => $product->id])}}">{{$product->name}}</a>
                                </a>
                                <p>{{$product->category->name}}</p>
                                <div class="price mb-1">
                                    <span class="org_price">Tk. {{$product->selling_price}}</span>
                                </div>
                                <div class="rating">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rating_star">
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                            <span><i class="las la-star"></i></span>
                                        </div>
                                        <p class="rating_count mb-0">(50)</p>
                                    </div>
                                </div>
                            </div>

                            <form action="{{route('cart.add', ['id' => $product->id])}}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" value="1"/>
                                <div class="full_atc_btn">
                                    <button type="submit">
                                        <i class="icon-cart"></i>
                                        add to cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- ad banner -->
    <div class="offer_banner_area section_padding_b">
        <div class="container">
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)" srcset="{{asset('/')}}website/assets/images/offer-2.jpg">
                    <img loading="lazy"  src="{{asset('/')}}website/assets/images/offer-mobile.jpg" alt="ad">
                </picture>
            </a>
        </div>
    </div>

    <!-- top new arrival -->
    <div class="top_arrival_wrp section_padding_b">
        <div class="container">
            <h2 class="section_title_2 mb-0">Top new arrival</h2>
            <div class="product_slider_2">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy"  src="{{asset('/')}}website/assets/images/product9.jpg" alt="product">
                        <div class="persof">25%</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>GUYER Chair</h4>
                        </a>
                        <p>Queen Headboard</p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy"  src="{{asset('/')}}website/assets/images/product1.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>MADELINE sofa</h4>
                        </a>
                        <p>Fabric Sofa Bed</p>
                        <div class="price mb-1">
                            <span class="org_price">$120.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy"  src="{{asset('/')}}website/assets/images/product8.jpg" alt="product">
                        <div class="persof bg-danger">HOT</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>BIANCO Chair</h4>
                        </a>
                        <p>Fabric Accent Chair</p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy"  src="{{asset('/')}}website/assets/images/product10.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>PELAGIA Lounge</h4>
                        </a>
                        <p>Outdoor Modular
                        </p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy"  src="{{asset('/')}}website/assets/images/product12.jpg" alt="product">
                        <div class="persof bg-warning">50%</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Black ARCHIE</h4>
                        </a>
                        <p>Black Bedside
                        </p>
                        <div class="price mb-1">
                            <span class="org_price">$400.00</span>
                        </div>
                        <div class="rating">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- download app -->
    <section class="download_wrap section_padding_b">
        <div class="container">
            <div class="download_bg">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="download_left">
                            <img loading="lazy"  src="{{asset('/')}}website/assets/images/mobile-view.png" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 px-lg-0">
                        <div class="download_cont">
                            <h2 class="title_2 text-capitalize mb-3">Download RAFCART App Now!</h2>
                            <p class="mb-4">Shopping fastly and easily more with our app. Get a link to <br class="d-none d-xl-block"> download
                                the app on your
                                phone</p>
                            <form action="#" class="subscribe_form">
                                <input type="text" placeholder="Email Address">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="download_links">
                                <a href="#" class="me-3">
                                    <img loading="lazy"  src="{{asset('/')}}website/assets/images/download-1.png" alt="download">
                                </a>
                                <a href="#">
                                    <img loading="lazy"  src="{{asset('/')}}website/assets/images/download-2.png" alt="download">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
