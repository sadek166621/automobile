@extends('FrontEnd.master')
@section('content')
<style>
    .page-wid {
    position: static;
    max-width: 1400px;
    padding: 0px 15px;
    margin: 0 auto;
    }
    .team-block .inner-box .image img {
    position: relative;
    width: 100%;
    display: block;
    height: 260px;
    }
</style>
<section class="page-title">
    <div class="background-container">
      <img class="left-image" src="{{asset('FrontEnd')}}/assets/images/background/header-left-bg.png" alt="" />
      <img class="right-image" class="right-image" src="{{asset('FrontEnd')}}/assets/images/background/4.jpg" alt="" />
    </div>
    <div class="service-container">
      <div class="section-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer" style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-8.png)">
        </div>
      </div>

      <div class="page-wid">
        <h1>Our Customers</h1>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">home</a></li>
          <li>Our Customer</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- End Page Title -->

  <!-- Team Page Section -->
  <section class="team-page-section">
    <div class="page-wid" >
    {{-- <div class="auto-container"> --}}
      <!-- Sec Title -->
      <div class="sec-title centered">
        <h2>668+ HAPPINESS DELIVERED
        </h2>
        </div>
      </div>
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-2">
          <div data-depth="0.20" class="pattern-layer-one"
            style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-4.png)"></div>
          <div data-depth="0.20" class="pattern-layer-two"
            style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-3.png)"></div>
          <div data-depth="0.20" class="pattern-layer-three"
            style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-3.png)"></div>
        </div>

        <div class="row clearfix">
          <!-- Team Block -->
          <div class="team-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
                <!-- Social Box -->


                <img src="{{asset('FrontEnd')}}/assets/images/resource/team-1.jpg" alt="" />
                {{-- <div class="overlay-box">
                  <h3><a href="team-detail.html">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div> --}}
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
                <!-- Social Box -->
                {{-- <ul class="social-box">
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
                </ul> --}}

                <img src="{{asset('FrontEnd')}}/assets/images/resource/team-2.jpg" alt="" />
                {{-- <div class="overlay-box">
                  <h3><a href="team-detail.html">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div> --}}
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
                <!-- Social Box -->
                {{-- <ul class="social-box">
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
                </ul> --}}

                <img src="{{asset('FrontEnd')}}/assets/images/resource/team-3.jpg" alt="" />
                {{-- <div class="overlay-box">
                  <h3><a href="team-detail.html">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div> --}}
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
                <!-- Social Box -->
                {{-- <ul class="social-box">
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
                </ul> --}}

                <img src="{{asset('FrontEnd')}}/assets/images/resource/team-3.jpg" alt="" />
                {{-- <div class="overlay-box">
                  <h3><a href="team-detail.html">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div> --}}
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
                <!-- Social Box -->
                {{-- <ul class="social-box">
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
                </ul> --}}

                <img src="{{asset('FrontEnd')}}/assets/images/resource/team-1.jpg" alt="" />
                {{-- <div class="overlay-box">
                  <h3><a href="team-detail.html">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div> --}}
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
                <!-- Social Box -->
                {{-- <ul class="social-box">
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
                </ul> --}}

                <img src="{{asset('FrontEnd')}}/assets/images/resource/team-2.jpg" alt="" />
                {{-- <div class="overlay-box">
                  <h3><a href="team-detail.html">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>

        <!-- Load Btn -->
        {{-- <div class="load-btn text-center">
          <div class="icon">
            <img src="{{asset('FrontEnd')}}/assets/images/icons/load-icon.png" alt="" />
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  <!-- End Team Page Section -->

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="page-wid">
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
@endsection
