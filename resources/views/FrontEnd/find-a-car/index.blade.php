@extends('FrontEnd.master')
@section('content')
<section class="page-title">
    <div class="background-container">
        <img class="left-image" src="{{asset('FrontEnd')}}/assets/images/background/header-left-bg.png" alt="" />
        <img class="right-image" class="right-image" src="{{asset('FrontEnd')}}/assets/images/background/7.jpg"
            alt="" />
    </div>
    <div class="service-container">
        <div class="section-icons-outer parallax-scene-1">
            <div data-depth="0.20" class="pattern-layer"
                style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-8.png)">
            </div>
        </div>

        <div class="auto-container">
            <h1>Find A Car</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Find A Car</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Details -->
<section class="cars">
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-lg-8 col-md-12 car-list">
                <div class="row g-5">
                    @foreach ($cars as $home_banner )
                    <div class="col-lg-6 col-md-12 mb-4">
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
                                    <div class="features"><span><i class="omfi-passengers"></i> Year of
                                            Manufacturer:</span>
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
                                        </div> <a href="{{ route('car-details',$home_banner->id) }}" class="button-4"
                                            style="font-size: medium;border: 1px solid;padding: 3px 5px 3px 5px;border-radius: 5px;"><strong>Details</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-md-12 mt-5 text-center">
                        <ul class="pagination-wrap">
                            <!-- Previous Page Link -->
                            @if ($cars->onFirstPage())
                                <li class="disabled"><span><i class="fas fa-angle-left"></i></span></li>
                            @else
                                <li><a href="{{ $cars->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                            @endif

                            <!-- Pagination Elements -->
                            @foreach ($cars as $key => $car)
                                <li class="{{ $cars->currentPage() == $key + 1 ? 'active' : '' }}"><a href="{{ $cars->url($key + 1) }}">{{ $key + 1 }}</a></li>
                            @endforeach

                            <!-- Next Page Link -->
                            @if ($cars->hasMorePages())
                                <li><a href="{{ $cars->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
                            @else
                                <li class="disabled"><span><i class="fas fa-angle-right"></i></span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12 mb-30">
                <div class="sidebar-list">
                    <div class="search">
                        <form>
                            <input type="text" name="search" placeholder="Search ...">

                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <form action="">
                        <div class="items">
                            <h5>Select Manufacturer</h5>
                            <div class="filter-radio-group">
                                <div class="form-group">
                                    <select name="manufacture" id="brandSelect" class="form-control">
                                        @foreach ($brands as $brand )
                                        <option value="{{ $brand->id }}">{{ $brand->name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <h5>Car Models</h5>
                            <div class="filter-radio-group">
                                <div class="form-group">
                                    <select name="model" id="carSelects" class="form-control">
                                        <option value="">Select Models</option>
                                      </select>
                                </div>

                            </div>
                            <h5>Year</h5>
                            <div class="filter-radio-group">
                                <div class="form-group">
                                    <select name="year" class="form-control">
                                        <option value="">Year</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                      </select>
                                </div>

                            </div>
                            <h5>Fuel Type</h5>
                            <div class="filter-radio-group">
                                <div class="form-group">
                                    <select name="fuel_type" class="form-control">
                                        <option value=""selected>Select Fuel Type</option>
                                        <option value="Octane">Octane</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="CNG">CNG</option>
                                        <option value="LPG">LPG</option>
                                        <option value="Hybrid">Hybrid</option>
                                        <option value="Plug-in Hybrid">Plug-in Hybrid</option>
                                        <option value="Electric">Electric</option>
                                      </select>
                                </div>

                            </div>
                            <div class="subscribe-form">
                                  <div class="form-group">
                                    <button type="submit" class="theme-btn subscribe-btn">
                                      Subscribe
                                    </button>
                                  </div>
                              </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="cta-section">
    <div class="auto-container">
        <div class="inner-container"
            style="background-image: url({{asset('FrontEnd')}}/assets/images/background/pattern-5.png)">
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
                                    <input type="email" name="email" value="" placeholder="Enter your mail"
                                        required="" />
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
@push('js')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<script>

    $(document).ready(function(){
        $('#brandSelect').on('change', function(){
            // alert('ok');
            var brand_id = $(this).val();
            if(brand_id){
                $.ajax({
                    url: '/getCarsByBrandfrontend/' + brand_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                            console.log(data);
                        $('#carSelects').empty();
                        $.each(data, function(key, value){
                            // alert(value.name);
                            $('#carSelects').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                    }
                });
            } else {
                $('#carSelects').empty();
            }
        });
    });
    </script>
@endpush
