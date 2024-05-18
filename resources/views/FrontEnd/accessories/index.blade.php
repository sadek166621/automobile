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
    .page-title .service-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    width: 317px;
    margin: 0 auto;

}
.button-4 {
    font-size: medium;
    border: 1px solid;
    padding: 6px 7px 8px 6px;
    border-radius: 5px;
    width: 100%;
    text-align: center;
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for background and text color changes */
}

.button-4:hover {
    background-color: #002244; /* Change background to red on hover */
    color: white; /* Change text color to white on hover */
    border-color: #002244; /* Change border color to red on hover */
}
.cars .car-list .items .content .cont .book .price {
    font-size: 20px;
    line-height: 0.9em;
    color: var(--main-color-two);
    font-weight: 500;
}
.page-title .background-container .left-image {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}

</style>
<section class="page-title">
    <div class="background-container">
      <img class="left-image" style="background-color: #002244" alt="" />
    </div>
    <div class="service-container">
      <div class="section-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer" style="background-image: url()">
        </div>
      </div>

      <div class="page-wid">
        <h1>Accessories</h1>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">home</a></li>
          <li>Accessories</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- End Page Title -->

  <!-- Team Page Section -->
  <section class="cars">

    <div class="page-wid">
        <br><br>
        <p class="" style="text-align: justify">After sales your car exceptionally might occur some troubles, especially for mishandling. In such a situation please call us.  We will give you information about some best workshops where you can obtain the best services at competitive price.
            A moving object always require a regular maintenance service. Better the maintenance services, longer the durability of the vehicle. We offer some maintenance kits which you need on regular interval. Please buy these genuine maintenance kits at competitive price from us. We have some nominated workshops to ensure best maintenance services. Please contact us for services.
            </p>
      <div class="row car-list">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="items">
            <figure>
                <a href=""><img src="{{asset('FrontEnd')}}/assets/images/car/7.jpg" alt="" class="img-fluid"></a>
            </figure>
            <div class="content">
              <div class="cont">
                <a href="">
                    <h3>Lamborghini Urus</h3>
                </a>

                <div class="book mt-3">
                  <div>
                    <div class="price">BDT 2,650,000</div>
                  </div>
                  <button type="submit" class="button-4">
                    <strong><i class="fa fa-shopping-cart"></i> Buy Now</strong>
                </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="items">
              <figure>
                  <a href=""><img src="{{asset('FrontEnd')}}/assets/images/car/7.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="content">
                <div class="cont">
                  <a href="">
                      <h3>Lamborghini Urus</h3>
                  </a>

                  <div class="book mt-3">
                    <div>
                      <div class="price">BDT 2,650,000</div>
                    </div>
                    <button type="submit" class="button-4">
                      <strong><i class="fa fa-shopping-cart"></i> Buy Now</strong>
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="items">
              <figure>
                  <a href=""><img src="{{asset('FrontEnd')}}/assets/images/car/7.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="content">
                <div class="cont">
                  <a href="">
                      <h3>Lamborghini Urus</h3>
                  </a>

                  <div class="book mt-3">
                    <div>
                      <div class="price">BDT 2,650,000</div>
                    </div>
                    <button type="submit" class="button-4">
                      <strong><i class="fa fa-shopping-cart"></i> Buy Now</strong>
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="items">
              <figure>
                  <a href=""><img src="{{asset('FrontEnd')}}/assets/images/car/7.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="content">
                <div class="cont">
                  <a href="">
                      <h3>Lamborghini Urus</h3>
                  </a>

                  <div class="book mt-3">
                    <div>
                      <div class="price">BDT 2,650,000</div>
                    </div>
                    <button type="submit" class="button-4">
                      <strong><i class="fa fa-shopping-cart"></i> Buy Now</strong>
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="items">
              <figure>
                  <a href=""><img src="{{asset('FrontEnd')}}/assets/images/car/7.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="content">
                <div class="cont">
                  <a href="">
                      <h3>Lamborghini Urus</h3>
                  </a>
                  <div class="book mt-3">
                    <div>
                      <div class="price">BDT 2,650,000</div>
                    </div>
                    <button type="submit" class="button-4">
                      <strong><i class="fa fa-shopping-cart"></i> Buy Now</strong>
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="items">
              <figure>
                  <a href=""><img src="{{asset('FrontEnd')}}/assets/images/car/7.jpg" alt="" class="img-fluid"></a>
              </figure>
              <div class="content">
                <div class="cont">
                  <a href="">
                      <h3>Lamborghini Urus</h3>
                  </a>

                  <div class="book mt-3">
                    <div>
                      <div class="price">BDT 2,650,000</div>
                    </div>
                    <button type="submit" class="button-4">
                      <strong><i class="fa fa-shopping-cart"></i> Buy Now</strong>
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- End Team Page Section -->
  <!-- CTA Section -->
  <section class="cta-section">
    <div class="auto-container" style="
    position: relative;
    top: 86px;
">
      <div class="inner-container" style="background-image: url(images/background/pattern-5.png)">
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
