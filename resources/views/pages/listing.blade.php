@extends('layouts.master')

@section('content')

<!-- Search Section -->
<div class="bg-light">
    <div class="container space-1">
        <div class="row mx-gutters-2">
            <div class="col-lg mb-3 mb-lg-0">
                <!-- Search Property Input -->
                <div class="js-focus-state">
                    <label class="sr-only" for="searchPropertySr">Search property</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="searchProperty">
                    <span class="fas fa-search"></span>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="text" id="searchPropertySr" placeholder="Search property" aria-label="Search property" aria-describedby="searchProperty" value="London">
                    </div>
                </div>
                <!-- End Search Property Input -->
            </div>

            <div class="col-sm-auto ml-md-auto mb-3 mb-lg-0">
                <!-- Filter -->
                <div class="position-relative">
                    <a id="filter2DropdownInvoker" class="btn btn-block btn-sm btn-soft-secondary dropdown-toggle" href="javascript:;" role="button" aria-controls="filter2Dropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#filter2Dropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-animation-in="slidefadeIn" data-unfold-animation-out="fadeOut">
                        <span class="fas fa-home dropdown-item-icon"></span> Property type
                    </a>

                    <div id="filter2Dropdown" class="dropdown-menu dropdown-unfold dropdown-menu-lg-right dropdown-menu-size-md p-5" aria-labelledby="filter2DropdownInvoker">
                        <div class="row">
                            <div class="col-sm-6 u-ver-divider u-ver-divider--none-sm mb-4 mb-sm-0">
                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyRadioChechbox1" name="propertyRadioChechbox" checked>
                                    <label class="custom-control-label" for="propertyRadioChechbox1">
                                        Show all
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyRadioChechbox2" name="propertyRadioChechbox">
                                    <label class="custom-control-label" for="propertyRadioChechbox2">
                                        Houses
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyRadioChechbox3" name="propertyRadioChechbox">
                                    <label class="custom-control-label" for="propertyRadioChechbox3">
                                        Flats
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyRadioChechbox4" name="propertyRadioChechbox">
                                    <label class="custom-control-label" for="propertyRadioChechbox4">
                                        Multi-family
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="propertyRadioChechbox5" name="propertyRadioChechbox">
                                    <label class="custom-control-label" for="propertyRadioChechbox5">
                                        Farms/land
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->
                            </div>

                            <div class="col-sm-6">
                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyAddedTimeRadioChechbox1" name="propertyAddedTimeRadioChechbox" checked>
                                    <label class="custom-control-label" for="propertyAddedTimeRadioChechbox1">
                                        Added anytime
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyAddedTimeRadioChechbox2" name="propertyAddedTimeRadioChechbox">
                                    <label class="custom-control-label" for="propertyAddedTimeRadioChechbox2">
                                        Last 24 hours
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyAddedTimeRadioChechbox3" name="propertyAddedTimeRadioChechbox">
                                    <label class="custom-control-label" for="propertyAddedTimeRadioChechbox3">
                                        Last 7 days
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" class="custom-control-input" id="propertyAddedTimeRadioChechbox4" name="propertyAddedTimeRadioChechbox">
                                    <label class="custom-control-label" for="propertyAddedTimeRadioChechbox4">
                                        Last 14 days
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->

                                <!-- Radio Checkbox -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="propertyAddedTimeRadioChechbox5" name="propertyAddedTimeRadioChechbox">
                                    <label class="custom-control-label" for="propertyAddedTimeRadioChechbox5">
                                        Last 30 days
                                    </label>
                                </div>
                                <!-- End Radio Checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter -->
            </div>

            <div class="col-sm-auto mb-3 mb-lg-0">
                <!-- Filter -->
                <div class="position-relative">
                    <a id="filter3DropdownInvoker" class="btn btn-block btn-sm btn-soft-secondary dropdown-toggle" href="javascript:;" role="button" aria-controls="filter3Dropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#filter3Dropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-animation-in="slidefadeIn" data-unfold-animation-out="fadeOut">
                        <span class="fas fa-sliders-h dropdown-item-icon"></span> Refine
                    </a>

                    <div id="filter3Dropdown" class="dropdown-menu dropdown-unfold dropdown-menu-sm-right dropdown-menu-size-lg p-5" aria-labelledby="filter3DropdownInvoker">
                        <div class="row">
                            <div class="col-lg-7 u-ver-divider u-ver-divider--none-lg mb-5 mb-lg-0">
                                <div class="pr-lg-2">
                                    <label class="form-label mb-2">Price range</label>

                                    <!-- Area Charts -->
                                    <div class="position-relative overflow-hidden mb-2" style="height: 80px;">
                                        <div class="js-area-chart position-absolute w-100" data-height="80px" data-high="1500" data-low="0" data-offset-x="0" data-offset-y="0" data-is-show-area="true" data-is-show-line="false" data-is-show-point="false" data-is-full-width="true" data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="false" data-fill-opacity="1" data-fill-colors='["#e7eaf3"]' data-stroke-color="#e7eaf3" data-text-color-x="#77838f" data-text-offset-top-x="0" data-text-size-y=".75rem" data-text-color-y="#77838f" data-points-colors='["#e7eaf3"]' data-series='[
                               [
                                 {"value": 289},
                                 {"value": 100},
                                 {"value": 700},
                                 {"value": 500},
                                 {"value": 1500},
                                 {"value": 200},
                                 {"value": 855},
                                 {"value": 321},
                                 {"value": 75}
                               ]
                             ]'></div>

                                        <div id="foregroundAreaChartDoubleResult" class="position-absolute h-100 overflow-hidden">
                                            <div class="js-area-chart position-absolute" data-height="80px" data-high="1500" data-low="0" data-offset-x="0" data-offset-y="0" data-is-show-area="true" data-is-show-line="false" data-is-show-point="false" data-is-full-width="true" data-is-stack-bars="true" data-is-show-axis-x="false" data-is-show-axis-y="false" data-is-show-tooltips="false" data-fill-opacity="1" data-fill-colors='["#377dff"]' data-stroke-color="#377dff" data-text-color-x="#77838f" data-text-offset-top-x="0" data-text-size-y=".75rem" data-text-color-y="#77838f" data-points-colors='["#377dff"]' data-series='[
                                   [
                                     {"value": 289},
                                     {"value": 100},
                                     {"value": 700},
                                     {"value": 500},
                                     {"value": 1500},
                                     {"value": 200},
                                     {"value": 855},
                                     {"value": 321},
                                     {"value": 75}
                                   ]
                                 ]'></div>
                                        </div>
                                    </div>
                                    <!-- End Area Charts -->

                                    <!-- Range Slider -->
                                    <input class="js-range-slider" type="text" data-extra-classes="u-range-slider" data-type="double" data-foreground-target="#foregroundAreaChartDoubleResult" data-min="0" data-max="999000" data-from="250000" data-to="750000" data-result-min="#rangeSliderExample7MinResult" data-result-max="#rangeSliderExample7MaxResult">

                                    <div class="d-flex justify-content-between align-items-center mt-6">
                                        <div>
                                            <span class="text-muted">Min price:</span>
                                            <span id="rangeSliderExample7MinResult" class="text-muted"></span>
                                        </div>
                                        <div>
                                            <span class="text-muted">Max price:</span>
                                            <span id="rangeSliderExample7MaxResult" class="text-muted"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="pl-lg-2">
                                    <label class="form-label mb-2">Status</label>

                                    <!-- Button Group -->
                                    <div id="statusLabel" class="btn-group btn-group-toggle d-flex mb-5" data-toggle="buttons">
                                        <label class="btn btn-sm btn-outline-secondary btn-custom-toggle-primary flex-fill active">
                                            <input type="radio" name="options" id="option1" checked> For sale
                                        </label>
                                        <label class="btn btn-sm btn-outline-secondary btn-custom-toggle-primary flex-fill">
                                            <input type="radio" name="options" id="option2"> For rent
                                        </label>
                                    </div>
                                    <!-- End Button Group -->

                                    <!-- Rooms -->
                                    <div class="row mx-gutters-2">
                                        <div class="col-6">
                                            <label class="form-label mb-2">Beds</label>

                                            <!-- Select -->
                                            <select id="bedLabel" class="js-select selectpicker dropdown-select" data-size="10" data-width="100%" data-style="btn-soft-secondary btn-sm">
                                                <option value="bedValueAll" selected>All</option>
                                                <option value="bedValueMin1">1</option>
                                                <option value="bedValueMin2">2</option>
                                                <option value="bedValueMin3">3</option>
                                                <option value="bedValueMin4">4</option>
                                                <option value="bedValueMin5">5</option>
                                                <option value="bedValueMin6">6</option>
                                                <option value="bedValueMin7">7</option>
                                                <option value="bedValueMin8">8</option>
                                                <option value="bedValueMin9">9</option>
                                                <option value="bedValueMin10">10</option>
                                            </select>
                                            <!-- End Select -->
                                        </div>

                                        <div class="col-6">
                                            <!-- Select -->
                                            <label for="bathLabel" class="form-label mb-2">Baths</label>

                                            <select id="bathLabel" class="js-select selectpicker dropdown-select" data-size="10" data-width="100%" data-style="btn-soft-secondary btn-sm">
                                                <option value="bedValueAll" selected>All</option>
                                                <option value="bedValueMax1">1</option>
                                                <option value="bedValueMax2">2</option>
                                                <option value="bedValueMax3">3</option>
                                                <option value="bedValueMax4">4</option>
                                                <option value="bedValueMax5">5</option>
                                                <option value="bedValueMax6">6</option>
                                                <option value="bedValueMax7">7</option>
                                                <option value="bedValueMax8">8</option>
                                                <option value="bedValueMax9">9</option>
                                                <option value="bedValueMax10">10</option>
                                            </select>
                                            <!-- End Select -->
                                        </div>
                                    </div>
                                    <!-- End Rooms -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter -->
            </div>

            <div class="col-sm-auto">
                <button type="submit" class="btn btn-sm btn-primary">Search</button>
            </div>
        </div>
    </div>
</div>
<!-- End Search Section -->

<!-- Filters Section -->
<div class="container space-1">
    <!-- Title -->
    <div class="mb-4">
        <h1 class="h4 font-weight-medium">Property to invest</h1>
    </div>
    <!-- End Title -->

</div>
<!-- End Filters Section -->

<!-- List of Properties Section -->
<div class="container space-top-1 space-bottom-2">
    <div class="row">
        <div class="col-lg-12">
            <!-- Card -->
            <div class="card-deck d-block d-md-flex">

            @foreach( $properties as $prop)
                <!-- Property Item -->
                <div class="card mb-5">
                    <!-- Gallery -->
                    <a class="js-fancybox u-media-viewer" href="javascript:;" data-src="{{ asset('assets/img/1920x1080/img36.jpg')}}" data-fancybox="fancyboxGallery1" data-caption="Front in frames - image #01" data-speed="700" data-is-infinite="true">
                        <img class="card-img-top w-100" src="{{ url('uploads/properties') }}/{{ $prop->location}}" height="350" alt="Image Description">

                        <div class="position-absolute top-0 left-0 pt-2 pl-3">
                            <span class="badge badge-success">Open</span>
                        </div>

                        <div class="position-absolute bottom-0 left-0 right-0 pb-2 px-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-8">
                                    <h2 class="h5 text-white mb-0">&#x20A6; {{ number_format($prop->price)}}</h2>
                                </div>

                                <div class="col-4 text-right">
                                    <span class="btn btn-icon btn-sm btn-white">
                        <span class="fas fa-images btn-icon__inner"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <img class="js-fancybox d-none" alt="Image Description" data-fancybox="fancyboxGallery1" data-src="{{ asset('assets/img/1920x1080/img37.jpg')}}" data-caption="Front in frames - image #02" data-speed="700" data-is-infinite="true">
                    <img class="js-fancybox d-none" alt="Image Description" data-caption="Front in frames - image #03" data-src="{{ asset('assets/img/1920x1080/img38.jpg')}}" data-fancybox="fancyboxGallery1" data-speed="700" data-is-infinite="true">
                    <!-- End Gallery -->

                    <div class="card-body p-4">
                        <!-- Location -->
                        <div class="mb-3">
                            <a class="font-size-1" href="{{url('/details/')}}/{{$prop->slug}}">
                                <h6>{{ $prop->title}}</h6>
                            </a>
                        </div>
                        <!-- End Location -->

                        <!-- Icon Blocks -->
                        <ul class="list-inline font-size-1">
                            <li class="list-inline-item mr-3" title="1 bedroom">
                                <span class="fas fa-bed text-muted mr-1"></span> 1
                            </li>
                            <li class="list-inline-item mr-3" title="1 bathroom">
                                <span class="fas fa-bath text-muted mr-1"></span> 1
                            </li>
                            <li class="list-inline-item mr-3" title="1 living room">
                                <span class="fas fa-couch text-muted mr-1"></span> 1
                            </li>
                            <li class="list-inline-item mr-3" title="square feet">
                                <span class="fas fa-ruler-combined text-muted mr-1"></span> 1,428 sqft
                            </li>
                        </ul>
                        <!-- End Icon Blocks -->
                        <ul class="list-inline font-size-1">
                            <li class=" mr-3" title="1 bedroom">
                                Duration: {{$prop->duration}}
                            </li>
                        </ul>
                        <ul class="list-inline font-size-1">
                            <li class=" mr-3" title="1 bedroom">
                                ROI: {{$prop->roi}}%
                            </li>
                        </ul>

                        <!-- Posted Info -->
                        <!-- <div class="media align-items-center border-top border-bottom py-3 mb-3">
                            <div class="u-avatar mr-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('assets/img/100x100/img1.jpg')}}" alt="Image Description" title="Monica Fox">
                            </div>
                            <div class="media-body">
                                <small class="d-block text-muted">Listed on Jan 4, 2019 by</small>
                                <span class="d-block">Monica Fox</span>
                            </div>
                        </div> -->
                        <!-- End Posted Info -->

                        <!-- Contacts -->
                        <div class="d-flex align-items-center font-size-1">
                            <a class="text-secondary" href="javascript:;">
                                <span class="fas fa-star mr-1"></span> Save
                            </a>
                            <a class="btn btn-sm btn-soft-primary transition-3d-hover ml-auto" href="{{url('/details/')}}/{{$prop->slug}}">
                                Details
                                <span class="fas fa-angle-right ml-1"></span>
                            </a>
                        </div>
                        <!-- End Contacts -->
                    </div>
                </div>
                <!-- End Property Item -->
            @endforeach
                
            </div>
               
            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center">
                <nav aria-label="Page navigation">
                {{ $properties->links() }}
                </nav>

                <small class="d-none d-sm-inline-block text-secondary">Page 1 out of 6</small>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
</div>
<!-- End List of Properties Section -->

@endsection