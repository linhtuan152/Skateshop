@extends('welcome')
@section('content')
      <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                            <h1 class="page-title">Shop</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="current"><span>Product Details</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->
<div class="main-content-wrapper">
            <div class="page-content-inner ptb--80">
                <div class="container">
                    <div class="row no-gutters mb--80">
                        <div class="col-lg-7 product-main-image">
                            <div class="product-image">
                                <div class="product-gallery vertical-slide-nav">
                                    <div class="product-gallery__large-image mb-md--30">
                                        <div class="product-gallery__wrapper">
                                            <div class="zakas-element-carousel main-slider image-popup"
                                            data-slick-options='{
                                                "slidesToShow": 1,
                                                "slidesToScroll": 1,
                                                "infinite": true,
                                                "arrows": false, 
                                                "asNavFor": ".nav-slider"
                                            }'>
                                                <figure class="product-gallery__image zoom">
                                                    <img src="public/assets/img/products/prod-9-1.jpg" alt="Product">
                                                    <div class="product-gallery__actions">
                                                        <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                        <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                    </div>
                                                </figure>
                                                <figure class="product-gallery__image zoom">
                                                    <img src="public/assets/img/products/prod-32.jpg" alt="Product">
                                                    <div class="product-gallery__actions">
                                                        <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                        <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                    </div>
                                                </figure>
                                                <figure class="product-gallery__image zoom">
                                                    <img src="public/assets/img/products/prod-33.jpg" alt="Product">
                                                    <div class="product-gallery__actions">
                                                        <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                        <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                    </div>
                                                </figure>
                                                <figure class="product-gallery__image zoom">
                                                    <img src="public/assets/img/products/prod-34.jpg" alt="Product">
                                                    <div class="product-gallery__actions">
                                                        <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                                        <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fa fa-play"></i></a>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-gallery__nav-image">
                                        <div class="zakas-element-carousel nav-slider slick-vertical product-slide-nav" 
                                        data-slick-options='{
                                            "spaceBetween": "30px",
                                            "slidesToShow": 3,
                                            "slidesToScroll": 1,
                                            "vertical": true,
                                            "swipe": true,
                                            "verticalSwiping": true,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".main-slider",
                                            "arrows": true, 
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                        }'
                                        data-slick-responsive='[
                                            {
                                                "breakpoint":767, 
                                                "settings": {
                                                    "slidesToShow": 4,
                                                    "vertical": false
                                                } 
                                            },
                                            {
                                                "breakpoint":575, 
                                                "settings": {
                                                    "slidesToShow": 3,
                                                    "vertical": false
                                                } 
                                            },
                                            {
                                                "breakpoint":480, 
                                                "settings": {
                                                    "slidesToShow": 2,
                                                    "vertical": false
                                                } 
                                            }
                                        ]'>
                                            <figure class="product-gallery__nav-image--single">
                                                <img src="public/assets/img/products/prod-9-1-170x195.jpg" alt="Products">
                                            </figure>
                                            <figure class="product-gallery__nav-image--single">
                                                <img src="public/assets/img/products/prod-32-170x195.jpg" alt="Products">
                                            </figure>
                                            <figure class="product-gallery__nav-image--single">
                                                <img src="public/assets/img/products/prod-33-170x195.jpg" alt="Products">
                                            </figure>
                                            <figure class="product-gallery__nav-image--single">
                                                <img src="public/assets/img/products/prod-34-170x195.jpg" alt="Products">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <span class="product-badge sale">Sale</span>
                            </div>
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                            <div class="product-summary pl-lg--30 pl-md--0">
                                <div class="product-navigation text-right mb--20">
                                    <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                    <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <div class="product-rating d-flex mb--20">
                                    <div class="star-rating star-four">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                    </div>
                                </div>
                                <h3 class="product-title mb--20">Black Blazer</h3>
                                <p class="product-short-description mb--20">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                <div class="product-price-wrapper mb--25">
                                    <span class="money">$200.00</span>
                                    <span class="price-separator">-</span>
                                    <span class="money">$400.00</span>
                                </div>
                                <form action="#" class="variation-form mb--20">
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
                                <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                                    <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                        <label class="quantity-label" for="qty">Quantity:</label>
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='{{route('cart')}}'">
                                        Add To Cart
                                    </button>
                                </div>  
                                <div class="product-footer-meta">
                                    <p><span>Category:</span> 
                                        <a href="shop.html">Full Sweater</a>,
                                        <a href="shop.html">SweatShirt</a>,
                                        <a href="shop.html">Jacket</a>,
                                        <a href="shop.html">Blazer</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb--80">
                        <div class="col-12">
                            <div class="product-data-tab tab-style-3">
                                <div class="nav nav-tabs product-data-tab__head mb--35 mb-sm--25" id="product-tab" role="tablist">
                                    <a class="product-data-tab__link nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true"> 
                                        <span>Description</span>
                                    </a>
                                    <a class="product-data-tab__link nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-selected="true">
                                        <span>Additional Information</span>
                                    </a>
                                    <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                                        <span>Reviews(1)</span>
                                    </a>
                                </div>
                                <div class="tab-content product-data-tab__content" id="product-tabContent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consec do eiusmod tincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. iatis unde omnis iste natus error sit voluptatem accusantium </p>

                                            <p>Lorem ipsum dolor sit amet, consec do eiusmod tincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            
                                            <h5 class="product-description__heading">Characteristics :</h5>
                                            <ul>
                                                <li><i class="ti-arrow-right"></i><span>Rsit amet, consectetur adipisicing elit, sed do eiusmod tempor inc.</span></li>
                                                <li><i class="ti-arrow-right"></i><span>sunt in culpa qui officia deserunt mollit anim id est laborum. </span></li>
                                                <li><i class="ti-arrow-right"></i><span>Lorem ipsum dolor sit amet, consec do eiusmod tincididu. </span></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                        <div class="table-content table-responsive">
                                            <table class="table shop_attributes">
                                                <tbody>
                                                    <tr>
                                                        <th>Weight</th>
                                                        <td>57 kg</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Dimensions</th>
                                                        <td>160 × 152 × 110 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Color</th>
                                                        <td>
                                                            <a href="shop-sidebar.html">Black</a>,
                                                            <a href="shop-sidebar.html">Gray</a>,
                                                            <a href="shop-sidebar.html">Red</a>,
                                                            <a href="shop-sidebar.html">Violet</a>,
                                                            <a href="shop-sidebar.html">Yellow</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                        <div class="product-reviews">
                                            <h3 class="review__title">1 review for Black Blazer</h3>
                                            <ul class="review__list">
                                                <li class="review__item">
                                                    <div class="review__container">
                                                        <img src="public/assets/img/others/comment-1.jpg" alt="Review Avatar" class="review__avatar">
                                                        <div class="review__text">
                                                            <div class="d-flex flex-sm-row flex-column justify-content-between">
                                                                <div class="review__meta">
                                                                    <strong class="review__author">John Snow </strong>
                                                                    <span class="review__dash">-</span>
                                                                    <span class="review__published-date">November 20, 2018</span>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div class="star-rating star-five">
                                                                        <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="review__description">Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="review-form-wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <span class="reply-title">Add a review</span>
                                                        <form action="#" class="form pr--30">
                                                            <div class="form-notes mb--20">
                                                                <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                                            </div>
                                                            <div class="form__group mb--10 pb--1">
                                                                <label class="form__label d-block" >Your Ratings</label>
                                                                <div class="rating">
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                    <span><i class="fa fa-star"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="form__group mb--10">
                                                                <label class="form__label d-block" for="email">Your Review<span class="required">*</span></label>
                                                                <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                            </div>
                                                            <div class="form__group mb--20">
                                                                <label class="form__label d-block" for="name">Name<span class="required">*</span></label>
                                                                <input type="text" name="name" id="name" class="form__input">
                                                            </div>
                                                            <div class="form__group mb--20">
                                                                <label class="form__label d-block" for="email">Email<span class="required">*</span></label>
                                                                <input type="email" name="email" id="email" class="form__input">
                                                            </div>
                                                            <div class="form__group">
                                                                <div class="form-row">
                                                                    <div class="col-12">
                                                                        <input type="submit" value="Submit Now" class="btn-submit">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="zakas-element-carousel nav-vertical-center" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                            }'
                            data-slick-responsive= '[
                                {"breakpoint":1199, "settings": {
                                    "slidesToShow": 3
                                }},
                                {"breakpoint":991, "settings": {
                                    "slidesToShow": 2
                                }},
                                {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                }}
                            ]'>
                                <div class="item">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="public/assets/img/products/prod-9.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="public/assets/img/products/prod-10.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="public/assets/img/products/prod-11.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="public/assets/img/products/prod-12.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
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
@stop        