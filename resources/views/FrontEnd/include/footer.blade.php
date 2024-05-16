<!-- Main Footer -->
<footer class="main-footer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-2.png)">
    <div class="auto-container">
      <!-- Upper Box -->
      <div class="upper-box">
        <div class="row clearfix">
          <!-- Info Column -->
          <div class="info-column col-lg-4 col-md-6 col-sm-12">
            <div class="inner-column">
              <span class="icon flaticon-call-2"></span>
              Call Now<br />
              <a href="tel:{{ get_setting('phone')->value }}">{{ get_setting('phone')->value }}</a>
            </div>
          </div>

          <!-- Info Column -->
          <div class="info-column col-lg-4 col-md-6 col-sm-12">
            <div class="inner-column">
              <span class="icon flaticon-email-2"></span>
              24*7 Online Support<br />
              <a href="#"><span class="">{{ get_setting('email')->value }}</span></a>
            </div>
          </div>

          <!-- Info Column -->
          <div class="info-column col-lg-4 col-md-6 col-sm-12">
            <div class="inner-column">
              <span class="icon flaticon-maps-and-flags"></span>
              Office Adress<br />
              <strong>{{ get_setting('business_address')->value }}</strong>
            </div>
          </div>
        </div>
      </div>
      <!-- End Upper Box -->

      <!-- Widgets Section -->
      <div class="widgets-section">
        <div class="row clearfix">
          <!-- Footer Column -->
          <div class="footer-column col-lg-4 col-md-6 col-sm-12">
            <div class="footer-widget logo-widget">
              <div class="logo">
                <a href="{{ route('home') }}"><img src="{{asset(get_setting('site_footer_logo')->value)}}" alt="" /></a>
              </div>
              <div class="text">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text.
              </div>
              <!-- Social Box -->
              <ul class="social-box">
                <li>
                  <a href="{{ get_setting('facebook_url')->value }}" class="fab fa-facebook-f"></a>
                </li>
                <li>
                  <a href="{{ get_setting('twitter_url')->value }}" class="fab fa-twitter"></a>
                </li>
                <li>
                  <a href="{{ get_setting('phone')->value }}" class="fab fa-google"></a>
                </li>
                <li>
                  <a href="{{ get_setting('linkedin_url')->value }}" class="fab fa-linkedin-in"></a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Footer Column -->
          <div class="footer-column col-lg-5 col-md-6 col-sm-12">
            <div class="footer-widget links-widget">
              <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-6">
                  <h3>Company</h3>
                  <ul class="list-links">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">our team</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">insurance</a></li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">contact us</a></li>
                  </ul>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-6">
                  <h3>Insurance</h3>
                  <ul class="list-links">
                    <li><a href="#">car insurance</a></li>
                    <li><a href="#">bike insurance</a></li>
                    <li><a href="#">bus insurance</a></li>
                    <li><a href="#">mini truck insurance</a></li>
                    <li><a href="#">jeep insurance</a></li>
                    <li><a href="#">lorry insurance</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Footer Column -->
          <div class="footer-column col-lg-3 col-md-6 col-sm-12">
            <div class="footer-widget quote-widget">
              <h3>Request a Quote</h3>

              <!-- Quote Form -->
              <div class="quote-form">
                <form method="post" action="https://themeim.com/demo/carsore/appointment.html">
                  <div class="clearfix">
                    <div class="form-group">
                      <input type="text" name="username" placeholder="Your Name *" required="" />
                    </div>

                    <div class="form-group">
                      <input type="email" name="email" placeholder="Your Email" required="" />
                    </div>

                    <!--Form Group-->
                    <div class="form-group">
                      <select class="custom-select-box nice-select">
                        <option>Your Subject</option>
                        <option>Subject 01</option>
                        <option>Subject 02</option>
                        <option>Subject 03</option>
                        <option>Subject 04</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <button class="theme-btn submit-btn" type="submit" name="submit-form">
                        Submit Now
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="clearfix">
          <div class="pull-left">
            <div class="copyright">
              &copy; 2024 | All rights reserved by <br />
              <span>Maxima Automobiles</span>
            </div>
          </div>
          <div class="pull-right">
            <div class="copyright">
              Designed & Developed By <br />
              <span>Sky Dream IT</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Main Footer -->
