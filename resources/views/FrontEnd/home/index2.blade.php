@extends('FrontEnd.master')
@section('content')
<section class="main-slider">
    <div class="auto-container">
      <div class="slider-icons-outer parallax-scene-1">
        <div data-depth="0.20" class="pattern-layer"
          style="background-image: url({{ asset('FrontEnd') }}/assets/images/main-slider/pattern-1.png)"></div>
        <div data-depth="0.40" class="pattern-layer-two"
          style="background-image: url({{ asset('FrontEnd') }}/assets/images/main-slider/pattern-2.png)"></div>
        <div data-depth="0.40" class="pattern-layer-three"
          style="background-image: url({{ asset('FrontEnd') }}/assets/images/main-slider/pattern-3.png)"></div>
        <div class="pattern-layer-four" style="background-image: url({{ asset('FrontEnd') }}/assets/images/main-slider/pattern-4.png)"></div>
        <div class="pattern-layer-six" style="background-image: url({{ asset('FrontEnd') }}/assets/images/main-slider/pattern-6.png)"></div>
      </div>
      <div class="main-slider-carousel owl-carousel owl-theme">
        <!-- Slide 01 -->
        @foreach ($sliders as $index => $slider)
        <div class="slide">
          <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
              <div class="inner-column">
                <h1>{{ $slider->title_en }}</h1>
                <div class="text">
                    {{ $slider->description_en }}
                </div>
                <div class="btns-box clearfix">
                  <a class="btn-style-one theme-btn" href="#"><span class="txt">Read More
                      <i class="fa fa-arrow-circle-right"></i></span></a>
                  {{-- <a href="#" class="lightbox-image video-box"><span class="fa fa-play"><i
                        class="ripple"></i></span></a> --}}
                </div>
                <div class="slide-arrow scroll-to-target" data-target=".about-section">
                  <img src="{{ asset('FrontEnd') }}/assets/images/icons/slider-arrow.png" alt="" />
                </div>
              </div>
            </div>

            <!-- Image Column Start-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
              <div class="pattern-layer-five" style="
                    background-image: url({{ asset('FrontEnd') }}/assets/images/main-slider/pattern-5.png);
                  "></div>
              <div class="inner-column">
                <div class="image">
                  <img src="{{ asset($slider->slider_img) }}" alt="" width="817" height="411" />
                </div>
              </div>
            </div>
            <!-- Image Column End-->
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Main Slider Section -->

  <!-- Choose Section -->
  <section class="choose-section" style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-2.png)">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title light centered">
        <div class="title">why us</div>
        <h2>Why Choose Us</h2>
      </div>
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-4">
          <div data-depth="0.20" class="icon-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)"></div>
          <div data-depth="0.20" class="pattern-layer"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-3.png)"></div>
          <div data-depth="0.20" class="pattern-layer-two"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-4.png)"></div>
        </div>
        <div class="row clearfix">
          <!-- Image Column -->
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="image titlt" data-tilt data-tilt-max="2">
                <img src="{{ asset('FrontEnd') }}/assets/images/resource/choose.jpg" alt="" />
                <span class="triangle-one"></span>
                <span class="triangle-two"></span>
                <!-- Fact Counter -->
                <div class="fact-counter">
                  <div class="row clearfix">
                    <!-- Column -->
                    <div class="
                                column
                                counter-column
                                col-lg-4 col-md-4 col-sm-4
                              ">
                      <div class="inner">
                        <div class="content">
                          <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="100">0</span>%
                          </div>
                          <div class="counter-title">
                            Customer <br />
                            satisfaction
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Column -->
                    <div class="
                                column
                                counter-column
                                col-lg-4 col-md-4 col-sm-4
                              ">
                      <div class="inner">
                        <div class="content">
                          <div class="count-outer count-box">
                            <span class="count-text" data-speed="4000" data-stop="200">0</span>+
                          </div>
                          <div class="counter-title">
                            Monthly active <br />
                            users
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Column -->
                    <div class="
                                column
                                counter-column
                                col-lg-4 col-md-4 col-sm-4
                              ">
                      <div class="inner">
                        <div class="content">
                          <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="100">0</span>+
                          </div>
                          <div class="counter-title">
                            New Customer <br />
                            per week
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Column -->
          <div class="content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <!-- <div class="text">
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the simply
                      dummy text of industry's standard dummy, lorem ipsum
                      dolor.
                    </div> -->
              <div class="list-outer">
                <ul class="choose-list">
                  <li>
                    <span class="number">1</span>
                    <strong>Wide range of brands</strong>
                    We can help with your financing plan, we can offer some tips and tricks. Drive off with this
                    dream car of yours regardless of your credit history.
                  </li>
                  <li>
                    <span class="number">2</span>
                    <strong>Trusted by our clients</strong>
                    We can help with your financing plan, we can offer some tips and tricks. Drive off with this
                    dream car of yours regardless of your credit history.
                  </li>
                  <li>
                    <span class="number">3</span>
                    <strong>Fast & easy financing</strong>
                    We can help with your financing plan, we can offer some tips and tricks. Drive off with this
                    dream car of yours regardless of your credit history.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Choose Section -->

  <!-- Coverage Section -->
  <section class="coverage-section">
    <div class="auto-container">
      <div class="coverage-section-container">
        <div class="text-container">
          <div class="title">
            <svg xmlns="http://www.w3.org/2000/svg" width="14.475" height="14.474" viewBox="0 0 14.475 14.474">
              <path
                d="M822.528,328.081a.618.618,0,0,0,.437-1.055l-6.182-6.182,6.182-6.182a.618.618,0,0,0-.875-.873l-6.618,6.62a.616.616,0,0,0,0,.873l6.618,6.62A.62.62,0,0,0,822.528,328.081Zm-7.056-.181-6.62-6.62a.617.617,0,0,1,0-.873l6.62-6.62a.618.618,0,0,1,.874.873l-6.182,6.182,6.182,6.182a.618.618,0,0,1-.874.875Z"
                transform="translate(-808.672 -313.607)" fill="#4298ee" />
            </svg>
            Category
            <svg xmlns="http://www.w3.org/2000/svg" width="14.475" height="14.474" viewBox="0 0 14.475 14.474">
              <path
                d="M809.29,328.081a.618.618,0,0,1-.437-1.055l6.182-6.182-6.182-6.182a.618.618,0,0,1,.875-.873l6.618,6.62a.616.616,0,0,1,0,.873l-6.618,6.62A.62.62,0,0,1,809.29,328.081Zm7.056-.181,6.62-6.62a.617.617,0,0,0,0-.873l-6.62-6.62a.618.618,0,0,0-.874.873l6.182,6.182-6.182,6.182a.618.618,0,0,0,.874.875Z"
                transform="translate(-808.672 -313.607)" fill="#4298ee" />
            </svg>
          </div>
          <h2>Choose Your Car</h2>
        </div>
        <div class="box-container d-none">
          <div class="box-item">
            <a href="#">
              <div class="hover-container">
                <svg xmlns="http://www.w3.org/2000/svg" id="Group_557" data-name="Group 557" width="60" height="40"
                  viewBox="0 0 164.104 64.102">
                  <path id="Subtraction_30" data-name="Subtraction 30"
                    d="M-13895.81,20663.1a14.9,14.9,0,0,1-10.609-4.395,14.9,14.9,0,0,1-4.393-10.607,14.9,14.9,0,0,1,4.393-10.6,14.9,14.9,0,0,1,10.609-4.395,14.889,14.889,0,0,1,10.6,4.395,14.9,14.9,0,0,1,4.393,10.6,14.9,14.9,0,0,1-4.393,10.607A14.889,14.889,0,0,1-13895.81,20663.1Zm0-24a9.009,9.009,0,0,0-9,9,9.011,9.011,0,0,0,9,9,9.009,9.009,0,0,0,9-9A9.007,9.007,0,0,0-13895.81,20639.1Z"
                    transform="translate(13925 -20599)" fill="#000"></path>
                  <path id="Subtraction_29" data-name="Subtraction 29"
                    d="M-13895.81,20663.1a14.9,14.9,0,0,1-10.609-4.395,14.9,14.9,0,0,1-4.393-10.607,14.9,14.9,0,0,1,4.393-10.6,14.9,14.9,0,0,1,10.609-4.395,14.889,14.889,0,0,1,10.6,4.395,14.9,14.9,0,0,1,4.393,10.6,14.9,14.9,0,0,1-4.393,10.607A14.889,14.889,0,0,1-13895.81,20663.1Zm-.5-24a8.77,8.77,0,0,0-8.5,9,8.773,8.773,0,0,0,8.5,9,8.771,8.771,0,0,0,8.5-9A8.769,8.769,0,0,0-13896.308,20639.1Z"
                    transform="translate(14029 -20599)" fill="#000"></path>
                  <path id="Subtraction_28" data-name="Subtraction 28"
                    d="M-13904.136,20686.107c-3.425,0-5.024-1.373-5.763-2.523a4.979,4.979,0,0,1-.79-2.52,67.152,67.152,0,0,1,.5-13.7,18.819,18.819,0,0,1,2.632-7.51c2.288-3.4,5.433-4.031,8.474-4.643l.017,0c.3-.059.6-.121.9-.184,13.069-.969,29.571-1.146,29.714-1.146a206.77,206.77,0,0,0,17.679-11.3,53.678,53.678,0,0,1,12.248-6.725c3.983-1.592,7.777-2.312,14.5-2.758a153.9,153.9,0,0,1,20.244,1.211,76.571,76.571,0,0,1,18.3,4.994,47.084,47.084,0,0,1,9.506,9.672,38.831,38.831,0,0,1,3.131,4.9h15.706a7.339,7.339,0,0,1,5.476,2.633,18.189,18.189,0,0,1,3.572,7.764,52.571,52.571,0,0,1,1.285,9.652,89.68,89.68,0,0,1-.2,11.7v.006h-12.326a30.669,30.669,0,0,0-.408-6.361c-.544-3.285-1.872-7.93-5.114-11.4-3.126-3.346-7.464-5.041-12.894-5.041-10.312,0-15.274,6.2-17.621,11.4a32.1,32.1,0,0,0-2.648,11.4h-64.184a30.162,30.162,0,0,0-.421-6.312c-.552-3.264-1.892-7.881-5.14-11.355-3.188-3.408-7.627-5.135-13.192-5.135-5.543,0-10.006,1.7-13.263,5.061-6.151,6.34-6.029,16.57-6,17.717,0,.014,0,.023,0,.025A18.617,18.617,0,0,1-13904.136,20686.107Zm46.36-31.562c.067.141,5.9.209,17.834.209,1.438,0,3.068,0,4.933-.006l6.105-15.047h0a41.4,41.4,0,0,0-14.236,4.387,63.744,63.744,0,0,0-14.631,10.453l-.006,0Zm46.291-15.639c-3.291,0-6.452.18-9.51.354l-.09.006-.187.016-6.272,15.451c2.433,0,5.121-.016,7.968-.029l.752,0,1.353,0,6.412-15.789Zm7.7.439-6.219,15.318,3.47-.02,1.088,0c4.3-.023,10.188-.053,16.615-.1.312,0,.478,0,.493,0a13.3,13.3,0,0,0-.161-5.219,10.916,10.916,0,0,0-2.123-4.371,12.332,12.332,0,0,0-5.192-3.65,32.811,32.811,0,0,0-7.97-1.953Z"
                    transform="translate(13910.81 -20633.102)" fill="#000"></path>
                  <path id="Path_211" data-name="Path 211"
                    d="M14227.891-17798.156c.049-.1,1.166.375,2.176,3.344a23.225,23.225,0,0,1,.9,4.076c0-.068-5.548,0-5.548,0S14219.066-17798.758,14227.891-17798.156Z"
                    transform="translate(-14071.219 17822.395)" fill="#ff4605"></path>
                  <path id="Path_212" data-name="Path 212"
                    d="M14226.857-17795.76c-.061-.1-4.7,1.8-5.48,5.779,0-.066,10.9,0,10.9,0S14238.238-17798.965,14226.857-17795.76Z"
                    transform="translate(-14216.396 17821.074)" fill="#ff4605"></path>
                  <path id="Path_268" data-name="Path 268" d="M13596.227-20971.381l46.691,32.488-51.559.025Z"
                    transform="translate(-13541.95 20991.875)" fill="#000"></path>
                </svg>
                <h3>Sedan</h3>
              </div>
            </a>
          </div>
          <div class="box-item">
            <a href="#">
              <div class="hover-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 163.558 58.459">
                  <g id="Group_559" data-name="Group 559" transform="translate(0.002 -0.002)">
                    <path id="Path_240" data-name="Path 240"
                      d="M14682.666-17675.51c6.831-.441,3.493-2,4.658-4.357s6.83-3.8,0-5.064-20.491-1.707-27.321,0-5.665,4.475,0,6.832S14675.836-17675.068,14682.666-17675.51Z"
                      transform="translate(-14527.08 17699.047)" fill="#000"></path>
                    <path id="Subtraction_37" data-name="Subtraction 37"
                      d="M-14351,20677.193c-4.549,0-10.068-.318-10.531-1.832-.166-.545.341-1.217,1.506-2-1-4.67.082-10.6,2.963-16.275a31.61,31.61,0,0,1,4.858-7.084,19.218,19.218,0,0,1,6.015-4.553c2.4-1.07,6.081-1.248,9.639-1.422h.021l.221-.012c.041,0,.081,0,.121-.006l.457-.023.449-.023c.063,0,.123,0,.181-.008l.222-.01c2.574-.145,5.389-.219,8.366-.219,4.87,0,8.565.2,8.971.217.016,0,.023,0,.023,0a49.835,49.835,0,0,1,8.942-8.25,46.131,46.131,0,0,1,10.239-5.662,36.257,36.257,0,0,1,13.245-2.574h1.987c18.48,0,41.806,6.238,58.118,11.471,13.4,4.3,22.219,7.941,22.265,8.033,1.4.955,2.458,2.762,3.146,5.367a34.248,34.248,0,0,1,.944,7.867,80.532,80.532,0,0,1-.675,11.512l-.011.072,0,.01,0,.021a.227.227,0,0,0,0,.031v.012a10.27,10.27,0,0,1-8.112,4.3,7.186,7.186,0,0,1-1.022-.066l-13.479.248a8.889,8.889,0,0,0,1.816-5.418,9.014,9.014,0,0,0-9-9,9.012,9.012,0,0,0-9,9,9.007,9.007,0,0,0,2.02,5.678l-13.386.244v.037h-52.056v-.006h-14.706a9.3,9.3,0,0,0,2.125-5.953,8.771,8.771,0,0,0-8.5-9,8.773,8.773,0,0,0-8.5,9,9.29,9.29,0,0,0,2.126,5.953h-13.165v.006a.117.117,0,0,1-.036,0C-14345.3,20677.084-14348.42,20677.193-14351,20677.193Zm68.726-44.031a51.983,51.983,0,0,0-11.112,1.063c-3.456.809-7.623,3.857-10.51,6.271-3.077,2.586-5.472,5.09-5.48,5.1h38.489s0-.039,0-.115a111.559,111.559,0,0,0,0-11.256A54.193,54.193,0,0,0-14282.279,20633.162Zm18,2.1h0v10.322h18.97l-.006,0a15.92,15.92,0,0,0-6.5-6.5C-14256.434,20636.564-14264.2,20635.27-14264.275,20635.264Z"
                      transform="translate(14361.565 -20627.461)" fill="#000"></path>
                    <path id="Path_270" data-name="Path 270" d="M13596.071-20971.381l45.2,31.449-49.911.025Z"
                      transform="translate(-13543.885 20989.234)" fill="#000"></path>
                    <path id="Subtraction_36" data-name="Subtraction 36"
                      d="M-14346.568,20657.461a14.9,14.9,0,0,1-10.605-4.393,14.9,14.9,0,0,1-4.393-10.605,14.9,14.9,0,0,1,4.393-10.607,14.9,14.9,0,0,1,10.605-4.4,14.9,14.9,0,0,1,10.605,4.4,14.9,14.9,0,0,1,4.393,10.607,14.9,14.9,0,0,1-4.393,10.605A14.9,14.9,0,0,1-14346.568,20657.461Zm0-24a9.01,9.01,0,0,0-9,9,9.01,9.01,0,0,0,9,9,9.01,9.01,0,0,0,9-9A9.01,9.01,0,0,0-14346.568,20633.463Z"
                      transform="translate(14479 -20599)" fill="#000"></path>
                    <path id="Subtraction_38" data-name="Subtraction 38"
                      d="M-14346.568,20657.461a14.9,14.9,0,0,1-10.605-4.393,14.9,14.9,0,0,1-4.393-10.605,14.9,14.9,0,0,1,4.393-10.607,14.9,14.9,0,0,1,10.605-4.4,14.9,14.9,0,0,1,10.605,4.4,14.9,14.9,0,0,1,4.393,10.607,14.9,14.9,0,0,1-4.393,10.605A14.9,14.9,0,0,1-14346.568,20657.461Zm0-24a9.01,9.01,0,0,0-9,9,9.01,9.01,0,0,0,9,9,9.01,9.01,0,0,0,9-9A9.01,9.01,0,0,0-14346.568,20633.463Z"
                      transform="translate(14385 -20599)" fill="#000"></path>
                    <path id="Path_234" data-name="Path 234"
                      d="M14672.021-17633.193h-4.091s-1.186,4.4,2.152,6.127h2.729a12.841,12.841,0,0,0,.188-3.463A6.689,6.689,0,0,0,14672.021-17633.193Z"
                      transform="translate(-14512.557 17655.711)" fill="#ff4605"></path>
                    <path id="Path_235" data-name="Path 235"
                      d="M14925.816-17637.883a3.027,3.027,0,0,0-.832.637c-.32.391-.746.926-.746.926h6.58l.775-1.562S14928.518-17639.443,14925.816-17637.883Z"
                      transform="translate(-14911.271 17658.619)" fill="#000"></path>
                    <path id="Path_236" data-name="Path 236"
                      d="M0,5.691a26.481,26.481,0,0,0,5.8-.1A3.041,3.041,0,0,0,8.255,4.01C9.178,2.59,10.661,0,10.661,0L2.633.14Z"
                      transform="matrix(-1, -0.017, 0.017, -1, 18.502, 29.281)" fill="#ff4605"></path>
                  </g>
                </svg>
                <h3>Coupe</h3>
                <p></p>
              </div>
            </a>
          </div>
          <div class="box-item">
            <a href="#">
              <div class="hover-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 127.603 54.465">
                  <g id="Group_561" data-name="Group 561" transform="translate(-14684.518 20863.809)">
                    <path id="Subtraction_21" data-name="Subtraction 21"
                      d="M118.832,43.013a1.3,1.3,0,0,1-.035-.273c-.429-4.477-2.738-14.891-14.873-14.891-7.591,0-11.447,4.123-13.345,7.581a20.472,20.472,0,0,0-2.323,7.581H43.1a21.368,21.368,0,0,0-2.078-7.594,13.077,13.077,0,0,0-12.373-7.594c-.332,0-.659.009-1,.026-7.591.391-11.241,4.493-12.966,7.865a18.574,18.574,0,0,0-1.944,7.3H4.2a8.178,8.178,0,0,1-1.972-.8A3.852,3.852,0,0,1,.094,39.3c-.212-2.776,0-9.87,0-9.941A5.384,5.384,0,0,1,.9,27.494a15.4,15.4,0,0,1,4.514-4.4,42.655,42.655,0,0,1,11.361-5.128,114.82,114.82,0,0,1,21.349-4.054,25.375,25.375,0,0,1,2.5-2.211,53.8,53.8,0,0,1,7.1-4.778,54.752,54.752,0,0,1,11.13-4.761A50.642,50.642,0,0,1,73.443,0C84.5,0,95.624,3.663,106.518,10.886a16.257,16.257,0,0,0,1.989.048c2.155,0,5.325-.043,5.679-.048l.007,0a95.794,95.794,0,0,1,7.8,10.484,45.044,45.044,0,0,1,4.6,9.084c1.15,3.326,1.315,6.039.491,8.066-1.075,2.643-3.852,4.153-8.253,4.489h0ZM70.8,5.323h0a37.186,37.186,0,0,0-23.624,9.3l48.494-2.734a43.116,43.116,0,0,0-6.928-3.215,53.066,53.066,0,0,0-17.54-3.353l-.4,0Z"
                      transform="translate(14684.518 -20863.809)" fill="#000"></path>
                    <path id="Path_176" data-name="Path 176"
                      d="M16313.668-17534.393s6.613-5.395,9.764-5.326c4.773.064,4.773,5.326,2.027,5.326Z"
                      transform="translate(-1625.359 -3301.786)" fill="#ff4605"></path>
                    <path id="Path_179" data-name="Path 179"
                      d="M16313.665-17531.758s8.018-3.207,11.9-3.131c3.043-4.037,6.029,3.131,2.643,3.131Z"
                      transform="translate(-1524.175 -3320.697)" fill="#000"></path>
                    <path id="Subtraction_20" data-name="Subtraction 20"
                      d="M12,24A12,12,0,0,1,3.514,3.515,12,12,0,1,1,20.485,20.485,11.921,11.921,0,0,1,12,24ZM12,5.333A6.667,6.667,0,1,0,18.666,12,6.674,6.674,0,0,0,12,5.333Z"
                      transform="translate(14700.46 -20833.344)" fill="#000"></path>
                    <path id="Subtraction_19" data-name="Subtraction 19"
                      d="M12,24A12,12,0,0,1,3.514,3.515,12,12,0,1,1,20.485,20.485,11.921,11.921,0,0,1,12,24ZM12,5.333A6.667,6.667,0,1,0,18.666,12,6.674,6.674,0,0,0,12,5.333Z"
                      transform="translate(14775.46 -20833.344)" fill="#000"></path>
                    <path id="Subtraction_6" data-name="Subtraction 6"
                      d="M12.589,7.919H3.959A3.96,3.96,0,0,1,3.959,0H7.9l4.683,7.918Z"
                      transform="translate(14796.028 -20844.098)" fill="#ff4605"></path>
                    <path id="Path_265" data-name="Path 265" d="M13595.619-20971.383l40.867,28.436-45.127.021Z"
                      transform="translate(1136.298 122.13)" fill="#000"></path>
                  </g>
                </svg>
                <h3>MicroBus</h3>
                <p></p>
              </div>
            </a>
          </div>
          <div class="box-item">
            <a href="#">
              <div class="hover-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 127.603 54.465">
                  <g id="Group_561" data-name="Group 561" transform="translate(-14684.518 20863.809)">
                    <path id="Subtraction_21" data-name="Subtraction 21"
                      d="M118.832,43.013a1.3,1.3,0,0,1-.035-.273c-.429-4.477-2.738-14.891-14.873-14.891-7.591,0-11.447,4.123-13.345,7.581a20.472,20.472,0,0,0-2.323,7.581H43.1a21.368,21.368,0,0,0-2.078-7.594,13.077,13.077,0,0,0-12.373-7.594c-.332,0-.659.009-1,.026-7.591.391-11.241,4.493-12.966,7.865a18.574,18.574,0,0,0-1.944,7.3H4.2a8.178,8.178,0,0,1-1.972-.8A3.852,3.852,0,0,1,.094,39.3c-.212-2.776,0-9.87,0-9.941A5.384,5.384,0,0,1,.9,27.494a15.4,15.4,0,0,1,4.514-4.4,42.655,42.655,0,0,1,11.361-5.128,114.82,114.82,0,0,1,21.349-4.054,25.375,25.375,0,0,1,2.5-2.211,53.8,53.8,0,0,1,7.1-4.778,54.752,54.752,0,0,1,11.13-4.761A50.642,50.642,0,0,1,73.443,0C84.5,0,95.624,3.663,106.518,10.886a16.257,16.257,0,0,0,1.989.048c2.155,0,5.325-.043,5.679-.048l.007,0a95.794,95.794,0,0,1,7.8,10.484,45.044,45.044,0,0,1,4.6,9.084c1.15,3.326,1.315,6.039.491,8.066-1.075,2.643-3.852,4.153-8.253,4.489h0ZM70.8,5.323h0a37.186,37.186,0,0,0-23.624,9.3l48.494-2.734a43.116,43.116,0,0,0-6.928-3.215,53.066,53.066,0,0,0-17.54-3.353l-.4,0Z"
                      transform="translate(14684.518 -20863.809)" fill="#000"></path>
                    <path id="Path_176" data-name="Path 176"
                      d="M16313.668-17534.393s6.613-5.395,9.764-5.326c4.773.064,4.773,5.326,2.027,5.326Z"
                      transform="translate(-1625.359 -3301.786)" fill="#ff4605"></path>
                    <path id="Path_179" data-name="Path 179"
                      d="M16313.665-17531.758s8.018-3.207,11.9-3.131c3.043-4.037,6.029,3.131,2.643,3.131Z"
                      transform="translate(-1524.175 -3320.697)" fill="#000"></path>
                    <path id="Subtraction_20" data-name="Subtraction 20"
                      d="M12,24A12,12,0,0,1,3.514,3.515,12,12,0,1,1,20.485,20.485,11.921,11.921,0,0,1,12,24ZM12,5.333A6.667,6.667,0,1,0,18.666,12,6.674,6.674,0,0,0,12,5.333Z"
                      transform="translate(14700.46 -20833.344)" fill="#000"></path>
                    <path id="Subtraction_19" data-name="Subtraction 19"
                      d="M12,24A12,12,0,0,1,3.514,3.515,12,12,0,1,1,20.485,20.485,11.921,11.921,0,0,1,12,24ZM12,5.333A6.667,6.667,0,1,0,18.666,12,6.674,6.674,0,0,0,12,5.333Z"
                      transform="translate(14775.46 -20833.344)" fill="#000"></path>
                    <path id="Subtraction_6" data-name="Subtraction 6"
                      d="M12.589,7.919H3.959A3.96,3.96,0,0,1,3.959,0H7.9l4.683,7.918Z"
                      transform="translate(14796.028 -20844.098)" fill="#ff4605"></path>
                    <path id="Path_265" data-name="Path 265" d="M13595.619-20971.383l40.867,28.436-45.127.021Z"
                      transform="translate(1136.298 122.13)" fill="#000"></path>
                  </g>
                </svg>
                <h3>Hybrid</h3>
                <p></p>
              </div>
            </a>
          </div>
          <div class="box-item">
            <a href="#">
              <div class="hover-container">
                <svg xmlns="http://www.w3.org/2000/svg" id="Group_557" data-name="Group 557" width="60" height="40"
                  viewBox="0 0 164.104 64.102">
                  <path id="Subtraction_30" data-name="Subtraction 30"
                    d="M-13895.81,20663.1a14.9,14.9,0,0,1-10.609-4.395,14.9,14.9,0,0,1-4.393-10.607,14.9,14.9,0,0,1,4.393-10.6,14.9,14.9,0,0,1,10.609-4.395,14.889,14.889,0,0,1,10.6,4.395,14.9,14.9,0,0,1,4.393,10.6,14.9,14.9,0,0,1-4.393,10.607A14.889,14.889,0,0,1-13895.81,20663.1Zm0-24a9.009,9.009,0,0,0-9,9,9.011,9.011,0,0,0,9,9,9.009,9.009,0,0,0,9-9A9.007,9.007,0,0,0-13895.81,20639.1Z"
                    transform="translate(13925 -20599)" fill="#000"></path>
                  <path id="Subtraction_29" data-name="Subtraction 29"
                    d="M-13895.81,20663.1a14.9,14.9,0,0,1-10.609-4.395,14.9,14.9,0,0,1-4.393-10.607,14.9,14.9,0,0,1,4.393-10.6,14.9,14.9,0,0,1,10.609-4.395,14.889,14.889,0,0,1,10.6,4.395,14.9,14.9,0,0,1,4.393,10.6,14.9,14.9,0,0,1-4.393,10.607A14.889,14.889,0,0,1-13895.81,20663.1Zm-.5-24a8.77,8.77,0,0,0-8.5,9,8.773,8.773,0,0,0,8.5,9,8.771,8.771,0,0,0,8.5-9A8.769,8.769,0,0,0-13896.308,20639.1Z"
                    transform="translate(14029 -20599)" fill="#000"></path>
                  <path id="Subtraction_28" data-name="Subtraction 28"
                    d="M-13904.136,20686.107c-3.425,0-5.024-1.373-5.763-2.523a4.979,4.979,0,0,1-.79-2.52,67.152,67.152,0,0,1,.5-13.7,18.819,18.819,0,0,1,2.632-7.51c2.288-3.4,5.433-4.031,8.474-4.643l.017,0c.3-.059.6-.121.9-.184,13.069-.969,29.571-1.146,29.714-1.146a206.77,206.77,0,0,0,17.679-11.3,53.678,53.678,0,0,1,12.248-6.725c3.983-1.592,7.777-2.312,14.5-2.758a153.9,153.9,0,0,1,20.244,1.211,76.571,76.571,0,0,1,18.3,4.994,47.084,47.084,0,0,1,9.506,9.672,38.831,38.831,0,0,1,3.131,4.9h15.706a7.339,7.339,0,0,1,5.476,2.633,18.189,18.189,0,0,1,3.572,7.764,52.571,52.571,0,0,1,1.285,9.652,89.68,89.68,0,0,1-.2,11.7v.006h-12.326a30.669,30.669,0,0,0-.408-6.361c-.544-3.285-1.872-7.93-5.114-11.4-3.126-3.346-7.464-5.041-12.894-5.041-10.312,0-15.274,6.2-17.621,11.4a32.1,32.1,0,0,0-2.648,11.4h-64.184a30.162,30.162,0,0,0-.421-6.312c-.552-3.264-1.892-7.881-5.14-11.355-3.188-3.408-7.627-5.135-13.192-5.135-5.543,0-10.006,1.7-13.263,5.061-6.151,6.34-6.029,16.57-6,17.717,0,.014,0,.023,0,.025A18.617,18.617,0,0,1-13904.136,20686.107Zm46.36-31.562c.067.141,5.9.209,17.834.209,1.438,0,3.068,0,4.933-.006l6.105-15.047h0a41.4,41.4,0,0,0-14.236,4.387,63.744,63.744,0,0,0-14.631,10.453l-.006,0Zm46.291-15.639c-3.291,0-6.452.18-9.51.354l-.09.006-.187.016-6.272,15.451c2.433,0,5.121-.016,7.968-.029l.752,0,1.353,0,6.412-15.789Zm7.7.439-6.219,15.318,3.47-.02,1.088,0c4.3-.023,10.188-.053,16.615-.1.312,0,.478,0,.493,0a13.3,13.3,0,0,0-.161-5.219,10.916,10.916,0,0,0-2.123-4.371,12.332,12.332,0,0,0-5.192-3.65,32.811,32.811,0,0,0-7.97-1.953Z"
                    transform="translate(13910.81 -20633.102)" fill="#000"></path>
                  <path id="Path_211" data-name="Path 211"
                    d="M14227.891-17798.156c.049-.1,1.166.375,2.176,3.344a23.225,23.225,0,0,1,.9,4.076c0-.068-5.548,0-5.548,0S14219.066-17798.758,14227.891-17798.156Z"
                    transform="translate(-14071.219 17822.395)" fill="#ff4605"></path>
                  <path id="Path_212" data-name="Path 212"
                    d="M14226.857-17795.76c-.061-.1-4.7,1.8-5.48,5.779,0-.066,10.9,0,10.9,0S14238.238-17798.965,14226.857-17795.76Z"
                    transform="translate(-14216.396 17821.074)" fill="#ff4605"></path>
                  <path id="Path_268" data-name="Path 268" d="M13596.227-20971.381l46.691,32.488-51.559.025Z"
                    transform="translate(-13541.95 20991.875)" fill="#000"></path>
                </svg>
                <h3>Non-Hybrid</h3>
                <p></p>
              </div>
            </a>
          </div>
          <div class="box-item">
            <a href="#">
              <div class="hover-container">
                <svg xmlns="http://www.w3.org/2000/svg" id="Group_557" data-name="Group 557" width="60" height="40"
                  viewBox="0 0 164.104 64.102">
                  <path id="Subtraction_30" data-name="Subtraction 30"
                    d="M-13895.81,20663.1a14.9,14.9,0,0,1-10.609-4.395,14.9,14.9,0,0,1-4.393-10.607,14.9,14.9,0,0,1,4.393-10.6,14.9,14.9,0,0,1,10.609-4.395,14.889,14.889,0,0,1,10.6,4.395,14.9,14.9,0,0,1,4.393,10.6,14.9,14.9,0,0,1-4.393,10.607A14.889,14.889,0,0,1-13895.81,20663.1Zm0-24a9.009,9.009,0,0,0-9,9,9.011,9.011,0,0,0,9,9,9.009,9.009,0,0,0,9-9A9.007,9.007,0,0,0-13895.81,20639.1Z"
                    transform="translate(13925 -20599)" fill="#000"></path>
                  <path id="Subtraction_29" data-name="Subtraction 29"
                    d="M-13895.81,20663.1a14.9,14.9,0,0,1-10.609-4.395,14.9,14.9,0,0,1-4.393-10.607,14.9,14.9,0,0,1,4.393-10.6,14.9,14.9,0,0,1,10.609-4.395,14.889,14.889,0,0,1,10.6,4.395,14.9,14.9,0,0,1,4.393,10.6,14.9,14.9,0,0,1-4.393,10.607A14.889,14.889,0,0,1-13895.81,20663.1Zm-.5-24a8.77,8.77,0,0,0-8.5,9,8.773,8.773,0,0,0,8.5,9,8.771,8.771,0,0,0,8.5-9A8.769,8.769,0,0,0-13896.308,20639.1Z"
                    transform="translate(14029 -20599)" fill="#000"></path>
                  <path id="Subtraction_28" data-name="Subtraction 28"
                    d="M-13904.136,20686.107c-3.425,0-5.024-1.373-5.763-2.523a4.979,4.979,0,0,1-.79-2.52,67.152,67.152,0,0,1,.5-13.7,18.819,18.819,0,0,1,2.632-7.51c2.288-3.4,5.433-4.031,8.474-4.643l.017,0c.3-.059.6-.121.9-.184,13.069-.969,29.571-1.146,29.714-1.146a206.77,206.77,0,0,0,17.679-11.3,53.678,53.678,0,0,1,12.248-6.725c3.983-1.592,7.777-2.312,14.5-2.758a153.9,153.9,0,0,1,20.244,1.211,76.571,76.571,0,0,1,18.3,4.994,47.084,47.084,0,0,1,9.506,9.672,38.831,38.831,0,0,1,3.131,4.9h15.706a7.339,7.339,0,0,1,5.476,2.633,18.189,18.189,0,0,1,3.572,7.764,52.571,52.571,0,0,1,1.285,9.652,89.68,89.68,0,0,1-.2,11.7v.006h-12.326a30.669,30.669,0,0,0-.408-6.361c-.544-3.285-1.872-7.93-5.114-11.4-3.126-3.346-7.464-5.041-12.894-5.041-10.312,0-15.274,6.2-17.621,11.4a32.1,32.1,0,0,0-2.648,11.4h-64.184a30.162,30.162,0,0,0-.421-6.312c-.552-3.264-1.892-7.881-5.14-11.355-3.188-3.408-7.627-5.135-13.192-5.135-5.543,0-10.006,1.7-13.263,5.061-6.151,6.34-6.029,16.57-6,17.717,0,.014,0,.023,0,.025A18.617,18.617,0,0,1-13904.136,20686.107Zm46.36-31.562c.067.141,5.9.209,17.834.209,1.438,0,3.068,0,4.933-.006l6.105-15.047h0a41.4,41.4,0,0,0-14.236,4.387,63.744,63.744,0,0,0-14.631,10.453l-.006,0Zm46.291-15.639c-3.291,0-6.452.18-9.51.354l-.09.006-.187.016-6.272,15.451c2.433,0,5.121-.016,7.968-.029l.752,0,1.353,0,6.412-15.789Zm7.7.439-6.219,15.318,3.47-.02,1.088,0c4.3-.023,10.188-.053,16.615-.1.312,0,.478,0,.493,0a13.3,13.3,0,0,0-.161-5.219,10.916,10.916,0,0,0-2.123-4.371,12.332,12.332,0,0,0-5.192-3.65,32.811,32.811,0,0,0-7.97-1.953Z"
                    transform="translate(13910.81 -20633.102)" fill="#000"></path>
                  <path id="Path_211" data-name="Path 211"
                    d="M14227.891-17798.156c.049-.1,1.166.375,2.176,3.344a23.225,23.225,0,0,1,.9,4.076c0-.068-5.548,0-5.548,0S14219.066-17798.758,14227.891-17798.156Z"
                    transform="translate(-14071.219 17822.395)" fill="#ff4605"></path>
                  <path id="Path_212" data-name="Path 212"
                    d="M14226.857-17795.76c-.061-.1-4.7,1.8-5.48,5.779,0-.066,10.9,0,10.9,0S14238.238-17798.965,14226.857-17795.76Z"
                    transform="translate(-14216.396 17821.074)" fill="#ff4605"></path>
                  <path id="Path_268" data-name="Path 268" d="M13596.227-20971.381l46.691,32.488-51.559.025Z"
                    transform="translate(-13541.95 20991.875)" fill="#000"></path>
                </svg>
                <h3>Vehicle</h3>
                <p></p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Coverage Section -->

  <!--  -->
  <section class="cars">
    <div class="container">
      <div class="row car-list">
        @foreach ($home_banners as $home_banner )
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="items">
              <figure><img src="{{ asset($home_banner->banner_img) }}" alt="" class="img-fluid"></figure>
              <div class="content">
                <div class="cont">
                  <h3>{{ $home_banner->title_en }}</h3>
                  <div class="features"><span><i class="omfi-door"></i> Manufacturer:</span>
                    <p>{{ $home_banner->manufacturer }}</p>
                  </div>
                  <div class="features"><span><i class="omfi-passengers"></i> Engine Size (cc):</span>
                    <p>{{ $home_banner->engine }}</p>
                  </div>
                  <div class="features"><span><i class="omfi-passengers"></i> Year of Manufacturer:</span>
                    <p>{{ $home_banner->year_of_manufacturer }}</p>
                  </div>
                  <div class="features"><span><i class="omfi-transmission"></i> Transmission</span>
                    <p>{{ $home_banner->transmission }}</p>
                  </div>
                  <div class="features"><span><i class="omfi-luggage"></i> Fuel Type:</span>
                    <p>{{ $home_banner->fuel_type }}</p>
                  </div>
                  <div class="book mt-3">
                    <div>
                      <div class="price">BDT {{ number_format($home_banner->price, 0, '.', ',') }}</div>
                    </div> <a href="{{ route('car-details',$home_banner->id) }}" class="button-4" style="font-size: medium;border: 1px solid;padding: 3px 5px 3px 5px;border-radius: 5px;"><strong>Details</strong></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
  <!--  -->

  <!-- Services Section -->
  <section class="services-section d-none">
    <div class="auto-container">
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-3">
          <div data-depth="0.20" class="icon-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)"></div>
          <div data-depth="0.20" class="pattern-layer"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-3.png)"></div>
          <div data-depth="0.20" class="pattern-layer-two"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-4.png)"></div>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme">
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block">
            <div class="inner-box">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/service-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <h4><a href="#">Toyota-Fielder-2017(G)</a></h4>
                <div class="car-text">
                  <p>Sedan</p>
                  <p>NKE165-8050461</p>
                  <p>MXM4</p>
                </div>

                <div class="car-info">
                  <div class="row pt-2">
                    <div class="col-lg-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/speedometer.svg" alt=""></span>
                      <p>85000.00 km</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/car.svg" alt=""></span>
                      <p>1500 cc</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/petrol.svg" alt=""></span>
                      <p>Octane, Hybrid</p>
                    </div>
                    <div class="col-3">
                      <span><img src="{{ asset('FrontEnd') }}/assets/images/icons/manual-transmission.svg" alt=""></span>
                      <p>Auto</p>
                    </div>
                  </div>
                </div>

                <div class="car-price py-2">
                  <h5>BDT: 2320000.00</h5>
                </div>
                <div class="text-center py-2">
                  <a href="#" class="view-details">View Details</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Services Section -->

  <!-- About Section -->
  <section class="about-section d-none" style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-2.png)">
    <div class="auto-container">
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-2">
          <div data-depth="0.20" class="icon-layer-one" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)">
          </div>
        </div>
        <div class="row clearfix">
          <!-- Image Column -->
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="image titlt" data-tilt data-tilt-max="2">
                <img src="{{ asset('FrontEnd') }}/assets/images/resource/about.jpg" alt="" />
                <span class="triangle-one"></span>
                <span class="triangle-two"></span>
              </div>
            </div>
          </div>
          <!-- Content Column -->
          <div class="content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="sec-title light">
                <div class="title">about us</div>
                <h2>Car insurance rate reductions up to 25%</h2>
              </div>
              <div class="bold-text">
                We are a professional and creative company and we offer
                you a trusty insurance on your veicle.
              </div>
              <div class="text">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when ang dummy
                text lorem.
              </div>
              <div class="author-box clearfix">
                <div class="box-inner">
                  <div class="author-image">
                    <img src="{{ asset('FrontEnd') }}/assets/images/resource/author-1.jpg" alt="" />
                  </div>
                  Luiz Mark
                  <span>ceo of carsore</span>
                </div>
                <div class="signature">
                  <img src="{{ asset('FrontEnd') }}/assets/images/icons/signature.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Team Section -->
  <section class="team-section d-none">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title">Our Team</div>
        <h2>
          We ensure best insurance services <br />
          for our clients.
        </h2>
      </div>
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-5">
          <div data-depth="0.20" class="icon-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)"></div>
          <div data-depth="0.40" class="pattern-layer"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-3.png)"></div>
          <div data-depth="0.20" class="pattern-layer-two"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-4.png)"></div>
        </div>
        <div class="team-carousel owl-carousel owl-theme">
          <!-- Team Block -->
          <div class="team-block">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
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

                <img src="{{ asset('FrontEnd') }}/assets/images/resource/team-1.jpg" alt="" />
                <div class="overlay-box">
                  <h3><a href="team-detail.html">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
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

                <img src="{{ asset('FrontEnd') }}/assets/images/resource/team-2.jpg" alt="" />
                <div class="overlay-box">
                  <h3><a href="#">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
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

                <img src="{{ asset('FrontEnd') }}/assets/images/resource/team-3.jpg" alt="" />
                <div class="overlay-box">
                  <h3><a href="#">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Team Block -->
          <div class="team-block">
            <div class="inner-box">
              <span class="triangle-one"></span>
              <span class="triangle-two"></span>
              <div class="image">
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

                <img src="{{ asset('FrontEnd') }}/assets/images/resource/team-4.jpg" alt="" />
                <div class="overlay-box">
                  <h3><a href="#">Luiz Hector</a></h3>
                  <div class="designation">CEO of Carsore</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Team Section -->

  <!-- Faq's Section -->
  <section class="faq-section d-none">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title">faq</div>
        <h2>Frequently Asked Questions</h2>
      </div>
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-6">
          <div data-depth="0.20" class="icon-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)"></div>
          <div data-depth="0.40" class="pattern-layer"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-3.png)"></div>
        </div>
        <div class="row clearfix">
          <!-- Accordion Column -->
          <div class="accordion-column col-lg-6 cl-md-12 col-sm-12">
            <div class="inner-column">
              <!-- Accordian Box -->
              <ul class="accordion-box">
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    <div class="icon-outer">
                      <span class="icon icon-plus fa fa-plus"></span>
                      <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    1. Compare personalized quotes?
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley
                      </div>
                    </div>
                  </div>
                </li>

                <!--Block-->
                <li class="accordion block active-block">
                  <div class="acc-btn active">
                    <div class="icon-outer">
                      <span class="icon icon-plus fa fa-plus"></span>
                      <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    2. Compare personalized quotes?
                  </div>
                  <div class="acc-content current">
                    <div class="content">
                      <div class="text">
                        Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley
                      </div>
                    </div>
                  </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    <div class="icon-outer">
                      <span class="icon icon-plus fa fa-plus"></span>
                      <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    3. Compare personalized quotes?
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley
                      </div>
                    </div>
                  </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    <div class="icon-outer">
                      <span class="icon icon-plus fa fa-plus"></span>
                      <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    4. Compare personalized quotes?
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- Image Column -->
          <div class="image-column col-lg-6 cl-md-12 col-sm-12">
            <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="image">
                <span class="triangle-one"></span>
                <span class="triangle-two"></span>
                <img src="{{ asset('FrontEnd') }}/assets/images/resource/faq.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Faq's Section -->

  <!-- Testimonial Section -->
  <section class="testimonial-section d-none">
    <div class="auto-container">
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-7">
          <div data-depth="0.20" class="icon-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)"></div>
          <div data-depth="0.30" class="pattern-layer"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-3.png)"></div>
        </div>
        <div class="row clearfix">
          <!-- Carousel Column -->
          <div class="carousel-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <!-- Sec Title -->
              <div class="sec-title">
                <div class="title">feedback</div>
                <h2>
                  What Clients Says <br />
                  About us?
                </h2>
              </div>
              <div class="single-item-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                  <div class="inner-box">
                    <div class="quote-icon">
                      <img src="{{ asset('FrontEnd') }}/assets/images/icons/quote-icon.png" alt="" />
                    </div>
                    <div class="text">
                      A great experience, plenty of useful information given and no pressure put on me to buy.
                      Helpful and friendly service.
                    </div>
                    <div class="author-box">
                      <div class="box-inner">
                        <div class="author-image">
                          <img src="{{ asset('FrontEnd') }}/assets/images/resource/author-2.jpg" alt="" />
                        </div>
                        Luiz Jenifer<br />
                        <div class="designation">Happy Customer</div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                  <div class="inner-box">
                    <div class="quote-icon">
                      <img src="{{ asset('FrontEnd') }}/assets/images/icons/quote-icon.png" alt="" />
                    </div>
                    <div class="text">
                      Their committed sales staff strive to find the right model for every customer to suit their
                      lifestyle and budget. 5-star!
                    </div>
                    <div class="author-box">
                      <div class="box-inner">
                        <div class="author-image">
                          <img src="{{ asset('FrontEnd') }}/assets/images/resource/author-2.jpg" alt="" />
                        </div>
                        Alana Dyan<br />
                        <div class="designation">Happy Customer</div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                  <div class="inner-box">
                    <div class="quote-icon">
                      <img src="{{ asset('FrontEnd') }}/assets/images/icons/quote-icon.png" alt="" />
                    </div>
                    <div class="text">
                      A really positive car-buying experience. No hard sell, but plenty of time to show us the car
                      and answer all our questions.
                    </div>
                    <div class="author-box">
                      <div class="box-inner">
                        <div class="author-image">
                          <img src="{{ asset('FrontEnd') }}/assets/images/resource/author-2.jpg" alt="" />
                        </div>
                        Jenifer Luiz<br />
                        <div class="designation">Happy Customer</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Image Column -->
          <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="image titlt" data-tilt data-tilt-max="2">
                <img src="{{ asset('FrontEnd') }}/assets/images/resource/insurance.jpg" alt="" />
                <span class="triangle-one"></span>
                <span class="triangle-two"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->

  <!-- Awards Section -->
  <section class="awards-section d-none">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title light centered">
        <div class="title">We Achieved</div>
        <h2>Awards & Recognition</h2>
      </div>
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-8">
          <div data-depth="0.20" class="icon-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)"></div>
          <div data-depth="0.20" class="pattern-layer"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-3.png)"></div>
        </div>
        <div class="row clearfix">
          <!-- blocks Column -->
          <div class="blocks-column col-lg-6 cl-md-12 col-sm-12">
            <div class="inner-column">
              <div class="row clearfix">
                <!-- Award Block -->
                <div class="award-block col-lg-6 col-md-6 col-sm-12">
                  <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="color-layer"></div>
                    <div class="icon flaticon-graduated-1"></div>
                    <h5>
                      <a href="#">Best Company</a>
                    </h5>
                    <div class="text">
                      Lorem Ipsum is simply dummy text of the printing.
                    </div>
                  </div>
                </div>

                <!-- Award Block -->
                <div class="award-block col-lg-6 col-md-6 col-sm-12">
                  <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="color-layer"></div>
                    <div class="icon flaticon-bar-chart-1"></div>
                    <h5>
                      <a href="#">Growing Business</a>
                    </h5>
                    <div class="text">
                      Lorem Ipsum is simply dummy text of the printing.
                    </div>
                  </div>
                </div>

                <!-- Award Block -->
                <div class="award-block col-lg-6 col-md-6 col-sm-12">
                  <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="color-layer"></div>
                    <div class="icon flaticon-charity"></div>
                    <h5>
                      <a href="#">Great Support</a>
                    </h5>
                    <div class="text">
                      Lorem Ipsum is simply dummy text of the printing.
                    </div>
                  </div>
                </div>

                <!-- Award Block -->
                <div class="award-block col-lg-6 col-md-6 col-sm-12">
                  <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="color-layer"></div>
                    <div class="icon flaticon-trophy-1"></div>
                    <h5>
                      <a href="#">Excellent Service</a>
                    </h5>
                    <div class="text">
                      Lorem Ipsum is simply dummy text of the printing.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Image Column -->
          <div class="image-column col-lg-6 cl-md-12 col-sm-12">
            <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="image">
                <span class="triangle-one"></span>
                <span class="triangle-two"></span>
                <img src="{{ asset('FrontEnd') }}/assets/images/resource/award.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Awards Section -->

  <!-- News Section -->
  <section class="news-section d-none">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title">Our blog</div>
        <h2>Read Our Daily Blog</h2>
      </div>
      <!-- End Sec Title -->
      <div class="inner-container">
        <div class="section-icons-outer parallax-scene-9">
          <div data-depth="0.20" class="icon-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/icons/icon-1.png)"></div>
          <div data-depth="0.20" class="pattern-layer"
            style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-4.png)"></div>
        </div>
        <div class="row clearfix">
          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/news-1.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li>
                    <span class="icon flaticon-user"></span>22 OCT, 2021
                  </li>
                </ul>
                <h4>
                  <a href="#">How to apply on carsore for car insurance ?</a>
                </h4>
                <a href="#" class="read-more">Read More</a>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/news-2.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li>
                    <span class="icon flaticon-user"></span>22 OCT, 2021
                  </li>
                </ul>
                <h4>
                  <a href="#">How to apply on carsore for car insurance ?</a>
                </h4>
                <a href="#" class="read-more">Read More</a>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
              <div class="image">
                <a href="#"><img src="{{ asset('FrontEnd') }}/assets/images/resource/news-3.jpg" alt="" /></a>
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                  <li>
                    <span class="icon flaticon-user"></span>22 OCT, 2021
                  </li>
                </ul>
                <h4>
                  <a href="#">How to apply on carsore for car insurance ?</a>
                </h4>
                <a href="#" class="read-more">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End News Section -->

  <!-- Clients Section -->
  <div class="clients-section">
    <div class="auto-container">
      <div class="section-icons-outer parallax-scene-10">
        <div data-depth="0.50" class="pattern-layer" style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-3.png)">
        </div>
      </div>
      <div class="carousel-outer">
        <!--Sponsors Slider-->
        <ul class="sponsors-carousel owl-carousel owl-theme">
            @foreach ($brands as $brand )
            <li>
                <div class="image-box">
                  <a href="#"><img src="{{ asset($brand->brand_image) }}" alt="" /></a>
                </div>
              </li>
            @endforeach

        </ul>
      </div>
    </div>
  </div>
  <!-- End Clients Section -->

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="auto-container">
      <div class="inner-container" style="background-image: url({{ asset('FrontEnd') }}/assets/images/background/pattern-5.png)">
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
