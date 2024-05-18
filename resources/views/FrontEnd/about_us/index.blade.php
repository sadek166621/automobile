@extends('FrontEnd.master')
@section('content')
<section class="page-title">
    <div class="background-container">
      <img class="left-image" src="{{asset('FrontEnd')}}/assets/images/background/header-left-bg.png" alt="" />
      <img class="right-image" src="{{asset('FrontEnd')}}/assets/images/background/1.jpg" alt="" />
    </div>
    <div class="service-container">
      <div class="section-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer" style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-8.png)">
        </div>
      </div>

      <div class="auto-container">
        <h1>About Us</h1>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">home</a></li>
          <li>About Us</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- End Page Title -->

  <!-- About Section -->
  <section class="about-section style-two">
    <div class="auto-container">
      <div class="inner-container">
        <div class="container mb-80 mt-50">
            <h3 style="text-align: center">Welcomet To Maxima Automobiles</h3>
            <br>
            <div class="row">
                <div class="col-lg-11 mb-40 mx-auto">
                    <div class="card py-4 px-3 shadow-sm">
                        <p class="">
                          {!! nl2br($page->about) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Awards Section -->

  <!-- End Testimonial Section -->

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

@endsection
