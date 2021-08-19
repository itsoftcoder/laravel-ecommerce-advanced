
<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Electronics - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/icofont.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bundle.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <!--Notification Section-->
    <div class="notification-section notification-section-padding  notification-img ptb-10">
        <div class="container-fluid">
            <div class="notification-wrapper">
                <div class="notification-pera-graph">
                    <p>Get A big Discount for Gadgets. 10% to 70% Discount for all products. Save money</p>
                </div>
                <div class="notification-btn-close">
                    <div class="notification-btn">
                        <a href="#">Shop Now</a>
                    </div>
                    <div class="notification-close notification-icon">
                        <button><i class="pe-7s-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="header-top-wrapper-2 border-bottom-2">
            <div class="header-info-wrapper pl-200 pr-200">
                <div class="header-contact-info">
                    <ul>
                        <li><i class="pe-7s-call"></i> +011 2231 4545</li>
                        <li><i class="pe-7s-mail"></i> <a href="#">company@domail.info</a></li>
                    </ul>
                </div>
                <div class="electronics-login-register">
                    <ul>
                        <li><a href="#"><i class="pe-7s-users"></i>My Account</a></li>
                        <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-repeat"></i>Compare</a></li>
                        <li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li>
                        <li><a href="#"><i class="pe-7s-flag"></i>US</a></li>
                        <li><a class="border-none" href="#"><span>$</span>USD</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom pt-40 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="grandtech">
                    <a href="index.html">
                        <img src="{{ asset('/frontend') }}/assets/img/logo/grandtech.png" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper">
                    <div class="all-categories">
                        <div class="select-wrapper">
                            <select class="select">
                                <option value="">All Categories</option>
                                @foreach ($menuLists as $menuList)
                                <option value="">{{ $menuList->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="categories-wrapper">
                        <form action="#">
                            <input placeholder="Enter Your key word" type="text">
                            <button type="button"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper">
                    <div class="trace same-style">
                        <div class="same-style-icon">
                            <a href="#"><i class="pe-7s-plane"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="#">Product <br>trace</a>
                        </div>
                    </div>
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href="#"><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="cart.html">My Cart <br>02 Item</a>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{ route('welcome') }}">HOME</a></li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <div class="pl-200 pr-200 overflow clearfix">
        <div class="categori-menu-slider-wrapper clearfix">
            <div class="categories-menu">
                <div class="category-heading">
                    <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
                </div>
                <div class="category-menu-list">
                    <ul>
                        @foreach ($menuLists as $menuList)
                        <li>
                            <a href="#"><img alt="" src="{{ asset('frontend') }}/assets/img/icon-img/{{ $menuList->icon_name }}">{{ Str::title($menuList->name) }} <i class="pe-7s-angle-right"></i></a>
                            <div class="category-menu-dropdown">
                                @foreach ($menuList->categorys as $category)
                                <div class="category-dropdown-style category-common4 mb-40">
                                    <h4 class="categories-subtitle"> {{ Str::title($category->name) }}</h4>
                                    <ul>
                                        @foreach ($category->subCategorys as $subCategory)
                                        <li><a href="#"> {{ $subCategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                                <div class="mega-banner-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend') }}/assets/img/banner/18.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="menu-slider-wrapper">
                <div class="menu-style-3 menu-hover text-center">
                    <nav>
                        <ul>
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="#">Pages </a>
                                <ul class="single-dropdown">
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="menu-list.html">menu list</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('shop') }}">Shop</a></li>
                            <li><a href="blog.html">blog <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                                <ul class="single-dropdown">
                                    <li><a href="blog.html">blog 3 colunm</a></li>
                                    <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url({{ asset('frontend') }}/assets/img/slider/5.jpg)">
                            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                <h2 class="animated">Invention of <br>design platform</h2>
                                <h4 class="animated">Best Product With warranty </h4>
                                <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                            </div>
                        </div>
                        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url({{ asset('frontend') }}/assets/img/slider/20.jpg)">
                            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                <h2 class="animated">Invention of <br>design platform</h2>
                                <h4 class="animated">Best Product With warranty </h4>
                                <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="electronic-banner-area">
        <div class="custom-row-2">
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="{{ asset('frontend') }}/assets/img/banner/15.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position">
                        <h1>Live 4K! </h1>
                        <h2>up to 20% off</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="{{ asset('frontend') }}/assets/img/banner/16.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position2">
                        <h1>Xoxo ssl </h1>
                        <h2>up to 15% off</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="{{ asset('frontend') }}/assets/img/banner/17.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position3">
                        <h1>BY Laptop</h1>
                        <h2>Super Discount</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Top Products</h2>
            </div>
            <div class="top-product-style">
                <div class="product-tab-list3 text-center mb-80 nav product-menu-mrg" role="tablist">
                     @foreach ($categorys as $category)
                         <a class="" href="#tab{{$category->id}}" data-toggle="tab" role="tab">
                        <h4>{{ $category->name }}</h4>
                         </a>
                     @endforeach
                </div>
                <div class="tab-content">
                    @foreach ($categorys as $category)
                    <div class="tab-pane show fade" id="tab{{$category->id}}" role="tabpanel">
                        <div class="custom-row-2">
                        @php
                            $subCategorys = App\SubCategory::where('category_id',$category->id)->get();
                        @endphp

                        @forelse ($subCategorys as $subCategory)
                        
                            @php
                                $top_products = App\Product::where('sub_category_id',$subCategory->id)->get(); 

                            @endphp

                            @foreach ($top_products as $top_product)
                                @php
                                     $slug = Str::of($top_product->product_name)->slug('-');
                                @endphp
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="{{ route('product_details',$top_product->slug) }}">
                                            <img src="{{ Storage::url('uploads/product-photos/'.$top_product->product_thumbnail) }}" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#Modal{{$top_product->id}}" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        
                                        <h4><a href="{{ route('product_details',$top_product->slug) }}">{{ $top_product->product_name }}</a></h4>
                                        <span>{{ $top_product->subCategory->name }}</span>
                                        <h5>${{ $top_product->product_price }}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Modal{{$top_product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="pe-7s-close" aria-hidden="true"></span>
                                    </button>
                                    <div class="modal-dialog modal-quickview-width" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="qwick-view-left">
                                                    <div class="quick-view-learg-img">
                                                        <div class="quick-view-tab-content tab-content">
                                                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                                                <img src="{{ Storage::url('public/uploads/product-photos/'.$top_product->product_thumbnail) }}" alt="">
                                                            </div>
                                                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                                                <img src="{{ Storage::url('public/uploads/product-photos/'.$top_product->product_thumbnail) }}" alt="">
                                                            </div>
                                                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                                                <img src="{{ Storage::url('public/uploads/product-photos/'.$top_product->product_thumbnail) }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quick-view-list nav" role="tablist">
                                                        <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                                            <img src="{{ Storage::url('public/uploads/product-photos/'.$top_product->product_thumbnail) }}" alt="">
                                                        </a>
                                                        <a href="#modal2" data-toggle="tab" role="tab">
                                                            <img src="{{ Storage::url('public/uploads/product-photos/'.$top_product->product_thumbnail) }}" alt="">
                                                        </a>
                                                        <a href="#modal3" data-toggle="tab" role="tab">
                                                            <img src="{{ Storage::url('public/uploads/product-photos/'.$top_product->product_thumbnail) }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qwick-view-right">
                                                    <div class="qwick-view-content">
                                                        <h3>{{ $top_product->product_name }}</h3>
                                                        <div class="price">
                                                            <span class="new">${{ $top_product->product_price }}</span>
                                                            <span class="old">$120.00  </span>
                                                        </div>
                                                        <div class="rating-number">
                                                            <div class="quick-view-rating">
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                                <i class="pe-7s-star"></i>
                                                            </div>
                                                            <div class="quick-view-number">
                                                                <span>2 Ratting (S)</span>
                                                            </div>
                                                        </div>
                                                        <p>{!! $top_product->short_description !!}</p>
                                                        <div class="quick-view-select">
                                                            <div class="select-option-part">
                                                                <label>Size*</label>
                                                                <select class="select">
                                                                    <option value="">- Please Select -</option>
                                                                    <option value="">900</option>
                                                                    <option value="">700</option>
                                                                </select>
                                                            </div>
                                                            <div class="select-option-part">
                                                                <label>Color*</label>
                                                                @php
                                                                    $colors = Str::of($top_product->color)->explode(',');
                                                                @endphp
                                                                <select class="select">
                                                                    <option value="">- Please Select -</option>
                                                                    @foreach ($colors as $color)
                                                                        <option value="">{{ $color }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="quickview-plus-minus">
                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                            </div>
                                                            <div class="quickview-btn-cart">
                                                                <a class="btn-hover-black" href="#">add to cart</a>
                                                            </div>
                                                            <div class="quickview-btn-wishlist">
                                                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @empty 
                            <p>Not available product here</p>
                        @endforelse
                        </div>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area wrapper-padding pt-30 pb-95">
        <div class="container-fluid">
            <div class="electro-fexible-banner bg-img" style="background-image: url({{ asset('frontend') }}/assets/img/banner/19.jpg)">
                <div class="fexible-content">
                    <h3>Play with flexible</h3>
                    <p>Multicontrol Smooth Controller, Black Color All Buttons
                        <br>are somooth, Super Shine.</p>
                    <a class="btn-hover flexible-btn" href="product-details.html">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="best-selling-area pb-95">
        <div class="section-title-4 text-center mb-60">
            <h2>Best Selling</h2>
        </div>
        <div class="best-selling-product">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="best-selling-left">
                        <div class="product-wrapper">
                            <div class="product-img-4">
                                <a href="#"><img src="{{ asset('frontend') }}/assets/img/product/electro/9.jpg" alt=""></a>
                                <div class="product-action-right">
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-5 text-center">
                                <div class="product-rating-4">
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                </div>
                                <h4><a href="product-details.html">desktop C27F551</a></h4>
                                <span>Headphone</span>
                                <h5>$133.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="best-selling-right">
                        <div class="custom-container">
                            <div class="coustom-row-3">
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/product/electro/10.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Play Station</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/product/electro/11.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Joy Stick</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/product/electro/12.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Awesome Tab</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/product/electro/13.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                            <h4><a href="product-details.html">Trimmer C27F401</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/product/electro/14.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Timer C27F500</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="{{ asset('frontend') }}/assets/img/product/electro/15.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                            <h4><a href="product-details.html">Joy Stick</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="androit-banner-wrapper wrapper-padding pb-175">
        <div class="container-fluid">
            <div class="androit-banner-img bg-img" style="background-image: url({{ asset('frontend') }}/assets/img/banner/36.jpg)">
                <div class="androit-banner-content">
                    <h3>Xolo Fast T2 Smartphone, Android <br>7.0 Unlocked.</h3>
                    <a href="product-details.html">Buy Now →</a>
                </div>
                <div class="banner-price text-center">
                    <div class="banner-price-position">
                        <span class="banner-price-new">$125.00</span>
                        <span class="banner-price-old">$199.00</span>
                    </div>
                </div>
                <div class="phn-img">
                    <img src="{{ asset('frontend') }}/assets/img/banner/10.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="product-area-2 wrapper-padding pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/img/product/electro/16.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/img/product/electro/17.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/img/product/electro/18.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/img/product/electro/19.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/img/product/electro/20.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/img/product/electro/21.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area-2 wrapper-padding ptb-80">
        <div class="container-fluid">
            <div class="brand-logo-active2 owl-carousel">  
                @foreach ($brands as $brand)   
                <div class="single-brand">
                    <a href="#"><img src="{{ Storage::url('public/uploads/brand-logos/'.$brand->logo) }}" alt="" style="width: 60px;height: 60px;" title="{{ $brand->name }}"></a>
                </div>
                 @endforeach
            </div>
           
        </div>
    </div>
    <div class="newsletter-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="section-title-5">
                        <h2>Newsletter</h2>
                        <p>Sign Up for get all update news & Get <span>15% off</span></p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="newsletter-style-3">
                        <div id="mc_embed_signup" class="subscribe-form-3 pr-50">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                    </div>
                                    <div class="clear">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area">
        <div class="footer-top-3 black-bg pt-75 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xl-4">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Contact Us</h3>
                            <div class="footer-info-wrapper-2">
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Address:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>77 Seventh Streeth Banasree
                                            <br>Road Rampura -2100 Dhaka</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Phone:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>+11 (019) 2518 4203
                                            <br>+11 (251) 2223 3353</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Email:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p><a href="#">domain@mail.com</a>
                                            <br><a href="#">company@domain.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">My Account</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    @if (Route::has('login'))
                                            @auth
                                            <li><a href="{{ url('/home') }}">Home</a></li>
                                                
                                            @else
                                                <li><a href="{{ route('login') }}">Login</a></li>
                
                                                @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                                    
                                                @endif
                                            @endauth
                                    @endif
                                    
                                    <li><a href="cart.html">Cart History</a></li>
                                    <li><a href="checkout.html"> Payment History</a></li>
                                    <li><a href="shop.html">Product Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xl-2">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Information</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Our Service</a></li>
                                    <li><a href="#">Pricing Plan</a></li>
                                    <li><a href="#"> Vendor Detail</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget widget-right mb-40">
                            <h3 class="footer-widget-title-3">Service</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="#">Product Service</a></li>
                                    <li><a href="#">Payment Service</a></li>
                                    <li><a href="#"> Discount Service</a></li>
                                    <li><a href="#">Shopping Service</a></li>
                                    <li><a href="#">Promotional Add</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle black-bg-2 pt-35 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-car"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Free Shipping</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-shield"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Money Guarentee</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-headphones"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Online Support</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom  black-bg pt-25 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Privacy Policy </a></li>
                                    <li><a href="blog.html"> Blog</a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright f-right mrg-5">
                            <p>
                                Copyright ©
                                <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="assets/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4></td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4></td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability  </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight   </h4></td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions   </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand   </h4></td>
                                        <td class="compare-brand compare-common">
                                            <p>HasTech</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color   </h4></td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size    </h4></td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    





    <!-- all js here -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/popper.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ajax-mail.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
</body>

</html>
   
            


