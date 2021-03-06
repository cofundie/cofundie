@extends('layouts.master')

@section('content')
<!-- Breadcrumb Section -->
<div class="bg-primary">
     @include('dashboard.nav')

     

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">
        <!-- Stats -->
        <div class="card-deck d-block d-lg-flex card-lg-gutters-3 mb-6">
          <!-- Card -->
          <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-primary rounded-circle mr-4">
                  <span class="fas fa-money-bill-alt btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">₦ {{number_format($total)}}</span>
                  <h2 class="h6 text-secondary font-weight-normal mb-0">Expected Returns</h2>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-success rounded-circle mr-4">
                  <span class="fas fa-coins btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">₦1.32</span>
                  <h3 class="h6 text-secondary font-weight-normal mb-0">Reward balance</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-warning rounded-circle mr-4">
                  <span class="fas fa-exchange-alt btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">$0.00</span>
                  <h3 class="h6 text-secondary font-weight-normal mb-0">Pending balance</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Stats -->

        <!-- Title -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3 class="h6 mb-0">Your earning sources</h3>
          <a class="link-muted" href="#">View All</a>
        </div>
        <!-- End Title -->

        <!-- Earning Sources -->
        <div class="mb-7">
          <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
            <!-- Card -->
            @foreach($properties as $prop)
            <div class="card card-frame mb-3">
              <a class="card-body p-4" href="#">
                <div class="media align-items-center">
                  <!-- <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img5.jpg" alt="Image Description">
                  </div> -->
                  <div class="media-body">
                    <span class="text-dark">{{$prop->title}}</span>
                    <small class="d-block text-secondary">{{$prop->property_type}}</small>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-primary ml-3">
                        ₦{{ number_format($prop->amount)}}
                    </span>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
            <!-- End Card -->

          </div>
        </div>
        <!-- End Earning Sources -->

        <!-- Card -->
        <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
          <!-- Stats -->
          <div class="card mb-7 mb-lg-0">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Deposits</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="depositSettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="depositSettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#depositSettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="depositSettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="depositSettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cogs dropdown-item-icon"></small>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cloud-download-alt dropdown-item-icon"></small>
                      Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <!-- Deposit Info -->
              <div class="row mb-5">
                <div class="col-sm-6 mb-4 mb-sm-0">
                  <span class="align-top">$</span>
                  <span class="font-size-3 font-weight-medium text-lh-sm">50,102</span>
                  <div class="mb-1">
                    <span class="text-secondary font-size-1">Deposit:</span>
                    <span class="font-weight-medium font-size-1">$1,050</span>
                  </div>
                  <div>
                    <span class="text-primary font-weight-medium text-lh-sm">
                      <span class="fas fa-arrow-up text-success small"></span>
                      +2.1% ($122)
                    </span>
                  </div>
                </div>

                <div class="col-sm-6 align-self-end">
                  <!-- Pie Circle -->
                  <div class="js-pie text-center"
                     data-circles-text-class="content-centered-y"
                     data-circles-value="54"
                     data-circles-max-value="100"
                     data-circles-bg-color="rgba(0, 201, 167, 0.1)"
                     data-circles-fg-color="#00c9a7"
                     data-circles-radius="50"
                     data-circles-stroke-width="4"
                     data-circles-additional-text="%"
                     data-circles-duration="2000"
                     data-circles-scroll-animate="true"
                     data-circles-color="#00c9a7"
                     data-circles-font-size="24"></div>
                  <!-- End Pie Circle -->
                </div>
              </div>

              <button type="button" class="btn btn-block btn-sm btn-primary transition-3d-hover">Add Funds</button>
              <!-- End Deposit Info -->
            </div>

            <div class="card-footer p-5">
              <!-- Progress Info -->
              <div class="row align-items-center">
                <div class="col-6 u-ver-divider">
                  <label class="small text-muted">Goal:</label>
                  <small class="font-weight-medium">$100k</small>
                  <div class="js-hr-progress progress" style="height: 4px;">
                    <div class="js-hr-progress-bar progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="col-6">
                  <label class="small text-muted">Duration:</label>
                  <small class="font-weight-medium">6 months</small>
                  <div class="js-hr-progress progress" style="height: 4px;">
                    <div class="js-hr-progress-bar progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <!-- End Progress Info -->
            </div>
          </div>
          <!-- End Stats -->

          <!-- Stats -->
          <div class="card mb-7 mb-lg-0">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Balance</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="balanceSettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="balanceSettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#balanceSettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="balanceSettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="balanceSettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cogs dropdown-item-icon"></small>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cloud-download-alt dropdown-item-icon"></small>
                      Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <!-- Balance Info -->
              <div class="row align-items-center mb-4">
                <div class="col-6 u-ver-divider">
                  <label class="d-block small text-muted mb-0">Available:</label>
                  <span class="font-weight-medium">$45.99</span>
                </div>

                <div class="col-6">
                  <label class="d-block small text-muted mb-0">Pending:</label>
                  <span class="font-weight-medium">$0.00</span>
                </div>
              </div>

              <div class="row">
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">May</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Jun</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Jul</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Aug</h4>
                  </div>
                </div>
              </div>
              <!-- End Balance Info -->
            </div>
          </div>
          <!-- End Stats -->

          <!-- Indicator -->
          <div class="card">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Activity</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="activitySettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="activitySettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#activitySettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="activitySettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="activitySettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-eye dropdown-item-icon"></small>
                      Mark as read
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-eye-slash dropdown-item-icon"></small>
                      Mark as unread
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <div class="overflow-hidden">
                <div class="js-scrollbar pr-3" style="max-height: 300px;">
                  <!-- Activity Feed -->
                  <ul class="list-unstyled u-indicator-vertical-dashed">
                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-primary rounded-circle mr-3">
                        <span class="btn-icon__inner">A</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Amanta Owens</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Slack home page redesign</span></p>
                        <small class="d-block text-muted">30 min ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-success rounded-circle mr-3">
                        <span class="btn-icon__inner">S</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Sebastian Diaz</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Mapbox logo redesign</span></p>
                        <small class="d-block text-muted">44 min ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-warning rounded-circle mr-3">
                        <span class="btn-icon__inner text-white">F</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Eliza Donovan</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Spotify branding</span></p>
                        <small class="d-block text-muted">1 hour ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-primary rounded-circle mr-3">
                        <span class="btn-icon__inner">C</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Cler Lockhart</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Dropbox home page redesign</span></p>
                        <small class="d-block text-muted">15 hours ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-danger rounded-circle mr-3">
                        <span class="btn-icon__inner">J</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">James Collins</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">InVison branding</span></p>
                        <small class="d-block text-muted">1 day ago</small>
                      </div>
                    </li>
                  </ul>
                  <!-- End Activity Feed -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Indicator -->
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Content Section -->
@endsection