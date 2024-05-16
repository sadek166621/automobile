@extends('FrontEnd.master')
@section('title')
    {{$product->name_en}} Details
@endsection
@push('css')
    <style>
        .app-figure {
            width: 100% !important;
            margin: 0px auto;
            border: 0px solid red;
            padding: 20px;
            position: relative;
            text-align: center;
        }
        .MagicZoom {
            display: none;
        }
        .MagicZoom.Active {
            display: block;
        }
        .selectors { margin-top: 10px; }
        .selectors .mz-thumb img { max-width: 56px; }

        @media  screen and (max-width: 1023px) {
            .app-figure { width: 99% !important; margin: 20px auto; padding: 0; }
        }
    </style>
    <link rel="stylesheet" href="{{asset('frontend/magiczoomplus/magiczoomplus.css')}}" />
@endpush
@section('content')
{{--    @php dd($product->product_type) @endphp--}}
    <!-- Product Information Start -->
    <section class="container bg-white my-5 p-5">
        <div class="row">
            <?php $discount = calculateDiscount($product->id) ?>
            <input type="hidden" id="product_id" value="{{ $product->id }}"  min="1">

            <input type="hidden" id="pname" value="{{ $product->name_en }}">

            <input type="hidden" id="product_price" value="{{ $discount['discount'] }}">

            <input type="hidden" id="minimum_buy_qty" value="{{ $product->minimum_buy_qty }}" >
            <input type="hidden" id="stock_qty" value="{{ $product->stock_qty }}">

            <input type="hidden" id="pvarient" value="">

            <input type="hidden" id="buyNowCheck" value="0">
            <input type="hidden" name="" id="discount_amount" value="{{$product->regular_price - $discount['discount']}}">
            <div class="col-md-3">
                <!-- default start -->
                <section id="default" class="padding-top0">
                    <div class="">
                        <div class="">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="{{asset($product->product_thumbnail)}}"
                                     xoriginal="{{asset($product->product_thumbnail)}}" width="300px" height="300px"/>
                                <div class="xzoom-thumbs mt-4 m-auto" >
                                    <a href="{{asset($product->product_thumbnail)}}"><img class="xzoom-gallery"
                                                                                width="40" src="{{asset($product->product_thumbnail)}}"
                                                                                xpreview="{{asset($product->product_thumbnail)}}"></a>
                                    @foreach($multiImg as $image)
                                        <a href="{{asset($image->photo_name)}}"><img class="xzoom-gallery"
                                                                                    width="40" src="{{asset($image->photo_name)}}"></a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- default end -->
            </div>

            <div class="col-md-6">
                <div class="{{$discount['discount'] == $product->regular_price ? 'd-none':''}}" style="background-color: rgba(247,147,41,0.3); border-radius: 5px; color: rgb(247,147,41); width: 70px;">
                    <small class="m-1 text-center">{{$discount['text']}}</small>
                </div>
{{--                <span class="stock-status out-stock"> ৳{{  $discount }} Off </span>--}}
                <h1 class="product-title" >
                    @if(session()->get('language') == 'bangla')
                        {{$product->name_bn}}
                    @else
                        {{$product->name_en}}
                    @endif
                </h1>
                <div>

                    <h4 class="price">
                        @if(session()->get('language') == 'bangla')
                            বর্তমান মূল্য:
                        @else
                            Current Price:
                        @endif
                        <span class="product_price current-price">৳{{$discount['discount']}}</span>
                        @if($discount['discount'] != $product->regular_price)
                            <del  class="old-price {{$discount['discount'] == 0 ? 'd-none':''}}" style="color: grey"> ৳{{$product->regular_price}}</del>
                        @endif


                    </h4>
                    <p class="">
                        <small>
                            @if(session()->get('language') == 'bangla')
                                ক্যাটাগোরি: {{$product->category->name_bn??''}}
                            @else
                                Product Category: {{$product->category->name_en??''}}
                            @endif

                        </small><br>
                        @if($product->product_type == 2 && count($group_products) >0)
                            <strong>
                                @if(session()->get('language') == 'bangla')
                                    প্যাকেজের পণ্য সমূহ
                                @else
                                    Package Items
                                @endif
                                :</strong>
                            @foreach($group_products as $item)
                            <div class="row mb-1">
                                <div class="col-md-1">
                                    <a href="{{route('product.details', $item->product->slug)}}">
                                        <img src="{{asset($item->product->product_thumbnail)}}" alt="" height="30px" width="30px">
                                    </a></div>
                                <div class="col-md-11">
                                    <a href="{{route('product.details', $item->product->slug)}}">
                                        <small>
                                            @if(session()->get('language') == 'bangla')
                                                {{$item->product->name_bn}}
                                            @else
                                                {{$item->product->name_en}}
                                            @endif
                                        </small>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            <br>
                        @else
                            <small>
                                @if(session()->get('language') == 'bangla')
                                    ব্র্যান্ড:  {{$product->brand->name_bn ?? ''}}
                                @else
                                    Brand:
                                    {{$product->brand->name_en ?? 'N/A'}}
                                @endif


                            </small><br>
                        @endif
                        <small>
                            @if(session()->get('language') == 'bangla')
                                স্টক:
                            @else
                                Stock:
                            @endif
                            <span class="{{$product->stock_qty > 0 ? 'text-success': 'text-danger'}}">
                                @if(session()->get('language') == 'bangla')
                                    {{$product->stock_qty > 0 ? 'স্টকে আছে':'স্টক আউট'}}
                                @else
                                    {{$product->stock_qty > 0 ? 'In Stock':'Out of Stock'}}
                                @endif

                            </span>
                                <span id="stock_qty">{{$product->stock_qty != 0 ? '('.$product->stock_qty.')':''}}</span></small><br>

                        <div class="d-none" style="background-color: rgba(247,147,41,0.1); border-radius: 30px; padding: 10px; margin: 10px 0; color: #ff00c3; width: 50%">
                            <small style="color: #f9A11E; margin: 0 15%">
                                <i class="fa fa-star" style="margin-right: 5px"></i>
                                {{$product->points}}
                                @if(session()->get('language') == 'bangla')
                                    স্টার পয়েন্ট
                                @else
                                    Start Points
                                @endif

                            </small>
                        </div>
                    </p>
                </div>
                <form id="choice_form">
                    <div class="row " id="choice_attributes">
                        @if($product->is_varient)
{{--                            @php dd($product->attribute_values->attribute_id)  @endphp--}}
                            @php $i=0; @endphp
                            @foreach(json_decode($product->attribute_values) as $attribute)
                                @php
                                    $attr = get_attribute_by_id($attribute->attribute_id);
                                    $i++;
//                                    dd($attribute->attribute_id, $attr->name, $attribute->values[0], $product->id, 1)
                                @endphp
                                <input type="hidden" name="" onload="selectAttribute('{{$attribute->attribute_id}}', '{{$attr->name}}', '{{$attribute->values[0]}}', '{{$product->id}}', '1')">
                                <div class="attr-detail attr-size mb-3">
                                    <strong class="mr-10">{{ $attr->name }}: </strong>
                                    <input type="hidden" name="attribute_ids[]" id="attribute_id_{{ $i }}" value="{{ $attribute->attribute_id }}">
                                    <input type="hidden" name="attribute_names[]" id="attribute_name_{{ $i }}" value="{{ $attr->name }}">
                                    <input type="hidden" id="attribute_check_{{ $i }}" value="0">
                                    <input type="hidden" id="attribute_check_attr_{{ $i }}" value="0">
                                    <ul class="list-filter size-filter font-small">
                                        @foreach($attribute->values as $key=> $value)

                                            <label class="radio-inline">
                                                <input type="radio" class="m-2"
                                                       onclick="selectAttribute('{{ $attribute->attribute_id }}{{ $attr->name }}', '{{ $value }}', '{{ $product->id }}', '{{ $i }}')"
                                                       name="option_{{$i}}">{{$value}}
                                            </label>
                                            @php $key++; @endphp
                                        @endforeach
                                        <input type="hidden" name="attribute_options[]" id="{{ $attribute->attribute_id }}{{ $attr->name }}" class="attr_value_{{ $i }}">
                                    </ul>
                                </div>
                            @endforeach
                            <input type="hidden" id="total_attributes" value="{{ count(json_decode($product->attribute_values)) }}">
                        @endif
                    </div>
                </form>

                <div class="row" id="attribute_alert">

                </div>
                @if($product->stock_qty > 0)
                    <div class="detail-extralink mb-3 align-items-baseline d-flex" >
                        <div class="mr-10">
                        <span class="">
                             @if(session()->get('language') == 'bangla')
                                পরিমাণ:
                            @else
                                Quantity:
                            @endif

                        </span>
                        </div>
                        <div class="detail-qty border radius mx-2 px-1">
                            <a href="#" class="qty-down"><i class="fa fa-minus text-dark"></i></a>
                            <input type="text" name="quantity" class="qty-val" value="{{$product->minimum_buy_qty}}" min="{{$product->minimum_buy_qty}}" id="qty" style="border: none; width: 30px; height: 50px; text-align: center" readonly>
                            <a href="#" class="qty-up"><i class="fa fa-plus text-dark"></i></a>
                        </div>
                        <div class="row mb-3" id="qty_stock_alert">

                        </div>

                    </div>

                    <div class="d-flex">
                        <input type="hidden" id="pfrom" value="direct">
                        <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
                        <input type="hidden" id="{{ $product->id }}-product_pname"
                               value="{{ $product->name_en }}">
                        <button class="like btn" id="{{$product->is_varient == 1 ? '':'buy_now'}}" type="button" onclick="{{$product->is_varient == 1 ? 'buyProduct()':''}}" style="font-size: 15px; color: white !important;">
                            @if(session()->get('language') == 'bangla')
                                এখুনি কিনুন
                            @else
                                অর্ডার করুন
                            @endif
                        </button>
                        {{--                    <button class="like btn" style="margin-left: 5px" type="button" onclick="addToCartDirect({{$product->id}})">কার্টে যোগ করুন</button>--}}
                        <button class="like btn" style="margin-left: 5px; font-size: 15px; color: white" type="button" onclick="test()">
                            @if(session()->get('language') == 'bangla')
                                কার্টে যোগ করুন
                            @else
                                কার্টে যোগ করুন
                            @endif
                        </button>
                    </div>


                @endif

            </div>
            <div class="col-md-3">

                <div>
                    <div class="d-flex justify-content-between">
                        <p><i class="fa-solid fa-truck-fast"></i>
                            @if(session()->get('language') == 'bangla')
                                স্ট্যান্ডার্ড ডেলিভারি
                            @else
                                Standard Delivery
                            @endif
                        </p>
                        <p>৳{{$shipping_charge->shipping_charge}}</p>
                    </div>
                    <small>
                        @if(session()->get('language') == 'bangla')
                            ৫ - ১০ দিন
                        @else
                            5 - 10 day(s)
                        @endif

                    </small>
                    <p><i class="fa-regular fa-handshake"></i>
                        @if(session()->get('language') == 'bangla')
                            ক্যাশ অন ডেলিভারি পাওয়া যাচ্ছে
                        @else
                            Cash on Delivery Available
                        @endif
                    </p>
                </div>
                <hr class="d-none">
                <div class="d-none">
{{--                    <small>ডেলিভারি</small>--}}
{{--                    <p><i class="fa-solid fa-person-walking-arrow-loop-left"></i> 7 Days Returns</p>--}}
                    @if($product->is_replaceable == 1)
                        <small>{{session()->get('language') == 'bangla' ? 'পণ্য প্রতিস্থাপন'. get_setting('order_return_duration')->value. 'দিনের আগে প্রযোজ্য':'Replacement Applicable Before '.get_setting('order_return_duration')->value.' Days'}}</small>
                    @else
                        <small>{{session()->get('language') == 'bangla' ? 'পণ্য প্রতিস্থাপন প্রযোজ্য নয়':'Product Replacement Not Applicable'}}</small>
                    @endif

                    <p><i class="fa-solid fa-gears"></i>{{session()->get('language') == 'bangla' ? 'ওয়ারেন্টি পাওয়া যাবে না':' Warranty Not Available'}}</p>
                </div>
                <hr>
                <div class="d-none">
                    <small>
                        @if(session()->get('language') == 'bangla')
                            বিক্রেতা
                        @else
                            Sold By
                        @endif

                    </small>
                    <div class="d-flex justify-content-between">
                        <p><i class="fa-solid fa-shop"></i> {{$product->vendor_id != 0 ? $product->vendor->shop_name:get_setting('business_name')->value}}</p>
{{--                        <a href="#"><i class="fa-regular fa-message"></i> CHAT</a>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Information End -->
    <!-- Description Part Start -->
    <section class="container mb-5">
        <div class="row g-3">
            <div class="col-md-8 bg-white">
                <div class="p-4">
                    <div>
                        <h4>
                            @if(session()->get('language') == 'bangla')
                                পণ্যের বিবরণ
                            @else
                                About this item
                            @endif

                        </h4>
                        <hr>
                        <h6 class="mb-2">Product details</h6>
                        @if(session()->get('language') == 'bangla')
                            {!! $product->description_bn !!}
                        @else
                            {!! $product->description_en !!}
                        @endif

                    </div>
                </div>
            </div>
            <div class="just-for-you col-md-4 bg-white border-start">
                <div class="py-4">
                    <h5 class="my-2">
                        @if(session()->get('language') == 'bangla')
                            সংশ্লিষ্ট পণ্য
                        @else
                            Related Products
                        @endif
                    </h5>
                    <div class="row row-cols-2 g-2">
                        @if(count($relatedProduct) >0)
                            @foreach ($relatedProduct as $product_trending )
                                <div class="col">
                                        <?php $data = calculateDiscount($product_trending->id)?>
                                    <div class="card h-100">
                                        {{--                        <span class="favorite"><i class="fa-regular fa-heart"></i></span>--}}
                                        <a href="{{route('product.details', $product_trending->slug)}}">
                                            <img src="{{ asset($product_trending->product_thumbnail) }}" class="card-img-top" alt="...">
                                        </a>

                                        <div class="card-body">
                                            <a href="{{route('product.details', $product_trending->slug)}}">
                                                <p class="product-text">
                                                    @php $name = session()->get('language') == 'bangla' ? $product_trending->name_bn:$product_trending->name_en @endphp
                                                    {!! Str::substr($name, 0, 20) !!}{{Str::length($name) > 20 ? '...':''}}
                                                </p>
                                            </a>
                                            <h5 class="product-price"><span
                                                    class="discount-price">৳{{ $product_trending->regular_price }}</span>
                                                ৳{{ $data['discount'] }}</h5>
                                            <p class="discount-percent">
                                                {{$data['text']}}
                                            </p>
                                            <small class="product-ratings">
                                                @if( $product_trending->stock_qty >0)
                                                    <span class="text-success">{{session()->get('language') == 'bangla' ? 'স্টকে আছে': 'আছেAvailable'}} </span>
                                                    <i class="ratings">({{ $product_trending->stock_qty }})</i>
                                                @endif

                                                {{--                                <i class="fa-solid fa-star"></i>--}}
                                                {{--                                <i class="fa-solid fa-star"></i>--}}
                                                {{--                                <i class="fa-solid fa-star"></i>--}}
                                                {{--                                <i class="fa-solid fa-star"></i>--}}
                                                {{--                                <i class="fa-regular fa-star"></i>--}}

                                            </small>
                                            <div class="text-center">
                                                @if($product_trending->stock_qty >0)
                                                    @if($product_trending->is_varient == 1)
                                                        <button type="submit" id="{{ $product_trending->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" style="@if(session()->get('language') == 'bangla')font-size: x-small; @endif"
                                                                class="buy_now">
                                                            @if(session()->get('language') == 'bangla')
                                                                এখুনি কিনুন
                                                            @else
                                                                অর্ডার করুন
                                                            @endif
                                                        </button>
                                                        <button type="submit" id="{{ $product_trending->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" @if(session()->get('language') == 'bangla')font-size:x-small @endif" class="add_to_cart">

                                                            @if(session()->get('language') == 'bangla')
                                                                কার্টে যোগ করুন
                                                            @else
                                                                কার্টে যোগ করুন
                                                            @endif
                                                        </button>
                                                    @else
                                                        <button type="submit" onclick="buyNow({{ $product_trending->id }})" style="@if(session()->get('language') == 'bangla')font-size: x-small; @endif"
                                                                class="buy_now">
                                                            @if(session()->get('language') == 'bangla')
                                                                এখুনি কিনুন
                                                            @else
                                                                অর্ডার করুন
                                                            @endif
                                                        </button>
                                                        <input type="hidden" id="pfrom" value="direct">
                                                        <input type="hidden" id="product_product_id" value="{{ $product_trending->id }}" min="1">
                                                        <input type="hidden" id="{{ $product_trending->id }}-product_pname"
                                                               value="{{ $product_trending->name_en }}">

                                                        @if(session()->get('language') == 'bangla')
                                                            <button type="submit" onclick="addToCartDirect({{ $product_trending->id }})"
                                                                    style="font-size: x-small;" class="add_to_cart">
                                                                কার্টে যোগ করুন
                                                                @else
                                                                    <button type="submit" onclick="addToCartDirect({{ $product_trending->id }})"
                                                                            class="add_to_cart">
                                                                        কার্টে যোগ করুন
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
                        @else
                            <p>No Products Found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Description Part Start -->
@endsection

@push('js')
    <script>
        //Qty Up-Down
        $('.detail-qty').each(function () {
            var qtyval = parseInt($(this).find(".qty-val").val(), 10);

            $('.qty-up').on('click', function (event) {
                event.preventDefault();
                qtyval = qtyval + 1;
                $(this).prev().val(qtyval);
            });

            $(".qty-down").on("click", function (event) {
                event.preventDefault();
                qtyval = qtyval - 1;
                if (qtyval > 1) {
                    $(this).next().val(qtyval);
                } else {
                    qtyval = 1;
                    $(this).next().val(qtyval);
                }
            });
        });

        function addCart(id){
            var qty = $('.qty-val').val();
            addToCartDirect(id, false, qty);
        }


        {{--$('#buy_now').on('click', function (){--}}
        {{--    var qty = $('.qty-val').val();--}}
        {{--    var id = {{$product->id}};--}}
        {{--    buyNow(id, qty);--}}

        {{--});--}}

    </script>
    <script src="{{asset('FrontEnd')}}/assect/js/xzoom.js"></script>
    <script src="{{asset('FrontEnd')}}/assect/js/magnific-popup.js"></script>
    <script src="{{asset('FrontEnd')}}/assect/js/setup.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
@endpush
