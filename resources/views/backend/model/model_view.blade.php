@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-10">
            <div class="">
                <h3 class="content-title">Model List </h3>
                {{-- <strong style="font-weight: bold" class="text-dark"> {{ count($carsms) }} Models Found </strong> --}}
            </div>
        </div>
        <div class="col-md-2">
            <div>
                <a href="{{ route('carsm.add') }}" class="btn btn-primary" title="Model Create"><i class="material-icons md-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="card mb-4 mt-3">
        <div class="card-body">
            <div class="table-responsive-sm">
                <table id="example" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Name <span class="d-none">(English)/(Bangla)</span></th>
{{--                            <th scope="col">Name </th>--}}
                            <th scope="col">Status</th>
                            @if(Auth::guard('admin')->user()->role != '2')
                                <th scope="col" class="text-end">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carsm as $key => $cars)
                        <tr>
                            <td> {{ $key+1}} </td>

                            <td> {{ $cars->name ?? 'NULL' }} <br>
                                <span class="d-none">{{ $cars->name ?? 'NULL' }}</span> </td>
                            <td> {{ $cars->brand->name_en ?? 'NULL' }} <br>
                                <span class="d-none">{{ $cars->brand_id ?? 'NULL' }}</span> </td>
{{--                            <td>  </td>--}}
                            <td>
                                @if($cars->status == 1)

                                    <span class="status badge rounded-pill alert-success">Active</span>

                                @else
                                   <span class="status badge rounded-pill alert-danger">Disable</span>
                                @endif
                            </td>
                            @if(Auth::guard('admin')->user()->role != '2')
                                <td class="text-end">
{{--                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>--}}
                                    <div class="">
{{--                                        <a href="#" data-bs-toggle="" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>--}}
                                        <div class="">
                                            <a class="btn btn-primary" style="padding: 12px"  href="{{ route('carsm.edit',$cars->id) }}" title="Edit Info"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger" href="{{ route('carsm.delete',$cars->id) }}" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- table-responsive //end -->
        </div>
        <!-- card-body end// -->
    </div>
</section>
@endsection
