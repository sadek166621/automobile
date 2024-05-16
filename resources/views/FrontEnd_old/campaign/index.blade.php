@extends('FrontEnd.master')
@section('title')
    Flash Sale
@endsection
@section('content')
    <div class="container-fluid py-5 page-header">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    {{--                    <h2 class="display-3 fw-bold">{{$category->name_en}}</h2>--}}
                    <h5 class="display-6 fw-semibold">{{session()->get('language') == 'bangla' ? 'ফ্ল্যাশ সেল':'Flash Sale'}}</h5>
                    <h6>{{count($campaign->campaing_products)}} {{session()->get('language') == 'bangla' ? 'টি পণ্য পাওয়া গেছে':'Products Found'}}</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Flash Sale Start -->
    {{-- <section class="flash-sale container-fluid bg-white mt-2">
        <div class="container p-2">
            <div class="d-flex align-items-center">
                <h5 class="me-5 d-none d-md-block">On Sale Now</h5>
                <h5 class="trimmers me-4">Ending in <span>03</span> : <span>47</span> : <span> 45</span></h5>
                <span class="d-none d-md-block">|</span>
                <p class="ms-5 d-none d-md-block">00 : 00 Tomorrow</p>
            </div>
        </div>

    </section> --}}
    <!-- Flash Sale End -->

    <!-- Shop Option Part Start -->
    {{-- <section class="shop-option container-fluid mt-3 p-2">
        <div class="container">
            <ul>
                <li><a href="">All</a></li>
                <li><a href="">Electronic</a></li>
                <li><a href="#">Health &amp; Beauty</a></li>
                <li><a href="">Fashion</a></li>
                <li><a href="">Home &amp; Living</a></li>
                <li><a href="">Supermarket</a></li>
                <li><a href="">Stationary &amp; Toys</a></li>
                <li><a href="">Sports &amp; Motors</a></li>
            </ul>
        </div>
    </section> --}}
    <!-- Shop Option Part End -->


    <!-- Product Start -->
    <section class="just-for-you container mt-2">
        <div class="d-flex">
            <h5 class="me-5 d-none d-md-block">{{session()->get('language') == 'bangla' ? 'শেষ হচ্ছে':'Ending In'}} </h5>
        <h5 class="trimmers" id="demo" ><small class="text me-2"></small></h5>
        </div>
        <br>
        @php
        $flash_start = date_create($campaign->flash_start);
            $flash_end = date_create($campaign->flash_end);

            $start_diff = $flash_start->getTimestamp() - time();
            $end_diff = $flash_end->getTimestamp() - time();

            $start_diff2=date_diff(date_create($campaign->flash_start), date_create(date('d-m-Y H:i:s')));
            $end_diff2=date_diff(date_create(date('d-m-Y H:i:s')), date_create($campaign->flash_end));
        @endphp
        <input type="hidden" id="language_status" value="{{session()->get('language')}}">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-2">
            @if ($start_diff2->invert == 0 && $end_diff2->invert == 0)

            @if(count($campaign->campaing_products)>0)
                @foreach ($campaign->campaing_products as $product )
                    <div class="col">
                        <div class="card h-100">
                            {{--                            <span class="favorite"><i class="fa-regular fa-heart"></i></span>--}}
                            <a href="{{route('product.details', $product->product->slug)}}">
                                <img src="{{ asset($product->product->product_thumbnail) }}" class="card-img-top" alt="...">
                            </a>
                            {{--                            <img src="{{ asset($product->product_thumbnail) }}" class="card-img-top" alt="...">--}}

                            <div class="card-body">
                                <a href="{{route('product.details', $product->product->slug)}}">
                                    <p class="product-text">@if(session()->get('language') == 'bangla')
                                            {!! Str::substr($product->product->name_bn, 0, 20) !!}{{Str::length($product->product->name_en) > 20 ? '...':''}}
                                        @else
                                            {!! Str::substr($product->product->name_en, 0, 20) !!}{{Str::length($product->product->name_en) > 20 ? '...':''}}
                                        @endif
                                    </p>
                                </a>
                                @php
                                    if ($product->discount_type == 1){
                                        $discount_price = $product->product->regular_price - $product->discount_price;
                                        $text = '- ৳'.$product->discount_price;
                                    }
                                    else{
                                        $discount_price = $product->product->regular_price - $product->discount_price*$product->product->regular_price/100;
                                        $text = '- '.$product->discount_price.'%';
                                    }
                                @endphp
                                <h5 class="product-price">৳{{ $discount_price }}</h5>
                                <p class="discount-percent"><span
                                        class="discount-price">৳{{ $product->product->regular_price }}</span>
                                    {{ $text }}</p>
                                <small class="product-ratings">
                                    @if( $product->product->stock_qty >0)
                                        <span class="text-success">{{session()->get('language') == 'bangla' ? 'স্টকে আছে': 'আছেAvailable'}} </span>
                                        <i class="ratings">({{ $product->product->stock_qty }})</i>
                                    @endif

                                    {{--                                <i class="fa-solid fa-star"></i>--}}
                                    {{--                                <i class="fa-solid fa-star"></i>--}}
                                    {{--                                <i class="fa-solid fa-star"></i>--}}
                                    {{--                                <i class="fa-solid fa-star"></i>--}}
                                    {{--                                <i class="fa-regular fa-star"></i>--}}

                                </small>
                                <div class="text-center">
                                    @if($product->product->stock_qty >0)
                                        @if($product->product->is_varient == 1)
                                            <button type="submit" id="{{ $product->product->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" style="@if(session()->get('language') == 'bangla')font-size: x-small; @endif"
                                                    class="buy_now">
                                                @if(session()->get('language') == 'bangla')
                                                    এখুনি কিনুন
                                                @else
                                                    Buy Now
                                                @endif
                                            </button>
                                            <button type="submit" id="{{ $product->product->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" style="@if(session()->get('language') == 'bangla')font-size:x-small @endif" class="add_to_cart">

                                                @if(session()->get('language') == 'bangla')
                                                    কার্টে যোগ করুন
                                                @else
                                                    Add to Cart
                                                @endif
                                            </button>
                                        @else
                                            <button type="submit" onclick="buyNow({{ $product->product->id }})" style="@if(session()->get('language') == 'bangla')font-size: x-small; @endif"
                                                    class="buy_now">
                                                @if(session()->get('language') == 'bangla')
                                                    এখুনি কিনুন
                                                @else
                                                    Buy Now
                                                @endif
                                            </button>
                                            <input type="hidden" id="pfrom" value="direct">
                                            <input type="hidden" id="product_product_id" value="{{ $product->product->id }}" min="1">
                                            <input type="hidden" id="{{ $product->product->id }}-product_pname"
                                                   value="{{ $product->product->name_en }}">

                                            @if(session()->get('language') == 'bangla')
                                                <button type="submit" onclick="addToCartDirect({{ $product->product->id }})"
                                                        style="font-size: x-small;" class="add_to_cart">
                                                    কার্টে যোগ করুন
                                                    @else
                                                        <button type="submit" onclick="addToCartDirect({{ $product->product->id }})"
                                                                class="add_to_cart">
                                                            Add to Cart
                                                        </button>
                                                    @endif

                                                    @endif
                                                    @else
                                                        <div class="bg-danger text-white" style="text-shadow: none; margin-top: 37px; padding: 4px 0">
                                                            {{session()->get('language') == 'bangla' ? 'স্টক আউট':'Out of Stock'}}
                                                        </div>
                                            @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            @endif
        </div>
    </section>
    <div class="text-center my-5">
        {{-- <button type="button" class="view_more">View More</button> --}}
    </div>
@endsection
@push('js')
    <script>
        // function addToCart() {
        //     var total_attributes = parseInt($('#total_attributes').val());
        //     //alert(total_attributes);
        //     var checkNotSelected = 0;
        //     var checkAlertHtml = '';
        //     for (var i = 1; i <= total_attributes; i++) {
        //         var checkSelected = parseInt($('#attribute_check_' + i).val());
        //         if (checkSelected == 0) {
        //             checkNotSelected = 1;
        //             checkAlertHtml += `<div class="attr-detail mb-5">
		// 									<div class="alert alert-danger d-flex align-items-center" role="alert">
		// 										<div>
		// 											<i class="fa fa-warning mr-10"></i> <span> Select ` + $('#attribute_name_' + i).val() + `</span>
		// 										</div>
		// 									</div>
		// 								</div>`;
        //         }
        //     }
        //     if (checkNotSelected == 1) {
        //         $('#qty_alert').html('');
        //         //$('#attribute_alert').html(checkAlertHtml);
        //         $('#attribute_alert').html(`<div class="attr-detail mb-5">
		// 									<div class="alert alert-danger d-flex align-items-center" role="alert">
		// 										<div>
		// 											<i class="fa fa-warning mr-10"></i> <span> Select all attributes</span>
		// 										</div>
		// 									</div>
		// 								</div>`);
        //         return false;
        //     }
        //     $('.size-filter li').removeClass("active");
        //     var product_name = $('#pname').val();
        //     var id = $('#product_id').val();
        //     var price = $('#product_price').val();
        //     var color = $('#color option:selected').val();
        //     var size = $('#size option:selected').val();
        //     var quantity = $('#qty').val();
        //     var varient = $('#pvarient').val();
        //
        //     var min_qty = parseInt($('#minimum_buy_qty').val());
        //     if (quantity < min_qty) {
        //         $('#attribute_alert').html('');
        //         $('#qty_alert').html(`<div class="attr-detail mb-5">
		// 									<div class="alert alert-danger d-flex align-items-center" role="alert">
		// 										<div>
		// 											<i class="fa fa-warning mr-10"></i> <span> Minimum quantity ` + min_qty + ` required.</span>
		// 										</div>
		// 									</div>
		// 								</div>`);
        //         return false;
        //     }
        //     // console.log(min_qty);
        //     var p_qty = parseInt($('#stock_qty').val());
        //     // if(quantity > p_qty){
        //     //     $('#stock_alert').html(`<div class="attr-detail mb-5">
        //     // 								<div class="alert alert-danger d-flex align-items-center" role="alert">
        //     // 									<div>
        //     // 										<i class="fa fa-warning mr-10"></i> <span> Not enough stock.</span>
        //     // 									</div>
        //     // 								</div>
        //     // 							</div>`);
        //     //     return false;
        //     // }
        //
        //
        //     // alert(varient);
        //
        //     var options = $('#choice_form').serializeArray();
        //     var jsonString = JSON.stringify(options);
        //     //console.log(options);
        //
        //     // Start Message
        //     const Toast = Swal.mixin({
        //         toast: true,
        //         position: 'top-end',
        //         icon: 'success',
        //         showConfirmButton: false,
        //         timer: 1200
        //     });
        //
        //     $.ajax({
        //         type: 'POST',
        //         url: '/cart/data/store/' + id,
        //         dataType: 'json',
        //         data: {
        //             color: color,
        //             size: size,
        //             quantity: quantity,
        //             product_name: product_name,
        //             product_price: price,
        //             product_varient: varient,
        //             options: jsonString,
        //         },
        //         success: function (data) {
        //             // console.log(data);
        //             miniCart();
        //             $('#closeModel').click();
        //
        //             // Start Sweertaleart Message
        //             if ($.isEmptyObject(data.error)) {
        //                 const Toast = Swal.mixin({
        //                     toast: true,
        //                     position: 'top-end',
        //                     icon: 'success',
        //                     showConfirmButton: false,
        //                     timer: 1200
        //                 })
        //
        //                 Toast.fire({
        //                     type: 'success',
        //                     title: data.success
        //                 })
        //
        //                 $('#qty').val(min_qty);
        //                 $('#pvarient').val('');
        //
        //                 for (var i = 1; i <= total_attributes; i++) {
        //                     $('#attribute_check_' + i).val(0);
        //                 }
        //
        //             } else {
        //                 const Toast = Swal.mixin({
        //                     toast: true,
        //                     position: 'top-end',
        //                     icon: 'error',
        //                     showConfirmButton: false,
        //                     timer: 1200
        //                 })
        //
        //                 Toast.fire({
        //                     type: 'error',
        //                     title: data.error
        //                 })
        //
        //                 $('#qty').val(min_qty);
        //                 $('#pvarient').val('');
        //
        //                 for (var i = 1; i <= total_attributes; i++) {
        //                     $('#attribute_check_' + i).val(0);
        //                 }
        //             }
        //             // Start Sweertaleart Message
        //             var buyNowCheck = $('#buyNowCheck').val();
        //             //alert(buyNowCheck);
        //             if (buyNowCheck && buyNowCheck == 1) {
        //                 $('#buyNowCheck').val(0);
        //                 window.location = '/checkout';
        //             }
        //
        //         }
        //     });
        // }


        function miniCartRemove(rowId) {
            $.ajax({
                type: 'GET',
                url: '/minicart/product-remove/' + rowId,
                dataType: 'json',
                success: function (data) {

                    miniCart();
                    cart();

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
                    } else {
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }

    </script>
    <script>
        // Convert PHP date differences to JavaScript format
        var startDiff = <?php echo $start_diff * 1000; ?>;
        var endDiff = <?php echo $end_diff * 1000; ?>;

        // Set the date we're counting down to based on PHP date differences
        var countDownDateStart = new Date(Date.now() + startDiff);
        var countDownDateEnd = new Date(Date.now() + endDiff);

        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();

            // Choose between start and end dates based on your requirement
            var countDownDate = (now < countDownDateStart.getTime()) ? countDownDateStart : countDownDateEnd;

            // Calculate the remaining time
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            // if($('#language_status').val() == 'bangla'){
            //     var html = `<span>${days}দিন</span> : <span>${hours}ঘন্টা</span> : <span>${minutes}মিনিট</span> : <span>${seconds}সেকেন্ড</span>`;
            // }
            //
            // else{
                var html = `<span>${days}D</span> : <span>${hours}H</span> : <span>${minutes}M</span> : <span>${seconds}s</span>`;
            // }


            document.getElementById("demo").innerHTML = html;

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                location.reload();
            }
        }, 1000);
    </script>

@endpush

