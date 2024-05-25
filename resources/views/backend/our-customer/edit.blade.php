@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="content-header">
                <h2 class="content-title">Our Customer Create</h2>
                <div class="">
                    <a href="{{ route('our-customer.index') }}" class="btn btn-primary p-3" title="our-customer List"><i class="fa fa-list"></i> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-sm-10">
    		<div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <form method="post" action="{{ route('our-customer.update',$customer->id) }}" enctype="multipart/form-data">
		                    	@csrf
                                @method('PUT')

		                        <div class="mb-4">
		                           <label for="title_en" class="col-form-label col-md-2" style="font-weight: bold;"> Product Code:</label>
		                            <input class="form-control" required id="title_en" type="text" name="product_code" placeholder="Write Our-customer Product Code"  value="{{ $customer->product_code}}">
		                            @error('product_code')
		                            	<span class="text-danger">{{ $message }}</span>
		                            @enderror
		                        </div>
		                        <div class="mb-4">
		                          <label for="our-customer_url" class="col-form-label col-md-2" style="font-weight: bold;"> Delivered to:</label>
		                            <input class="form-control" required id="delivered" type="text" name="delivered" placeholder="Write our-customer Delivered To" value="{{ $customer->delivered}}">
		                        </div>
		                        <div class="mb-4">
		                          <label for="our-customer_url" class="col-form-label col-md-2" style="font-weight: bold;"> Delivery Date:</label>
		                            <input class="form-control" required id="delivery_date" type="date" name="delivery_date" placeholder="Write our-customer delivery_date" value="{{ $customer->delivery_date}}">
		                        </div>
		                        <div class="mb-4">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ asset($customer->image) }}" alt="Card image cap" width="100px" height="80px;">
                                </div>
		                        <div class="mb-4">
		                         	<label for="image" class="col-form-label col-md-2" style="font-weight: bold;"> Photo:</label>
		                            <input name="image" required class="form-control" type="file"  id="image" >
		                        </div>
		                        <div class="mb-4">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" value="1" {{ $customer->status == 1 ? 'checked': '' }}>
                                        <label class="form-check-label cursor" for="status">Status</label>
                                    </div>
                                </div>

		                        <div class="row mb-4 justify-content-sm-end">
									<div class="col-lg-3 col-md-4 col-sm-5 col-6">
										<input type="submit" class="btn btn-primary" value="Submit">
									</div>
								</div>
		                    </form>
		                </div>
		            </div>
		            <!-- .row // -->
		        </div>
		        <!-- card body .// -->
		    </div>
		    <!-- card .// -->
    	</div>
    </div>
</section>
@endsection
