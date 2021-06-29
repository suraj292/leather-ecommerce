<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('assets/images/favicon/5.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/5.png')}}" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <livewire:styles />
</head>

<body class="">
<!-- header start -->
<header class="header-5" style="z-index: 1;">
    <div class="mobile-fix-option"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="brand-logo">
                            <a href="{{route('home')}}"> <img src="{{asset('assets/images/icon/logo/f8.png')}}"
                                                       class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                                                 aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="{{route('home')}}">New Arrival</a></li>
                                    <li><a href="#">SHOP</a>
                                        <ul>
                                            <livewire:public.component.shop-dropdown />
                                        </ul>
                                    </li>
                                    <li class="mega" id="hover-cls">
                                        <a href="#">Leather & Art</a>
                                    </li>
                                    <li>
                                        <a href="#">value combo</a>
                                    </li>
                                    <li>
                                        <a href="#">Blogs</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="top-header">
                            <ul class="header-dropdown">
                                <li class="mobile-wishlist"><a href="#"><img
                                            src="assets/images/jewellery/icon/heart.png" alt=""> </a></li>
                                <li class="onhover-dropdown mobile-account">
                                    <img src="assets/images/jewellery/icon/avatar.png" alt="">
                                    <ul class="onhover-show-div">
                                        <li>
                                            <a href="#" data-lng="en">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-lng="es">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="assets/images/jewellery/icon/search.png"
                                                  onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-search" onclick="openSearch()"></i>
                                        </div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div>
                                                    <span class="closebtn" onclick="closeSearch()"
                                                          title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                               id="exampleInputPassword1"
                                                                               placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div><img src="assets/images/jewellery/icon/cart.png"
                                                  class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                        <ul class="show-div shopping-cart">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img alt="" class="me-3"
                                                                     src="assets/images/fashion/product/1.jpg"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle">
                                                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img alt="" class="me-3"
                                                                     src="assets/images/fashion/product/2.jpg"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle">
                                                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span>$299.00</span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons">
                                                    <a href="cart.html" class="view-cart">view cart</a>
                                                    <a href="#" class="checkout">checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

    {{$slot}}

<!-- footer start -->
<footer class="footer-light">
    <div class="light-layout">
        <div class="container">
            <section class="small-section border-section border-top-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe">
                            <div>
                                <h4>KNOW IT ALL FIRST!</h4>
                                <p>Never Miss Anything From Multikart By Signing Up To Our Newsletter.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form
                            action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                            class="form-inline subscribe-form auth-form needs-validation" method="post"
                            id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL"
                                       placeholder="Enter your email" required="required">
                            </div>
                            <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo"><img src="assets/images/icon/logo/f8.png" alt=""></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>my account</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">mens</a></li>
                                <li><a href="#">womens</a></li>
                                <li><a href="#">clothing</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">featured</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>why we choose</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">shipping & return</a></li>
                                <li><a href="#">secure shopping</a></li>
                                <li><a href="#">gallary</a></li>
                                <li><a href="#">affiliates</a></li>
                                <li><a href="#">contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>store information</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India 345-659
                                </li>
                                <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: Support@Multikart.com</li>
                                <li><i class="fa fa-fax"></i>Fax: 123456</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-end">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 themeforest powered by
                            pixelstrap</p>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="payment-card-bottom">
                        <ul>
                            <li>
                                <a href="#"><img src="assets/images/icon/visa.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/mastercard.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/paypal.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/american-express.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/icon/discover.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->


<!-- offer section start -->
<div class="sale-box" data-bs-toggle="modal" data-bs-target="#blackfriday">
    <div class="heading-right">
        <h3>Black Friday</h3>
    </div>
</div>
<!-- offer section end -->


<!--modal popup start-->
<div class="modal fade bd-example-modal-lg blackfriday-modal" id="blackfriday" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg">
                                <div class="side-lines"><span></span></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="confetti">
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                    <div class="confetti-piece"></div>
                                </div>
                                <div class="content">
                                    <h1>Black</h1>
                                    <h1>Friday</h1>
                                    <h2>sale</h2>
                                    <div class="discount">get
                                        <span>30%</span>
                                        off
                                        <span class="plus">+</span>
                                        <span>FREE SHIPPING</span>
                                    </div>
                                    <div class="btn btn-solid">USE CODE: <span>BLACK</span></div>
                                    <p>*check shipping conditions in our website</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal popup end-->


<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="assets/images/pro3/1.jpg" alt=""
                                                         class="img-fluid blur-up lazyload"></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>Women Pink Shirt</h2>
                            <h3>$32.96</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium</p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="javascript:void(0)">s</a></li>
                                        <li><a href="javascript:void(0)">m</a></li>
                                        <li><a href="javascript:void(0)">l</a></li>
                                        <li><a href="javascript:void(0)">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                                                                       class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number"
                                               value="1"> <span class="input-group-prepend"><button type="button"
                                                                                                    class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a
                                    href="#" class="btn btn-solid">view detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->


<!-- theme setting -->
<div class="scroll-setting-box">
    <div id="setting_box" class="setting-box">
        <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
        <div class="setting_box_body">
            <div onclick="closeSetting()">
                <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back
                </div>
            </div>
            <div class="setting-body">
                <div class="setting-title">
                    <div>
                        <img src="assets/images/icon/logo.png" class="img-fluid" alt="">
                        <h3>50+ <span>demos</span> <br> suit for any type of online store.</h3>
                    </div>
                </div>
                <div class="setting-contant">
                    <div class="row demo-section">
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="gradient.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/gradient.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="gradient.html" class="demo-text">
                                    <h4>gradient<h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="{{route('home')}}" class="layout-container">
                                    <img src="assets/images/landing-page/demo/fashion.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="{{route('home')}}" class="demo-text">
                                    <h4>fashion</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="fashion-2.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/fashion-2.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="fashion-2.html" class="demo-text">
                                    <h4>fashion 2</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="fashion-3.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/fashion-3.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="fashion-3.html" class="demo-text">
                                    <h4>fashion 3</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="fashion-4.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/fashion-4.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="fashion-4.html" class="demo-text">
                                    <h4>fashion 4</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="fashion-5.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/fashion-5.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="fashion-5.html" class="demo-text">
                                    <h4>fashion 5</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="fashion-6.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/fashion-6.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="fashion-6.html" class="demo-text">
                                    <h4>fashion 6</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="fashion-7.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/fashion-7.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="fashion-7.html" class="demo-text">
                                    <h4>fashion 7</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="furniture.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/furniture.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="furniture.html" class="demo-text">
                                    <h4>furniture</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="furniture-2.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/furniture-2.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="furniture-2.html" class="demo-text">
                                    <h4>furniture 2</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="furniture-3.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/furniture-dark.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="furniture-3.html" class="demo-text">
                                    <h4>furniture dark</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="electronic-1.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/electronics.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="electronic-1.html" class="demo-text">
                                    <h4>electronics</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="electronic-2.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/electronics-2.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="electronic-2.html" class="demo-text">
                                    <h4>electronics 2</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="electronic-3.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/electronics-3.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="electronic-3.html" class="demo-text">
                                    <h4>electronics 3</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="marketplace-demo.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/marketplace.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="marketplace-demo.html" class="demo-text">
                                    <h4>marketplace</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="marketplace-demo-2.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/marketplace-2.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="marketplace-demo-2.html" class="demo-text">
                                    <h4>marketplace 2</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="marketplace-demo-3.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/marketplace-3.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="marketplace-demo-3.html" class="demo-text">
                                    <h4>marketplace 3</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="marketplace-demo-4.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/marketplace-4.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="marketplace-demo-4.html" class="demo-text">
                                    <h4>marketplace 4</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="vegetables.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/vegetables.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="vegetables.html" class="demo-text">
                                    <h4>vegetables</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="vegetables-2.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/vegetables-2.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="vegetables-2.html" class="demo-text">
                                    <h4>vegetables 2</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="vegetables-3.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/vegetables-3.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="vegetables-3.html" class="demo-text">
                                    <h4>vegetables 3</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="jewellery.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/jewellery.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="jewellery.html" class="demo-text">
                                    <h4>jewellery</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="jewellery-2.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/jewellery-2.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="jewellery-2.html" class="demo-text">
                                    <h4>jewellery 2</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="jewellery-3.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/jewellery-3.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="jewellery-3.html" class="demo-text">
                                    <h4>jewellery 3</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="bags.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/bag.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="bags.html" class="demo-text">
                                    <h4>bag</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="watch.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/watch.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="watch.html" class="demo-text">
                                    <h4>watch</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="medical.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/medical.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="medical.html" class="demo-text">
                                    <h4>medical</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="perfume.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/perfume.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="perfume.html" class="demo-text">
                                    <h4>perfume</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="yoga.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/yoga.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="yoga.html" class="demo-text">
                                    <h4>yoga</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="christmas.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/christmas.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="christmas.html" class="demo-text">
                                    <h4>christmas</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="bicycle.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/bicycle.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="bicycle.html" class="demo-text">
                                    <h4>bicycle</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="marijuana.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/marijuana.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="marijuana.html" class="demo-text">
                                    <h4>marijuana</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="gym-product.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/gym.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="gym-product.html" class="demo-text">
                                    <h4>gym</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="tools.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/tools.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="tools.html" class="demo-text">
                                    <h4>tools</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="shoes.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/shoes.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="shoes.html" class="demo-text">
                                    <h4>shoes</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="books.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/books.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="books.html" class="demo-text">
                                    <h4>books</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="kids.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/kids.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="kids.html" class="demo-text">
                                    <h4>kids</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="game.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/game.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="game.html" class="demo-text">
                                    <h4>game</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="beauty.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/beauty.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="beauty.html" class="demo-text">
                                    <h4>beauty</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="left_sidebar-demo.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/left-sidebar.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="left_sidebar-demo.html" class="demo-text">
                                    <h4>left sidebar</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="video-slider.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/video-slider.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="video-slider.html" class="demo-text">
                                    <h4>video slider</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="metro.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/metro.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="metro.html" class="demo-text">
                                    <h4>metro</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="goggles.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/goggles.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="goggles.html" class="demo-text">
                                    <h4>goggles</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="flower.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/flower.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="flower.html" class="demo-text">
                                    <h4>flower</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="light.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/light.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="light.html" class="demo-text">
                                    <h4>light</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="nursery.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/nursery.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="nursery.html" class="demo-text">
                                    <h4>nursery</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="pets.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/pets.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="pets.html" class="demo-text">
                                    <h4>pets</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="video.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/video.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="video.html" class="demo-text">
                                    <h4>video</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="lookbook-demo.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/lookbook.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="lookbook-demo.html" class="demo-text">
                                    <h4>lookbook</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="full-page.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/full-page.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="full-page.html" class="demo-text">
                                    <h4>full page</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="instagram-shop.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/instagram.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="instagram-shop.html" class="demo-text">
                                    <h4>instagram</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 text-center demo-effects">
                            <div class="set-position">
                                <a href="parallax.html" class="layout-container">
                                    <img src="assets/images/landing-page/demo/parallax.jpg"
                                         class="img-fluid bg-img bg-top" alt="">
                                </a>
                                <a href="parallax.html" class="demo-text">
                                    <h4>parallax</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- theme setting -->


<!-- Add to cart modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body modal1">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-bg addtocart">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="media">
                                    <a href="#">
                                        <img class="img-fluid blur-up lazyload pro-img"
                                             src="assets/images/fashion/product/43.jpg" alt="">
                                    </a>
                                    <div class="media-body align-self-center text-center">
                                        <a href="#">
                                            <h6>
                                                <i class="fa fa-check"></i>Item
                                                <span>men full sleeves</span>
                                                <span> successfully added to your Cart</span>
                                            </h6>
                                        </a>
                                        <div class="buttons">
                                            <a href="#" class="view-cart btn btn-solid">Your cart</a>
                                            <a href="#" class="checkout btn btn-solid">Check out</a>
                                            <a href="#" class="continue btn btn-solid">Continue shopping</a>
                                        </div>

                                        <div class="upsell_payment">
                                            <img src="assets/images/payment_cart.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-section">
                                    <div class="col-12 product-upsell text-center">
                                        <h4>Customers who bought this item also.</h4>
                                    </div>
                                    <div class="row" id="upsell_product">
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/1.jpg"
                                                             class="img-fluid blur-up lazyload mb-1"
                                                             alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/34.jpg"
                                                             class="img-fluid blur-up lazyload mb-1"
                                                             alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/13.jpg"
                                                             class="img-fluid blur-up lazyload mb-1"
                                                             alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-box col-sm-3 col-6">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="#">
                                                        <img src="assets/images/fashion/product/19.jpg"
                                                             class="img-fluid blur-up lazyload mb-1"
                                                             alt="cotton top">
                                                    </a>
                                                </div>
                                                <div class="product-detail">
                                                    <h6><a href="#"><span>cotton top</span></a></h6>
                                                    <h4><span>$25</span></h4>
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
        </div>
    </div>
</div>
<!-- Add to cart modal popup end-->


<!-- tap to top start -->
<div class="tap-top">
    <div><i class="fa fa-angle-double-up"></i></div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- menu js-->
<script src="{{asset('assets/js/menu.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

<!-- slick js-->
<script src="{{asset('assets/js/slick.js')}}"></script>
<script src="{{asset('assets/js/slick-animation.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Video js-->
<!--    <script src="assets/js/jquery.vide.min.js"></script>-->

<!-- Bootstrap Notification js-->
<script src="{{asset('assets/js/bootstrap-notify.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('assets/js/theme-setting.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/custom-slick-animated.js')}}"></script>

<script>
    /*$(window).on('load', function () {
        setTimeout(function () {
            $('#blackfriday').modal('show');
        }, 2500);
    });

    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }*/
</script>

<script type="text/javascript">
    $('.custom-slider-2').slick({
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        arrows: false,
    });
</script>
<livewire:scripts />
</body>
</html>
