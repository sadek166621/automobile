@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="row content-header">
{{--        <div class="">--}}
            <div class="col-md-9">
                <h2 class="content-title">Exchange Details </h2>
            </div>

{{--        </div>--}}
    </div>
    <div class="card mb-4">
        <!-- card-header end// -->
        <h3>Customer Car Details</h3>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped" width="100%">
                    <thead>
                      <tr>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Grade</th>
                        <th>Color</th>
                        <th>Mileager</th>
                        <th>Delivery Date</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                        <tbody>
                            {{-- @foreach($views as $key => $item) --}}
                              <tr>
                                <td> {{ $views->your_car_manufacturer ?? 'NULL' }}</td>
                                <td> {{ $views->your_car_model ?? 'NULL' }}</td>
                                <td>{{ $views->your_car_year ?? 'NULL' }} </td>
                                <td> {{ $views->your_car_preferred_grade ?? 'NULL' }} </td>
                                <td> {{ $views->your_car_preferred_color ?? 'NULL' }} </td>
                                <td> {{ $views->your_car_preferred_mileage ?? 'NULL' }} </td>
                                <td> {{ $views->your_car_preferred_delivery_date ?? 'NULL' }} </td>
                                <td> {{ $views->your_description ?? 'NULL' }} </td>
                              </tr>
                            {{-- @endforeach --}}
                        </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="card mb-4">
    <h3>Preferred Car Details</h3>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-bordered table-striped" width="100%">
                    <thead>
                      <tr>
                        <th>Preferred Manufacturer</th>
                        <th>Preferred Model</th>
                        <th>Preferred Year</th>
                        <th>Preferred Grade</th>
                        <th>Preferred Color</th>
                        <th>Preferred Mileager</th>
                        <th>Preferred Delivery Date</th>
                        <th>Preferred Description</th>
                      </tr>
                    </thead>
                        <tbody>
                            <tr>
                                <td> {{ $views->preferred_manufacturer ?? 'NULL' }}</td>
                                <td> {{ $views->preferred_model ?? 'NULL' }}</td>
                                <td>{{ $views->preferred_year ?? 'NULL' }} </td>
                                <td> {{ $views->preferred_grade ?? 'NULL' }} </td>
                                <td> {{ $views->preferred_color ?? 'NULL' }} </td>
                                <td> {{ $views->preferred_mileage ?? 'NULL' }} </td>
                                <td> {{ $views->preferred_delivary_date ?? 'NULL' }} </td>
                                <td> {{ $views->preferred_description ?? 'NULL' }} </td>
                              </tr>
                        </tbody>
                </table>
            </div>
        </div>
    <!-- card end// -->
    </div>
</section>
@endsection
