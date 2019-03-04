<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>{{ config('app.name', 'COFUNDIE') }} - Realestate Micro-investment</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/vendor/ion-rangeslider/css/ion.rangeSlider.css')}}">
  	<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/dist/chartist.min.css')}}">

    <!-- CSS Front Template -->
	<link rel="stylesheet" href="{{ asset('assets/css/theme.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header--abs-top-md  u-header--show-hide-md"
          data-header-fix-moment="500"
          data-header-fix-effect="slide">
        <div class="u-header__section">
            <!-- Topbar -->
            <div class="container u-header__hide-content pt-2">
                <div class="d-flex align-items-center">
                    <div class="ml-auto">
                        <!-- Jump To -->
                        <div class="d-inline-block d-sm-none position-relative mr-4">
                            <a id="jumpToDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button" aria-controls="jumpToDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#jumpToDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
								Jump to
							</a>

                            <div id="jumpToDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="jumpToDropdownInvoker">
                                <a class="dropdown-item" href="../pages/contacts-agency.html">+1 062 109 92 22</a>
                                <a class="dropdown-item" href="resume.html">Upload your resume</a>
                            </div>
                        </div>
                        <!-- End Jump To -->

                        <!-- Sign In -->
                        <div class="d-inline-block d-sm-none">
                            <a class="small font-weight-medium text-uppercase" href="../pages/login.html">Sign in</a>
                        </div>
                        <!-- End Sign In -->

                        <!-- Links -->
                        <div class="d-none d-sm-inline-block ml-sm-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="u-header__navbar-link" href="#">
                                        <span class="far fa-file-alt mr-1"></span> Upload your resume
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="u-header__navbar-link" href="../pages/login.html">
                                        <span class="fas fa-user-circle mr-1"></span> Sign in
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->
                    </div>
                </div>
            </div>
            <!-- End Topbar -->

            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                    <!-- Logo -->
                    <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{url('/')}}" aria-label="Front">
						<img class="u-header__navbar-brand-default" src="{{ asset('assets/img/cofundie-logo.png')}}" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn u-hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger" class="u-hamburger__box">
              			<span class="u-hamburger__inner"></span>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                        <ul class="navbar-nav u-header__navbar-nav">
                            <!-- Link -->
                            <li class="nav-item u-header__nav-item">
                                <a class="nav-link u-header__nav-link" href="{{url('/')}}">Home</a>
                            </li>
							<!-- End Link -->
							<!-- Link -->
                            <li class="nav-item u-header__nav-item">
                                <a class="nav-link u-header__nav-link" href="{{url('/properties')}}">Properties</a>
                            </li>
							<!-- End Link -->
							<!-- Link -->
                            <li class="nav-item u-header__nav-item">
                                <a class="nav-link u-header__nav-link" href="{{url('/properties')}}">About</a>
                            </li>
							<!-- End Link -->
							<!-- Link -->
                            <li class="nav-item u-header__nav-item">
                                <a class="nav-link u-header__nav-link" href="{{url('/properties')}}">Contact</a>
                            </li>
                            <!-- End Link -->


                            <!-- Button -->
                            <li class="nav-item u-header__nav-last-item">
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">
									Post Jobs
								</a>
                            </li>
                            <!-- End Button -->
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">

        @yield('content')

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
<footer class="bg-dark">
    <div class="container space-top-2">
        <div class="row justify-content-lg-between mb-7">
            <div class="col-6 col-md-4 col-lg-2 mb-7 mb-lg-0">
                <h4 class="h6 text-white">About</h4>

                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
                    <li><a class="list-group-item list-group-item-action" href="../pages/about-agency.html">About</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../pages/services-agency.html">Services</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../pages/careers.html">Careers</a></li>
                </ul>
                <!-- End List Group -->
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-7 mb-lg-0">
                <h4 class="h6 text-white">Account</h4>

                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
                    <li><a class="list-group-item list-group-item-action" href="../account/dashboard.html">Account</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../account/my-tasks.html">My tasks</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../account/projects.html">Projects</a></li>
                    <li><a class="list-group-item list-group-item-action" href="../account/invite-friends.html">Invite friends</a></li>
                </ul>
                <!-- End List Group -->
            </div>

            <div class="col-6 col-md-4 col-lg-2 mb-7 mb-lg-0">
                <h4 class="h6 text-white">Contacts</h4>

                <!-- Address -->
                <address class="list-group list-group-transparent list-group-white list-group-flush list-group-borderless mb-0">
            <a class="list-group-item list-group-item-action" href="#">+1 (062) 109-9222</a>
            <a class="list-group-item list-group-item-action" href="mailto:support@htmlstream.com">support@htmlstream.com</a>
            <a class="list-group-item list-group-item-action" href="#">153 Williamson Plaza, Maggieberg, MT 09514</a>
          </address>
                <!-- End Address -->
            </div>

            <div class="col-sm-6 col-md-5 col-lg-3 col-lg-3">
                <div class="mb-4">
                    <h4 class="h6 text-white mb-3">Subscribe</h4>

                    <!-- Subscribe Form -->
                    <form class="js-validate js-form-message">
                        <label class="sr-only" for="subscribeSrEmail">Your email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" id="subscribeSrEmail" placeholder="Your email" aria-label="Your email" aria-describedby="subscribeButton" required data-msg="Please enter a valid email address.">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary" id="subscribeButton">
                                    <span class="fas fa-paper-plane"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- End Subscribe Form -->
                </div>

                <h4 class="h6 text-white-70 mb-3">Stay in touch</h4>

                <!-- Social Networks -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-google btn-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-twitter btn-icon__inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                            <span class="fab fa-github btn-icon__inner"></span>
                        </a>
                    </li>
                </ul>
                <!-- End Social Networks -->
            </div>
        </div>

        <div class="row justify-content-between align-items-center space-1">
            <div class="col-5">
                <!-- Logo -->
                <a class="d-inline-flex align-items-center mb-3" href="{{url('/')}}" aria-label="Front">
					<img class="u-header__navbar-brand-default" height="50" src="{{ asset('assets/img/cofundie-white.png')}}" alt="Logo">
                </a>
                <!-- End Logo -->
            </div>

            <div class="col-6 text-right">
                <p class="small mb-0">&copy; Cofundie. <?php echo date('Y'); ?> All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
        <span class="fas fa-arrow-up u-go-to__inner"></span>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
    <script src="{{ asset('assets/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>

    <!-- JS Front -->
    <script src="{{ asset('assets/js/hs.core.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.header.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.unfold.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.focus-state.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.validation.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.slick-carousel.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.show-animation.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.svg-injector.js')}}"></script>
    <script src="{{ asset('assets/js/components/hs.go-to.js')}}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });

            // initialization of svg injector module
            $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
</body>

</html>