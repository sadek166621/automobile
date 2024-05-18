<header class="main-header header-style-two">
    <!-- Header Upper -->
    <div class="header-upper">
      <div class="auto-container">
        <div class="inner-container clearfix">
          <div class="logo-box">
            <div class="logo">
              <a href="{{ route('home') }}"><img src="{{asset(get_setting('site_logo')->value)}}" alt="" title="" /></a>
            </div>
          </div>

          <div class="nav-outer clearfix">
            <!-- Mobile Navigation Toggler -->
            <div class="mobile-nav-toggler">
              <span class="icon flaticon-menu-2"></span>
            </div>
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-xl">
              <div class="navbar-header">
                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                <ul class="navigation clearfix">
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>
                    <a href="{{ route('page.about') }}">About Us</a>
                  </li>
                  <li>
                    <a href="{{ route('find-a-car') }}">Find A Car</a>
                  </li>
                  <li>
                    <a href="{{ route('our-customers') }}">Our Customers</a>
                  </li>
                  <!-- <li>
                    <a href="#">EMI Calculation</a>
                  </li> -->
                  <li>
                    <a href="#">Accessories</a>
                  </li>
                  <li class="dropdown">
                    <a href="#">Services</a>
                    <ul>
                      <li><a href="#">Pre Order</a></li>
                      <li>
                        <a href="#">Consultation</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#">Car Loan</a>
                    <ul>
                      <li><a href="#">Loan Help</a></li>
                      <li>
                        <a href="#">Loan Calculator</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>

                  <!-- <li class="dropdown">
                    <a href="#">Pages</a>
                    <ul>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="signup.html">Sign Up</a></li>
                      <li><a href="privacy.html">Privacy Policy</a></li>
                      <li><a href="terms.html">Terms & Condition</a></li>
                      <li>
                        <a href="insurance-form.html">Insurance Form</a>
                      </li>
                      <li><a href="not-found.html">Not Found</a></li>
                    </ul>
                  </li> -->
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div>
            </nav>
            <!-- Main Menu End-->
          </div>
        </div>
      </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
          <a href="{{ route('home') }}" title=""><img src="{{asset(get_setting('site_logo')->value)}}" alt="" title="" /></a>
        </div>
        <!--Right Col-->
        <div class="pull-right">
          <!-- Mobile Navigation Toggler -->
          <div class="mobile-nav-toggler">
            <span class="icon flaticon-menu-2"></span>
          </div>
          <!-- Main Menu -->
          <nav class="main-menu navbar-expand-md">

          </nav>
          <!-- Main Menu End-->
        </div>
      </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn">
        <span class="icon flaticon-multiply"></span>
      </div>

      <nav class="menu-box">
        <div class="nav-logo">
          <a href="{{ route('home') }}"><img src="{{asset(get_setting('site_logo')->value)}}" alt="" title="" /></a>
        </div>
        <div class="menu-outer">
          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
      </nav>
    </div>
    <!-- End Mobile Menu -->
  </header>
