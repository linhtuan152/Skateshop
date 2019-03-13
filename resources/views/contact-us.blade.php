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
                                                    <p>No. 28 Lane 93 Vu Tong Phan Street <br> Thanh Xuan Ha Noi</p>
                                                </div>
                                            </div>
                                            <!-- Contact info widget end here -->

                                            <!-- Contact info widget start here -->
                                            <div class="contact-info-widget two-column-list sm-one-column mb--45">
                                                <div class="contact-info mb-sm--35">
                                                    <h3 class="heading__tertiary">Business Phone</h3>
                                                    <a href="#">+84 37 689 5670</a>
                                                </div>
                                                <div class="contact-info">
                                                    <h3 class="heading__tertiary">Say Hello</h3>
                                                    <a href="mailto:info@la-studioweb.com">linhtuan152@gmail.com</a>
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
                        
                        <!-- Searchform Popup End -->

                        <!-- Mini Cart Start -->
                        
                        <!-- Mini Cart End -->

                        <!-- Global Overlay Start -->
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