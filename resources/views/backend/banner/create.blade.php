@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="content-header">
                <h2 class="content-title">Add Cars</h2>
                <div class="">
                    <a href="{{route('cars.index') }}" class="btn btn-primary p-3" title="Category List"><i class="fa fa-list"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-sm-8">
    		<form method="post" action="{{ route('cars.store') }}" enctype="multipart/form-data">
		        @csrf
	    		<div class="card">
					<div class="card-header">
						<h3>Cars</h3>
					</div>
		        	<div class="card-body">
		        		<div class="row">
		                	<div class="col-sm-12 mb-4">
	                           	<label for="title_en" class="col-form-label" style="font-weight: bold;"> Title:</label>
	                            <input class="form-control" id="title_en" type="text" name="title_en" placeholder="Write cars title" value="{{old('title_en')}}">
	                            @error('title_en')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
	                        </div>
	                        <div class="col-sm-6 mb-4 d-none">
	                          	<label for="title_bn" class="col-form-label" style="font-weight: bold;"> Title (Bangla):</label>
	                            <input class="form-control" id="title_bn" type="text" name="title_bn" placeholder="Write cars title bangla" value="{{old('title_bn')}}">
	                        </div>

	                        <div class="col-sm-12 mb-4">
	                          	<label for="description_en" class="col-form-label" style="font-weight: bold;"> Description:</label>
	                            <textarea class="form-control summernote" type="text" name="description_en" placeholder="Write cars description english" value="{{old('description_en')}}"></textarea>
	                        </div>

	                        <div class="col-sm-12 mb-4">
	                          	<label for="price" class="col-form-label" style="font-weight: bold;"> Price:</label>
	                            <input class="form-control" type="number" name="price" placeholder="Write your cars price" value="{{old('price')}}">
	                        </div>

	                        <div class="col-sm-6 mb-4 d-none">
	                          	<label for="description_bn" class="col-form-label" style="font-weight: bold;"> Description (Bangla):</label>
	                            <input class="form-control" id="description_bn" type="text" name="description_bn" placeholder="Write cars description bangla" value="{{old('description_bn')}}">
	                        </div>

                            <div class="col-sm-4 mb-4 ">
	                          	<label for="manufacturer" class="col-form-label" style="font-weight: bold;"> Manufacturer</label>
	                            {{-- <input class="form-control" type="text" name="manufacturer" required placeholder="Write Manufacturer" value="{{old('manufacturer')}}"> --}}
                                <select name="manufacturer" id="brandSelect"class="form-control">
                                    @foreach ($brands as $brand )
                                    <option value="{{ $brand->id }}">{{ $brand->name_en }}</option>
                                    @endforeach
                                </select>
	                        </div>
                            <div class="col-sm-4 mb-4 ">
	                          	<label for="manufacturer" class="col-form-label" style="font-weight: bold;"> Model</label>
	                            {{-- <input class="form-control" type="text" name="manufacturer" required placeholder="Write Manufacturer" value="{{old('manufacturer')}}"> --}}
                                <select id="carSelect" name="model" class="form-control">
                                    <option value="">Select Car</option>
                                </select>
	                        </div>
                            <div class="col-sm-4 mb-4 ">
	                          	<label for="manufacturer" class="col-form-label" style="font-weight: bold;">  Engine Size (cc)
                                </label>
	                            <input class="form-control" type="text" name="engine" required placeholder="Write Engine Size (cc)" value="{{old('engine')}}">
	                        </div>
                            <div class="col-sm-4 mb-4 ">
	                          	<label for="year_of_manufacturer" class="col-form-label" style="font-weight: bold;">  Year of Manufacturer:
                                </label>
	                            {{-- <input class="form-control" type="text" name="year_of_manufacturer" required placeholder="Write Year of Manufacturer" value="{{old('year_of_manufacturer')}}"> --}}
                                <select name="year_of_manufacturer" id="" class="form-control">
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
                                </select>
	                        </div>

                            <div class="col-sm-4 mb-4 ">
	                          	<label for="transmission" class="col-form-label" style="font-weight: bold;"> Transmission</label>
	                            <input class="form-control" type="text" name="transmission" required placeholder="Write Transmission" value="{{old('transmission')}}">
	                        </div>
                            <div class="col-sm-4 mb-4 ">
	                          	<label for="manufacturer" class="col-form-label"  style="font-weight: bold;">  Fuel Type:
                                </label>
	                            {{-- <input class="form-control" type="text" name="fuel_type" required placeholder="Write Fuel Type" value="{{old('fuel_type')}}"> --}}
                                <select name="fuel_type" id="" class="form-control">
                                    <option value="Octane">Octane</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="CNG">CNG</option>
                                    <option value="LPG">LPG</option>
                                    <option value="Hybrid">Hybrid</option>
                                    <option value="Plug-in Hybrid">Plug-in Hybrid</option>
                                    <option value="Electric">Electric</option>
                                </select>
	                        </div>
                            <div class="col-sm-4 mb-4 ">
	                          	<label for="year_of_manufacturer" class="col-form-label"  style="font-weight: bold;"> Drive Train:
                                </label>
	                            <input class="form-control" type="text" name="drive_train" required placeholder="Write Drive Train" value="{{old('drive_train')}}">
	                        </div>


                            <div class="col-sm-4 mb-4 ">
	                          	<label for="transmission" class="col-form-label" style="font-weight: bold;"> Mileage(km):</label>
	                            <input class="form-control" type="text" name="mileage" required placeholder="Write Mileage(km)" value="{{old('mileage')}}">
	                        </div>
                            <div class="col-sm-4 mb-4 ">
	                          	<label for="manufacturer" class="col-form-label" style="font-weight: bold;"> Body Type:
                                </label>
	                            <input class="form-control" type="text" name="body_type" required placeholder="Write  Body Type" value="{{old('body_type')}}">
	                        </div>
                            <div class="col-sm-4 mb-4 ">
	                          	<label for="year_of_manufacturer" class="col-form-label" style="font-weight: bold;">  Exterior Color:

                                </label>
	                            <input class="form-control" type="text" name="exterior_color" required placeholder="Write Exterior Color:" value="{{old('exterior_color')}}">
	                        </div>

	                       <div class="mb-2 col-sm-12">
	                       		<img id="showImage" class="rounded avatar-lg mb-3" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap" width="100px" height="80px;">
	                       </div>
	                        <div class="col-sm-12 mb-4">
	                         	<label for="image" class="col-form-label" style="font-weight: bold;">Cars Photo:</label>
	                            <input name="cars_img" class="form-control" type="file" id="image" required>
	                            @error('cars_img')
                                	<p class="text-danger">{{$message}}</p>
                            	@enderror
	                        </div>
	                        <div class="mb-4">
	                            <div class="custom-control custom-switch">
	                                <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1">
	                                <label class="form-check-label cursor" for="status">Status</label>
	                            </div>
                            </div>

	                        <div class="row mb-4 justify-content-sm-end">
								<div class="col-lg-3 col-md-4 col-sm-5 col-6">
									<input type="submit" class="btn btn-primary" value="Submit">
								</div>
							</div>

			            </div>
			            <!-- .row // -->
			        </div>
			        <!-- card body .// -->
			    </div>
			    <!-- card .// -->
			</form>
    	</div>
    </div>
</section>

@endsection

@push('footer-script')
<script>
    $(document).ready(function(){
        $('#brandSelect').on('click', function(){
            
            var brand_id = $(this).val();
            if(brand_id){
                $.ajax({
                    url: '/getCarsByBrand/' + brand_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('#carSelect').empty();
                        $.each(data, function(key, value){
                            $('#carSelect').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                        });
                    }
                });
            } else {
                $('#carSelect').empty();
            }
        });
    });
    </script>
@endpush
