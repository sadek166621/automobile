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
    transition: background-color 0.3s, color 0.3s; /* Smooth transition for background and text color changes */
}

.button-4:hover {
    background-color: #002244; /* Change background to red on hover */
    color: white; /* Change text color to white on hover */
    border-color: #002244; /* Change border color to red on hover */
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
        <br><br>
        <p class="" style="text-align: justify">After sales your car exceptionally might occur some troubles, especially for mishandling. In such a situation please call us.  We will give you information about some best workshops where you can obtain the best services at competitive price.
            A moving object always require a regular maintenance service. Better the maintenance services, longer the durability of the vehicle. We offer some maintenance kits which you need on regular interval. Please buy these genuine maintenance kits at competitive price from us. We have some nominated workshops to ensure best maintenance services. Please contact us for services.
            </p>
      <div class="row car-list">
        @foreach ($products as $product )
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="items">
              <figure>
                  <a href="{{ route('product.details',$product->slug) }}"><img src="{{ asset($product->product_thumbnail) }}" alt="" class="img-fluid"></a>
              </figure>
              <div class="content">
                <div class="cont">
                  <a href="">
                      <h3>{{ $product->name_en }}</h3>
                  </a>
                  <div class="book mt-3">
                    <div>
                      <div class="price">BDT {{ $product->regular_price ?? 'NULL' }}</div>
                    </div>
                    <button class="button-4 buy_now" type="submit" onclick="buyNow({{ $product->id }})"><strong><i class="fa fa-shopping-cart"></i> Buy Now</strong>
                        <input type="hidden" id="pfrom" value="direct">
                        <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">
                        <input type="hidden" id="{{ $product->id }}-product_pname"
                               value="{{ $product->name_en }}">
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
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
