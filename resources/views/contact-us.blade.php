                    @extends('welcome')
                    @section('content')


                    <!-- Main Wrapper Start -->
                    <div class="wrapper">

                        <!-- Breadcrumb area Start -->
                        <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                                            <h1 class="page-title">Contact Us</h1>
                                            <ul class="breadcrumb">
                                                <li><a href="{{route('home')}}">Home</a></li>
                                                <li class="current"><span>Contact Us</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Breadcrumb area End -->

                        <!-- Main Content Wrapper Start -->
                        <div id="content" class="main-content-wrapper">
                            <div class="page-content-inner pt--75">
                                <div class="container">
                                    <div class="row pb--80"> 
                                        <div class="col-md-7 mb-sm--30">
                                            <h2 class="heading__secondary mb--50 mb-md--35 mb-sm--20">Get in touch</h2>

                                            <!-- Contact form Start Here -->
                                            <form class="form" action="http://demo.hasthemes.com/zakas-v2/zakas/mail.php" id="contact-form">
                                                <div class="form__group mb--20">
                                                    <input type="text" id="contact_name" name="contact_name" class="form__input form__input--2" placeholder="Your name*">
                                                </div>
                                                <div class="form__group mb--20">
                                                    <input type="email" id="contact_email" name="contact_email" class="form__input form__input--2" placeholder="Email Address*">
                                                </div>
                                                <div class="form__group mb--20">
                                                    <input type="text" id="contact_phone" name="contact_phone" class="form__input form__input--2" placeholder="Your Phone*">
                                                </div>
                                                <div class="form__group mb--20">
                                                    <textarea class="form__input form__input--textarea" id="contact_message" name="contact_message" placeholder="Message*"></textarea>
                                                </div>
                                                <div class="form__group">
                                                    <button type="submut" class="btn-submit">Send Now</button>
                                                </div>
                                                <div class="form__output"></div>
                                            </form>
                                            <!-- Contact form end Here -->

                                        </div>
                                        <div class="col-md-5 pl--50 pl-sm--30">
                                            <h2 class="heading__secondary mb--50">Contact info</h2>

                                            <!-- Contact info widget start here -->
                                            <div class="contact-info-widget mb--45">
                                                <div class="contact-info">
                                                    <h3 class="heading__tertiary">Postal Address</h3>
                                                    <p>PO Box 16122 Collins Street West <br> Victoria 8007 Australia</p>
                                                </div>
                                            </div>
                                            <!-- Contact info widget end here -->

                                            <!-- Contact info widget start here -->
                                            <div class="contact-info-widget mb--45">
                                                <div class="contact-info">
                                                    <h3 class="heading__tertiary">Zakas HQ</h3>
                                                    <p>Postal Address <br> PO Box 16122 Collins Street West  <br> Victoria 8007 Australia</p>
                                                </div>
                                            </div>
                                            <!-- Contact info widget end here -->

                                            <!-- Contact info widget start here -->
                                            <div class="contact-info-widget two-column-list sm-one-column mb--45">
                                                <div class="contact-info mb-sm--35">
                                                    <h3 class="heading__tertiary">Business Phone</h3>
                                                    <a href="#">+61 3 8376 6284</a>
                                                </div>
                                                <div class="contact-info">
                                                    <h3 class="heading__tertiary">Say Hello</h3>
                                                    <a href="mailto:info@la-studioweb.com">info@la-studioweb.com</a>
                                                </div>
                                            </div>
                                            <!-- Contact info widget end here -->

                                            <!-- Social Icons Start Here -->
                                            <ul class="social social-sharing">
                                                <li class="social__item">
                                                    <a href="twitter.com" class="social__link twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="plus.google.com" class="social__link google-plus">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="facebook.com" class="social__link facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="instagram.com" class="social__link instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Social Icons End Here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid p-0">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div id="google-map">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Content Wrapper Start -->


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
                                                    <a class="mini-cart__product__title" href="product-details.html">Chain print bermuda shorts  </a>
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
                                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
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
                                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect pleated skirt</a>
                                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mini-cart__total">
                                            <span>Subtotal</span>
                                            <span class="ammount">$98.00</span>
                                        </div>
                                        <div class="mini-cart__buttons">
                                            <a href="cart.html" class="btn btn-fullwidth btn-bg-sand mb--20">View Cart</a>
                                            <a href="checkout.html" class="btn btn-fullwidth btn-bg-sand">Checkout</a>
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
                                        <a href="product-details.html">
                                            <img src="public/assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                                        </a>
                                    </div>
                                    <span class="product-badge sale">sale</span>
                                </div>
                                <div class="product-image">
                                    <div class="product-image--holder">
                                        <a href="product-details.html">
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
                                    <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='cart.html'">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Qicuk View Modal End -->
</div>
<!-- Main Wrapper End -->


<!-- ************************* JS Files ************************* -->

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
<script>
                            // When the window has finished loading create our google map below
                            google.maps.event.addDomListener(window, 'load', init);

                            function init() {
                                // Basic options for a simple Google Map
                                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                                var mapOptions = {
                                    // How zoomed in you want the map to start at (always required)
                                    zoom: 12,

                                    scrollwheel: false,

                                    // The latitude and longitude to center the map (always required)
                                    center: new google.maps.LatLng(40.740610, -73.935242), // New York

                                    // How you would like to style the map. 
                                    // This is where you would paste any style found on

                                    styles: [{
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#e9e9e9"
                                        },
                                        {
                                            "lightness": 17
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "landscape",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#f5f5f5"
                                        },
                                        {
                                            "lightness": 20
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                            "color": "#ffffff"
                                        },
                                        {
                                            "lightness": 17
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{
                                            "color": "#ffffff"
                                        },
                                        {
                                            "lightness": 29
                                        },
                                        {
                                            "weight": 0.2
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "road.arterial",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#ffffff"
                                        },
                                        {
                                            "lightness": 18
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "road.local",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#ffffff"
                                        },
                                        {
                                            "lightness": 16
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#f5f5f5"
                                        },
                                        {
                                            "lightness": 21
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "poi.park",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#dedede"
                                        },
                                        {
                                            "lightness": 21
                                        }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.text.stroke",
                                        "stylers": [{
                                            "visibility": "on"
                                        },
                                        {
                                            "color": "#ffffff"
                                        },
                                        {
                                            "lightness": 16
                                        }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.text.fill",
                                        "stylers": [{
                                            "saturation": 36
                                        },
                                        {
                                            "color": "#333333"
                                        },
                                        {
                                            "lightness": 40
                                        }
                                        ]
                                    },
                                    {
                                        "elementType": "labels.icon",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "transit",
                                        "elementType": "geometry",
                                        "stylers": [{
                                            "color": "#f2f2f2"
                                        },
                                        {
                                            "lightness": 19
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                            "color": "#fefefe"
                                        },
                                        {
                                            "lightness": 20
                                        }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry.stroke",
                                        "stylers": [{
                                            "color": "#fefefe"
                                        },
                                        {
                                            "lightness": 17
                                        },
                                        {
                                            "weight": 1.2
                                        }
                                        ]
                                    }
                                    ]
                                };

                                // Get the HTML DOM element that will contain your map 
                                // We are using a div with id="map" seen below in the <body>
                                var mapElement = document.getElementById('google-map');

                                // Create the Google Map using our element and options defined above
                                var map = new google.maps.Map(mapElement, mapOptions);

                                // Let's also add a marker while we're at it
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(40.740610, -73.935242),
                                    map: map,
                                    title: 'Lazio',
                                    icon: "public/assets/img/icons/marker.png",
                                    animation: google.maps.Animation.BOUNCE
                                });
                            }
                        </script>

                        @stop