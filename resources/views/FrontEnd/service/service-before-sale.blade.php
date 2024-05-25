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
        width: 599px;
        margin: 0 auto;

    }

    .button-4 {
        font-size: medium;
        border: 1px solid;
        padding: 6px 7px 8px 6px;
        border-radius: 5px;
        width: 100%;
        text-align: center;
        transition: background-color 0.3s, color 0.3s;
        /* Smooth transition for background and text color changes */
    }

    .button-4:hover {
        background-color: #002244;
        /* Change background to red on hover */
        color: white;
        /* Change text color to white on hover */
        border-color: #002244;
        /* Change border color to red on hover */
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

    .pre-order-bg {
        background-color: #1e90ff;
        color: white;
        padding: 20px;
        text-align: center;
    }


    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .left-context,
    .right-context {
        width: 100%;
        float: left;
    }


    .input,
    .input-group-addon,
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .input-group {
        display: flex;
        align-items: center;
    }

    .input-group-addon {
        padding: 10px;
        background-color: #eee;
        border: 1px solid #ccc;
        border-right: none;
        border-radius: 4px 0 0 4px;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #1e90ff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
    }

    .button img {
        vertical-align: middle;
        width: 20px;
        height: 20px;
    }

    .button:hover {
        background-color: #0073e6;
    }

    .control-label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    .field-validation-valid {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .col-sm-6 {
            width: 100%;
        }
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
            <h1>Service Before Sales</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Service Before Sales</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Page Section -->
<section class="cars">

    <div class="page-wid">
        <br><br>
        <p>We can give you all the necessary information regarding your selected cars from our available stock as shown
            in the <a href="/find-a-car">“Find a car”</a> page.</p>
        <p>We can also give you information about those cars not shown on the website but in the import process.</p>
        <p>You can also place your order for your expected car not with us at the moment. You just fill in the <a
                href="/preorder">PREORDER form</a>, and we will inform you in a short time whether or not we can import
            it for you.</p>
        <p>You can exchange your old one with our new one. This <strong>CAR EXCHANGE</strong> program is carried out
            with the involvement of a third party through us. To obtain all the necessary information about your old car
            please fill in the <a href="/car-exchange">car exchange form</a>.</p>
        <p>We also provide information about bank loan availability to finance your dream car. Please go to our <a
                href="/car-loan">CAR LOAN</a> page to calculate EMI.</p>
        <br>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="text-center">
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="btn btn-primary btn-custom" id="preorder_btn">PREORDER</a>
                </div>
                <div class="col-md-6">
                    <a href="" class="btn btn-secondary btn-custom" id="exchange_btn">CAR EXCHANGE FORM</a>
                </div>
            </div>
        </div>
        <br>
        <div class="services_form" style="display:none;">
            <form action="{{ route('customer-preorder-req') }}" method="Post">
                @csrf
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="box-shadow: 0 0 10px rgba(0, 0, 0, .2); ">
                        <div class="row">
                            <div class="col-md-6" style="padding: 25px 25px 17px 25px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="ManufacturerCode">Manufacturer</label>
                                        <select class="form-control" id="brandSelect" data-val="true" name="preorder_manufacturer">
                                            <option value="">-- Select a Manufacturer --</option>
                                            @foreach ($brands as $brand )
                                            <option value="{{ $brand->id}}">{{ $brand->name_en }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="position" value="1">
                                        <label class="control-label" for="ManufacturerCode">Year</label>
                                        <select class="form-control" data-val="true" name="preorder_year">
                                            <option value="">-- Select a Year --</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
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
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                        </select>
                                        <label class="control-label" for="ManufacturerCode">Preferred Color</label>
                                        <input type="text" class="form-control" name="preorder_color"
                                            placeholder="Preferred Color">

                                        <label class="control-label" for="ManufacturerCode">Preferred Delivery
                                            Date</label>
                                        <input type="date" class="form-control" name="preorder_delivary_date"
                                            placeholder="Preferred Delivery Date">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="ManufacturerCode">Model</label>
                                        <select class="form-control" id="carSelects" data-val="true" name="preorder_model">
                                            <option value="">-- Select a Model --</option>

                                        </select>
                                        <label class="control-label" for="ManufacturerCode">Preferred Grade</label>
                                        <select class="form-control" data-val="true" name="preorder_grade">
                                            <option value="">-- Select a Preferred Grade --</option>
                                            <option value="AGR000000000001">S</option>
                                            <option value="AGR000000000002">6</option>
                                            <option value="AGR000000000003">5.5</option>
                                            <option value="AGR000000000004">5</option>
                                            <option value="AGR000000000005">4.5</option>
                                            <option value="AGR000000000006">4</option>
                                            <option value="AGR000000000007">3.5</option>
                                            <option value="AGR000000000008">3</option>
                                            <option value="AGR000000000009">2</option>
                                            <option value="AGR000000000010">1</option>
                                            <option value="AGR000000000011">R</option>
                                            <option value="AGR000000000012">0</option>
                                            <option value="AGR000000000013">RA</option>
                                        </select>
                                        <label class="control-label" for="ManufacturerCode">Preferred Mileager</label>
                                        <input type="text" class="form-control" name="preorder_mileage"
                                            placeholder="Preferred Mileage">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="control-label">Description</label>
                                        <textarea name="" id=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"
                                style="background-color: #00ace8; padding: 25px 25px 17px 25px; color: white;">
                                <div>
                                    <label class="control-label" for="ManufacturerCode">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                    <label class="control-label" for="ManufacturerCode">Contact Number</label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="Contact Number">
                                    <label class="control-label" for="ManufacturerCode">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <label class="control-label" for="ManufacturerCode">Address</label>
                                    <textarea name="address"></textarea>
                                    <button type="submit" style="border: 1px solid white"
                                        class="btn btn-dark float-right">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>

                </div>
            </form>
        </div>

        <div class="exchange_form" style="display: none;">
            <form action="{{ route('customer-car-exchange') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="box-shadow: 0 0 10px rgba(0, 0, 0, .2); ">
                        <div class="row">
                            <div class="col-md-4" style="padding: 25px 25px 17px 25px;">
                                <h4 style="color: black;text-align: center"><strong>Your Car Details</strong></h4>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="Manufacturer">Manufacturer</label>
                                        <select class="form-control" data-val="true" name="your_car_manufacture">
                                            <option value="">-- Select a Manufacturer --</option>
                                            <option value="MNF000000000001">Toyota</option>
                                            <option value="MNF000000000002">Honda</option>
                                            <option value="MNF000000000003">Nissan</option>
                                            <option value="MNF000000000004">Mitsubishi</option>
                                            <option value="MNF000000000005">Mazda</option>
                                            <option value="MNF000000000006">Suzuki</option>
                                            <option value="MNF000000000008">Isuzu</option>
                                            <option value="MNF000000000009">BMW</option>
                                            <option value="MNF000000000010">Lexus</option>
                                        </select>
                                        <label class="control-label" for="ManufacturerCode">Year</label>
                                        <select class="form-control" data-val="true" name="your_car_year">
                                            <option value="">-- Select a Year --</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
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
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                        </select>
                                        <label class="control-label" for="your_car_preferred_color"> Color</label>
                                        <input type="text" class="form-control" name="your_car_preferred_color"
                                            placeholder=" Color">

                                        <label class="control-label" for="your_car_preferred_delivery_date"> Delivery
                                            Date</label>
                                        <input type="date" class="form-control" name="your_car_preferred_delivery_date"
                                            placeholder=" Delivery Date">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="model">Model</label>
                                        <input type="text" class="form-control" placeholder="Model" name="your_car_model">
                                        <label class="control-label" for="ManufacturerCode"> Grade</label>
                                        <input type="text" class="form-control" placeholder=" Grade" name="your_car_preferred_grade">
                                        <label class="control-label" for="ManufacturerCode"> Mileager</label>
                                        <input type="text" class="form-control" name="your_car_preferred_mileage"
                                            placeholder=" Mileage">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="control-label">Description</label>
                                        <textarea name="your_description" id=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"
                                style="background-color: #00ace8; padding: 25px 25px 17px 25px; color: white;">
                                <h4 style="color: black;text-align: center"><strong>Preferred Car Details </strong></h4>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="ManufacturerCode">Preferred Manufacturer</label>
                                        <select class="form-control" data-val="true" name="preferred_manufacturercode">
                                            <option value="">-- Select a Manufacturer --</option>
                                            <option value="MNF000000000001">Toyota</option>
                                            <option value="MNF000000000002">Honda</option>
                                            <option value="MNF000000000003">Nissan</option>
                                            <option value="MNF000000000004">Mitsubishi</option>
                                            <option value="MNF000000000005">Mazda</option>
                                            <option value="MNF000000000006">Suzuki</option>
                                            <option value="MNF000000000008">Isuzu</option>
                                            <option value="MNF000000000009">BMW</option>
                                            <option value="MNF000000000010">Lexus</option>
                                        </select>
                                        <label class="control-label" for="year">Preferred Year</label>
                                        <select class="form-control" data-val="true" name="preferred_year">
                                            <option value="">-- Select a Year --</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
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
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                        </select>
                                        <label class="control-label" for="ManufacturerCode">Preferred Color</label>
                                        <input type="text" class="form-control" name="preferred_color"
                                            placeholder="Preferred Color">

                                        <label class="control-label" for="ManufacturerCode">Preferred Delivery
                                            Date</label>
                                        <input type="date" class="form-control" name="preferred_delivary_date"
                                            placeholder="Preferred Delivery Date">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="ManufacturerCode">Preferred <br> Model</label>
                                        <input type="text" class="form-control" placeholder="Prefered Model" name="preferred_model">
                                        <label class="control-label" for="ManufacturerCode">Preferred Grade</label>
                                        <input type="text" class="form-control" placeholder="Prefered Grade" name="preferred_grade">
                                        <label class="control-label" for="ManufacturerCode">Preferred Mileager</label>
                                        <input type="text" class="form-control" name="preferred_mileage"
                                            placeholder="Preferred Mileage">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="control-label">Description</label>
                                        <textarea name="preferred_description" id=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="padding: 25px 25px 17px 25px;">
                                <h4 style="color: black;text-align: center"><strong>Contact Information</strong></h4>

                                <div>
                                    <label class="control-label" for="ManufacturerCode">Name</label>
                                    <input type="text" class="form-control" name="m   " placeholder="Name">
                                    <label class="control-label" for="ManufacturerCode">Contact Number</label>
                                    <input type="text" class="form-control" name="phone"
                                        placeholder="Contact Number">
                                    <label class="control-label" for="ManufacturerCode">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <label class="control-label" for="ManufacturerCode">Address</label>
                                    <textarea name="address"></textarea>
                                    <button type="submit" style="border: 1px solid white"
                                        class="btn btn-dark float-right">Submit</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>

                </div>
            </form>
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
@endsection
@push('js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script>
    $("#preorder_btn").click(function () {
        event.preventDefault();
        $(".services_form").show(1000);
        $(".exchange_form").hide(1000);
    });

</script>
<script>
    $("#exchange_btn").click(function () {
        event.preventDefault();
        $(".exchange_form").show(1000);
        $(".services_form").hide(1000);
    });

</script>

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
                            $('#carSelects').append('<option value="'+ value.name +'">'+ value.name +'</option>');
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
