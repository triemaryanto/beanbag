<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Title -->
    <title>Goetze - Furniture Shop E-Commerce HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Goetze/') }}/assets/img/favicon.ico">


    <!-- CSS Here -->
    <!--  Venobox.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/venobox.min.css">
    <!--  PriceSlider.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/price-slider-1.12.1.css">
    <!-- NivoSlider .css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/nivo-slider.css">
    <!-- Nice Select .css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/nice-select.css">
    <!-- Pe Icon 7-stroke .css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/pe-icon-7-stroke.css">
    <!-- Magnific Popup.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/magnific-popup.css">
    <!-- Slick Nav.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/slicknav-1.0.10.min.css">
    <!-- Animated.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/animate.min.css">
    <!-- Owl.carousel.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/owl.carousel-2.3.4.min.css">
    <!-- Fontawesome.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/fontawesome-free-5.12.0.min.css">
    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/bootstrap-4.3.1.min.css">
    <!-- Default.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/default.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/main.css">
    <!-- Responsive.css -->
    <link rel="stylesheet" href="{{ asset('Goetze/') }}/assets/css/responsive.css">

    <!-- Jquery -->
    <script src="{{ asset('Goetze/') }}/assets/js/jquery-1.12.4.min.js"></script>
    @stack('css')
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <!-- Start Header Area -->
    @include('layouts.depan.header')
    <!-- End Header Area -->
    <main>
        <!-- Start Slider Area -->
        <section class="slider-area">
            <div id="mainslider">
                <a href="index.html"> <img src="{{ asset('Goetze/') }}/assets/img/Slider/1.jpg" alt=""></a>
                <a href="index.html"> <img src="{{ asset('Goetze/') }}/assets/img/Slider/2.jpg" alt=""></a>
            </div>
        </section>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <section class="service-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-service-box d-flex align-items-center justify-content-center mb-30 wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="service-icon">
                                <i class="pe-7s-download"></i>
                            </div>
                            <div class="service-content">
                                <h6>FREE SHIPPiNG</h6>
                                <p class="no-margin">All order on products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-service-box d-flex align-items-center justify-content-center mb-30 wow fadeInUp"
                            data-wow-delay=".5s">
                            <div class="service-icon">
                                <i class="pe-7s-refresh-2"></i>
                            </div>
                            <div class="service-content">
                                <h6>FREE RETURNS</h6>
                                <p class="no-margin">Only in 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-service-box d-flex align-items-center justify-content-center mb-30 wow fadeInUp"
                            data-wow-delay=".7s">
                            <div class="service-icon">
                                <i class="pe-7s-chat"></i>
                            </div>
                            <div class="service-content">
                                <h6>SUPPORT 24/7</h6>
                                <p class="no-margin">Active support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
        <!-- Start Feature Area -->
        <section class="feature-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-50 wow fadeInDown" data-wow-delay=".3s">
                            <h4>Featured products</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="feature-product-carousel owl-carousel">
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".3s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 61.19</span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".5s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 34.78</span>
                                        <span class="old-price"><del>£ 36.61</del></span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                    <span class="sale">Sale!</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".7s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 36.60</span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".9s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 61.19</span>
                                        <span class="old-price"><del>£ 36.61</del></span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                    <span class="sale">Sale!</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay="1.1s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/5.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 61.19</span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature Area -->
        <!-- Start Deal Area -->
        <section class="deal-area pt-60 pb-100" data-background="{{ asset('Goetze/') }}/assets/img/deal/deal-bg.jpg"
            data-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-50 wow fadeInDown" data-wow-delay=".3s">
                            <h4 class="text-white">Deal of the day</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="deal-carousel owl-carousel">
                            <div class="single-deal-item wow fadeInLeft" data-wow-delay=".3s">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="left-side">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                                    alt=""></a>
                                            <div class="ticker">
                                                <span class="new">New</span>
                                                <span class="sale">Sale!</span>
                                            </div>
                                            <div class="product-countdown">
                                                <div class="count-down-box" data-countdown="2025/01/01"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="right-side">
                                            <div class="product-content deal">
                                                <div class="product-heading">
                                                    <h6><a href="shop-details.html">Printed Summer Dress</a></h6>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                                    under the bust with...</p>
                                                <div class="price">
                                                    <span> £ 34.78</span>
                                                    <span class="old-price"><del>£ 36.61</del></span>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" title="Add to Cart"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fas fa-star"></i></a>
                                                    <a href="#" title="Add to Compare"><i
                                                            class="far fa-file"></i></a>
                                                    <a href="#" title="Quick View"><i
                                                            class="fas fa-expand-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-item wow fadeInRight" data-wow-delay=".3s">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="left-side">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/7.jpg"
                                                    alt=""></a>
                                            <div class="ticker">
                                                <span class="new">New</span>
                                            </div>
                                            <div class="product-countdown">
                                                <div class="count-down-box" data-countdown="2025/01/01"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="right-side">
                                            <div class="product-content deal">
                                                <div class="product-heading">
                                                    <h6><a href="shop-details.html">Printed Summer Dress</a></h6>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                                    under the bust with...</p>
                                                <div class="price">
                                                    <span> £ 34.78</span>
                                                    <span class="old-price"><del>£ 36.61</del></span>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" title="Add to Cart"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fas fa-star"></i></a>
                                                    <a href="#" title="Add to Compare"><i
                                                            class="far fa-file"></i></a>
                                                    <a href="#" title="Quick View"><i
                                                            class="fas fa-expand-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-item wow fadeInLeft" data-wow-delay=".3s">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="left-side">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <div class="ticker">
                                                <span class="new">New</span>
                                                <span class="sale">Sale!</span>
                                            </div>
                                            <div class="product-countdown">
                                                <div class="count-down-box" data-countdown="2025/01/01"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="right-side">
                                            <div class="product-content deal">
                                                <div class="product-heading">
                                                    <h6><a href="shop-details.html">Printed Summer Dress</a></h6>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                                    under the bust with...</p>
                                                <div class="price">
                                                    <span> £ 34.78</span>
                                                    <span class="old-price"><del>£ 36.61</del></span>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" title="Add to Cart"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fas fa-star"></i></a>
                                                    <a href="#" title="Add to Compare"><i
                                                            class="far fa-file"></i></a>
                                                    <a href="#" title="Quick View"><i
                                                            class="fas fa-expand-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-deal-item wow fadeInRight" data-wow-delay=".3s">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="left-side">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/5.jpg"
                                                    alt=""></a>
                                            <div class="ticker">
                                                <span class="new">New</span>
                                            </div>
                                            <div class="product-countdown">
                                                <div class="count-down-box" data-countdown="2025/01/01"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="right-side">
                                            <div class="product-content deal">
                                                <div class="product-heading">
                                                    <h6><a href="shop-details.html">Printed Summer Dress</a></h6>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                                    under the bust with...</p>
                                                <div class="price">
                                                    <span> £ 34.78</span>
                                                    <span class="old-price"><del>£ 36.61</del></span>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" title="Add to Cart"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                    <a href="#" title="Add to Wishlist"><i
                                                            class="fas fa-star"></i></a>
                                                    <a href="#" title="Add to Compare"><i
                                                            class="far fa-file"></i></a>
                                                    <a href="#" title="Quick View"><i
                                                            class="fas fa-expand-alt"></i></a>
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
        </section>
        <!-- End Deal Area -->
        <!-- Start New Area -->
        <section class="feature-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-50 wow fadeInDown" data-wow-delay=".3s">
                            <h4>New products</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="feature-product-carousel owl-carousel">
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".3s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 61.19</span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".5s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 34.78</span>
                                        <span class="old-price"><del>£ 36.61</del></span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                    <span class="sale">Sale!</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".7s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 36.60</span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay=".9s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 61.19</span>
                                        <span class="old-price"><del>£ 36.61</del></span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                    <span class="sale">Sale!</span>
                                </div>
                            </div>
                            <div class="single-feature-product wow fadeInUp" data-wow-delay="1.1s">
                                <div class="product-img">
                                    <a href="shop-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/feature-product/5.jpg"
                                            alt=""></a>
                                    <div class="product-action">
                                        <a href="#" title="Add to Cart"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <a href="#" title="Add to Wishlist"><i class="fas fa-star"></i></a>
                                        <a href="#" title="Add to Compare"><i class="far fa-file"></i></a>
                                        <a href="#" title="Quick View"><i class="fas fa-expand-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h6><a href="shop-details.html" title="Printed Dress">Printed Dress</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="price">
                                        <span> £ 61.19</span>
                                    </div>
                                </div>
                                <div class="ticker">
                                    <span class="new">New</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End New Area -->
        <!-- Start Banner Area -->
        <section class="banner-area pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img mb-30 wow fadeInLeft" data-wow-delay=".3s">
                            <a href="shop.html"><img src="{{ asset('Goetze/') }}/assets/img/banner/1.jpg"
                                    alt=""></a>
                        </div>
                        <div class="banner-img mb-30 wow fadeInRight" data-wow-delay=".3s">
                            <a href="shop.html"><img src="{{ asset('Goetze/') }}/assets/img/banner/2.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img mb-30 wow fadeInRight" data-wow-delay=".3s">
                            <a href="shop.html"><img src="{{ asset('Goetze/') }}/assets/img/banner/3.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img mb-30 wow fadeInLeft" data-wow-delay=".3s">
                            <a href="shop.html"><img src="{{ asset('Goetze/') }}/assets/img/banner/4.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
        <!-- Start Product Catalog -->
        <section class="product-catalog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="product-catalog-box mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="catalog-title">
                                <h5>Bedroom</h5>
                            </div>
                            <div class="product-catalog-carousel owl-carousel">
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-catalog-box mb-30 wow fadeInUp" data-wow-delay=".5s">
                            <div class="catalog-title">
                                <h5>Livingroom</h5>
                            </div>
                            <div class="product-catalog-carousel owl-carousel">
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/5.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/5.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/6.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-catalog-box mb-30 wow fadeInUp" data-wow-delay=".7s">
                            <div class="catalog-title">
                                <h5>Lighting</h5>
                            </div>
                            <div class="product-catalog-carousel owl-carousel">
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-catalog-inner ">
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/1.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-item mb-20">
                                        <div class="product-catalog-img">
                                            <a href="shop-details.html"><img
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/2.jpg"
                                                    alt=""></a>
                                            <a href="shop-details.html"><img class="secondary"
                                                    src="{{ asset('Goetze/') }}/assets/img/feature-product/3.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <a href="shop-details.html">Faded Short Sleeves T-shirt</a>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="price">
                                                <span> £ 34.78</span>
                                                <span class="old-price"><del>£ 36.61</del></span>
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
        <!-- Start Product Catalog -->
        <!-- Start News Letter Area -->
        <section class="news-letter-area pb-30 pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner-img mb-30 wow fadeInLeft" data-wow-delay=".3s">
                            <a href="shop.html"><img src="{{ asset('Goetze/') }}/assets/img/banner/news-letter.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="news-letter-form mb-30 wow fadeInRight" data-wow-delay=".3s">
                            <div class="letter-title">
                                <h6>Newsletter</h6>
                                <i class="far fa-envelope"></i>
                            </div>
                            <p>Subscribe to our email newsletter & receive updates right in your inbox.</p>
                            <div class="search-box">
                                <form action="#">
                                    <input class="news-letter-search" type="email"
                                        placeholder="Enter your e-mail">
                                    <button class="search-btn" type="button"><i
                                            class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News Letter Area -->
        <!-- Start Testimonial Area -->
        <section class="testimonial-area pt-60 pb-100"
            data-background="{{ asset('Goetze/') }}/assets/img/testimonial/bg.jpg" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-testimonial text-center">
                                <p class="no-margin text-white">Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                    facilisis. Lorem ipsum dolor sit amet.</p>
                                <div class="testimonial-img">
                                    <img src="{{ asset('Goetze/') }}/assets/img/testimonial/1.jpg" alt="">
                                </div>
                                <div class="author-details">
                                    <h6 class="text-white">Bootexpert <span>-</span> demo@demo.com</h6>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <p class="no-margin text-white">Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                    facilisis. Lorem ipsum dolor sit amet.</p>
                                <div class="testimonial-img">
                                    <img src="{{ asset('Goetze/') }}/assets/img/testimonial/2.jpg" alt="">
                                </div>
                                <div class="author-details">
                                    <h6 class="text-white">Bootexpert <span>-</span> demo@demo.com</h6>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <p class="no-margin text-white">Duis autem vel eum iriure dolor in hendrerit in
                                    vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                                    facilisis. Lorem ipsum dolor sit amet.</p>
                                <div class="testimonial-img">
                                    <img src="{{ asset('Goetze/') }}/assets/img/testimonial/3.jpg" alt="">
                                </div>
                                <div class="author-details">
                                    <h6 class="text-white">Bootexpert <span>-</span> demo@demo.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Brand Area -->
        <section class="brand-area gray-bg pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-carousel owl-carousel">
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('Goetze/') }}/assets/img/brand/1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('Goetze/') }}/assets/img/brand/2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('Goetze/') }}/assets/img/brand/3.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('Goetze/') }}/assets/img/brand/4.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('Goetze/') }}/assets/img/brand/5.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('Goetze/') }}/assets/img/brand/6.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('Goetze/') }}/assets/img/brand/7.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand Area -->
        <!-- Start Blog Area -->
        <section class="blog-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-50 wow fadeInDown" data-wow-delay=".3s">
                            <h4>from the blog</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="blog-carousel owl-carousel">
                            <div class="single-blog wow fadeInUp" data-wow-delay=".3s">
                                <div class="blog-img mb-25">
                                    <a href="blog-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h5><a href="blog-details.html">Share the Love for PrestaShop 1.6</a></h5>
                                    <span class="blog-meta">2015-12-28 04:28:04</span>
                                    <p class="no-margin blog-dec">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been.</p>
                                </div>
                            </div>
                            <div class="single-blog wow fadeInUp" data-wow-delay=".5s">
                                <div class="blog-img mb-25">
                                    <a href="blog-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h5><a href="blog-details.html">Answers to your Questions about.</a></h5>
                                    <span class="blog-meta">2015-12-28 04:28:04</span>
                                    <p class="no-margin blog-dec">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been.</p>
                                </div>
                            </div>
                            <div class="single-blog wow fadeInUp" data-wow-delay=".7s">
                                <div class="blog-img mb-25">
                                    <a href="blog-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/blog/3.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h5><a href="blog-details.html">What is Bootstrap? – The History.</a></h5>
                                    <span class="blog-meta">2015-12-28 04:28:04</span>
                                    <p class="no-margin blog-dec">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been.</p>
                                </div>
                            </div>
                            <div class="single-blog wow fadeInUp" data-wow-delay=".9s">
                                <div class="blog-img mb-25">
                                    <a href="blog-details.html"><img
                                            src="{{ asset('Goetze/') }}/assets/img/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h5><a href="blog-details.html">From Now we are certified web.</a></h5>
                                    <span class="blog-meta">2015-12-28 04:28:04</span>
                                    <p class="no-margin blog-dec">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
    </main>
    @include('layouts.depan.footer')
    <!-- JS -->
    <!-- Popper.js -->
    @livewireScripts
    <script src="{{ asset('Goetze/') }}/assets/js/popper.min.js"></script>
    <!-- Bootstrap.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/bootstrap-4.3.1.min.js"></script>
    <!-- Plugin.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/plugins.js"></script>
    <!-- Modernizr.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Owl.Carousel.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/owl.carousel-2.3.4.min.js"></script>
    <!-- Waypoints.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/waypoints-4.0.1.min.js"></script>
    <!-- Wow.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/wow-1.1.3.min.js"></script>
    <!-- Slick Nav.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/slicknav-1.0.10.min.js"></script>
    <!-- Scroll Up.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/scrollUp-2.4.1.min.js"></script>
    <!-- MagnificPopup.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/magnific-popup-1.1.0.min.js"></script>
    <!-- NivoSlider.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/jquery.nivo.slider.pack.js"></script>
    <!-- Countdown.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/countdown-2.2.0.min.js"></script>
    <!-- PriceSlider.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/price-slider-1.12.1.js"></script>
    <!-- Venobox.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/vendor/venobox.min.js"></script>

    <!-- Main.js -->
    <script src="{{ asset('Goetze/') }}/assets/js/main.js"></script>
</body>

</html>
