
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager 
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDTWJ3Z');</script>
     End Google Tag Manager -->
    <title>{{ config('app.name', 'COFUNDIE') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/jquery.selectBox.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/rangeslider.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/leaflet.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/map.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/css/skins/default.css')}}">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="list-inline">
                    <a href="tel:1-XXX-XXX-XXX8"><i class="fa fa-phone"></i>1-XXX-XXX-XXX8</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> </a>
                    </li>
                    <li>
                        <a href="#" class="rss"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#">/</a>
                    </li>
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                    </li>
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- main header start -->
<header class="main-header do-sticky" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="{{url('/')}}">
                        <img src="{{asset('assets/img/logos/cofundie.png')}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">
                                    Properties
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">
                                    About 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">
                                    contact
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{url('/shopping-cart')}}" class="nav-link">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->

@yield('content')

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>

                    <ul class="contact-info">
                        <li>
                            Address: No. 20 Aluguntugui Street, Ambassadorial Enclave, East Legon, Accra, Ghana
                        </li>
                        <li>
                            Email: <a href="mailto:info@cofundie.com">info@cofundie.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a>
                        </li>
                        <li>
                            Fax: +XXXX XXXX XXX
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Service</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Listing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Grid</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Blog</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Property Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Recent Properties</h4>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="assets/img/sub-property/sub-property.jpg" alt="sub-property">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h5>
                            <p>February 27, 2018</p>
                            <p> <strong>$245,000</strong></p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="assets/img/sub-property/sub-property-2.jpg" alt="sub-property-2">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h5>
                            <p>February 27, 2018</p>
                            <p> <strong>$245,000</strong></p>
                        </div>
                    </div>
                    <div class="media">
                        <a href="properties-details.html">
                            <img src="assets/img/sub-property/sub-property-3.jpg" alt="sub-property-3">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h5>
                            <p>February 27, 2018</p>
                            <p> <strong>$245,000</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy;  <?php echo date('Y'); ?> <a href="http://themevessel.com/" target="_blank">COFUNDIE</a>. Trademarks and brands are the property of their respective owners.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"  allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/property-1.jpg" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/property-1.jpg" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description"><h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet scelerisque
                                    risus. Donec
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Area</dt>
                                    <dd>2500 Sq Ft:3400</dd>
                                    <dt>Condition</dt>
                                    <dd>New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about-1.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-1.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="{{asset('assets/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.selectBox.js')}}"></script>
<script src="{{asset('assets/js/rangeslider.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/backstretch.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<script src="{{asset('assets/js/typed.min.js')}}"></script>
<script src="{{asset('assets/js/dropzone.js')}}"></script>
<script src="{{asset('assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('assets/js/leaflet.js')}}"></script>
<script src="{{asset('assets/js/leaflet-providers.js')}}"></script>
<script src="{{asset('assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/maps.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="{{asset('assets/js/ie-emulation-modes-warning.js')}}"></script>
<!-- Custom JS Script -->
<script  src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>