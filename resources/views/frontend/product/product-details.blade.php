@extends('layouts.frontend-master')
@section('content')
			<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{ asset('frontend') }}assets/img/bg/breadcrumb.jpg)">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Product details</h2>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li> Product details </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-details ptb-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 col-12">
                        <div class="product-details-img-content">
                            <div class="product-details-tab mr-70">
                                <div class="product-details-large tab-content">
                                    <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="assets/img/product-details/bl1.jpg">
                                                <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="assets/img/product-details/bl2.jpg">
                                                <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="assets/img/product-details/bl3.jpg">
                                                <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="assets/img/product-details/bl4.jpg">
                                                <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-small nav mt-12" role=tablist>
                                    <a class="active mr-12" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="{{ Storage::url('public/uploads/product-photos/'.$product->product_thumbnail) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="product-details-content">
                            <h3>{{ $product->product_name }}</h3>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <div class="details-price">
                                <span>${{ $product->product_price }}</span>
                            </div>
                            <p>{{ $product->short_description }}</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">xl</option>
                                        <option value="">ml</option>
                                        <option value="">m</option>
                                        <option value="">sl</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
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
                            <div class="product-details-cati-tag mt-35">
                                <ul>
                                    <li class="categories-title">Categories :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div>
                            <div class="product-details-cati-tag mtb-10">
                                <ul>
                                    <li class="categories-title">Tags :</li>
                                    @foreach ($product->tags as $tag)
                                    <li><a href="#">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="product-share">
                                <ul>
                                    <li class="categories-title">Share :</li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-flikr"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-description-review-area pb-90">
            <div class="container">
                <div class="product-description-review text-center">
                    <div class="description-review-title nav" role=tablist>
                        <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                            Description
                        </a>
                        <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                            Reviews(0)
                        </a>
                    </div>
                    <div class="description-review-text tab-content">
                        <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                            <p>{!! $product->full_description !!}</p>
                        </div>
                        <div class="tab-pane fade" id="pro-review" role="tabpanel">
                            <a href="#">Be the first to write your review!</a>
                            <div class="d-flex justify-content-between text-center">
                                <input type="radio" name="a" value="1">
                                <input type="radio" name="a" value="2">
                                <input type="radio" name="a" value="3">
                                <input type="radio" name="a" value="4">
                                <input type="radio" name="a" value="5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product area start -->
        <div class="product-area pb-95">
            <div class="container">
                <div class="section-title-3 text-center mb-50">
                    <h2>Related products</h2>
                    @php
                      $related_products = App\Product::where('sub_category_id',$product->subCategory->id)->get();
                    @endphp
                   
                    
                </div>
                <div class="product-style">
                    <div class="related-product-active owl-carousel">
                        @foreach ($related_products as $related_product)
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="{{ Storage::url('public/uploads/product-photos/'.$related_product->product_thumbnail) }}" alt="" height="200px">
                                </a>
                                <span>{{ $related_product->product_type }}</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="#">{{ $related_product->product_name }}</a></h4>
                                <span>${{ $related_product->product_price }}</span>
                            </div>
                        </div>
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- product area end -->
@endsection