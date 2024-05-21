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
        width: 269px;
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
    }
    .button-4:hover {
        background-color: #002244;
        color: white;
        border-color: #002244;
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
    .product-view {
        padding: 10px 50px;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
    }
    .order {
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        padding: 10px;
    }

    .order>.left-context {
        flex: 60;
        width: 60%;
        padding: 10px;
    }

    .order>.left-context>.body {
        width: 100%;
        height: 100%;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 0 7px rgba(0, 0, 0, .1);
    }

    .input-as-hidden {
        position: absolute;
        border: none;
        background-color: none;
        outline: none;
        height: 0;
        width: 0;
    }

    .order>.right-context>.body>table {
        width: 100%;
        font-size: 16px;
        font-weight: bold;
        border-bottom: 10px solid #f1f1f1;
        margin-bottom: 10px;
    }

    .order>.right-context>.body>table .qty {
        width: 30px;
    }

    .order>.right-context>.body>table .qty>button {
        border: none;
        font-size: 12px;
        color: #ccc;
        background-color: #fff;
        width: 100%;
        padding: 0;
    }

    .order>.right-context>.body>table .qty>input {
        text-align: center;
        padding-top: 7px;
    }

    .order>.right-context>.body>table .qty>button {
        border: none;
        font-size: 12px;
        color: #ccc;
        background-color: #fff;
        width: 100%;
        padding: 0;
    }

    .order>.right-context>.body>.form-group {
        margin-bottom: 5px;
    }

    .order>.right-context>.body>.form-group .form-control {
        height: 45px;
    }

    .order>.right-context {
        flex: 60;
        width: 60%;
        padding: 10px;
    }

    .order>.right-context>.body {
        width: 100%;
        height: 100%;
        padding: 10px;
        background-color: #fff;
        box-shadow: 0 0 7px rgba(0, 0, 0, .1);
    }

    .order>.right-context>.body>.title {
        font-size: 25px;
        padding-bottom: 10px;
    }

    .order>.right-context>.body>.payment-accept {
        font-size: 14px;
        padding: 20px 0;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
    }

    .order>.right-context>.body>.payment-accept>.ssl-logo {
        font-size: 12px;
        color: #40455b;
        display: inline-block;
        margin-top: 5px;
    }

    .order>.right-context>.body>.net-total {
        font-size: 25px;
        border: none;
        outline: none;
        text-align: right;
        margin-top: 164px;
        width: 100%;
        font-weight: bold;
        font-family: 'Krona One', sans-serif;
    }

    input[type=checkbox],
    input[type=radio] {
        margin: 4px 0 0;
        margin-top: 1px \9;
        line-height: normal;
    }

    .order>.right-context>.body>button {
        background-color: #ea0000;
        padding: 7px 10px;
        width: 100%;
        color: #fff;
        font-size: 16px;
        border: none;
        font-weight: bold;
        margin-top: 50px;
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
            <h1>Checkout</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
</section>
<section class="cars">
    <div class="page-wid">
        <form action="{{ route('checkout.payment') }}" method="post">
            @csrf
            <div class="order">
                <div class="row">
                    <div class="col-md-6 order">
                        <div class="left-context">
                            <div class="body">
                                <div class="form-group">
                                    <label class="control-label" for="Name">Name</label><span
                                        style="color:#f00;">*</span>
                                    <div class="clearfix"></div>
                                    <input class="form-control" data-val="true"
                                        data-val-length="The field Name must be a string with a maximum length of 100."
                                        data-val-length-max="100" data-val-required="The Name field is required."
                                        id="Name" name="name" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Name"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="ContactNo">Contact No</label><span
                                        style="color:#f00;">*</span>
                                    <div class="clearfix"></div>
                                    <input class="form-control" data-val="true"
                                        data-val-length="The field Contact No must be a string with a maximum length of 50."
                                        data-val-length-max="50" data-val-required="The Contact No field is required."
                                        id="ContactNo" name="phone" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="ContactNo"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <input type="hidden" name="payment_option" value="cod">
                                <div class="form-group">
                                    <label class="control-label" for="Email">Email</label>
                                    <div class="clearfix"></div>
                                    <input class="form-control" data-val="true"
                                        data-val-length="The field Email must be a string with a maximum length of 50."
                                        data-val-length-max="50" id="Email" name="email" type="email" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Email"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Select Area</label>
                                    <select class="form-control" name="shipping_id" id="shipping_id" required>
                                        <option value="">Select Area</option>
                                        @foreach ($shippings as $key => $shipping)
                                        <option value="{{ $shipping->id }}">@if($shipping->type == 1) Inside Dhaka @else
                                            Outside Dhaka @endif </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="Address">Address</label>
                                    <div class="clearfix"></div>
                                    <input class="form-control" data-val="true"
                                        data-val-length="The field Address must be a string with a maximum length of 250."
                                        data-val-length-max="250" id="Address" name="Address" type="text" value="" />
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Address"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="" name="shipping_charge" class="ship_amount" />
                    <input type="hidden" value="" name="shipping_type" class="shipping_type" />
                    <input type="hidden" value="" name="shipping_name" class="shipping_name" />

                    <div class="col-md-6 order">
                        <div class="right-context">
                            <div class="body">
                                <table>
                                    @foreach ($carts as $cart)
                                    <tr>
                                        <td width="500px">
                                            <div class="product-name">{{$cart->name}} x  {{$cart->qty}}</div>
                                        </td>
                                        <td class="qty">
                                            <button type="button" id="{{ $cart->rowId }}" onclick="cartIncrement(this.id)"><i
                                                    class="fa fa-chevron-up"></i></button>
                                            <input value="{{ $cart->qty}}" min="1" max="100" data-val="true"
                                                data-val-number="The field Quantity must be a number."
                                                data-val-required="The Quantity field is required."
                                                 readonly="True" type="text" />
                                            <button type="button" id="{{ $cart->rowId }}" onclick="cartDecrement(this.id)"><i
                                                    class="fa fa-chevron-down"></i></button>
                                        </td>
                                        <td class="amount">
                                            <input Value="৳{{$cart->subtotal}}" data-val="true"
                                                data-val-number="The field Amount must be a number."
                                                data-val-required="The Amount field is required." id="Amount"
                                                name="Amount" readonly="True" type="text" value="" />
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-medium">Shipping</h6>
                                    <h6 class="font-weight-medium" style="
                                    padding-right: 136px;
                                ">৳<span id="ship_amount">0.00</span></h6>
                                    <input type="hidden" value="" name="shipping_charge" class="ship_amount" />
                                    <input type="hidden" value="" name="shipping_type" class="shipping_type" />
                                    <input type="hidden" value="" name="shipping_name" class="shipping_name" />
                                </div>
                                <input type="hidden" value="" name="shipping_charge" class="ship_amount" />
                                <input type="hidden" value="" name="shipping_type" class="shipping_type" />
                                <input type="hidden" value="" name="shipping_name" class="shipping_name" />
                                <input type="hidden" value="{{ $cartTotal }}" name="sub_total" id="cartSubTotalShi" />
                                <input type="hidden" value="" name="grand_total" id="grand_total" />
                                <div class="clearfix"></div>
                                <br>
                                <div class="d-flex">
                                    <h5 class="font-weight-medium">Total</h5>
                                <h5 class="font-weight-bold" style="padding: 0px 0px 144px 301px;">৳<span id="grand_total_set">{{ $cartTotal }}</span></h5>
                                </div>



                                <div>
                                    <label><input id="TermsAndCondition" name="TermsAndCondition" type="checkbox" required
                                            value="true" /><input name="TermsAndCondition" type="hidden"
                                            value="false" /> I agree with the <a href="/terms-and-condition"
                                            target="_blank">terms & conditions</a>, <a href="/privacy-policy"
                                            target="_blank">privacy policy</a>, <a href="/return-and-refund-policy"
                                            target="_blank">return & refund policy</a> </label>
                                </div>
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="cta-section">
    <div class="auto-container" style="position: relative; top: 86px;">
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
    <!--  Division To District Show Ajax -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="division_id"]').on('change', function(){
                var division_id = $(this).val();
                if(division_id) {
                    $.ajax({
                        url: 'division-district/ajax/',
                        type:"GET",
                        data:{'division_id':division_id},
                        dataType:"json",
                        success:function(data) {
                            // Reset district selection
                            $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                            // Populate district options
                            $.each(data, function(key, value){
                                $('select[name="district_id"]').append('<option value="'+ value.id +'">' + capitalizeFirstLetter(value.district_name_en) + '</option>');
                            });
                            $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');
                        },
                    });
                } else {
                    // Reset district selection if division is not selected
                    $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                    $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');
                }
            });

            // Function to capitalize first letter of a string
            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            // Address Relationship Division/District/Upazilla Show Data Ajax
            $('select[name="address_id"]').on('change', function(){
                var address_id = $(this).val();
                $('.selected_address').removeClass('d-none');
                if(address_id) {
                    $.ajax({
                        url: "{{  url('/address/ajax') }}/"+address_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $('#dynamic_division').text(capitalizeFirstLetter(data.division_name_en));
                            $('#dynamic_division_input').val(data.division_id);
                            $("#dynamic_district").text(capitalizeFirstLetter(data.district_name_en));
                            $('#dynamic_district_input').val(data.district_id);
                            $("#dynamic_upazilla").text(capitalizeFirstLetter(data.upazilla_name_en));
                            $('#dynamic_upazilla_input').val(data.upazilla_id);
                            $("#dynamic_address").text(data.address);
                            $('#dynamic_address_input').val(data.address);
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>

    <!--  District To Upazilla Show Ajax -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function(){
                var district_id = $(this).val();
                if(district_id) {
                    $.ajax({
                        url: '/district-upazilla/ajax/',
                        type:"GET",
                        data:{'district_id': district_id},
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="upazilla_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="upazilla_id"]').append('<option value="'+ value.id +'">' + value.name_en + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>

    <!-- create address ajax -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#addressStore').on('click', function() {
                var division_id = $('#division_id').val();
                var district_id = $('#district_id').val();
                var upazilla_id = $('#upazilla_id').val();
                var address     = $('#address').val();
                var is_default  = $('#is_default').val();
                var status      = $('#status').val();

                $.ajax({
                    url: '{{ route('address.ajax.store') }}',
                    type: "POST",
                    data: {
                        _token: $("#csrf").val(),
                        division_id: division_id,
                        district_id: district_id,
                        upazilla_id: upazilla_id,
                        address: address,
                        is_default: is_default,
                        status: status,
                    },
                    dataType:'json',
                    success: function(data){
                        // console.log(data);
                        $('#address').val(null);

                        $('select[name="address_id"]').html('<option value="" selected="" disabled="">Select Address</option>');
                        $.each(data, function(key, value){
                            $('select[name="address_id"]').append('<option value="'+ value.id +'">' + value.address + '</option>');
                        });
                        $('select[name="division_id"]').html('<option value="" selected="" disabled="">Select Division</option>');
                        $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                        $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');

                        // Start Message
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        })
                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                title: data.success
                            })
                        }else{
                            Swal.fire({
                                type: 'error',
                                title: data.error
                            })
                        }

                        // End Message
                        $('#Close').click();
                    }
                });
            });
        });
    </script>
    <script>
        var couponApplied = false; // Declare couponApplied variable
        $(document).ready(function() {
            // Your existing AJAX code for applying the coupon
            $('form[action="{{ route('apply-coupon') }}"]').submit(function(event) {
                event.preventDefault();
                if (couponApplied) {
                    const errorToast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    errorToast.fire({
                        title: 'Coupon Already Used'
                    });
                    return;
                }
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(data) {
                        if (data.discount) {
                            let couponDiscount = parseInt(data.discount);

                            // Set coupon discount as an attribute for later use
                            $('#grand_total_set').attr('data-coupon-discount', couponDiscount);

                            // Set couponApplied to true after applying the coupon
                            couponApplied = true;

                            // Update the displayed coupon amount
                            $('#coupon_amount').text('৳' + couponDiscount);

                            // Update the total price after applying the coupon
                            updateTotalPrice();
                            showCouponInformation(data);
                        }
                        const successToast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        // Create error Toast mixin
                        const errorToast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        // Check if there is an error or success message in the data
                        if ($.isEmptyObject(data.error)) {
                            // Display success Toast
                            successToast.fire({
                                title: data.success
                            });
                        } else {
                            // Display error Toast
                            errorToast.fire({
                                title: data.error
                            });
                        }

                        // End Message
                        $('#Close').click();
                        // Handle other messages or actions if needed
                    },
                    error: function(xhr, status, error) {
                        // Handle errors if necessary
                        const errorToast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        // Check if there is an error message in the response
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            // Display error Toast with the error message
                            errorToast.fire({
                                title: xhr.responseJSON.error
                            });
                        } else {
                            // Display a generic error Toast
                            errorToast.fire({
                                title: 'Invalid Coupon Code'
                            });
                        }
                    }
                });
            });
            function showCouponInformation(data) {
                // Assuming you have an element to display the coupon information
                // Update the element with the coupon details
                $('#couponInformation').html('<div class="d-flex justify-content-between">' +
                    '<h6 class="font-weight-medium">Coupon</h6>' +
                    '<h6 class="font-weight-medium">৳<span>' + data.discount + '</span></h6>' +
                    '</div>' +
                    '<input type="hidden" value="" name="shipping_charge" class="ship_amount" />' +
                    '<input type="hidden" value="" name="shipping_type" class="shipping_type" />' +
                    '<input type="hidden" value="" name="shipping_name" class="shipping_name" />');
            }

            // Your existing AJAX code for updating shipping information
            $('select[name="shipping_id"]').on('change', function() {
                var shipping_id = $(this).val();

                if (shipping_id) {
                    $.ajax({
                        url: "{{ url('/checkout/shipping/ajax') }}/" + shipping_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#ship_amount').text(data.shipping_charge);
                            $('.ship_amount').val(data.shipping_charge);
                            $('.shipping_name').val(data.name);
                            $('.shipping_type').val(data.type);

                            updateTotalPrice(); // Update the total price after selecting shipping
                        },
                    });
                } else {
                    // Reset the elements if no shipping option is selected
                    $('#ship_amount').text('0');
                    $('.ship_amount').val('0');
                    $('.shipping_name').val('');
                    $('.shipping_type').val('');

                    updateTotalPrice(); // Update the total price after resetting shipping
                }
            });

            // Function to update the total price based on coupon and shipping
            function updateTotalPrice() {
                let couponDiscount = couponApplied ? parseInt($('#grand_total_set').attr('data-coupon-discount')) : 0;
                let shipping_price = parseInt($('#ship_amount').text());
                let product_price = parseInt($('#cartSubTotalShi').val());
                let grand_total_price = product_price + shipping_price - couponDiscount;
                // Update the displayed total
                $('#grand_total_set').text(grand_total_price);
                $('#grand_total').val(grand_total_price);
            }
        });
        function cartIncrement(rowId){
            $.ajax({
                type:'GET',
                url: "/cart-increment/"+rowId,
                dataType:'json',
                success:function(data){
                    // console.log(data)
                    location.reload();


                    const Toast = Swal.mixin({
                        toast:true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1200
                    })
                    Toast.fire({
                        type:'success',
                        title: data.success
                    })

                    if($.isEmptyObject(data.error)){
                        const Toast = Swal.mixin({
                            toast:true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1200
                        })

                        Toast.fire({
                            type:'success',
                            title: data.success
                        })

                    }else{
                        const Toast = Swal.mixin({
                            toast:true,
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 1200
                        })

                        Toast.fire({
                            type:'error',
                            title: data.error
                        })
                    }

                }
            });
        }
        /* ==================== End  cartIncrement ================== */

        /* ==================== Start  Cart Decrement ================== */
        function cartDecrement(rowId){
            $.ajax({
                type:'GET',
                url: "/cart-decrement/"+rowId,
                dataType:'json',
                success:function(data){
                    console.log(data)
                    //console.log(data);
                    // if(data == 2){
                    //     alert("#"+rowId);
                    //     $("#"+rowId).attr("disabled", "true");
                    // }
                    location.reload();

                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                }
            });
        }
        /* ================ Start My Cart Remove Product =========== */
        function cartRemove(id){
            $.ajax({
                type: 'GET',
                url: '/cart-remove/'+id,
                dataType:'json',
                success:function(data){
                    cart();


                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }

    </script>

@endpush
