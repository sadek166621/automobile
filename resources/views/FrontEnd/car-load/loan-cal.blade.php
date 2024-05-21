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
        width: 466px;
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

    .calculator-body {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 1200px;
    margin: auto;
}

.form-result-container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap; /* Added to allow wrapping on smaller screens */
}

.calculate-context, .result-context {
    flex: 1;
    min-width: 300px; /* Ensure minimum width for smaller screens */
}

.calculate-context {
    max-width: 600px;
}

.form-group {
    margin-bottom: 15px;
}

.control-label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.input[type="number"],
.input[type="text"],
.input[type="range"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.input[type="range"] {
    width: calc(100% - 90px);
}

.pm-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.button {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.button:hover {
    background-color: #218838;
}

.result-context {
    background-image: url('{{ asset('FrontEnd')}}/assets/images/222Capture.PNG '); /* Replace with your image URL */
    background-size: cover; /* Adjust the image size */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    background-color: #f9f9f9; /* Fallback color */
    border-top: 1px solid #ddd;
    padding-top: 325px; /* Adjust this based on your needs */

}

.result {
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #fff;
}

.result .item {
    margin-bottom: 10px;
}

.result .amount {
    font-size: 1.2em;
    font-weight: bold;
}

.arrow {
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #fff;
    margin: 20px auto 0;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .form-result-container {
        flex-direction: column;
        align-items: center;
    }

    .calculate-context, .result-context {
        max-width: 100%;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .result-context {
        padding-top: 20px; /* Adjust padding for smaller screens */
    }
}

@media (max-width: 480px) {
    .btn-primary, .button {
        width: 100%;
        margin-bottom: 10px;
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
            <h1>Loan Calculator</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Loan Calculator</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Page Section -->
<section class="cars">
    <br>
    <form action="">
        <div class="calculator-body">
            <div class="form-result-container">
                <div class="calculate-context">
                    <div class="form-group">
                        <label class="control-label" for="Product">SELECT A CAR</label>
                        <select class="form-control input" id="Product" name="Product">
                            <option value="">-- Select a Vehicle --</option>
                            <option value="PRD000000000823">Toyota-Fielder-2019(EX)-NKE165-7226843</option>
                        </select>
                        <span class="field-validation-valid text-danger" data-valmsg-for="Product" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="VehiclePrice">VEHICLE PRICE (BDT)</label>
                        <input class="form-control input" id="VehiclePrice" name="VehiclePrice" type="number" value="" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="VehiclePrice" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="DownPayment">DOWN PAYMENT (BDT)</label>
                        <input class="form-control input" id="DownPayment" name="DownPayment" type="number" value="" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="DownPayment" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="InterestRate">INTEREST RATE (%)</label>
                        <input class="form-control input" id="InterestRate" name="InterestRate" type="text" value="" />
                        <span class="field-validation-valid text-danger" data-valmsg-for="InterestRate" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="PaymentType">PAYMENT TYPE</label>
                        <select class="form-control input" id="PaymentType" name="PaymentType">
                            <option value="">Select</option>
                            <option value="12">Monthly</option>
                            <option value="4">Quarterly</option>
                            <option value="2">Half-Yearly</option>
                            <option value="1">Yearly</option>
                        </select>
                        <span class="field-validation-valid text-danger" data-valmsg-for="PaymentType" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="LoanPeriod">LOAN PERIOD (YEARS)</label>
                        <table style="width:100%;">
                            <tr>
                                <td style="width:45px;">
                                    <button type="button" class="btn btn-primary pm-btn" onclick="YearMinus();"><i class="fa fa-minus"></i></button>
                                </td>
                                <td id="LoanPeriodContext">
                                    <input value="1" data-placement="top" style="
                                    width: 98%;
                                " data-toggle="tooltip" id="LoanPeriod" max="25" min="1" name="LoanPeriod" step="1" title="1 Year/s" type="range" value="" />
                                </td>
                                <td style="width:45px; text-align:right;">
                                    <button type="button" class="btn btn-primary pm-btn" onclick="YearPlus();"><i class="fa fa-plus"></i></button>
                                </td>
                            </tr>
                        </table>
                        <span class="field-validation-valid text-danger" data-valmsg-for="LoanPeriod" data-valmsg-replace="true"></span>
                    </div>
                    <div>
                        <button class="button" style="float:right;" type="button" onclick="LoanCalculate();">CALCULATE</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="result-context">
                    <div class="result">
                        <div class="item">
                            <div>Installment Amount ( Tk.)</div>
                            <div class="amount">BDT: <span id="InstallmentAmount">0.00</span></div>
                        </div>
                        <div class="item">
                            <div>Total Interest Payment</div>
                            <div class="amount">BDT: <span id="TotalInterest">0.00</span></div>
                        </div>
                        <div class="item">
                            <div>Total Amount to Pay</div>
                            <div class="amount">BDT: <span id="TotalAmount">0.00</span></div>
                        </div>
                        <div class="arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip().tooltip('show');
    });
    $("#LoanPeriod").change(function () {
        var value = this.value + " Year/s";
        $("#LoanPeriod").tooltip('destroy');
        $("#LoanPeriod").data('toggle', 'tooltip');
        $("#LoanPeriod").data('placement', 'top');
        $("#LoanPeriod").attr('title', value);
        $("#LoanPeriod").tooltip({
            container: 'body'
        }).tooltip('show');
    })

    function YearMinus() {
        var year = parseFloat($("#LoanPeriod").val());
        $("#LoanPeriod").val(year - 1);
        $("#LoanPeriod").change();
    }

    function YearPlus() {
        var year = parseFloat($("#LoanPeriod").val());
        $("#LoanPeriod").val(year + 1);
        $("#LoanPeriod").change();
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().tooltip('show');
    });
    $("#LoanPeriod").change(function () {
        var value = this.value + " Year/s";
        $("#LoanPeriod").tooltip('destroy');
        $("#LoanPeriod").data('toggle', 'tooltip');
        $("#LoanPeriod").data('placement', 'top');
        $("#LoanPeriod").attr('title', value);
        $("#LoanPeriod").tooltip(
            {
                container: 'body'
            }).tooltip('show');
    })

    function LoanCalculate() {
        var installmentFreq = parseFloat($("#PaymentType").val()||0);
        var loanDuration = parseFloat($("#LoanPeriod").val()||0);
        var interestRate = parseFloat($("#InterestRate").val()||0);
        var vehiclePrice = parseFloat($("#VehiclePrice").val() || 0);
        var downPayment=parseFloat($("#DownPayment").val() || 0);
        var loanAmount = vehiclePrice - downPayment;
        if (vehiclePrice == 0) {
            alert_error("Please Select Vehicle Price !");
            $("#VehiclePrice").focus();
            return false;
        }
        if (interestRate == 0) {
            alert_error("Please Select Interest Rate !");
            $("#InterestRate").focus();
            return false;
        }
        if (installmentFreq == 0) {
            alert_error("Please Select Payment Type !");
            $("#PaymentType").focus();
            return false;
        }
        if (loanDuration == 0) {
            alert_error("Please Select Loan Period !");
            $("#LoanPeriod").focus();
            return false;
        }

        var totalInstallmentNumber = loanDuration * installmentFreq;
        var powerPart = Math.pow((1 + (interestRate / 100) / installmentFreq), totalInstallmentNumber);
        installmentAmount = loanAmount * (interestRate / 100) / installmentFreq * powerPart / (powerPart - 1);
        $("#InstallmentAmount").text(installmentAmount.toFixed(2));
        $("#TotalInterest").text(((installmentAmount * totalInstallmentNumber) - loanAmount).toFixed(2));
        $("#TotalAmount").text((installmentAmount * totalInstallmentNumber).toFixed(2));
    }


</script>

@endpush
