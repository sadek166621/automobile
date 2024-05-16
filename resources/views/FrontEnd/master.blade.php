<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <title>Maxima Automobiles</title>
  <link rel="shortcut icon" href="{{ asset('FrontEnd') }}/assets/images/favicon.png" type="image/x-icon" />
  <link rel="icon" href="{{ asset('FrontEnd') }}/assets/images/favicon.png" type="image/x-icon" />
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Stylesheets -->
  @include('FrontEnd.include.style')


</head>

<body>
  <div class="main-homepage">
    <div class="page-wrapper">
      <!-- Loading -->
      <div class="loading-window-outer d-none">
        <div class="loading-window">
          <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
          </div>

          <div class="text">
            <span>Loading</span><span class="dots">...</span>
          </div>
        </div>
      </div>
      <!-- End Loading -->

      <!-- Main Header-->
      @include('FrontEnd.include.header')
      <!-- End Main Header -->

      <!-- Main Slider Section -->
      @yield('content')
      <!-- End CTA Section -->

      @include('FrontEnd.include.footer')

      <!-- Calculator Palate  -->
      <div class="calculator-palate d-none">
        <div class="calculator-trigger">
          <i class="flaticon-keys"></i>
        </div>
        <span class="palate-tag">Calculator</span>
        <div class="palate-content">
          <!-- Styled Form -->
          <div class="styled-form style-two">
            <form>
              <!-- Form Group -->
              <div class="form-group">
                <label>What is your vehicle number*</label>
                <span class="icon flaticon-user-2"></span>
                <input type="text" placeholder="your policy number"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
              </div>

              <!-- Form Group -->
              <div class="form-group">
                <label>What is your city*</label>
                <span class="icon flaticon-edit"></span>
                <select class="custom-select-box nice-select">
                  <option>Your City</option>
                  <option>Sydney</option>
                  <option>Melbourne</option>
                  <option>Adelaide</option>
                  <option>Perth</option>
                </select>
              </div>

              <!-- Form Group -->
              <div class="form-group">
                <label>What is your car model?*</label>
                <span class="icon flaticon-edit"></span>
                <select class="custom-select-box nice-select">
                  <option>Your car model</option>
                  <option>Hatchback</option>
                  <option>Maruti Suzuki Swift</option>
                  <option>Sedan</option>
                  <option>Mercedes-Benz GLE</option>
                </select>
              </div>

              <div class="form-group">
                <label>What is you car fuel type*</label>
                <span class="icon flaticon-edit"></span>
                <select class="custom-select-box nice-select">
                  <option>Your Car fuel type</option>
                  <option>Gasoline</option>
                  <option>Diesel Fuel</option>
                  <option>Bio-diesel</option>
                  <option>Ethanol</option>
                </select>
              </div>

              <div class="form-group">
                <label>What is you car Purchase date & year*</label>
                <span class="icon flaticon-edit"></span>
                <span class="calendar-icon flaticon-calendar"></span>
                <input class="datepicker" autocomplete="off" type="text" name="username" value=""
                  placeholder="DD/MM/YYYY" required />
              </div>

              <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                  <h6>Vehicle for:</h6>
                  <div class="form-group margin">
                    <div class="radio-box">
                      <input type="radio" name="remember-password" id="type-1" />
                      <label for="type-1">Commercial use</label>
                    </div>
                  </div>
                  <div class="form-group margin">
                    <div class="radio-box">
                      <input type="radio" name="remember-password" id="type-2" />
                      <label for="type-2">Personal Use</label>
                    </div>
                  </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                  <h6>Policy status:</h6>
                  <div class="form-group margin">
                    <div class="radio-box">
                      <input type="radio" name="remember-password" id="type-3" />
                      <label for="type-3">Policy Expired</label>
                    </div>
                  </div>
                  <div class="form-group margin">
                    <div class="radio-box">
                      <input type="radio" name="remember-password" id="type-4" />
                      <label for="type-4">Policy not expired</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="theme-btn btn-style-four">
                  <span class="txt">Calculator </span><i class="fa fa-angle-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Calculator Palate  -->

      <!-- Contact Palate  -->
      <div class="cantact-palate d-none">
        <div class="calculator-trigger">
          <i class="flaticon-envelope"></i>
        </div>
        <span class="palate-tag">Contact Form</span>
        <div class="palate-content">
          <!-- Contact Form -->
          <div class="contact-form">
            <form method="post" action="https://themeim.com/demo/carsore/contact.html">
              <div class="form-group">
                <label>Enter Your Name*</label>
                <input type="text" name="username" placeholder="Your Name" required />
              </div>

              <div class="form-group">
                <label>Enter Your Email*</label>
                <input type="email" name="email" placeholder="Your Email" required />
              </div>

              <div class="form-group">
                <label>Subject (Optional)</label>
                <input type="text" name="subject" placeholder="Your Subject" required />
              </div>

              <div class="form-group">
                <label>Your Message</label>
                <textarea name="message" placeholder="Type Your Message"></textarea>
              </div>

              <div class="form-group">
                <button type="submit" class="theme-btn btn-style-four">
                  <span class="txt">Send Now </span><i class="fa fa-angle-right"></i>
                </button>
              </div>
            </form>
          </div>
          <!-- eND Contact Form -->
        </div>
      </div>
      <!-- End Contact Palate  -->
    </div>
  </div>
  <!-- End pagewrapper -->

  <!-- Scroll To Top -->
  <div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
  </div>

  @include('FrontEnd.include.script')
  @stack('js')
</body>

</html>
