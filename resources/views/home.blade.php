@extends('layouts.master') 

@section('content')

<!-- Hero Section -->
<div id="SVGheroSectionBg" class="svg-preloader position-relative gradient-half-primary-v3">
      <div class="container space-2 space-top-md-5 space-top-lg-4">
        <div class="row align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <!-- Info -->
            <h1 class="mb-4">Investing in <span class="text-primary font-weight-semi-bold">Real Estate</span> made easy.</h1>
            <p>Cofundie makes investing in real estate easy and accessible to everyone.</p>
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

<!-- Front for -->
<div class="container space-2 space-bottom-md-3">
    <!-- Title -->
    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <h2 class="text-primary font-weight-normal">Who is <span class="font-weight-semi-bold">cofundie.</span> for?</h2>
        <p>All agencies. All startups. All fields of businesses. All countries.</p>
    </div>
    <!-- End Title -->

    <div class="row align-items-lg-center">
        <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
            <!-- Info -->
            <div class="pl-lg-7">
                <div class="mb-4">
                    <h3 class="h5">Busy Professionals</h3>
                    <p>Easy and fast adjustments of elements are possible with Front template. Find our more about our all-in-one programmatic template.</p>
                </div>

                <!-- Link -->
                <a class="card border-0 shadow-sm" href="{{{ route('register')}}}">
                    <div class="card-body p-4">
                        <div class="media align-items-center">
                            <div class="u-avatar mr-3">
                            </div>
                            <span class="media-body">
                    <span class="d-flex justify-content-between align-items-center font-weight-semi-bold">
                      Sign Up to cofundie. <span class="fas fa-angle-right"></span>
                            </span>
                            </span>
                        </div>
                    </div>
                </a>
                <!-- End Link -->
            </div>
            <!-- End Info -->
        </div>

        <div id="SVGchattingGirl" class="col-lg-7 order-lg-1 svg-preloader">
            <!-- SVG Icon -->
            <figure class="ie-chatting-girl">
                <img class="js-svg-injector" src="{{ asset('assets/svg/chatting-girl.svg')}}" alt="Image Description" data-parent="#SVGchattingGirl">
            </figure>
            <!-- End SVG Icon -->
        </div>
    </div>
</div>
<!-- End Front for -->

<!-- What We Do Section -->
<div id="whatWeDoSection" class="container space-2 space-md-3">
    <div class="row justify-content-lg-between">
        <div class="col-lg-4 mb-7 mb-lg-0">
            <!-- Title -->
            <small class="text-secondary text-uppercase font-weight-medium mb-2">How it Works?</small>
            <h3 class="font-weight-medium">More control and greater overview from simple, powerful features</h3>
            <p>This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
            <!-- End Title -->
        </div>

        <div class="col-lg-7">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <!-- Icon Blocks -->
                    <figure id="icon26" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
                        <img class="js-svg-injector" src="{{ asset('assets/svg/icon-26.svg')}}" alt="SVG" data-parent="#icon26">
                    </figure>
                    <h4 class="h5">Marketing</h4>
                    <p class="font-size-1">Front is an incredibly beautiful, fully responsive, and mobile-first projects on the web.</p>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 mb-3">
                    <!-- Icon Blocks -->
                    <figure id="icon27" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
                        <img class="js-svg-injector" src="{{ asset('assets/svg/icon-27.svg')}}" alt="SVG" data-parent="#icon27">
                    </figure>
                    <h4 class="h5">Clean design</h4>
                    <p class="font-size-1">Front template can be easily customized with its cutting-edge components and features.</p>
                    <!-- End Icon Blocks -->
                </div>

                <div class="w-100"></div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <!-- Icon Blocks -->
                    <figure id="icon25" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
                        <img class="js-svg-injector" src="{{ asset('assets/svg/icon-25.svg')}}" alt="SVG" data-parent="#icon25">
                    </figure>
                    <h4 class="h5">Social services <span class="badge badge-success font-weight-medium badge-pill ml-1">beta</span></h4>
                    <p class="font-size-1">Front is not only for developers but also for designers, and includes a Sketch file.</p>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6">
                    <!-- Icon Blocks -->
                    <figure id="icon28" class="svg-preloader ie-height-56 w-100 max-width-8 mb-3">
                        <img class="js-svg-injector" src="{{ asset('assets/svg/icon-28.svg')}}" alt="SVG" data-parent="#icon28">
                    </figure>
                    <h4 class="h5">Creative ideas</h4>
                    <p class="font-size-1">Every component and plugin is well documented with live examples.</p>
                    <!-- End Icon Blocks -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End What We Do Section -->

@endsection