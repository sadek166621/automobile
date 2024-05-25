@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="content-header">
                <h2 class="content-title">Edit Cars</h2>
                <div class="">
                    <a href="{{route('cars.index') }}" class="btn btn-primary p-3" title="Category List"><i class="fa fa-list"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form method="post" action="{{ route('cars.update', $banner->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3>Cars</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <label for="title_en" class="col-form-label" style="font-weight: bold;"> Title:</label>
                                <input class="form-control" id="titie_en" required type="text" name="title_en" placeholder="Write banner title english" value="{{ $banner->title_en}}">
                                @error('title_en')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-4 d-none">
                                <label for="title_bn" class="col-form-label" style="font-weight: bold;"> Title (Bangla):</label>
                                <input class="form-control" id="title_bn" required type="text" name="title_bn" placeholder="Write banner title bangla" value="{{ $banner->title_bn}}">
                            </div>

                            <div class="col-sm-12 mb-4">
                                <label for="description_en" class="col-form-label" style="font-weight: bold;"> Description:</label>
                              <textarea class="form-control summernote" required type="text" name="description_en" placeholder="Write banner description english" value="{{old('description_en')}}">{{ $banner->description_en}}</textarea>
                          </div>

                            <div class="col-sm-6 mb-4 d-none">
                                <label for="description_bn" class="col-form-label" style="font-weight: bold;"> Description (Bangla):</label>
                                <input class="form-control" required id="description_bn" type="text" name="description_bn" placeholder="Write banner description bangla" value="{{ $banner->description_bn}}">
                            </div>
                            <div class="col-sm-12 mb-4">
                                <label for="price" class="col-form-label" style="font-weight: bold;"> Price:</label>
                              <input class="form-control" required type="number" name="price" placeholder="Write your cars price" value="{{$banner->price}}">
                          </div>
                          <div class="col-sm-4 mb-4 ">
                            <label for="manufacturer" class="col-form-label" style="font-weight: bold;"> category</label>
                                <select name="category" id="" class="form-control" required>
                                    @foreach ($categories as $cat )
                                    <option value="{{ $cat->slug }}"{{$banner->category == $cat->slug ?'Selected':''}}>{{ $cat->name_en }}</option>
                                    @endforeach
                                </select>
                          </div>
                          <div class="col-sm-4 mb-4 ">
                            <label for="manufacturer" class="col-form-label" style="font-weight: bold;"> Manufacturer</label>
                                <select name="manufacturer" id="brandSelect"class="form-control" required>
                                    @foreach ($brands as $brand )
                                    <option value="{{ $brand->id }}"{{$banner->manufacturer == $brand->id ?'Selected':''}}>{{ $brand->name_en }}</option>
                                    @endforeach
                                </select>
                          </div>

                        <div class="col-sm-4 mb-4 ">
                                <label for="manufacturer" class="col-form-label" style="font-weight: bold;"> Model</label>
                            {{-- <input class="form-control" type="text" name="manufacturer" required placeholder="Write Manufacturer" value="{{old('manufacturer')}}"> --}}
                            <select id="carSelect" name="model" class="form-control" required>
                                <option value="{{ $banner->model }}">@if ( $banner->model != Null)
                                    {{ $banner->models->name  }}
                                    @else
                                    Select Models
                                @endif</option>
                            </select>
                        </div>
                          <div class="col-sm-4 mb-4 ">
                                <label for="manufacturer" class="col-form-label" style="font-weight: bold;">  Engine Size (cc)
                              </label>
                              <input class="form-control" required type="text" name="engine" placeholder="Write Engine Size (cc)" value="{{$banner->engine}}">
                          </div>
                          <div class="col-sm-4 mb-4 ">
                            <label for="year_of_manufacturer" class="col-form-label" style="font-weight: bold;">  Year of Manufacturer:
                          </label>
                          {{-- <input class="form-control" type="text" name="year_of_manufacturer" required placeholder="Write Year of Manufacturer" value="{{old('year_of_manufacturer')}}"> --}}
                          <select name="year_of_manufacturer" id="" class="form-control" required>
                              <option value="2023" {{ $banner->year_of_manufacturer == "2023" ?'Selected' :'' }}>2023</option>
                              <option value="2022"{{ $banner->year_of_manufacturer == "2022" ?'Selected' :'' }}>2022</option>
                              <option value="2021"{{ $banner->year_of_manufacturer == "2021" ?'Selected' :'' }}>2021</option>
                              <option value="2020"{{ $banner->year_of_manufacturer == "2020" ?'Selected' :'' }}>2020</option>
                              <option value="2019"{{ $banner->year_of_manufacturer == "2019" ?'Selected' :'' }}>2019</option>
                              <option value="2018"{{ $banner->year_of_manufacturer == "2018" ?'Selected' :'' }}>2018</option>
                              <option value="2017"{{ $banner->year_of_manufacturer == "2017" ?'Selected' :'' }}>2017</option>
                              <option value="2016"{{ $banner->year_of_manufacturer == "2016" ?'Selected' :'' }}>2016</option>
                              <option value="2015"{{ $banner->year_of_manufacturer == "2015" ?'Selected' :'' }}>2015</option>
                              <option value="2014"{{ $banner->year_of_manufacturer == "2014" ?'Selected' :'' }}>2014</option>
                              <option value="2013"{{ $banner->year_of_manufacturer == "2013" ?'Selected' :'' }}>2013</option>
                              <option value="2012"{{ $banner->year_of_manufacturer == "2012" ?'Selected' :'' }}>2012</option>
                              <option value="2011"{{ $banner->year_of_manufacturer == "2011" ?'Selected' :'' }}>2011</option>
                              <option value="2010"{{ $banner->year_of_manufacturer == "2010" ?'Selected' :'' }}>2010</option>
                              <option value="2009"{{ $banner->year_of_manufacturer == "2009" ?'Selected' :'' }}>2009</option>
                              <option value="2008"{{ $banner->year_of_manufacturer == "2008" ?'Selected' :'' }}>2008</option>
                              <option value="2007"{{ $banner->year_of_manufacturer == "2007" ?'Selected' :'' }}>2007</option>
                              <option value="2006"{{ $banner->year_of_manufacturer == "2006" ?'Selected' :'' }}>2006</option>
                              <option value="2005"{{ $banner->year_of_manufacturer == "2005" ?'Selected' :'' }}>2005</option>
                              <option value="2004"{{ $banner->year_of_manufacturer == "2004" ?'Selected' :'' }}>2004</option>
                          </select>
                      </div>

                          <div class="col-sm-4 mb-4 ">
                                <label for="transmission" class="col-form-label" style="font-weight: bold;"> Transmission</label>
                              <input class="form-control" required type="text" name="transmission" placeholder="Write Transmission" value="{{$banner->transmission}}">
                          </div>
                          <div class="col-sm-4 mb-4 ">
                            <label for="manufacturer" class="col-form-label"  style="font-weight: bold;">  Fuel Type:
                          </label>
                          {{-- <input class="form-control" type="text" name="fuel_type" required placeholder="Write Fuel Type" value="{{old('fuel_type')}}"> --}}
                          <select name="fuel_type" id="" class="form-control" required>
                              <option value="Octane"{{ $banner->fuel_type == "Octane" ?'Selected' :'' }}>Octane</option>
                              <option value="Petrol"{{ $banner->fuel_type == "Petrol" ?'Selected' :'' }}>Petrol</option>
                              <option value="Diesel"{{ $banner->fuel_type == "Diesel" ?'Selected' :'' }}>Diesel</option>
                              <option value="CNG"{{ $banner->fuel_type == "CNG" ?'Selected' :'' }}>CNG</option>
                              <option value="LPG"{{ $banner->fuel_type == "LPG" ?'Selected' :'' }}>LPG</option>
                              <option value="Hybrid"{{ $banner->fuel_type == "Hybrid" ?'Selected' :'' }}>Hybrid</option>
                              <option value="Plug-in Hybrid"{{ $banner->fuel_type == "Plug-in Hybrid" ?'Selected' :'' }}>Plug-in Hybrid</option>
                              <option value="Electric"{{ $banner->fuel_type == "Electric" ?'Selected' :'' }}>Electric</option>
                          </select>
                      </div>
                          <div class="col-sm-4 mb-4 ">
                                <label for="year_of_manufacturer" class="col-form-label" style="font-weight: bold;"> Drive Train:
                              </label>
                              <input class="form-control" required type="text" name="drive_train" placeholder="Write Drive Train" value="{{$banner->drive_train}}">
                          </div>


                          <div class="col-sm-4 mb-4 ">
                                <label for="transmission" class="col-form-label" style="font-weight: bold;"> Mileage(km):</label>
                              <input class="form-control" required type="text" name="mileage" placeholder="Write Mileage(km)" value="{{$banner->mileage}}">
                          </div>
                          <div class="col-sm-4 mb-4 ">
                                <label for="manufacturer" class="col-form-label" style="font-weight: bold;"> Body Type:
                              </label>
                              <input class="form-control" type="text" name="body_type" required placeholder="Write  Body Type" value="{{$banner->body_type}}">
                          </div>
                          <div class="col-sm-4 mb-4 ">
                                <label for="exterior_color" class="col-form-label" style="font-weight: bold;">  Exterior Color:

                              </label>
                              <input class="form-control" type="text" name="exterior_color" required placeholder="Write Exterior Color:" value="{{$banner->exterior_color}}">
                          </div>
                           <div class="mb-2 col-sm-12">
                                <img id="showImage" class="rounded avatar-lg mb-3" required src="{{ asset($banner->banner_img) }}" alt="Card image cap" width="100px" height="80px;">
                           </div>
                            <div class="col-sm-12 mb-4">
                                <label for="image" class="col-form-label" style="font-weight: bold;">Car Photo:</label>
                                <input name="cars_img" class="form-control" type="file" id="image" required>
                            </div>
                            <div class="mb-4">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="form-check-input me-2 cursor" name="status" id="status" checked value="1" {{ $banner->status == 1 ? 'checked': '' }}>
                                    <label class="form-check-label cursor" for="status">Status</label>
                                </div>
                            </div>

                            <div class="row mb-4 justify-content-sm-end">
                                <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                                    <input type="submit" class="btn btn-primary" value="Update">
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
