@extends('FrontEnd.master')
@section('content')
<section class="page-title">
    <div class="background-container">
      <img class="left-image" src="{{asset('FrontEnd')}}/assets/images/background/header-left-bg.png" alt="" />
      <img class="right-image" class="right-image" src="{{asset('FrontEnd')}}/assets/images/background/7.jpg" alt="" />
    </div>
    <div class="service-container">
      <div class="section-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer" style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-8.png)">
        </div>
      </div>

      <div class="auto-container">
        <h1>Details</h1>
        <ul class="page-breadcrumb">
          <li><a href="index.html">home</a></li>
          <li>Car Information</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- End Page Title -->

  <!-- Details -->
  <section class="car-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="car-image">
            <img src="{{ asset($cars->banner_img) }}" alt="">
          </div>
          <!-- Description -->
          <div class="car-descrip">
            <h4>Description</h4>
            {!! $cars->description_en !!}
          </div>

          <!-- Features -->
          <div class="car-descrip">
            <h4>Features</h4>
            <div class="row">
              <div class="col-6">
                <ul>
                  <li>15" aluminum Wheels</li>
                  <li>Bluetooth</li>
                  <li>Child seat anchors</li>
                  <li>Keyless start</li>
                  <li>LED headlights</li>
                </ul>
              </div>
              <div class="col-6">
                <ul>
                  <li>Push Start Ignition</li>
                  <li>Reversing camera</li>
                  <li>Side airbags</li>
                  <li>Sound system</li>
                  <li>Traction Control</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- FAQs -->
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-12">
          <div class="sidebar-car">
            <div class="title">
              <h4>{{ $cars->title_en }}</h4>
            </div>
            <div class="price">
              <h4>ট {{ number_format($cars->price, 0, '.', ',') }}</h4>
            </div>
            <div class="item">
              <div>
                <h6>Car Information</h6>
              </div>
              <div class="features"><span><i class="omfi-door"></i> Manufacturer:</span>
                <p>{{ $cars->manufacturer }}</p>
              </div>
              <div class="features"><span><i class="omfi-passengers"></i> Year of Manufacturer:</span>
                <p>{{ $cars->year_of_manufacturer }}</p>
              </div>
              <div class="features"><span><i class="omfi-luggage"></i> Engine Size (cc):</span>
                <p>{{ $cars->engine }}</p>
              </div>
              <div class="features"><span><i class="omfi-condition"></i> Transmission:</span>
                <p>{{ $cars->transmission }}</p>
              </div>
              <div class="features"><span><i class="omfi-age"></i> Fuel Type:</span>
                <p>{{ $cars->fuel_type }}</p>
              </div>
              <div class="features"><span><i class="omfi-age"></i> Drive Train:</span>
                <p>{{ $cars->drive_train }}</p>
              </div>
              <div class="features"><span><i class="omfi-age"></i> Mileage(km):</span>
                <p>{{ $cars->mileage }}</p>
              </div>
              <div class="features"><span><i class="omfi-age"></i> Body Type:</span>
                <p>{{ $cars->body_type }}</p>
              </div>
              <div class="features"><span><i class="omfi-age"></i> Exterior Color:</span>
                <p>{{ $cars->exterior_color }}</p>
              </div>
              <div class="btn-double mt-30" data-grouptype="&amp;"> <a data-bs-toggle="modal"
                  data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="tel:{{ get_setting('phone')->value }}"><span class="fa fa-phone"></span>
                  Call Now</a> <a href="tel:{{ get_setting('phone')->value }}" target="_blank"><span class="fab fa-whatsapp"></span> WhatsApp</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="auto-container">
      <div class="inner-container" style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-5.png)">
        <div class="row clearfix">
          <!-- Title Column -->
          <div class="title-column col-lg-5 col-md-12 col-sm-12">
            <div class="inner-column">
              <h3>Let us take care about your veicle</h3>
            </div>
          </div>

          <!-- Form Column -->
          <div class="form-column col-lg-7 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="newsletter-form">
                <form method="post" action="https://themeim.com/demo/carsore/contact.html">
                  <div class="form-group">
                    <span class="icon fa fa-envelope"></span>
                    <input type="email" name="email" value="" placeholder="Enter your mail" required="" />
                    <button type="submit" class="theme-btn flaticon-send"></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End CTA Section -->

  <!-- Main Footer -->
  <footer class="main-footer" style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-2.png)">
    <div class="auto-container">
      <!-- Upper Box -->
      <div class="upper-box">
        <div class="row clearfix">
          <!-- Info Column -->
          <div class="info-column col-lg-4 col-md-6 col-sm-12">
            <div class="inner-column">
              <span class="icon flaticon-call-2"></span>
              Call Now<br />
              <a href="tel:+10909876534">+880 1700 000 000</a>
            </div>
          </div>

          <!-- Info Column -->
          <div class="info-column col-lg-4 col-md-6 col-sm-12">
            <div class="inner-column">
              <span class="icon flaticon-email-2"></span>
              24*7 Online Support<br />
              <a href="#"><span class="">example@gmail.com</span></a>
            </div>
          </div>

          <!-- Info Column -->
          <div class="info-column col-lg-4 col-md-6 col-sm-12">
            <div class="inner-column">
              <span class="icon flaticon-maps-and-flags"></span>
              Office Adress<br />
              <strong>House-09, Road-06, Dhanmondi, Dhaka-1207</strong>
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
                <a href="index.html"><img src="{{asset('FrontEnd')}}/assets/images/maxima-logo-inversed.webp" alt="" /></a>
              </div>
              <div class="text">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text.
              </div>
              <!-- Social Box -->
              <ul class="social-box">
                <li>
                  <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                </li>
                <li>
                  <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                </li>
                <li>
                  <a href="https://google.com/" class="fab fa-google"></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" class="fab fa-linkedin-in"></a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Footer Column -->
          <div class="footer-column col-lg-5 col-md-6 col-sm-12">
            <div class="footer-widget links-widget">
              <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
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
                <div class="column col-lg-6 col-md-6 col-sm-12">
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
@endsection
