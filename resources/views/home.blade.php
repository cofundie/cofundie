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

@endsection