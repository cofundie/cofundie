@extends('layouts.master')

@section('content')
<!-- Banner start -->
<div class="banner banner-bg" id="particles-banner-wrapper">
    <div id="particles-banner"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-left">
                    <div class="carousel-content container">
                        <div class="t-center">
                            <h2 data-animation="animated fadeInDown delay-05s">Best Place To Invest In Properties</h2>
                            <p class="text-p" data-animation="animated fadeInUp delay-10s">
                                We create opportunities for you to earn more!
                            </p>
                            <a data-animation="animated fadeInUp delay-10s" href="{{route('register')}}" class="btn btn-lg btn-theme">Get Started Now</a>
                            <a data-animation="animated fadeInUp delay-10s" href="{{url('/projects-listing')}}" class="btn btn-lg btn-white-lg-outline">See Properties</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- services start -->
<div class="services content-area-2 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>Working with the Xero</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-5">
                    <i class="flaticon-user"></i>
                    <h5>Personalized Service</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-5">
                    <i class="flaticon-hotel-building"></i>
                    <h5>Luxury Real Estate Experts</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 d-none d-md-block d-lg-block">
                <div class="services-info-5">
                    <i class="flaticon-money-bag-with-dollar-symbol"></i>
                    <h5>Xero Building For Rent $ Sell</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services end -->
<!-- agent start -->
<div class="agent content-area">
    <div class="container">
        <div class="main-title">
            <h1>Our Team</h1>
            <p>The rocks stars</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="agent-3">
                    <div class="agent-photo">
                        <img src="{{asset('assets/img/avatar/avatar.jpg')}}" alt="avatar-5" class="img-fluid">
                    </div>
                    <div class="agent-details">
                        <h6>Team Lead</h6>
                        <h5><a href="agent-detail.html">Chukwuemeka Ndukwe</a></h5>
                        <div class="contact">
                            <p>
                                <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                            </p>
                            <p>
                                <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                            </p>
                            <p>
                                <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp delay-04s d-none d-xl-block d-lg-block">
                <div class="agent-3">
                    <div class="agent-photo">
                        <img src="{{asset('assets/img/avatar/avatar-2.jpg')}}" alt="avatar-7" class="img-fluid">
                    </div>
                    <div class="agent-details">
                        <h6>Marketing Lead</h6>
                        <h5><a href="agent-detail.html">Zahra Faye</a></h5>
                        <div class="contact">
                            <p>
                                <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                            </p>
                            <p>
                                <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                            </p>
                            <p>
                                <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                <div class="agent-3">
                    <div class="agent-photo">
                        <img src="{{asset('assets/img/avatar/avatar-3.jpg')}}" alt="avatar-6" class="img-fluid">
                    </div>
                    <div class="agent-details">
                        <h6>Tech Lead</h6>
                        <h5><a href="agent-detail.html">Victor Yunusa</a></h5>
                        <div class="contact">
                            <p>
                                <a href="mailto:info@themevessel.com"><i class="fa fa-envelope-o"></i>info@themevessel.com</a>
                            </p>
                            <p>
                                <a href="tel:+554XX-634-7071"> <i class="fa fa-phone"></i>+55 4XX-634-7071</a>
                            </p>
                            <p>
                                <a href="#"><i class="fa fa-skype"></i>sales.carshop</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- agent end -->
@endsection
