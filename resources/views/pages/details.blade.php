@extends('layouts.master')

@section('content')
    <!-- Gallery Section -->
    <div class="container-fluid position-relative p-2 mb-3">
        <div class="row mx-gutters-1">
            <div class="col-md-8 col-lg-6">
                <!-- Gallery -->
                <a class="js-fancybox u-media-viewer" href="javascript:;" data-src="{{url('/uploads/properties')}}/{{$image->location}}" data-fancybox="fancyboxGallery6" data-caption="Front in frames - image #01" data-speed="700" data-is-infinite="true">
                    <img class="img-fluid" height="455" src="{{url('/uploads/properties')}}/{{$image->location}}" alt="Image Description">

                    <div class="position-absolute bottom-0 right-0 pb-3 pr-3">
                        <span class="d-md-none btn btn-sm btn-white">
                <span class="fas fa-expand mr-2"></span> View Photos
                        </span>
                    </div>
                </a>
                <!-- End Gallery -->
            </div>

            <div class="col-md-4 col-lg-3 d-none d-md-inline-block">
                <!-- Gallery -->
                <a class="js-fancybox u-media-viewer mb-2" href="javascript:;" data-src="{{ asset('assets/img/1920x1080/img37.jpg')}}" data-fancybox="fancyboxGallery6" data-caption="Front in frames - image #02" data-speed="700" data-is-infinite="true">
                    <img class="img-fluid" src="{{ asset('assets/img/450x225/img1.jpg')}}" alt="Image Description">
                </a>
                <!-- End Gallery -->

                <!-- Gallery -->
                <a class="js-fancybox u-media-viewer" href="javascript:;" data-src="{{ asset('assets/img/1920x1080/img38.jpg')}}" data-fancybox="fancyboxGallery6" data-caption="Front in frames - image #03" data-speed="700" data-is-infinite="true">
                    <img class="img-fluid" src="{{ asset('assets/img/450x225/img2.jpg')}}" alt="Image Description">

                    <div class="position-absolute bottom-0 right-0 pb-3 pr-3">
                        <span class="d-sm-inline-block d-lg-none btn btn-sm btn-white">
                <span class="fas fa-expand mr-2"></span> View Photos
                        </span>
                    </div>
                </a>
                <!-- End Gallery -->
            </div>

            <div class="col-lg-3 d-none d-lg-inline-block">
                <!-- Gallery -->
                <a class="js-fancybox u-media-viewer mb-2" href="javascript:;" data-src="{{ asset('assets/img/1920x1080/img39.jpg')}}" data-fancybox="fancyboxGallery6" data-caption="Front in frames - image #04" data-speed="700" data-is-infinite="true">
                    <img class="img-fluid" src="{{ asset('assets/img/450x225/img3.jpg')}}" alt="Image Description">
                </a>
                <!-- End Gallery -->

                <!-- Gallery -->
                <a class="js-fancybox u-media-viewer" href="javascript:;" data-src="{{ asset('assets/img/1920x1080/img40.jpg')}}" data-fancybox="fancyboxGallery6" data-caption="Front in frames - image #04" data-speed="700" data-is-infinite="true">
                    <img class="img-fluid" src="{{ asset('assets/img/450x225/img4.jpg')}}" alt="Image Description">

                    <div class="position-absolute bottom-0 right-0 pb-3 pr-3">
                        <span class="d-none d-lg-inline-block btn btn-sm btn-white">
                <span class="fas fa-expand mr-2"></span> View Photos
                        </span>
                    </div>
                </a>
                <!-- End Gallery -->

                <img class="js-fancybox d-none" alt="Image Description" data-fancybox="fancyboxGallery6" data-src="{{ asset('assets/img/1920x1080/img41.jpg')}}" data-caption="Front in frames - image #05" data-speed="700" data-is-infinite="true">
                <img class="js-fancybox d-none" alt="Image Description" data-caption="Front in frames - image #06" data-src="{{ asset('assets/img/1920x1080/img42.jpg')}}" data-fancybox="fancyboxGallery6" data-speed="700" data-is-infinite="true">
            </div>
        </div>
    </div>
    <!-- End Gallery Section -->

    <!-- Property Description Section -->
    <div class="container space-bottom-2">
        <!-- Additional Functions -->
        <div class="d-md-flex justify-content-md-start align-items-md-center text-center mb-7">
            <div class="mr-md-auto mb-2 mb-md-0">
                <span class="font-size-1 font-weight-medium">Published:</span>
                <span class="text-secondary font-size-1">December 27, 2018</span>
            </div>

            <a class="js-go-to btn btn-sm btn-outline-secondary border-white" href="javascript:;" data-target="#calculatorSection" data-type="static">
                <span class="fas fa-calculator mr-2"></span> Calculator
            </a>

            <a class="btn btn-sm btn-outline-secondary border-white" href="javascript:;">
                <span class="far fa-heart mr-2"></span> Save
            </a>

            <a class="btn btn-sm btn-outline-secondary border-white" href="javascript:;">
                <span class="fas fa-share-alt mr-2"></span> Share
            </a>
        </div>
        <!-- End Additional Functions -->

        <!-- Title -->
        <div class="row justify-content-lg-between">
            <div class="col-lg-8">
                

                <h1 class="h3 font-weight-medium">{{ $details->title}}</h1>
            </div>

            <div class="col-lg-4 align-self-lg-end text-lg-right mb-5 mb-lg-0">
                <span class="h3 text-primary font-weight-medium">₦{{ number_format($details->price)}}</span>
            </div>
            <div class="col-lg-8">
                <div class="col-md-4">
                   
                </div>
                <div class="col-md-4">
                    @guest

                    <a href="{{ route('login')}}" class="btn btn-block btn-sm btn-primary btn-wide transition-3d-hover">Pay Now</a>

                    @else
                    <!-- Form -->
                    <form method="POST" action="{{ url('buy') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        @csrf
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                        <input type="hidden" name="property_id" value="{{$details->id}}">
                        <input type="hidden" name="amount" value="{{$details->price}}"> {{-- required in kobo --}}
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="roi" value="{{$details->roi}}">
                        <button type="submit" class="btn btn-block btn-sm btn-primary btn-wide transition-3d-hover">Invest Now</button>
                    </form>
                    <!-- End Form -->
                    @endguest
                </div>
            </div>
        </div>
        <!-- End Title -->

        <div class="row space-top-2">
            <div class="col-lg-8 mb-9 mb-lg-0">
                <!-- Nav Classic -->
                <ul id="SVGnavIcons" class="svg-preloader nav nav-classic nav-rounded nav-shadow nav-justified border" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link font-weight-medium active" id="pills-one-tab" data-toggle="pill" href="#pills-one" role="tab" aria-controls="pills-one" aria-selected="true">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                <figure class="ie-height-40 d-none d-md-block w-100 max-width-6 mr-3">
                                    <img class="js-svg-injector" src="{{ asset('assets/svg/icon-13.svg')}}" alt="SVG" data-parent="#SVGnavIcons">
                                </figure>
                                Property details
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-medium" id="pills-two-tab" data-toggle="pill" href="#pills-two" role="tab" aria-controls="pills-two" aria-selected="false">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                <figure class="ie-height-40 d-none d-md-block w-100 max-width-6 mr-3">
                                    <img class="js-svg-injector" src="{{ asset('assets/svg/icon-63.svg')}}" alt="SVG" data-parent="#SVGnavIcons">
                                </figure>
                                Floorplan
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-medium" id="pills-three-tab" data-toggle="pill" href="#pills-three" role="tab" aria-controls="pills-three" aria-selected="false">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                <figure class="ie-height-40 d-none d-md-block w-100 max-width-6 mr-3">
                                    <img class="js-svg-injector" src="{{ asset('assets/svg/icon-5.svg')}}" alt="SVG" data-parent="#SVGnavIcons">
                                </figure>
                                Market stats
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End Nav Classic -->

                <!-- Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane fade pt-6 show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                        <!-- Title -->
                        <div class="mb-3">
                            <h2 class="h5">Key facts</h2>
                        </div>
                        <!-- End Title -->

                        <!-- Key Facts -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Fact List -->
                                <ul class="list-unstyled font-size-1 mb-0">
                                    <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Property use:</span>
                                        <span class="text-secondary">{{ $details->property_use}}</span>
                                    </li>

                                    <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Property type:</span>
                                        <span class="text-secondary">{{ $details->property_type}}</span>
                                    </li>

                                  <!--   <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Year built:</span>
                                        <span class="text-secondary">2015</span>
                                    </li>

                                    <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Lot size:</span>
                                        <span class="text-secondary">1,328 sq.m.</span>
                                    </li> -->
                                </ul>
                                <!-- End Fact List -->
                            </div>

                            <div class="col-md-6">
                                <!-- Fact List -->
                                <ul class="list-unstyled font-size-1 mb-0">
                                    <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Bedrooms:</span>
                                        <span class="text-secondary">2</span>
                                    </li>

                                    <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Bathrooms:</span>
                                        <span class="text-secondary">1.5</span>
                                    </li>

                                  <!--   <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Kitchen:</span>
                                        <span class="text-secondary">1</span>
                                    </li>

                                    <li class="d-sm-flex justify-content-sm-between py-1">
                                        <span class="font-weight-medium">Living room:</span>
                                        <span class="text-secondary">3</span>
                                    </li> -->
                                </ul>
                                <!-- End Fact List -->
                            </div>
                        </div>
                        <!-- End Key Facts -->

                        <!-- View Info -->
                        <!-- <div class="border-top border-bottom py-4 my-6">
                            <div class="row justify-content-sm-between">
                                <div class="col-sm-6 text-sm-right u-ver-divider u-ver-divider--none-sm mb-2 mb-sm-0">
                                    <div class="pr-md-4">
                                        <span class="text-secondary">Last 30 days:</span>
                                        <strong class="text-dark">920 page views</strong>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="pl-md-4">
                                        <span class="text-secondary">Since listed:</span>
                                        <strong class="text-dark">471 page views</strong>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End View Info -->
                        <hr class="my-6">
                        <!-- Title -->
                        <div class="mb-3">
                            <h3 class="h5">Property description</h3>
                        </div>
                        <!-- End Title -->

                        <p>{{ $details->description}}</p>
                        
                        <!-- Collapse Link - Content -->
                        <div class="collapse" id="collapseLinkExample">
                            <h4 class="h6">Directions</h4>

                            <p>Proceed up the Otley Road from the Prince Of Wales roundabout and through the traffic lights with the turning into Harlow Moor Road. Continue ahead where the property can be found on the left hand side.</p>

                            <h4 class="h6">Strictly by appointment through Front House</h4>

                            <p>You may download, store and use the material for your own personal use and research. You may not republish, retransmit, redistribute or otherwise make the material available to any party or make the same available on any website, online service or bulletin board of your own or of any other party or make the same available in hard copy or in any other media without the website owner's express prior written consent. The website owner's copyright must remain on all reproductions of material taken from this website.</p>
                        </div>
                        <!-- End Collapse Link - Content -->

                        <!-- Collapse Link -->
                        <a class="link-collapse" data-toggle="collapse" href="#collapseLinkExample" role="button" aria-expanded="false" aria-controls="collapseLinkExample">
                            <span class="link-collapse__default">View More</span>
                            <span class="link-collapse__active">View Less</span>
                        </a>
                        <!-- End Collapse Link -->

                        <hr class="my-6">

                        <!-- Title -->
                        <div class="mb-3">
                            <h3 class="h5">Accessibility</h3>
                        </div>
                        <!-- End Title -->

                        <!-- Estimated Costs -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Accessibility List -->
                                <ul class="list-unstyled font-size-1 mb-0">
                                    <li class="d-flex align-items-center py-1">
                                        <span class="font-weight-medium">Location</span>
                                        <div class="ml-auto">
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center py-1">
                                        <span class="font-weight-medium">Area safety</span>
                                        <div class="ml-auto">
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center py-1">
                                        <span class="font-weight-medium">Close to schools</span>
                                        <div class="ml-auto">
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- End Accessibility List -->
                            </div>

                            <div class="col-md-6">
                                <!-- Accessibility List -->
                                <ul class="list-unstyled font-size-1 mb-0">
                                    <li class="d-flex align-items-center py-1">
                                        <span class="font-weight-medium">Low cost</span>
                                        <div class="ml-auto">
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center py-1">
                                        <span class="font-weight-medium">Built around</span>
                                        <div class="ml-auto">
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="far fa-star text-warning ml-1"></span>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center py-1">
                                        <span class="font-weight-medium">Value</span>
                                        <div class="ml-auto">
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="fas fa-star text-warning ml-1"></span>
                                            <span class="far fa-star text-warning ml-1"></span>
                                            <span class="far fa-star text-warning ml-1"></span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- End Accessibility List -->
                            </div>
                        </div>
                        <!-- End Estimated Costs -->

                        <hr class="my-6">

                        <!-- Title -->
                        <div class="mb-3">
                            <h3 class="h5 mb-1">Estimated running costs</h3>
                            <p class="small">Based on available 3rd party data</p>
                        </div>
                        <!-- End Title -->

                        <!-- Estimated Costs -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="h1 font-weight-medium mb-0">$810</span>
                                <p>Approximate costs per month</p>
                            </div>

                            <div class="col-md-6">
                                <!-- Costs List -->
                                <ul class="list-unstyled font-size-1 mb-0">
                                    <li class="d-flex align-items-center py-1">
                                        <span class="fas fa-hand-holding-usd min-width-4 text-secondary text-center mr-2"></span>
                                        <span class="font-weight-medium">Mortgage</span>
                                        <div class="ml-auto">
                                            <span class="text-secondary">$700 p/m</span>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center py-1">
                                        <span class="fas fa-burn min-width-4 text-secondary text-center mr-2"></span>
                                        <span class="font-weight-medium">Energy</span>
                                        <div class="ml-auto">
                                            <span class="text-secondary">from $72 p/m</span>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center py-1">
                                        <span class="fas fa-tint min-width-4 text-secondary text-center mr-2"></span>
                                        <span class="font-weight-medium">Water</span>
                                        <div class="ml-auto">
                                            <span class="text-secondary">from $38 p/m</span>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center py-1">
                                        <span class="fas fa-shield-alt min-width-4 text-secondary text-center mr-2"></span>
                                        <span class="font-weight-medium">Home insurance</span>
                                        <div class="ml-auto">
                                            <span class="text-secondary">not known</span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- End Costs List -->
                            </div>
                        </div>
                        <!-- End Estimated Costs -->
                    </div>

                    <div class="tab-pane fade pt-6" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                        <!-- Gallery -->
                        <a class="js-fancybox u-media-viewer" href="javascript:;" data-src="../../assets/img/others/img1.png" data-fancybox="fancyboxGalleryFloorPlan" data-caption="Floorplan image #01" data-speed="700" data-is-infinite="true">
                            <img class="img-fluid" src="../../assets/img/others/img1.png" alt="Image Description">
                        </a>
                        <!-- End Gallery -->

                        <div class="mt-2">
                            <p class="small">Image source from <a href="https://floorplanner.com/" target="_blank">floorplanner.com</a></p>
                        </div>
                    </div>

                    <div class="tab-pane fade pt-6" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                        <!-- Stats -->
                        <div class="mb-5">
                            <h2 class="h5">Sale activity</h2>
                            <p>Average estimated value for a flat in HG2:</p>

                            <span class="text-primary font-size-2 font-weight-medium">$271,401</span>
                            <span class="fas fa-angle-down text-danger"></span>
                            <span class="text-secondary">$7,710  (-2.762%)</span>
                            <small class="text-muted ml-1">Over the last 12 months</small>
                        </div>
                        <!-- End Stats -->

                        <!-- Stats -->
                        <div class="mb-5">
                            <h2 class="h5">In the last 12 months</h2>
                            <div class="row justify-content-sm-between">
                                <div class="col-sm-6">
                                    <p class="mb-0">Average sale price</p>
                                    <span class="text-primary font-size-2 font-weight-medium">$267,606</span>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">Properties sold</p>
                                    <span class="text-primary font-size-2 font-weight-medium">51</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Stats -->
                    </div>
                </div>
                <!-- End Tab Content -->

               

            </div>

            <div class="col-lg-4">
                <div id="stickyBlockStartPoint" class="pl-lg-4">
                    <!-- Contact Form -->
                    <div class="js-sticky-block card shadow-sm p-4" data-parent="#stickyBlockStartPoint" data-sticky-view="lg" data-start-point="#stickyBlockStartPoint" data-end-point="#stickyBlockEndPoint" data-offset-top="24" data-offset-bottom="0">
                        <!-- Header -->
                        <div class="media align-items-center mb-4">
                            <div class="u-avatar mr-3">
                                <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img8.jpg" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <h4 class="h6 mb-0">Ask me for more information</h4>
                            </div>
                        </div>
                        <!-- End Header -->
                        @guest

                        <a href="{{ route('login')}}" class="btn btn-block btn-sm btn-primary btn-wide transition-3d-hover">Pay Now</a>

                        @else
                        <!-- Form -->
                        <form method="POST" action="{{ url('buy') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            @csrf
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                            <input type="hidden" name="property_id" value="{{$details->id}}">
                            <input type="hidden" name="amount" value="{{$details->price}}"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="roi" value="{{$details->roi}}">
                            <button type="submit" class="btn btn-block btn-sm btn-primary btn-wide transition-3d-hover">Pay Now</button>
                        </form>
                        <!-- End Form -->
                        @endguest
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </div>

        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>

        <!-- Calculator Section -->
        <div id="calculatorSection" class="border-top border-bottom py-8 my-8">
            <!-- Title -->
            <div class="mb-3">
                <h2 class="h5">Payment calculator</h2>
            </div>
            <!-- End Title -->

            <div class="card bg-light p-5">
                <!-- Total Price -->
                <div class="mb-4">
                    <span class="h4 font-weight-medium">$37,469</span>
                    <span class="h6 font-weight-medium">monthly.</span>
                    <span class="h6 text-secondary font-weight-normal ml-3">In association with:</span>
                </div>
                <!-- End Total Price -->

                <!-- Stats -->
                <div class="row mb-2 mb-lg-0">
                    <div class="col-lg-7 mb-2 mb-lg-0">
                        <!-- Calculator Form -->
                        <form class="row">
                            <div class="col-md-6 mb-4">
                                <!-- Input -->
                                <label class="form-label">Price of property</label>

                                <div class="js-focus-state input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input class="form-control" type="text" value="$8,999,000" disabled>
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6 mb-4">
                                <!-- Input -->
                                <label class="form-label">Deposit</label>

                                <div class="js-focus-state input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input class="form-control" type="text" value="1,799,800">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6 mb-4">
                                <!-- Input -->
                                <label class="form-label">Interest rate</label>

                                <div class="js-focus-state input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    <input class="form-control" type="text" value="3.5">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-md-6 mb-4">
                                <!-- Input -->
                                <label class="form-label">Amortization</label>

                                <select class="custom-select">
                                    <option value="amortization1">30 years</option>
                                    <option selected>25 years</option>
                                    <option value="amortization2">20 years</option>
                                    <option value="amortization3">15 years</option>
                                    <option value="amortization4">10 years</option>
                                </select>
                                <!-- End Input -->
                            </div>
                        </form>
                        <!-- End Calculator Form -->
                    </div>

                    <div class="col-lg-5">
                        <!-- Progress -->
                        <div class="progress mb-3" style="height: .5rem;">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Progress -->

                        <!-- Fact List -->
                        <ul class="list-unstyled font-size-1 mb-0">
                            <li class="d-flex align-items-center py-1">
                                <small class="far fa-circle text-primary mr-2"></small>
                                <span class="font-weight-medium">Principal and Interest</span>
                                <div class="ml-auto">
                                    <span class="text-secondary">$35,943 /mo</span>
                                </div>
                            </li>

                            <li class="d-flex align-items-center py-1">
                                <small class="far fa-circle text-success mr-2"></small>
                                <span class="font-weight-medium">Property Taxes</span>
                                <div class="ml-auto">
                                    <span class="text-secondary">$1,526 /mo</span>
                                </div>
                            </li>

                            <li class="d-flex align-items-center py-1">
                                <small class="far fa-circle text-info mr-2"></small>
                                <span class="font-weight-medium">Yearly Condo Fees</span>
                                <div class="ml-auto">
                                    <span class="text-secondary">n/a</span>
                                </div>
                            </li>
                        </ul>
                        <!-- End Fact List -->
                    </div>
                </div>
                <!-- End Stats -->

                <p class="small">* These results are not provided by Front House and are only indicative based on a repayment mortgage product. Repayments will be subject to the product provided and your circumstances.</p>
            </div>
        </div>
        <!-- End Calculator Section -->

        <!-- Google Map Section -->
       <!--  <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9" data-type="custom" data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Front" data-pin="true" data-pin-icon="../../assets/img/map-markers/map-marker6.png" data-styles='[
             ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
             ["", "labels", [{"visibility":"on"}]],
             ["water", "", [{"color":"#bac6cb"}]]
           ]'></div> -->
        <!-- End Google Map Section -->

    </div>
    <!-- End Property Description Section -->
@endsection
