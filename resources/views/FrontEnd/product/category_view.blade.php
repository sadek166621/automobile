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
        <h1>Categories</h1>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">home</a></li>
          <li>Categories</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- End Page Title -->

  <!-- About Section -->
<br>
  <h3 style="text-align: center">Welcomet To Maxima Automobiles</h3>
  <section class="cars">
    <div class="container">
      <div class="row car-list">
        @foreach ($nw_cats as $cars )
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="items">
                <figure><img src="{{ asset($cars->banner_img) }}" alt="" class="img-fluid"></figure>
                <div class="content">
                    <div class="cont">
                        <h3>{{ $cars->title_en }}</h3>
                        <div class="features"><span><i class="omfi-door"></i> Manufacturer:</span>
                            @if ($cars->manufacturer != Null)
                            <p>{{ $cars->Brand->name_en }}</p>
                            @else
                            <p></p>
                            @endif
                        </div>
                        <div class="features"><span><i class="omfi-passengers"></i> Engine Size (cc):</span>
                            <p>{{ $cars->engine }}</p>
                        </div>
                        <div class="features"><span><i class="omfi-passengers"></i> Year of Manufacturer:</span>
                            <p>{{ $cars->year_of_manufacturer }}</p>
                        </div>
                        <div class="features"><span><i class="omfi-transmission"></i> Transmission</span>
                            <p>{{ $cars->transmission }}</p>
                        </div>
                        <div class="features"><span><i class="omfi-luggage"></i> Fuel Type:</span>
                            <p>{{ $cars->fuel_type }}</p>
                        </div>
                        <div class="book mt-3">
                            <div>
                                <div class="price">BDT {{ number_format($cars->price, 0, '.', ',') }}</div>
                            </div> <a href="{{ route('car-details',$cars->id) }}" class="button-4"
                                style="font-size: medium;border: 1px solid;padding: 3px 5px 3px 5px;border-radius: 5px;"><strong>Details</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

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

