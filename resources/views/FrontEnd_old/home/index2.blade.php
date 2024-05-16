@extends('FrontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Option & Slider Part Start -->
    <style>
        @media screen and (min-width: 991px) {
            .buy_now {
                width: 73px !important;
                font-size: 10px !important;
                font-weight: 600;
                margin-top: 10px;
                color: var(--yellow);
                border: 1px solid var(--green);
                background: transparent;
            }
            .add_to_cart {
                width: 95px !important;
                font-size: 10px !important;
                font-weight: 600;
                margin-top: 10px;
                color: var(--yellow);
                border: 1px solid var(--green);
                background: transparent;
            }
        }
        .deals-countdown-wrap {
            text-align: center;
            margin: 20px 0;
        }


        /*.btn-group button{*/
        /*    margin-right: 5px;*/
        /*}*/

        #deals-countdown {
            font-size: 24px;
            color: #333;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
        }
        .loading::after {
            content: '';
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 2px solid #fff;
            border-top: 2px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-left: 5px;
            /* Adjust as needed */
            vertical-align: middle;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .counter-title {
            color: #000 !important;
            font-size: 10px !important;
            background: #fff !important;
            padding: 0px !important;
        }

    </style>
    <!-- Desktop Option & Slider Part Start -->
    <section class="option-slider container mt-lg-5">
        <input type="hidden" id="language_status" value="{{session()->get('language')}}">
        <div>
            <div class="row">
                <!-- Side Menu Start -->
                <div class="col-md-3 d-none d-lg-block">
                    <div class="sidemenu">
                        <ul>
                            <li class="dropdown"><a href="{{route('category_list.index')}}">
                                    @if(session()->get('language') == 'bangla')
                                        অল ক্যাটেগরীজ
                                    @else
                                        All Categories
                                    @endif
                                    <span>&rsaquo;</span></a>
                            @foreach($categories as $category)
                                @if($category->type == 1)
                                    @php $parent = $category->id @endphp
                                    <li class="dropdown"><a href="{{route('product.category', $category->slug)}}">
                                            @if(session()->get('language') == 'bangla')
                                                {{$category->name_bn}}
                                            @else
                                                {{$category->name_en}}
                                            @endif
                                            <span>&rsaquo;</span></a>
                                        @php $child = findChildCategory($category->id) @endphp
                                        @if(count($child)>0)
                                            <ul>
                                                @foreach($subcategories as $subcategory)
                                                    @if($subcategory->parent_id == $category->id)
                                                        <li class="dropdown_two"><a
                                                                href="{{route('product.category', $subcategory->slug)}}">
                                                                @if(session()->get('language') == 'bangla')
                                                                {{$subcategory->name_bn}}
                                                                @else
                                                                {{$subcategory->name_en}}
                                                                @endif
                                                            </a>
                                                            {{--                                                    @php $child = findChildCategory($category->id) @endphp--}}
                                                            {{--                                                    @if(count($child)>0)--}}
                                                            {{--                                                        <ul>--}}
                                                            {{--                                                            @foreach($categories as $childSubCategory)--}}
                                                            {{--                                                                <li>{{$childSubCategory->name_en}}
                                                        </li>--}}
                                                            {{--                                                            @endforeach--}}
                                                            {{--                                                        </ul>--}}
                                                            {{--                                                    @endif--}}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Side Menu End -->

                <!--Desktop Slider Start -->
                <div class="col-lg-9 d-none d-md-block desktop-slider">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($sliders as $index => $slider)
                                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="{{ $index }}"
                                        class="{{ $index === 0 ? 'active' : '' }}"
                                        aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($sliders as $index => $slider)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-bs-interval="5000">
                                    <img src="{{ asset($slider->slider_img) }}" class="d-block w-100" alt="..."
                                         style="height: 356px; width: 100%;">
                                    <!-- Apply different height for mobile view using media query -->
{{--                                    <style>--}}
{{--                                        /*@media (max-width: 767px) {*/--}}
{{--                                        /*    #carouselExampleInterval .carousel-item img {*/--}}
{{--                                        /*        height: 129px !important;*/--}}
{{--                                        /*    }*/--}}
{{--                                        /*}*/--}}
{{--                                    </style>--}}
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- Desktop Slider End -->
            </div>
        </div>
    </section>
    <!-- Desktop Option & Slider Part End -->

    <!-- Mobile Slider Start -->
    <div class="mobile-slider d-block d-md-none">
        <div id="carouselExampleInterval-1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($sliders as $index => $slider)
                    <button type="button" data-bs-target="#carouselExampleInterval-1" data-bs-slide-to="{{ $index }}"
                            class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($sliders as $index => $slider)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-bs-interval="5000">
                        <img src="{{ asset($slider->slider_img) }}" class="d-block w-100" alt="..."
                             style="height: 356px; width: 100%;">
                        <!-- Apply different height for mobile view using media query -->
                        <style>
                            @media (max-width: 767px) {
                                #carouselExampleInterval .carousel-item img {
                                    height: 129px !important;
                                }
                            }

                        </style>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval-1"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval-1"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Mobile Slider End -->



    <!-- Verified PArt Start -->
    <section class="verified container mt-5 p-3 d-none d-lg-block">
        <ul>
            <li><img src="{{asset('FrontEnd')}}/assect/img/icon/safe.png" alt="" /><a href="">
                    @if(session()->get('language') == 'bangla')
                        নিরাপদ পেমেন্ট
                    @else
                        Safe Payments
                    @endif
                </a></li>
            <!-- <li>|</li> -->
            <li><img src="{{asset('FrontEnd')}}/assect/img/icon/car.png" alt="" />
                <a href="">
                    @if(session()->get('language') == 'bangla')
                        দেশব্যাপী ডেলিভারি
                    @else
                        Nationwide Delivery
                    @endif
                </a></li>
            <!-- <li>|</li> -->
            <li><img src="{{asset('FrontEnd')}}/assect/img/icon/back.png" alt="" /><a href="#">
                    @if(session()->get('language') == 'bangla')
                        বিনামূল্যে এবং সহজ রিটার্ন
                    @else
                        Free &amp; Easy Return
                    @endif
                </a>
            </li>
            <!-- <li>|</li> -->
            <li><img src="{{asset('FrontEnd')}}/assect/img/icon/best.png" alt="" /><a href="">
                    @if(session()->get('language') == 'bangla')
                        বেস্ট প্রাইস
                    @else
                        Best Price Guaranteed
                    @endif

                </a>
            </li>
            <!-- <li>|</li> -->
            <li><img src="{{asset('FrontEnd')}}/assect/img/icon/right.png" alt="" /><a href="">
                    @if(session()->get('language') == 'bangla')
                        ১০০% অথেনটিক পণ্য
                    @else
                        100% Authentic Products
                    @endif
                </a></li>
            <!-- <li>|</li> -->
            <li><img src="{{asset('FrontEnd')}}/assect/img/icon/safe.png" alt="" /><a href="">
                    @if(session()->get('language') == 'bangla')
                        দারাজ যাচাইকৃত
                    @else
                        Daraz Verified
                    @endif
                </a></li>

        </ul>
    </section>
    <!-- Verified Part End -->

    <!-- Camping Part Start -->
    <section class="camping container d-none d-xl-block mt-5">
        <div class="camp-img">
            @foreach($home_banners as $banner)
                <div class="camp-img">
                    <a href=""><img src="{{ asset($banner->banner_img) }}" style="width: 1100px; height: 200px" alt=""></a>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Camping Part End -->

    <!-- Services Part Start -->

{{--    <!-- Services Part End -->--}}
    <!-- Flash Sale Start -->
    @php

        $campaign = \App\Models\Campaing::where('status', 1)->where('is_featured', 1)->orderBy('id', 'desc')->first();
        // $campaing_products = $campaign->campaing_products;
        //dd(count($campaing_products));
    @endphp

    @if($campaign)
        @php
            $flash_start = date_create($campaign->flash_start);
               $flash_end = date_create($campaign->flash_end);

               $start_diff = $flash_start->getTimestamp() - time();
               $end_diff = $flash_end->getTimestamp() - time();

               $start_diff2=date_diff(date_create($campaign->flash_start), date_create(date('d-m-Y H:i:s')));
                $end_diff2=date_diff(date_create(date('d-m-Y H:i:s')), date_create($campaign->flash_end));
        @endphp

        @if ($start_diff2->invert == 0 && $end_diff2->invert == 0)
            <section class="flash-sale container owl-carousel owl-theme owl-loaded mt-lg-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>
                    @if(session()->get('language') == 'bangla')
                    ফ্ল্যাশ সেল
                    @else
                    Flash Sale
                    @endif
                    </h2>
                    <a class="btn-primary d-block d-md-none" href="{{route('campaign.product')}}" style="border: none;">SHOP MORE</a>
                </div>
                <div class="owl-stage-outer bg-white py-3 px-1">
                    <div class="d-flex justify-content-between align-items-center px-3">
                        <div class="d-flex">
{{--                            <h5 class="me-5 d-none d-lg-block">On Sale Now</h5>--}}
                            <h5 class="trimmers"><small class="text me-2">Ending in</small><div id="demo"></div>
{{--                                <span>03 day</span> <small>:</small> <span>03 hr</span> <small>:</small>--}}
{{--                                <span>47 min</span> <small>:</small> <span>--}}
{{--                                45 sec</span>--}}
                            </h5>
                        </div>
                        <div>
                            <a class="btn-primary d-none d-md-block" href="{{route('campaign.product')}}">SHOP MORE</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center px-3 d-none">
                        <div class="d-flex">

                            <h5 class="trimmers" ><small class="text me-2">
                                @if(session()->get('language') == 'bangla')
                                শেষ হচ্ছে
                                @else
                                Ending in
                                @endif
                            </small>
                                <span class="trimmers bg-transparent d-inline-grid" id="demo"><small class="text me-2"></small></span>
                            </h5>
                            {{-- <p class="trimmers" id="demo"></p> --}}
                        </div>
                        <div>
                            <a class="btn-primary d-none d-md-block" href="{{route('campaign.product')}}">
                                @if(session()->get('language') == 'bangla')
                                আরো কিনুন
                                @else
                                SHOP MORE
                                @endif
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 owl-stage g-2">
                        @foreach($campaign->campaing_products as $product)
                            @if($product->product)
                                @php $data = calculateDiscount($product->product->id); @endphp
                                <div class="col owl-item">
                                    <div class="card h-100">
                                        <a href="{{route('product.details', $product->product->slug)}}">
                                            <img src="{{asset($product->product->product_thumbnail)}}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body">
                                            <a href="{{route('product.details', $product->product->slug)}}">
                                                <p>
                                                    @if(session()->get('language') == 'bangla')
                                                        {!! Str::substr($product->product->name_bn, 0, 20) !!}
                                                    @else
                                                        {!! Str::substr($product->product->name_en, 0, 20) !!}
                                                    @endif
                                                </p>
                                            </a>

                                            <h5 class="product-price"><span class="discount-price">৳{{$data['discount']}}</span> ৳{{$product->product->regular_price}} </h5>
                                            <p class="discount-percent">{{$data['text']}}</p>
                                            <small class="product-ratings">
                                                @if( $product->product->stock_qty >0)
                                                    <span class="text-success">{{session()->get('language') == 'bangla' ? 'স্টকে আছে': 'Available'}} </span>
                                                    <i class="ratings">({{ $product->product->stock_qty }})</i>
                                                @endif

                                            </small>
                                            <div class="text-center">
                                                @if( $product->product->stock_qty >0)
                                                    @if( $product->product->is_varient == 1)
                                                        <button type="submit" id="{{ $product->product->id }}" onclick="productView(this.id)" data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small "
                                                                class="buy_now">
                                                            @if(session()->get('language') == 'bangla')
                                                                এখুনি কিনুন
                                                            @else
                                                                অর্ডার করুন
                                                            @endif
                                                        </button>
                                                        <button type="submit" id="{{ $product->product->id }}" onclick="productView(this.id)" data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small " class="add_to_cart">

                                                            @if(session()->get('language') == 'bangla')
                                                                কার্টে যোগ করুন
                                                            @else
    {{--                                                            {{--                                                            কার্টে যোগ করুন--}}
                                                                কার্টে যোগ করুন
                                                            @endif
                                                        </button>
                                                    @else
                                                        <button type="submit" onclick="buyNow({{ $product->product->id }})" style="font-size:x-small "
                                                                class="buy_now">
                                                            @if(session()->get('language') == 'bangla')
                                                                এখুনি কিনুন
                                                            @else
                                                                অর্ডার করুন
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
                                                                        কার্টে যোগ করুন
                                                                    </button>
                                                                @endif

                                                                @endif
                                                                @else
                                                                    <div class="bg-danger text-white" style="text-shadow: none; margin-top: 37px; padding: 4px 0">
                                                                        {{session()->get('language') == 'bangla' ? 'স্টক আউট':'Out of Stock'}}
                                                                    </div>
                                                                @endif

    {{--                                                            //hsdflkgshslkhg--}}
    {{--                                            <button type="submit" onclick="buyNow({{ $product->product->id }})" class="buy_now" style="font-size: {{session()->get('language') == 'bangla'? 'x-small':''}}">--}}
    {{--                                                @if(session()->get('language') == 'bangla')--}}
    {{--                                                    এখুনি কিনুন--}}
    {{--                                                @else--}}
    {{--                                                    অর্ডার করুন--}}
    {{--                                                @endif--}}
    {{--                                            </button>--}}
    {{--                                            @if($product->product->is_varient == 1)--}}
    {{--                                                <button type="submit" id="{{ $product->product->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" class="add_to_cart">কার্টে যোগ করুন</button>--}}
    {{--                                            @else--}}
    {{--                                                <input type="hidden" id="pfrom" value="direct">--}}
    {{--                                                <input type="hidden" id="product_product_id" value="{{ $product->product->id }}" min="1">--}}
    {{--                                                <input type="hidden" id="{{ $product->product->id }}-product_pname"--}}
    {{--                                                       value="{{ $product->product->name_en }}">--}}
    {{--                                                <button type="submit" onclick="addToCartDirect({{ $product->product->id }})" class="add_to_cart" style="font-size: {{session()->get('language') == 'bangla'? 'x-small':''}}">--}}
    {{--                                                    @if(session()->get('language') == 'bangla')--}}
    {{--                                                        কার্টে যোগ করুন--}}
    {{--                                                    @else--}}
    {{--                                                        কার্টে যোগ করুন--}}
    {{--                                                    @endif--}}
    {{--                                                </button>--}}
    {{--                                            @endif--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endif
    <!-- Flash Sale End -->
    <!-- Categories Part Start -->
    <section class="categories container owl-carousel owl-theme owl-loaded mt-5">
        <h2>
            @if(session()->get('language') == 'bangla')
                ক্যাটাগোরি
            @else
                Categories
            @endif
        </h2>
        <hr>
        <div class="owl-stage-outer">
            <div class="row owl-stage g-1">

                @foreach($featured_category as $fc)
                    <div class="col owl-item">
                        <a class="card" href="{{ route('product.category', $fc->slug) }}"><img src="{{ asset($fc->image) }}"
                                                                                               class="card-img-top" alt="...">
                            @if(session()->get('language') == 'bangla')
                                <p class="product-text">{{ $fc->name_bn }}</p>
                            @else
                                <p class="product-text">{{ $fc->name_en }}</p>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Categories Part End -->

    <div class="container mt-lg-5">
        <div class="row row-cols-lg-2">
            @foreach($middle_banners1 as $banner)
                <div class="camping">
                    <a href=""><img src="{{ asset($banner->banner_img) }}" style="width: 1100px; height: 200px" alt=""></a>
                </div>
            @endforeach
        </div>
    </div>

    <!--  Featured Start -->
    <section class="feature container owl-carousel owl-theme owl-loaded mt-5">
        <div class="d-flex justify-content-between align-items-center px-3">
            <div class="d-flex">
                <h2>Featured Products</h2>
            </div>
            <div>
{{--                <a href="{{route('product.featured.show')}}" class="view_more btn-primary" style="float: right;padding: 2px 10px">View More</a>--}}

            </div>
        </div>
        <div class="owl-stage-outer py-3 px-1">
            <hr>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 owl-stage g-2">
{{--                @php dd($product_featured); @endphp--}}
                @foreach($product_featured as $product)
                    @php $data = calculateDiscount($product->id); @endphp
                    <div class="col owl-item ">
                        <div class="card h-100">
                            <a href="{{route('product.details', $product->slug)}}">
                                <img src="{{asset($product->product_thumbnail)}}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <a href="{{route('product.details', $product->slug)}}">
                                    <p>
                                        @if(session()->get('language') == 'bangla')
                                            {!! Str::substr($product->name_bn, 0, 20) !!}
                                        @else
                                            {!! Str::substr($product->name_en, 0, 20) !!}
                                        @endif
                                    </p>
                                </a>
                                <h5 class="product-price"><span class="discount-price">৳{{$data['discount']}}</span> ৳{{$product->regular_price}}</h5>
                                <p class="discount-percent">{{$data['text']}}</p>
                                <small class="product-ratings">
                                    @if( $product->stock_qty >0)
                                        <span class="text-success">{{session()->get('language') == 'bangla' ? 'স্টকে আছে': 'Available'}} </span>
                                        <i class="ratings">({{ $product->stock_qty }})</i>
                                    @endif

                                </small>
{{--                                <div class="text-center btn-group">--}}
                                <div class="text-center">
                                    @if( $product->stock_qty >0)
                                        @if( $product->is_varient == 1)
                                            <button type="submit" id="{{ $product->id }}" onclick="productView(this.id)" data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small "
                                                    class="buy_now">
                                                @if(session()->get('language') == 'bangla')
                                                    এখুনি কিনুন
                                                @else
                                                    অর্ডার করুন
                                                @endif
                                            </button>
                                            <button type="submit" id="{{ $product->id }}" onclick="productView(this.id)" data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small " class="add_to_cart">

                                                @if(session()->get('language') == 'bangla')
                                                    কার্টে যোগ করুন
                                                @else
                                                    কার্টে যোগ করুন
                                                @endif
                                            </button>
                                        @else
                                            <button type="submit" onclick="buyNow({{ $product->id }})" style="font-size:x-small "
                                                    class="buy_now">
                                                @if(session()->get('language') == 'bangla')
                                                    এখুনি কিনুন
                                                @else
                                                    অর্ডার করুন
                                                @endif
                                            </button>
                                            <input type="hidden" id="pfrom" value="direct">
                                            <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">
                                            <input type="hidden" id="{{ $product->id }}-product_pname"
                                                   value="{{ $product->name_en }}">

                                            @if(session()->get('language') == 'bangla')
                                                <button type="submit" onclick="addToCartDirect({{ $product->id }})"
                                                        style="font-size: x-small;" class="add_to_cart">
                                                    কার্টে যোগ করুন
                                                    @else
                                                        <button type="submit" onclick="addToCartDirect({{ $product->id }})"
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

                                            {{--                                                            //hsdflkgshslkhg--}}
                                            {{--                                            <button type="submit" onclick="buyNow({{ $product->id }})" class="buy_now" style="font-size: {{session()->get('language') == 'bangla'? 'x-small':''}}">--}}
                                            {{--                                                @if(session()->get('language') == 'bangla')--}}
                                            {{--                                                    এখুনি কিনুন--}}
                                            {{--                                                @else--}}
                                            {{--                                                    অর্ডার করুন--}}
                                            {{--                                                @endif--}}
                                            {{--                                            </button>--}}
                                            {{--                                            @if($product->is_varient == 1)--}}
                                            {{--                                                <button type="submit" id="{{ $product->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" class="add_to_cart">কার্টে যোগ করুন</button>--}}
                                            {{--                                            @else--}}
                                            {{--                                                <input type="hidden" id="pfrom" value="direct">--}}
                                            {{--                                                <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">--}}
                                            {{--                                                <input type="hidden" id="{{ $product->id }}-product_pname"--}}
                                            {{--                                                       value="{{ $product->name_en }}">--}}
                                            {{--                                                <button type="submit" onclick="addToCartDirect({{ $product->id }})" class="add_to_cart" style="font-size: {{session()->get('language') == 'bangla'? 'x-small':''}}">--}}
                                            {{--                                                    @if(session()->get('language') == 'bangla')--}}
                                            {{--                                                        কার্টে যোগ করুন--}}
                                            {{--                                                    @else--}}
                                            {{--                                                        কার্টে যোগ করুন--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                </button>--}}
                                            {{--                                            @endif--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </section>

    <div class="container mt-lg-5">
        <div class="row row-cols-lg-2">
            @foreach($middle_banners2 as $banner)
                <div class="camping">
                    <a href=""><img src="{{ asset($banner->banner_img) }}" style="width: 1100px; height: 200px" alt=""></a>
                </div>
            @endforeach
        </div>
    </div>
    <section class="feature container owl-carousel owl-theme owl-loaded mt-5">
        <div class="d-flex justify-content-between align-items-center px-3">
            <div class="d-flex">
                <h2>Recently Added Products</h2>
            </div>
            <div>
                {{--                <a href="{{route('product.featured.show')}}" class="view_more btn-primary" style="float: right;padding: 2px 10px">View More</a>--}}

            </div>
        </div>
        <div class="owl-stage-outer py-3 px-1">
            <hr>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 owl-stage g-2">
                {{--                @php dd($product_featured); @endphp--}}
                @foreach($product_recently_adds as $product)
                    @php $data = calculateDiscount($product->id); @endphp
                    <div class="col owl-item">
                        <div class="card h-100">
                            <a href="{{route('product.details', $product->slug)}}">
                                <img src="{{asset($product->product_thumbnail)}}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <a href="{{route('product.details', $product->slug)}}">
                                    <p>
                                        @if(session()->get('language') == 'bangla')
                                            {!! Str::substr($product->name_bn, 0, 20) !!}
                                        @else
                                            {!! Str::substr($product->name_en, 0, 20) !!}
                                        @endif
                                    </p>
                                </a>
                                <h5 class="product-price"><span class="discount-price">৳{{$data['discount']}}</span> ৳{{$product->regular_price}}</h5>
                                <p class="discount-percent">{{$data['text']}}</p>
                                <small class="product-ratings">
                                    @if( $product->stock_qty >0)
                                        <span class="text-success">{{session()->get('language') == 'bangla' ? 'স্টকে আছে': 'Available'}} </span>
                                        <i class="ratings">({{ $product->stock_qty }})</i>
                                    @endif

                                </small>
                                {{--                                <div class="text-center btn-group">--}}
                                <div class="text-center">
                                    @if( $product->stock_qty >0)
                                        @if( $product->is_varient == 1)
                                            <button type="submit" id="{{ $product->id }}" onclick="productView(this.id)" data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small "
                                                    class="buy_now">
                                                @if(session()->get('language') == 'bangla')
                                                    এখুনি কিনুন
                                                @else
                                                    অর্ডার করুন
                                                @endif
                                            </button>
                                            <button type="submit" id="{{ $product->id }}" onclick="productView(this.id)" data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small " class="add_to_cart">

                                                @if(session()->get('language') == 'bangla')
                                                    কার্টে যোগ করুন
                                                @else
                                                    কার্টে যোগ করুন
                                                @endif
                                            </button>
                                        @else
                                            <button type="submit" onclick="buyNow({{ $product->id }})" style="font-size:x-small "
                                                    class="buy_now">
                                                @if(session()->get('language') == 'bangla')
                                                    এখুনি কিনুন
                                                @else
                                                    অর্ডার করুন
                                                @endif
                                            </button>
                                            <input type="hidden" id="pfrom" value="direct">
                                            <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">
                                            <input type="hidden" id="{{ $product->id }}-product_pname"
                                                   value="{{ $product->name_en }}">

                                            @if(session()->get('language') == 'bangla')
                                                <button type="submit" onclick="addToCartDirect({{ $product->id }})"
                                                        style="font-size: x-small;" class="add_to_cart">
                                                    কার্টে যোগ করুন
                                                    @else
                                                        <button type="submit" onclick="addToCartDirect({{ $product->id }})"
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

                                            {{--                                                            //hsdflkgshslkhg--}}
                                            {{--                                            <button type="submit" onclick="buyNow({{ $product->id }})" class="buy_now" style="font-size: {{session()->get('language') == 'bangla'? 'x-small':''}}">--}}
                                            {{--                                                @if(session()->get('language') == 'bangla')--}}
                                            {{--                                                    এখুনি কিনুন--}}
                                            {{--                                                @else--}}
                                            {{--                                                    অর্ডার করুন--}}
                                            {{--                                                @endif--}}
                                            {{--                                            </button>--}}
                                            {{--                                            @if($product->is_varient == 1)--}}
                                            {{--                                                <button type="submit" id="{{ $product->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" class="add_to_cart">কার্টে যোগ করুন</button>--}}
                                            {{--                                            @else--}}
                                            {{--                                                <input type="hidden" id="pfrom" value="direct">--}}
                                            {{--                                                <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">--}}
                                            {{--                                                <input type="hidden" id="{{ $product->id }}-product_pname"--}}
                                            {{--                                                       value="{{ $product->name_en }}">--}}
                                            {{--                                                <button type="submit" onclick="addToCartDirect({{ $product->id }})" class="add_to_cart" style="font-size: {{session()->get('language') == 'bangla'? 'x-small':''}}">--}}
                                            {{--                                                    @if(session()->get('language') == 'bangla')--}}
                                            {{--                                                        কার্টে যোগ করুন--}}
                                            {{--                                                    @else--}}
                                            {{--                                                        কার্টে যোগ করুন--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                </button>--}}
                                            {{--                                            @endif--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <div class="container mt-lg-5">
        <div class="row g-3">
            <div class="col-xl-6">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($middleSliders as $index => $slider)
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}"
                                    class="{{ $index === 0 ? 'active' : '' }}"
                                    aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-label="Slide {{$index+1}}"></button>
                        @endforeach

                    </div>
                    <div class="carousel-inner camping">
                        @foreach ($middleSliders as $index => $slider)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="5000">
                                <img src="{{ asset($slider->slider_img) }}" class="d-block" alt="...">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="services container owl-carousel owl-theme owl-loaded mt-3 mt-lg-5 bg-white ">
                    <div class="owl-stage-outer">
                        <div class="row owl-stage g-1">
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/wholesale price.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Wholesale Price</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/everyday low price.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Everyday Low Price!</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/free delivery.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Free Delivery</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/fashion.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Fashion</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/beauty & glamour.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Beauty & Glamour</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/mart.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Mart</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/home makeover.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Home Makeover</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/best price.png"
                                                              class="card-img-top" alt="...">
                                    <span class="product-text">Best Price Guaranteed</span>
                                </a>
                            </div>
                            <div class="col owl-item">
                                <a class="card last" href="#"><img src="{{asset('FrontEnd')}}/assect/img/services/visa card.png"
                                                                   class="card-img-top" alt="...">
                                    <span class="product-text">Payment</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Camping Add just for you Part End -->
    <!-- Just For You Start -->
    <section class="just-for-you container mt-5">
        <h2>
            @if(session()->get('language') == 'bangla')
                শুধু আপনার জন্য
            @else
                Just For You
            @endif
        </h2>
        <hr>
        <div id="product-container" class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-2">
            @foreach ($product_trendings as $product_trending )
                @php $data = calculateDiscount($product_trending->id); @endphp
                <div class="col">
                    <div class="card h-100">
                        <a href="{{route('product.details', $product_trending->slug)}}">
                            <img src="{{ asset($product_trending->product_thumbnail) }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="{{route('product.details', $product_trending->slug)}}">
                                <p class="product-text">
                                    @if(session()->get('language') == 'bangla')
                                        {!! Str::substr($product_trending->name_bn, 0, 20) !!}</p>
                                @else
                                    {!! Str::substr($product_trending->name_en, 0, 20) !!}</p>
                                @endif
                            </a>
                            @php $data = calculateDiscount($product_trending->id); @endphp
                            <h5 class="product-price"><span
                                    class="discount-price">৳{{ $product_trending->regular_price }}</span> ৳{{ $data['discount'] }}</h5>
                            <p class="discount-percent"> {{$data['text']}}</p>
                            <small class="product-ratings">
                                @if( $product_trending->stock_qty >0)
                                    <span class="text-success">Available</span>
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
                                        <button type="submit" id="{{ $product_trending->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small "
                                                class="buy_now">
                                            @if(session()->get('language') == 'bangla')
                                                এখুনি কিনুন
                                            @else
                                                অর্ডার করুন
                                            @endif
                                        </button>
                                        <button type="submit" id="{{ $product_trending->id }}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small " class="add_to_cart">

                                            @if(session()->get('language') == 'bangla')
                                                কার্টে যোগ করুন
                                            @else
                                                কার্টে যোগ করুন
                                            @endif
                                        </button>
                                    @else
                                        <button type="submit" onclick="buyNow({{ $product_trending->id }})" style="font-size:x-small "
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
        </div>
    </section>
    <div class="text-center my-5">
        <button type="button" id="load-more-btn" class="view_more">
            @if(session()->get('language') == 'bangla')
                আরো দেখুন
            @else
                View More
            @endif
        </button>
    </div>
    <!-- Just For You End -->
@endsection
@push('js')
    <script>
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
        var offset = 12;

        $('#load-more-btn').click(function () {
            // Show loader
            showLoader();

            $.ajax({
                url: '/load-more-products',
                method: 'GET',
                data: {
                    offset: offset
                },
                success: function (response) {
                    var products = response.products;

                    if (products.length > 0) {
                        products.forEach(function (product) {
                            if (product.discount_type == 1){
                                var discountPercentage = product.regular_price - product.discount_price;
                                var text = '৳'+product.discount_price+ ' Off';
                            }
                            else{
                                var discountPercentage = Math.round(product.regular_price - (product.discount_price*product.regular_price/100));
                                var text = product.discount_price+ '% Off';
                            }

                            // Append the new products to the container using JavaScript variables
                            var productHtml = `
                            <div class="col">
                                <div class="card h-100">
                                    <a href="{{route('product.details', '')}}/${product.slug}">
                                        <img src="${product.product_thumbnail}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <a href="{{route('product.details', '')}}/${product.slug}">
                                            <p class="product-text">
                                                @if(session()->get('language') == 'bangla')
                            ${product.name_bn.substring(0, 20)}
                                                @else
                            ${product.name_en.substring(0, 20)}
                                                @endif
                            </p>
                    </a>
                    <h5 class="product-price"><span class="discount-price">৳${discountPercentage}</span> ৳${product.regular_price}</h5>
                                        <p class="discount-percent"> ${text}</p>
                                        <small class="product-ratings">`
                            if ( product.stock_qty >0){
                                productHtml += `<span class="text-success">Available</span>
                            <i class="ratings">(${product.stock_qty})</i>`;
                            }
                                        productHtml += `</small>
                                        <div class="text-center">`;
                            if(product.stock_qty >0){
                                if(product.is_varient == 1){

                                    productHtml+=    `<button type="submit" id="${product.id}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small "
                                                                                                      class="buy_now">
                                                                                                  @if(session()->get('language') == 'bangla')
                                    এখুনি কিনুন
@else
                                    অর্ডার করুন
@endif
                                    </button>
                                    <button type="submit" id="${product.id}" onclick="productView(this.id)"data-bs-toggle="modal" data-bs-target="#quickViewModal" style="font-size:x-small " class="add_to_cart">

                                                                                                  @if(session()->get('language') == 'bangla')
                                    কার্টে যোগ করুন
@else
                                    কার্টে যোগ করুন
@endif
                                    </button>`;
                                }
                                else{
                                    productHtml+= `<button type="submit" onclick="buyNow(${product.id})" style="font-size:x-small "
                                                                                                       class="buy_now">
                                                                                                   @if(session()->get('language') == 'bangla')
                                    এখুনি কিনুন
@else
                                    অর্ডার করুন
@endif
                                    </button>
                                    <input type="hidden" id="pfrom" value="direct">
                                    <input type="hidden" id="product_product_id" value="${product.id}" min="1">
                                                                                               <input type="hidden" id="${product.id}-product_pname"
                                                                                                      value="${product.name_en}">

                                                                                               @if(session()->get('language') == 'bangla')
                                    <button type="submit" onclick="addToCartDirect(${product.id})"
                                                                                                           style="font-size: x-small;" class="add_to_cart">
                                                                                                       কার্টে যোগ করুন
                                                                                                       @else
                                    <button type="submit" onclick="addToCartDirect(${product.id})"
                                                                                                                   class="add_to_cart">
                                                                                                               কার্টে যোগ করুন
                                                                                                           </button>
                                                                                               @endif`;

                                }
                            }
                            else{
                                productHtml += `<div class="bg-danger text-white" style="text-shadow: none; margin-top: 37px; padding: 4px 0">
                                                                                            {{session()->get('language') == 'bangla' ? 'স্টক আউট':'Out of Stock'}}
                                </div>`;
                            }
                            productHtml +=            `</div>
                                    </div>
                                </div>
                            </div>
                        `;

                            $('#product-container').append(productHtml);
                        });

                        offset += products.length;
                    } else {
                        // If no more products to load, hide the "Load More" button
                        $('#load-more-btn').hide();
                    }
                },
                error: function (error) {
                    console.error(error);
                },
                complete: function () {
                    // Hide loader regardless of success or error
                    hideLoader();
                }
            });
        });

        function showLoader() {
            // Add loader class to the button or any other container you want
            $('#load-more-btn').addClass('loading');
        }

        function hideLoader() {
            // Remove loader class from the button or any other container
            $('#load-more-btn').removeClass('loading');
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
                    var html = `
<table class="table table-borderless mb-0 pb-0" border="0">
            <tr >
                <td><span>${days}</span></td>
                <td><span>${hours}</span></td>
                <td><span>${minutes}</span></td>
                <td><span>${seconds}</span></td>
            </tr>
            <tr>
                <td><span class="counter-title">Days</span></td>
                <td><span class="counter-title">Hours</span></td>
                <td><span class="counter-title">Minutes</span></td>
                <td><span class="counter-title">Seconds</span></td>
            </tr>
        </table>`;
                    // html += `<br><span class="counter-title">Days:</span> <span class="counter-title">Hours:</span> <span class="counter-title">Minutes:</span> <span class="counter-title">Seconds:</span>`;
                // }


                document.getElementById("demo").innerHTML = html;

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            },
            1000);
    </script>

@endpush
