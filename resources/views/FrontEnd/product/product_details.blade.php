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
        width: 558px;
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
    .product-view>.first-col {
        flex: 50;
        width: 50%;
        padding: 0 10px;
    }
    .product-view>.first-col>.body {
        width: 100%;
        height: 100%;
        background-color: #fff;
        box-shadow: 0 0 7px rgba(0, 0, 0, .05);
        padding: 10px;
    }
    .product-view>.first-col>.body>.small-img {
        margin-top: 10px;
    }
    .product-view>.first-col>.body>.small-img img {
        cursor: pointer;
        max-height: 60px;
    }
    .product-view>.first-col>.body>.small-img>table {
        margin-left: auto;
        margin-right: auto;
    }
    .product-view>.first-col>.body>.small-img td {
        padding: 5px;
    }
    .product-view>.second-col {
        flex: 50;
        vertical-align: top;
        width: 50%;
        padding: 0 10px;
    }
    .product-view>.second-col>.body {
        background-color: #fff;
        box-shadow: 0 0 7px rgba(0, 0, 0, .05);
        width: 100%;
        height: 100%;
        padding: 10px;
    }
    .product-view>.second-col>.body>.name {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        font-size: 20px;
        line-height: 25px;
        padding-bottom: 10px;
        text-transform: uppercase;
    }
    .product-view>.second-col>.body>.price {
        font-size: 30px;
        line-height: 30px;
        font-weight: bold;
        padding-bottom: 10px;
        font-family: 'Changa', sans-serif;
    }
    .product-view>.second-col>.body>.key-title {
        font-size: 15px;
        padding-bottom: 5px;
        font-weight: 500;
    }
    .product-view>.second-col>.body>.key-features {
        display: table;
        width: 100%;
        color: gray;
        padding: 4px 0;
        font-size: 13px;
    }
    .product-view>.second-col>.body>.key-features>.title {
        display: table-cell;
        width: 100px;
        text-align: left;
        vertical-align: top;
        font-weight: bold;
    }
    .product-view>.second-col>.body>.key-features>.details {
        display: table-cell;
        text-align: left;
    }
    .product-view>.second-col>.body>.description {
        max-height: 150px;
        overflow: auto;
        font-size: 13px;
        padding-top: 25px;
        margin-bottom: 20px;
    }
    .product-view>.second-col>.body>button {
        border-style: none;
        background-color: #ea0000;
        border-radius: 3px;
        padding: 9px;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        width: 100%;
        margin-top: 113px;
    }
    .imagezoom-cursor {
        position: absolute;
        border: 1px solid #000;
        cursor: crosshair;
        z-index: 2147483647;
    }
    .imagezoom-view {
        position: absolute;
        overflow: hidden;
        z-index: 2147483647;
    }
    .imagezoom-view img {
        position: absolute;
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
            <h1>Service After Sales</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Service After Sales</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Page Section -->
<section class="cars">
    <div class="page-wid">
        <div class="product-view">
            <div class="first-col">
                <div class="body">
                    <img src="{{asset($product->product_thumbnail)}}" class="img-responsive" data-imagezoom="true" id="BigImage" />
                    <div class="small-img">
                        <table>
                            <tr>
                                <td>
                                    <img src="{{asset($product->product_thumbnail)}}" class="img-responsive" id="img_0" onclick="FatchImage('0');" />
                                </td>
                                @foreach($multiImg as $key =>$image)
                                <td>
                                    <img src="{{asset($image->photo_name)}}" class="img-responsive" id="img_{{ $key+1 }}" onclick="FatchImage({{ $key+1 }});" />
                                </td>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="second-col">
                <div class="body">
                    <div class="name">{{ $product->name_en }}</div>
                    <div class="price">
                        <span>৳: </span>{{ $product->regular_price }}
                    </div>
                    <div class="key-title">Key Features:</div>
                    <div class="key-features">
                        <div class="title"><i class="fa fa-circle"></i> Brand</div><span>:</span>
                        <div class="details">{{$product->brand->name_en ?? 'NA'}}</div>
                    </div>
                    <div class="key-features">
                        <div class="title"><i class="fa fa-circle"></i> Stock</div><span>:</span>
                        <div class="details">{{$product->stock_qty}}</div>
                    </div>

                    <div class="description">{!!  $product->description_en !!}</div>
                    <button class="buy_now" type="submit" onclick="buyNow({{ $product->id }})" ><i class="fa fa-shopping-cart"></i> Buy Now</button>
                    <input type="hidden" id="pfrom" value="direct">
                    <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">
                    <input type="hidden" id="{{ $product->id }}-product_pname"
                           value="{{ $product->name_en }}">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Page Section -->

<!-- CTA Section -->
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

@push('js')
<script src="{{ asset('FrontEnd') }}/assets/js/imagezoom.js"></script>

<script type="text/javascript">
    function FatchImage(id) {
        document.getElementById("BigImage").src = document.getElementById("img_" + id).src;
    }
</script>
<script>
     function buyNow(id, qty=0) {
                // alert();
    addToCartDirect(id, true, qty);
}
    function addToCartDirect(id, redirectToCheckout, qty=null) {

    var product_name = $('#' + id + '-product_pname').val();
    var quantity = 1;
    if(qty > 1){
        quantity = qty;
    }
        // var options = $('#choice_form').serializeArray();
        // var jsonString = JSON.stringify(options);
        // console.log(options);
        // console.log(id, redirectToCheckout, qty)
        // var product_name = $('#pname').val();
        // var id = $('#product_id').val();
        // var price = $('#product_price').val();
        // var color = $('#color option:selected').val();
        // var size = $('#size option:selected').val();
        // var quantity = $('#qty').val();
        // var varient = $('#pvarient').val();
    $.ajax({
        type: 'POST',
        url: '/cart/data/store/'+id,
        dataType: 'json',
        data: {

            // color: color,
            // size: size,
            // product_price: price,
            // product_varient: varient,
            // options: jsonString,

            quantity: quantity,
            product_name: product_name,
            _token: "{{ csrf_token() }}",
        },
        success: function (data) {
            console.log(data);

            // if ($.isEmptyObject(data.error)) {
            //     const Toast = Swal.mixin({
            //         toast: true,
            //         position: 'top-end',
            //         icon: 'success',
            //         showConfirmButton: false,
            //         timer: 1200
            //     });
            //     Toast.fire({
            //         type: 'success',
            //         title: data.success
            //     });

                console.log(redirectToCheckout);

                if (redirectToCheckout) {
                    // Redirect to the checkout page
                    console.log(redirectToCheckout);
                    window.location.href = '/checkout';
                }
            // } else {
            //     const Toast = Swal.mixin({
            //         toast: true,
            //         position: 'top-end',
            //         icon: 'error',
            //         showConfirmButton: false,
            //         timer: 1200
            //     });
            //     Toast.fire({
            //         type: 'error',
            //         title: data.error
            //     });
            // }
        }
    });
}
</script>
@endpush
