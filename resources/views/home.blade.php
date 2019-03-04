@extends('layouts.master') 

@section('content')

<!-- Hero Section -->
<div id="SVGheroSectionBg" class="svg-preloader position-relative gradient-half-primary-v3">
      <div class="container space-2 space-top-md-5 space-top-lg-4">
        <div class="row align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Info -->
            <h1 class="mb-4">Investing in <span class="text-primary font-weight-semi-bold">Real Estate</span> made easy.</h1>
            <p>Front is an easy-to-use template that is loaded with all the features you will ever need.</p>
            <!-- End Info -->
          </div>

          <div class="col-lg-7">
            <!-- SVG Icon -->
            <figure class="ie-we-have-an-idea">
              <img class="js-svg-injector" src="{{ asset('assets/svg/we-have-an-idea.svg')}}" alt="Image Description"
                   data-parent="#SVGheroSectionBg">
            </figure>
            <!-- End SVG Icon -->
          </div>
        </div>
      </div>

    <!-- SVG Background -->
    <figure class="position-absolute right-0 bottom-0 left-0">
        <img class="js-svg-injector" src="{{ asset('assets/svg/wave-1-bottom-sm.svg')}}" alt="Image Description" data-parent="#SVGhireUsBg">
    </figure>
    <!-- End SVG Background Section -->
</div>
<!-- End Hero Section -->

<!-- Get Started Section -->
<div class="container space-2 space-md-3">
    <div class="row justify-content-md-between">
        <div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 mb-9 mb-lg-0">
            <!-- Icon Blocks -->
            <div class="text-center">
                <!-- SVG Icon -->
                <figure id="SVGcreateAccount" class="svg-preloader w-65 mx-auto mb-4">
                    <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/create-account.svg')}}" alt="Image Description" data-parent="#SVGcreateAccount">
                </figure>
                <!-- End SVG Icon -->

                <div class="mb-4">
                    <h1 class="h5">Create an account</h1>
                    <p>Create a Front account. Submit applications, save listings and manage jobs.</p>
                </div>
                <a class="btn btn-sm btn-soft-primary btn-wide transition-3d-hover" href="#">
              Create an Account
              <span class="fas fa-angle-right ml-2"></span>
            </a>
            </div>
            <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-9 mb-sm-0">
            <!-- Icon Blocks -->
            <div class="text-center">
                <!-- SVG Icon -->
                <figure id="SVGpostResume" class="svg-preloader w-65 mx-auto mb-4">
                    <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/post-resume.svg')}}" alt="Image Description" data-parent="#SVGpostResume">
                </figure>
                <!-- End SVG Icon -->

                <div class="mb-4">
                    <h2 class="h5">Post your resume</h2>
                    <p>Create an account and upload your resume to be found by the recruiters who search Monster's databases every day.</p>
                </div>
                <a class="btn btn-sm btn-soft-primary btn-wide transition-3d-hover" href="#">
              Post your Resume
              <span class="fas fa-angle-right ml-2"></span>
            </a>
            </div>
            <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-lg-4">
            <!-- Icon Blocks -->
            <div class="text-center">
                <!-- SVG Icon -->
                <figure id="SVGportfolio" class="svg-preloader w-65 mx-auto mb-4">
                    <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/portfolio.svg')}}" alt="Image Description" data-parent="#SVGportfolio">
                </figure>
                <!-- End SVG Icon -->

                <div class="mb-4">
                    <h3 class="h5">Employers: Post a job</h3>
                    <p>Your next hire is here. Our career advice, resume services and education partners give you a leg up in the job search.</p>
                </div>
                <a class="btn btn-sm btn-soft-primary btn-wide transition-3d-hover" href="#">
              Post a Job
              <span class="fas fa-angle-right ml-2"></span>
            </a>
            </div>
            <!-- End Icon Blocks -->
        </div>
    </div>
</div>
<!-- End Get Started Section -->

<!-- Divider -->
<div class="container">
    <hr class="my-0">
</div>
<!-- End Divider -->

<!-- Cards Section -->
<div class="container space-2 space-md-3">
    <!-- Title -->
    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <h2 class="font-weight-medium">Companies hiring now</h2>
        <p>We've got more than 7 thousand of 'em—so you've got plenty of options. Search your next job now.</p>
    </div>
    <!-- End Title -->

    <div class="card-deck d-block d-lg-flex card-lg-gutters-2">
        <div class="card card-frame transition-3d-hover mb-3">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">Senior Java Developer</h4>
                        <small class="d-block text-muted">London, UK</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>

        <div class="card card-frame transition-3d-hover mb-3">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img4.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">Junior UX Designer</h4>
                        <small class="d-block text-muted">Manchester, UK</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>

        <div class="card card-frame transition-3d-hover mb-3">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img5.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">Product Director</h4>
                        <small class="d-block text-muted">New York, NY</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
    </div>

    <div class="card-deck d-block d-lg-flex card-lg-gutters-2">
        <div class="card card-frame transition-3d-hover mb-3">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img6.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">Channel Sales Director</h4>
                        <small class="d-block text-muted">London, UK</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>

        <div class="card card-frame transition-3d-hover mb-3">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img7.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">Cloud Software Engineer</h4>
                        <small class="d-block text-muted">New York, NY</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>

        <div class="card card-frame transition-3d-hover mb-3">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img8.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">C# Developer</h4>
                        <small class="d-block text-muted">Chester, UK</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
    </div>

    <div class="card-deck d-block d-lg-flex card-lg-gutters-2 mb-9">
        <div class="card card-frame transition-3d-hover mb-3 mb-lg-0">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img9.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">Project Manager - SAP</h4>
                        <small class="d-block text-muted">Vancouver, BC</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>

        <div class="card card-frame transition-3d-hover mb-3 mb-lg-0">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img10.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">Database Analyst</h4>
                        <small class="d-block text-muted">London, UK</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>

        <div class="card card-frame transition-3d-hover">
            <!-- Card -->
            <a class="card-body" href="#">
                <div class="media">
                    <div class="u-avatar">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img11.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body px-4">
                        <h4 class="h6 text-dark mb-1">.NET Developer</h4>
                        <small class="d-block text-muted">San Francisco, CA</small>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
    </div>

    <div class="text-center">
        <a class="btn btn-primary transition-3d-hover" href="#">View all Open Jobs</a>
    </div>
</div>
<!-- End Cards Section -->

<!-- Testimonials -->
<div id="SVGbgElements5" class="svg-preloader position-relative gradient-half-primary-v1">
    <div class="container position-relative z-index-2 space-2 space-md-3">
        <!-- Title -->
        <div class="text-center mb-4">
            <!-- SVG Quote -->
            <figure class="mx-auto mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
                    <path class="fill-warning" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z" />
                </svg>
            </figure>
            <!-- End SVG Quote -->

            <h2 class="text-white font-weight-medium">Satisfied customers on Front</h2>
        </div>
        <!-- End Title -->

        <!-- Slick Carousel - Testimonials Main Nav -->
        <div id="testimonialsNavMain" class="js-slick-carousel u-slick text-center w-lg-75 mx-lg-auto mb-7" data-adaptive-height="true" data-infinite="true" data-fade="true" data-nav-for="#testimonialsNavPagination">
            <div class="js-slide">
                <!-- Testimonials -->
                <blockquote class="lead text-white-70 text-lh-md">
                    I followed a link for a job on Front and uploaded my resume. About two hours later, I received an email from an employer looking for someone with my skills. In a week's time and four interviews later I have a fantastic new job! Thanks Front!</blockquote>
                <!-- End Testimonials -->
            </div>

            <div class="js-slide">
                <!-- Testimonials -->
                <blockquote class="lead text-white-70 text-lh-md">
                    I had my resume public on Front for only two days and I got flooded with interviews from serious competitive employers that resulted in me choosing between very tempting offers. Don't waste your time. Go Front. It's real!</blockquote>
                <!-- End Testimonials -->
            </div>

            <div class="js-slide">
                <!-- Testimonials -->
                <blockquote class="lead text-white-70 text-lh-md">
                    I found my current Job on Front. I applied and got a reply from the company within one day. Hired within the week. No other job site has as many tech jobs as Front.</blockquote>
                <!-- End Testimonials -->
            </div>

            <div class="js-slide">
                <!-- Testimonials -->
                <blockquote class="lead text-white-70 text-lh-md">
                    I uploaded my resume on Front and within that week had several emails and calls about opportunities from recruiters. I decided to pursue an opportunity with HP and started working there that same month. Excellent site!</blockquote>
                <!-- End Testimonials -->
            </div>
        </div>
        <!-- End Slick Carousel - Testimonials Main Nav -->

        <!-- Slick Carousel - Testimonials Pagination Nav -->
        <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--gutters-3 u-slick--pagination-interactive" data-infinite="true" data-slides-show="3" data-center-mode="true" data-focus-on-select="true" data-nav-for="#testimonialsNavMain" data-responsive='[{
               "breakpoint": 1200,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 554,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
            <div class="js-slide rounded-pill p-2">
                <!-- Authors -->
                <div class="media align-items-center">
                    <div class="u-avatar mr-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img1.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 u-slick--pagination-interactive__title mb-0">Casy Williams</h4>
                        <p class="small u-slick--pagination-interactive__text mb-0">NERC CIP Consultant</p>
                    </div>
                </div>
                <!-- End Authors -->
            </div>
            <div class="js-slide rounded-pill p-2">
                <!-- Authors -->
                <div class="media align-items-center">
                    <div class="u-avatar mr-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img3.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 u-slick--pagination-interactive__title mb-0">Elon Fisher</h4>
                        <p class="small u-slick--pagination-interactive__text mb-0">Consultant</p>
                    </div>
                </div>
                <!-- End Authors -->
            </div>
            <div class="js-slide rounded-pill p-2">
                <!-- Authors -->
                <div class="media align-items-center">
                    <div class="u-avatar mr-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img2.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 u-slick--pagination-interactive__title mb-0">Linda Spears</h4>
                        <p class="small u-slick--pagination-interactive__text mb-0">Business Analyst</p>
                    </div>
                </div>
                <!-- End Authors -->
            </div>
            <div class="js-slide rounded-pill p-2">
                <!-- Authors -->
                <div class="media align-items-center">
                    <div class="u-avatar mr-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img4.jpg')}}" alt="Image Description">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 u-slick--pagination-interactive__title mb-0">Chris Johnson</h4>
                        <p class="small u-slick--pagination-interactive__text mb-0">Firewall Engineer</p>
                    </div>
                </div>
                <!-- End Authors -->
            </div>
        </div>
        <!-- End Slick Carousel - Testimonials Pagination Nav -->
    </div>

    <!-- SVG Background Element -->
    <figure class="position-absolute top-0 right-0 w-100 h-100">
        <img class="js-svg-injector" src="{{ asset('assets/svg/components/bg-elements-5.svg')}}" alt="SVG" data-parent="#SVGbgElements5">
    </figure>
    <!-- End SVG Background Element -->
</div>
<!-- End Testimonials -->

<!-- Clients Section -->
<div class="container space-2">
    <div class="js-slick-carousel u-slick" data-autoplay="true" data-speed="5000" data-infinite="true" data-slides-show="6" data-responsive='[{
             "breakpoint": 1200,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 992,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 768,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 576,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 480,
             "settings": {
               "slidesToShow": 2
             }
           }]'>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/airbnb.svg')}}" alt="Image Description">
        </div>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/paypal.svg')}}" alt="Image Description">
        </div>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/mapbox.svg')}}" alt="Image Description">
        </div>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/boring-company.svg')}}" alt="Image Description">
        </div>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/google.svg')}}" alt="Image Description">
        </div>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/embark.svg')}}" alt="Image Description">
        </div>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/spotify.svg')}}" alt="Image Description">
        </div>
        <div class="js-slide">
            <img class="u-clients" src="{{ asset('assets/svg/clients-logo/stripe.svg')}}" alt="Image Description">
        </div>
    </div>
</div>
<!-- End Clients Section -->

<hr class="my-0">

<!-- Features Section -->
<div class="container space-2 space-md-3">
    <div class="row justify-content-lg-between align-items-lg-center">
        <div class="col-lg-5 order-lg-2 mb-9 mb-lg-0">
            <!-- Description -->
            <h2 class="font-weight-medium">Millions of Jobs.<br>Find the one that suits you.</h2>
            <p>Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide.</p>
            <!-- End Description -->

            <!-- List -->
            <ul class="list-unstyled text-secondary">
                <li class="media my-3">
                    <div class="d-flex mt-1 mr-2">
                        <span class="fas fa-check text-success"></span>
                    </div>
                    <div class="media-body">
                        Verified, up-to-date Cards
                    </div>
                </li>
                <li class="media my-3">
                    <div class="d-flex mt-1 mr-2">
                        <span class="fas fa-check text-success"></span>
                    </div>
                    <div class="media-body">
                        Seamless job search
                    </div>
                </li>
                <li class="media my-3">
                    <div class="d-flex mt-1 mr-2">
                        <span class="fas fa-check text-success"></span>
                    </div>
                    <div class="media-body">
                        Job seekers and employers connect
                    </div>
                </li>
            </ul>
            <!-- End List -->
        </div>

        <div class="col-lg-7 order-lg-1">
            <!-- SVG Shape -->
            <figure id="SVGgetAnswered" class="svg-preloader ie-get-answered">
                <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/get-answered.svg')}}" alt="Image Description" data-parent="#SVGgetAnswered">
            </figure>
            <!-- End SVG Shape -->
        </div>
    </div>
</div>
<!-- End Features Section -->

<!-- Stats Section -->
<div class="container space-bottom-2 space-bottom-md-3">
    <div class="row justify-content-md-between">
        <div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 mb-7 mb-lg-0">
            <!-- Figures -->
            <div class="text-center">
                <h3 class="display-2 text-primary font-weight-semi-bold">2M</h3>
                <p>2 million daily active users</p>
            </div>
            <!-- End Figures -->
        </div>

        <div class="col-sm-6 col-lg-4 mb-7 mb-sm-0">
            <!-- Figures -->
            <div class="text-center">
                <h3 class="display-2 text-primary font-weight-semi-bold">7k</h3>
                <p>Over 7k open job positions</p>
            </div>
            <!-- End Figures -->
        </div>

        <div class="col-sm-6 col-lg-4">
            <!-- Figures -->
            <div class="text-center">
                <h3 class="display-2 text-primary font-weight-semi-bold">10M</h3>
                <p>Over 10 million stories shared</p>
            </div>
            <!-- End Figures -->
        </div>
    </div>
</div>
<!-- End Stats Section -->

<!-- Divider -->
<div class="container">
    <hr class="my-0">
</div>
<!-- End Divider -->

<!-- Featured Jobs Section -->
<div id="SVGbgElements6" class="svg-preloader position-relative overflow-hidden">
    <div class="container space-2 space-md-3">
        <!-- Title -->
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center mb-5">
            <h2 class="h3 font-weight-medium">Featured Jobs</h2>
            <a class="link-muted" href="#">
            See all Jobs
            <span class="fas fa-angle-right small ml-2"></span>
          </a>
        </div>
        <!-- End Title -->

        <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
            <div class="card card-frame text-center mb-5">
                <!-- Card -->
                <div class="card-body p-6">
                    <div class="u-avatar mx-auto mb-4">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                    </div>
                    <div class="mb-4">
                        <h4 class="h6 mb-1">IT business manager</h4>
                        <p>London, UK</p>
                    </div>
                    <a class="btn btn-sm btn-soft-primary btn-wide" href="#">View Details</a>
                </div>
                <!-- End Card -->
            </div>

            <div class="card card-frame text-center mb-5">
                <!-- Card -->
                <div class="card-body p-6">
                    <div class="u-avatar mx-auto mb-4">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img4.jpg')}}" alt="Image Description">
                    </div>
                    <div class="mb-4">
                        <h4 class="h6 mb-1">Membership director</h4>
                        <p>Manchester, UK</p>
                    </div>
                    <a class="btn btn-sm btn-soft-primary btn-wide" href="#">View Details</a>
                </div>
                <!-- End Card -->
            </div>

            <div class="card card-frame text-center mb-5">
                <!-- Card -->
                <div class="card-body p-6">
                    <div class="u-avatar mx-auto mb-4">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img5.jpg')}}" alt="Image Description">
                    </div>
                    <div class="mb-4">
                        <h4 class="h6 mb-1">UI/UX designer</h4>
                        <p>New York, NY</p>
                    </div>
                    <a class="btn btn-sm btn-soft-primary btn-wide" href="#">View Details</a>
                </div>
                <!-- End Card -->
            </div>
        </div>

        <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
            <div class="card card-frame text-center mb-5 mb-lg-0">
                <!-- Card -->
                <div class="card-body p-6">
                    <div class="u-avatar mx-auto mb-4">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img6.jpg')}}" alt="Image Description">
                    </div>
                    <div class="mb-4">
                        <h4 class="h6 mb-1">Facility project manager</h4>
                        <p>London, UK</p>
                    </div>
                    <a class="btn btn-sm btn-soft-primary btn-wide" href="#">View Details</a>
                </div>
                <!-- End Card -->
            </div>

            <div class="card card-frame text-center mb-5 mb-lg-0">
                <!-- Card -->
                <div class="card-body p-6">
                    <div class="u-avatar mx-auto mb-4">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img7.jpg')}}" alt="Image Description">
                    </div>
                    <div class="mb-4">
                        <h4 class="h6 mb-1">Electrical systems specialist</h4>
                        <p>New York, NY</p>
                    </div>
                    <a class="btn btn-sm btn-soft-primary btn-wide" href="#">View Details</a>
                </div>
                <!-- End Card -->
            </div>

            <div class="card card-frame text-center">
                <!-- Card -->
                <div class="card-body p-6">
                    <div class="u-avatar mx-auto mb-4">
                        <img class="img-fluid rounded" src="{{ asset('assets/img/160x160/img8.jpg')}}" alt="Image Description">
                    </div>
                    <div class="mb-4">
                        <h4 class="h6 mb-1">Account manager</h4>
                        <p>Chester, UK</p>
                    </div>
                    <a class="btn btn-sm btn-soft-primary btn-wide" href="#">View Details</a>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>

    <!-- SVG Background Element -->
    <figure class="position-absolute top-0 right-0 z-index-n1 w-100 h-100">
        <img class="js-svg-injector" src="{{ asset('assets/svg/components/bg-elements-6.svg')}}" alt="SVG" data-parent="#SVGbgElements6">
    </figure>
    <!-- End SVG Background Element -->
</div>
<!-- End Featured Jobs Section -->

@endsection