<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/zakas-v2/zakas/{{route('home')}} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 11:11:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skateshop - All about Skate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="public/assets/img/logo/Logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="public/assets/img/icon.png">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="public/assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="public/assets/css/main.css">

</head>

<body>

    <!-- Preloader Start -->
    <div class="zakas-preloader active">
        <div class="zakas-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="zakas-child zakas-bounce1"></div>
            <div class="zakas-child zakas-bounce2"></div>
            <div class="zakas-child zuka-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Start -->
        <header class="header">
            <div class="header-inner fixed-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-9 col-3">
                            <nav class="main-navigation">
                                <div class="site-branding">
                                    <a href="{{route('home')}}" class="logo">
                                        <figure class="logo--transparent">
                                            <img src="public/assets/img/logo/Logo.png" alt="Logo">
                                        </figure>
                                        <figure class="logo--normal">
                                            <img  src="public/assets/img/logo/Logo.png" alt="Logo">
                                        </figure>
                                    </a>
                                </div>
                                <div class="mainmenu-nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children active">
                                            <a href="{{route('home')}}" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="{{route('shop')}}" class="mainmenu__link">
                                                <span class="mm-text">Shop</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="{{route('contact-us')}}" class="mainmenu__link">
                                                <span class="mm-text">Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-9 text-right">
                            <ul class="header-toolbar">
                                <li class="header-toolbar__item">
                                    <a href="{{route('wishlist')}}" class="header-toolbar__btn">
                                        <i class="flaticon flaticon-like"></i>
                                    </a>
                                </li>
                                <li class="header-toolbar__item mini-cart-item">
                                    <a href="#miniCart" class="header-toolbar__btn toolbar-btn mini-cart-btn">
                                        <i class="flaticon flaticon-shopping-cart"></i>
                                        <sup class="mini-cart-count">2</sup>
                                    </a>
                                </li>
                                <li class="header-toolbar__item user-info">
                                    <a href="{{route('my-account')}}" class="header-toolbar__btn">
                                        <i class="flaticon flaticon-user"></i>
                                    </a>
                                    <ul class="user-info-menu">
                                        <li>
                                            <a href="{{route('my-account')}}">My Account</a>
                                        </li>
                                        <li>
                                            <a href="{{route('cart')}}">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="{{route('checkout')}}">Check Out</a>
                                        </li>
                                        <li>
                                            <a href="{{route('wishlist')}}">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="{{route('compare')}}">Compare</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header-toolbar__item">
                                    <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                        <i class="flaticon flaticon-search"></i>
                                    </a>
                                </li>
                                <li class="header-toolbar__item d-lg-none">
                                    <a href="#" class="header-toolbar__btn menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        
    @yield('content')

<!-- Footer Start-->
<footer class="footer">
    <div class="footer-top bg-color ptb--50" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="footer-widget mb--50">
                        <div class="textwidget">
                            <img src="public/assets/img/logo/logo.png" alt="Logo">
                        </div>
                    </div>
                    <div class="footer-widget mb--50 pb--1">
                        <ul class="footer-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-widget">
                        <!-- Social Icons Start Here -->
                        <ul class="social">
                            <li class="social__item">
                                <a href="https://plus.google.com/" class="social__link google-plus">
                                    <span>Google Plus</span>
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://facebook.com/" class="social__link facebook">
                                    <span>facebook</span>
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://pinterest.com/" class="social__link pinterest">
                                    <span>pinterest</span>
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="youtube.com" class="social__link twitter">
                                    <span>twitter</span>
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Social Icons End Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-color ptb--25" data-bg-color="#e7e7e7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 text-sm-left text-center mb-xs--10">
                    <p class="copyright-text"><a href="{{route('home')}}">Zakas</a> &copy; 2019 all rights reserved</p>
                </div>
                <div class="col-sm-6 text-sm-right text-center">
                    <figure>
                        <img src="public/assets/img/others/payment.png" alt="payment">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End-->

<!-- Searchform Popup Start -->
<div class="searchform__popup" id="searchForm">
    <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
    <div class="searchform__body">
        <p>Start typing and press Enter to search</p>
        <form class="searchform">
            <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
            <button type="submit" class="searchform__submit"><i class="flaticon flaticon-magnifying-glass-icon"></i></button>
        </form>
    </div>
</div>
<!-- Searchform Popup End -->

<!-- Mini Cart Start -->
<aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
        <div class="mini-cart-inner">
            <h3 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h3>
            <div class="mini-cart__content">
                <ul class="mini-cart__list">
                    <li class="mini-cart__product">
                        <a href="#" class="remove-from-cart remove">
                            <i class="flaticon flaticon-cross"></i>
                        </a>
                        <div class="mini-cart__product__image">
                            <img src="public/assets/img/products/prod-1-100x100.jpg" alt="products">
                        </div>
                        <div class="mini-cart__product__content">
                            <a class="mini-cart__product__title" href="{{route('product-detail')}}">Chain print bermuda shorts  </a>
                            <span class="mini-cart__product__quantity">1 x $49.00</span>
                        </div>
                    </li>
                    <li class="mini-cart__product">
                        <a href="#" class="remove-from-cart remove">
                            <i class="flaticon flaticon-cross"></i>
                        </a>
                        <div class="mini-cart__product__image">
                            <img src="public/assets/img/products/prod-2-100x100.jpg" alt="products">
                        </div>
                        <div class="mini-cart__product__content">
                            <a class="mini-cart__product__title" href="{{route('product-detail')}}">Waxed-effect pleated skirt</a>
                            <span class="mini-cart__product__quantity">1 x $49.00</span>
                        </div>
                    </li>
                    <li class="mini-cart__product">
                        <a href="#" class="remove-from-cart remove">
                            <i class="flaticon flaticon-cross"></i>
                        </a>
                        <div class="mini-cart__product__image">
                            <img src="public/assets/img/products/prod-5-100x100.jpg" alt="products">
                        </div>
                        <div class="mini-cart__product__content">
                            <a class="mini-cart__product__title" href="{{route('product-detail')}}">Waxed-effect pleated skirt</a>
                            <span class="mini-cart__product__quantity">1 x $49.00</span>
                        </div>
                    </li>
                </ul>
                <div class="mini-cart__total">
                    <span>Subtotal</span>
                    <span class="ammount">$98.00</span>
                </div>
                <div class="mini-cart__buttons">
                    <a href="{{route('cart')}}" class="btn btn-fullwidth btn-bg-sand mb--20">View Cart</a>
                    <a href="{{route('checkout')}}" class="btn btn-fullwidth btn-bg-sand">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Mini Cart End -->

<!-- Global Overlay Start -->
<div class="zakas-global-overlay"></div>
<!-- Global Overlay End -->

<!-- Qicuk View Modal Start -->
<div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="flaticon flaticon-cross"></i></span>
      </button>
      <div class="row">
        <div class="col-lg-6">
            <div class="zakas-element-carousel nav-vertical-center"
            data-slick-options='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
        }'
        >
        <div class="product-image">
            <div class="product-image--holder">
                <a href="{{route('product-detail')}}">
                    <img src="public/assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                </a>
            </div>
            <span class="product-badge sale">sale</span>
        </div>
        <div class="product-image">
            <div class="product-image--holder">
                <a href="{{route('product-detail')}}">
                    <img src="public/assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                </a>
            </div>
            <span class="product-badge sale">sale</span>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <div class="modal-box product-summary">
        <div class="product-navigation text-right mb--20">
            <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
            <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
        </div>
        <div class="product-rating d-flex mb--20">
            <div class="star-rating star-three">
                <span>Rated <strong class="rating">5.00</strong> out of 5</span>
            </div>
        </div>
        <h3 class="product-title mb--20">Black Blazer</h3>
        <p class="product-short-description mb--25">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
        <div class="product-price-wrapper mb--25">
            <span class="money">$200.00</span>
            <span class="price-separator">-</span>
            <span class="money">$400.00</span>
        </div>
        <form action="#" class="variation-form mb--30">
            <div class="product-color-variations d-flex align-items-center mb--20">
                <p class="variation-label">Color:</p>
                <div class="product-color-variation variation-wrapper">
                    <div class="variation">
                        <a class="product-color-variation-btn red selected" data-toggle="tooltip" data-placement="top" title="Red">
                            <span class="product-color-variation-label">Red</span>
                        </a>
                    </div>
                    <div class="variation">
                        <a class="product-color-variation-btn black" data-toggle="tooltip" data-placement="top" title="Black">
                            <span class="product-color-variation-label">Black</span>
                        </a>
                    </div>
                    <div class="variation">
                        <a class="product-color-variation-btn pink" data-toggle="tooltip" data-placement="top" title="Pink">
                            <span class="product-color-variation-label">Pink</span>
                        </a>
                    </div>
                    <div class="variation">
                        <a class="product-color-variation-btn blue" data-toggle="tooltip" data-placement="top" title="Blue">
                            <span class="product-color-variation-label">Blue</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product-size-variations d-flex align-items-center mb--15">
                <p class="variation-label">Size:</p>   
                <div class="product-size-variation variation-wrapper">
                    <div class="variation">
                        <a class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                            <span class="product-size-variation-label">S</span>
                        </a>
                    </div>
                    <div class="variation">
                        <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                            <span class="product-size-variation-label">M</span>
                        </a>
                    </div>
                    <div class="variation">
                        <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                            <span class="product-size-variation-label">L</span>
                        </a>
                    </div>
                    <div class="variation">
                        <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                            <span class="product-size-variation-label">XL</span>
                        </a>
                    </div>
                </div>                                 
            </div>
            <a href="#" class="reset_variations">Clear</a>
        </form>
        <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
            <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                <label class="quantity-label" for="quick-qty">Quantity:</label>
                <div class="quantity">
                    <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                </div>
            </div>
            <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='{{route('cart')}}'">
                Add To Cart
            </button>
        </div>  
        <div class="product-footer-meta">
            <p><span>Category:</span>
                <a href="{{route('shop')}}">Full Sweater</a>,
                <a href="{{route('shop')}}">SweatShirt</a>,
                <a href="{{route('shop')}}">Jacket</a>,
                <a href="{{route('shop')}}">Blazer</a>
            </p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Qicuk View Modal End -->
</div>
<!-- Main Wrapper End -->


<!-- ************************* JS Files ************************* -->

<!-- jQuery JS -->
<script src="public/assets/js/vendor.js"></script>

<!-- Main JS -->
<script src="public/assets/js/main.js"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/zakas-v2/zakas/{{route('home')}} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 11:12:47 GMT -->
</html>