@extends('frontend.layouts.main')
@section('content')
<!-- Carousel Cards -->
<div class="main-wrapper">
    <div class="slider-area pt-25">
        <div class="container-fluid">
            <div class="hero-slider-active-2 nav-style-1 nav-style-1-modify nav-style-1-blue bg-gray-7 mb-5">
                <div class="single-hero-slider slider-height-3 custom-d-flex custom-align-item-center single-animation-wrap">
                    <div class="row align-items-center slider-animated-1 m-auto">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="hero-slider-content-5">
                                <h5 class="animated">Best Seller</h5>
                                <h1 class="animated">Norda QLED <br>TV 43 Inch</h1>
                                <p class="animated">Discover our collection with leather simple backpacks. Less is more never out trend.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="hm7-hero-slider-img">
                                <img class="animated" src="assets/images/slider/hm-7-slider-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider slider-height-3 custom-d-flex custom-align-item-center single-animation-wrap">
                    <div class="row align-items-center slider-animated-1 m-auto">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="hero-slider-content-5">
                                <h5 class="animated">Best Seller</h5>
                                <h1 class="animated">Norda QLED <br>TV 43 Inch</h1>
                                <p class="animated">Discover our collection with leather simple backpacks. Less is more never out trend.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="hm7-hero-slider-img">
                                <img class="animated" src="assets/images/slider/hm-7-slider-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area">
        <div class="container">
            <div class="service-wrap service-wrap-hm9">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <i class="icon-cursor"></i>
                            </div>
                            <div class="service-content">
                                <h3>Free Shipping</h3>
                                <span>Orders over $100</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <i class="icon-reload"></i>
                            </div>
                            <div class="service-content">
                                <h3>Free Returns</h3>
                                <span>Within 30 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <i class="icon-lock"></i>
                            </div>
                            <div class="service-content">
                                <h3>100% Secure</h3>
                                <span>Payment Online</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="single-service-wrap mb-30">
                            <div class="service-icon service-icon-blue">
                                <i class="icon-tag"></i>
                            </div>
                            <div class="service-content">
                                <h3>Best Price</h3>
                                <span>Guaranteed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-categories-area pb-115">
        <div class="container">
            <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
                <div class="section-title-3">
                    <h2>Popular Categories</h2>
                </div>
            </div>
            <div class="product-categories-slider-1 nav-style-3">
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border mb-20">
                            <a href="{{route('frontend.shop')}}">
                                <img src="assets/images/product/product-50.png" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 text-center">
                            <h5><a href="{{route('frontend.shop')}}">Fashion</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border mb-20">
                            <a href="{{route('frontend.shop')}}">
                                <img src="assets/images/product/product-51.png" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 text-center">
                            <h5><a href="{{route('frontend.shop')}}">Electronic</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border mb-20">
                            <a href="{{route('frontend.shop')}}">
                                <img src="assets/images/product/product-52.png" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 text-center">
                            <h5><a href="{{route('frontend.shop')}}">computer</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border mb-20">
                            <a href="{{route('frontend.shop')}}">
                                <img src="assets/images/product/product-53.png" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 text-center">
                            <h5><a href="{{route('frontend.shop')}}">beauty</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border mb-20">
                            <a href="{{route('frontend.shop')}}">
                                <img src="assets/images/product/product-54.png" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 text-center">
                            <h5><a href="{{route('frontend.shop')}}">sport</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border mb-20">
                            <a href="{{route('frontend.shop')}}">
                                <img src="assets/images/product/product-55.png" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 text-center">
                            <h5><a href="{{route('frontend.shop')}}">baby</a></h5>
                        </div>
                    </div>
                </div>
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-border mb-20">
                            <a href="{{route('frontend.shop')}}">
                                <img src="assets/images/product/product-52.png" alt="">
                            </a>
                        </div>
                        <div class="product-content-categories-2 text-center">
                            <h5><a href="{{route('frontend.shop')}}">computer</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area section-padding-1 pt-115 pb-75">
        <div class="container-fluid">
            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="single-product-wrap mb-35">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-3.jpg" alt="" />
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-wrap">
                                        <div class="product-action-left">
                                            <button>
                                                <i class="icon-basket-loaded"></i>Add to Cart
                                            </button>
                                        </div>
                                        <div class="product-action-right tooltip-style">
                                            <button data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-size-fullscreen icons"></i><span>Quick View</span>
                                            </button>
                                            <button class="font-inc">
                                                <i class="icon-refresh"></i><span>Compare</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-content-left">
                                        <h4>
                                            <a href="product-details.html">Lined Brown Swearshirt</a>
                                        </h4>
                                        <div class="product-price">
                                            <span class="new-price">$46.00</span>
                                            <span class="old-price">$66.75</span>
                                        </div>
                                    </div>
                                    <div class="product-content-right tooltip-style">
                                        <button class="font-inc">
                                            <i class="icon-heart"></i><span>Wishlist</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="assets/images/product/product-1.jpg" alt="" />
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/images/product/product-3.jpg" alt="" />
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/images/product/product-6.jpg" alt="" />
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/images/product/product-3.jpg" alt="" />
                                </div>
                            </div>
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active nav-style-6">
                                    <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/images/product/quickview-s1.jpg" alt="" /></a>
                                    <a data-toggle="tab" href="#pro-2"><img src="assets/images/product/quickview-s2.jpg" alt="" /></a>
                                    <a data-toggle="tab" href="#pro-3"><img src="assets/images/product/quickview-s3.jpg" alt="" /></a>
                                    <a data-toggle="tab" href="#pro-4"><img src="assets/images/product/quickview-s2.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                            <div class="product-details-content quickview-content">
                                <h2>Simple Black T-Shirt</h2>
                                <div class="product-ratting-review-wrap">
                                    <div class="product-ratting-digit-wrap">
                                        <div class="product-ratting">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <div class="product-digit">
                                            <span>5.0</span>
                                        </div>
                                    </div>
                                    <div class="product-review-order">
                                        <span>62 Reviews</span>
                                        <span>242 orders</span>
                                    </div>
                                </div>
                                <p>
                                    Seamlessly predominate enterprise metrics without
                                    performance based process improvements.
                                </p>
                                <div class="pro-details-price">
                                    <span class="new-price">$75.72</span>
                                    <span class="old-price">$95.72</span>
                                </div>
                                <div class="pro-details-color-wrap">
                                    <span>Color:</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li><a class="dolly" href="#">dolly</a></li>
                                            <li><a class="white" href="#">white</a></li>
                                            <li><a class="azalea" href="#">azalea</a></li>
                                            <li><a class="peach-orange" href="#">Orange</a></li>
                                            <li><a class="mona-lisa active" href="#">lisa</a></li>
                                            <li><a class="cupid" href="#">cupid</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size">
                                    <span>Size:</span>
                                    <div class="pro-details-size-content">
                                        <ul class="list-unstyled">
                                            <li><a href="#">XS</a></li>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <span>Quantity:</span>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                </div>
                                <div class="product-details-meta">
                                    <ul class="list-unstyled">
                                        <li>
                                            <span>Categories:</span> <a href="#">Woman,</a>
                                            <a href="#">Dress,</a> <a href="#">T-Shirt</a>
                                        </li>
                                        <li>
                                            <span>Tag: </span> <a href="#">Fashion,</a>
                                            <a href="#">Mentone</a> , <a href="#">Texas</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-add-to-cart">
                                        <a title="Add to Cart" href="#">Add To Cart </a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                        <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                        <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                        <div class="product-dec-social">
                                            <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                            <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                            <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                            <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
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
    <!-- Modal end -->
</div>
@endsection