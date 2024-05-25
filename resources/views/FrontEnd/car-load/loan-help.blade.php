
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
        width: 330px;
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
            <h1>Loan Help</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Loan Help</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Page Section -->
<section class="cars">
    <br>
    <form action="{{route('message.submit')}}" method="post">
        @csrf
           <div>
             <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="box-shadow: 0 0 10px rgba(0, 0, 0, .2); ">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6" style="padding: 25px 25px 17px 25px;">
                            <h4 class="control-label">Contact Us</h4>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="ManufacturerCode">Name</label>
                                    <input type="text" class="form-control" required name="name" placeholder="Name">

                                    <label class="control-label" for="ManufacturerCode">Contact</label>
                                    <input type="number" class="form-control" required name="subject" placeholder="Contact">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="ManufacturerCode">Email</label>
                                    <input type="email" class="form-control" required name="email" placeholder="email">

                                </div>
                                <div class="col-md-12">
                                    <label for="" class="control-label">Description</label>
                                    <textarea required name="message" placeholder="Leave a message here" id="" ></textarea>
                                    <button type="submit" style="border: 1px solid white" class="btn btn-dark float-right">Submit</button>

                                </div>

                            </div>
                        </div>
                    </form>
                        <div class="col-md-6" style="background-color: #00ace8; padding: 25px 25px 17px 25px; color: white;">
                            <div>
                            <h3>Phone</h3>
                            <h3>{{get_setting('phone')->value}}</h3>
                            <br><br>
                            <h3>Email</h3>
                            <h3>{{get_setting('email')->value}}
                            </h3>
                            <br><br>
                            <h3>Address</h3>
                            <h3>{{get_setting('business_address')->value}}</h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-2">
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
