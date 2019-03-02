
<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'COFUNDIE') }} - Realestate Micro-investment</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700%7CPoppins:300,400,500,600,700" rel="stylesheet">
    <!--- End google font-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!--- End favicon-->
    <link rel="stylesheet" href="{{asset('assets/css/bundle.min.css')}}">
    <!--End ALL STYLESHEET -->
</head>

<body>
    <div class="st_header_top">
        <div class="container">
           <!--  <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 st-text-sm-center">
                    <div class="st_header_top_content m-md-b-10">
                        <p class="st-font-14 text-st-white">Welcome to coder community github</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex d-md-flex d-sm-block d-xs-block justify-content-end st-text-sm-center">
                    <div class="st_social_icon text-st-white">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-git-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="st_header-wrapper">
        <div id="stick-menu"></div>
        <header id="st-header-section" class="st_header_area st_header_btn p-t-b-none sticky-box-shadow">
            <div class="st_header_bottom bg-st-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-6 d-flex align-items-center">
                            <div class="st_logo">
                                <a href="#"><img src="assets/images/logo/cofundie.png" alt="St Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-sm-6 col-xs-6 d-flex justify-content-end">
                            <div class="st_nav_wrapper st_nav_wrapper_v2 st-mean-emerald text-right">
                                <div class="st_menu text-hover-emerald d-inline-block d-lg-inline-block d-md-none d-sm-none d-xs-none">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/properties')}}">Properties</a></li>
                                        <li><a href="{{url('/how-it-works')}}">why choose</a></li>
                                        <li><a href="{{url('/about-us')}}">About</a></li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                        <li class="m-l-r-none"><a href="{{route('register')}}" class="st_default_btn sign_up st_plain_text text-emerald text-hover-emerald border-emerald">Register</a></li>
                                        <li class="m-l-r-none"><a href="{{route('login')}}" class="st_default_btn sing_in bg-emerald bg-hover-st-aqua">Sign in</a></li>
                                    </ul>
                                </div>
                                <div class="st_menu_sign d-inline-block m-l-40 m-lg-l-15"><a class="st_header_search" href="#"><i class="fas fa-search"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!--End row -->
                </div>
                <!--End container -->
            </div>
        </header>
        <!--End st_header_area -->
    </div>

    @yield('content')

    <!--- End st_user_login_area -->
    <footer id="contact" class="st_default_footer_area bg-ebony-clay st_subscribe_fotter st_section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-md-l-100 p-sm-l-15">
                    <div class="st_footer_logo_warap">
                        <a href="#"><img src="assets/images/logo/fotter-logo-06.png" alt=""></a>
                        <p>Holisticly streamline client-centric intuitive markets and a good intuitive human capital. a great place for the placing in a muse.</p>
                    </div>
                    <div class="st_copyright_content d-lg-block st-d-md-none">
                        <p>All Right Reserved by <a class="text-white" href="#">Pixiefy</a> Copyright &copy;2018</p>
                    </div>
                </div>
                <div class="col-lg-8 p-md-l-100 p-sm-l-15">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 m-md-b-60 col-sm-6 offset-lg-1">
                            <div class="st_fotter_heding_title">
                                <h3 class="text-blue-bell">Links</h3></div>
                            <div class="st_fotter_menu text-st-white">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Doc</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 m-md-b-60 col-sm-6">
                            <div class="st_fotter_heding_title">
                                <h3 class="text-blue-bell">Support</h3></div>
                            <div class="st_fotter_menu text-st-white">
                                <ul>
                                    <li><a href="#">Stack Comunity</a></li>
                                    <li><a href="#">Support Docs</a></li>
                                    <li><a href="#">Help API Docs</a></li>
                                    <li><a href="#">Service Satus</a></li>
                                    <li><a href="#">Email Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 m-md-b-60">
                            <div class="st_fotter_heding_title">
                                <h3 class="text-blue-bell">Contact</h3></div>
                            <div class="st_social_icon text-st-white">
                                <p class="text-st-primary">info@saastrend.com</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-git-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--- End row -->
                </div>
            </div>
            <!--- End row -->
            <div class="d-none st-d-md-block">
                <div class="st_copyright_content text-center">
                    <p>All Right Reserved by <a class="text-white" href="{{ url('/') }}">{{ config('app.name', 'COFUNDIE') }}</a> Copyright &copy; <?php echo date('Y'); ?></p>
                </div>
            </div>
        </div>
        <!--- End container -->
    </footer>
    <!--- End st_default_footer_area -->
    <script src="{{asset('assets/js/bundle.min.js')}}"></script>
    <!-- End All Js -->
</body>

</html>
