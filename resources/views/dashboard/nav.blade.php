 <div class="container space-top-1 pb-3">
        <div class="row">
          <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
            <div class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
              <!-- Breadcrumb -->
              <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
              <!-- End Breadcrumb -->

              <!-- Breadcrumb Nav Toggle Button -->
              <div class="d-lg-none">
                <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="breadcrumbNavBar"
                        data-toggle="collapse"
                        data-target="#breadcrumbNavBar">
                  <span id="breadcrumbHamburgerTrigger" class="u-hamburger__box">
                    <span class="u-hamburger__inner"></span>
                  </span>
                </button>
              </div>
              <!-- End Breadcrumb Nav Toggle Button -->
            </div>
          </div>

          <div class="col-lg-7 order-lg-1">
            <!-- User Info -->
            <div class="media d-block d-sm-flex align-items-sm-center">
          
              <div class="media-body">
                <h1 class="h3 text-white font-weight-medium mb-1">Howdy, {{ Auth::user()->name}}!</h1>
                <span class="d-block text-white">{{ Auth::user()->email }}</span>
              </div>
            </div>
            <!-- End User Info -->
          </div>
        </div>
      </div>

      <div class="container space-bottom-1 space-bottom-lg-0">
        <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
          <!-- Navbar -->
          <div class="u-header u-header-left-aligned-nav u-header--bg-transparent-lg u-header--white-nav-links z-index-4">
            <div class="u-header__section bg-transparent">
              <nav class="js-breadcrumb-menu navbar navbar-expand-lg u-header__navbar u-header__navbar--no-space">
                <div id="breadcrumbNavBar" class="collapse navbar-collapse u-header__navbar-collapse">
                  <ul class="navbar-nav u-header__navbar-nav">
                    <!-- General -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                        data-event="hover"
                        data-animation-in="slideInUp"
                        data-animation-out="fadeOut">
                      <a id="generalDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="generalDropdownMenu">
                        General
                      </a>

                      <ul id="generalDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="generalDropdown">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="dashboard.html">Dashboard</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="profile.html">Profile</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="my-tasks.html">My tasks</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="projects.html">Projects</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="members.html">Members</a></li>
                      </ul>
                    </li>
                    <!-- General -->

                   

                    <!-- Others -->
                    <li class="nav-item u-header__nav-item">
                      <a class="nav-link u-header__nav-link" href="plans.html">Properties</a>
                    </li>
                    <!-- Others -->

                    <!-- Accessibility -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                        data-event="hover"
                        data-animation-in="slideInUp"
                        data-animation-out="fadeOut">
                      <a id="accessibilityDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="accessibilityDropdownMenu">
                        Accessibility
                      </a>

                      <ul id="accessibilityDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="invite-friends.html">Invite friends</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="api-token.html">API Token</a></li>
                      </ul>
                    </li>
                    <!-- Accessibility -->

                     <!-- Account Settings -->
                     <li class="nav-item hs-has-sub-menu u-header__nav-item"
                        data-event="hover"
                        data-animation-in="slideInUp"
                        data-animation-out="fadeOut">
                      <a id="accountSettingsDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="accountSettingsDropdownMenu">
                        Account settings
                      </a>

                      <ul id="accountSettingsDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="accountSettingsDropdown">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="edit-profile.html">Edit profile</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="change-password.html">Change password</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="notifications.html">Notifications</a></li>
                      </ul>
                    </li>
                    <!-- Account Settings -->

                    <!-- Others -->
                    <li class="nav-item u-header__nav-item">
                      <a class="nav-link u-header__nav-link" href="plans.html">Referral</a>
                    </li>
                    <!-- Others -->
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          <!-- End Navbar -->

          <div class="ml-lg-auto">
            <!-- Button -->
            <a class="btn btn-sm btn-soft-white transition-3d-hover" href="#requestPaymentModal"
               data-modal-target="#requestPaymentModal">
              <span class="fas fa-plus small mr-2"></span>
              Request a Payment
            </a>
            <!-- End Button -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb Section -->