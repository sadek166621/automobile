@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="content-header">
        <div class="col-md-10">
            <h2 class="content-title">Cars List</h2>
            <strong style="font-weight: bold" class="text-dark"> {{ count($banners) }} Cars Found </strong>

        </div>
        <div class="col-md-2">
            <a href="{{ route('cars.create') }}" class="btn btn-primary" title="Add Banner"><i class="material-icons md-plus"></i></a>
        </div>

    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive-sm">
                <table id="example" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Car Photo</th>
                            <th scope="col">Title </th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $key => $banner)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td width="15%">
                                <a href="#" class="itemside">
                                    <div class="left">
                                        <img src="{{ asset($banner->banner_img) }}" class="img-sm img-avatar" alt="Userpic" />
                                    </div>
                                </a>
                            </td>
                            <td> {{ $banner->title_en ?? 'NULL' }} </td>
                            <td>
                                @if($banner->status == 1)
                                  <a href="{{ route('cars.in_active',['id'=>$banner->id]) }}">
                                    <span class="badge status rounded-pill alert-success">Active</span>
                                  </a>
                                @else
                                  <a href="{{ route('cars.active',['id'=>$banner->id]) }}" > <span class="badge status rounded-pill alert-danger">Disable</span></a>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class=" btn-group" style="margin: 25% 0">
                                    <a href="{{ route('cars.edit', $banner->id) }}" class="btn btn-primary" title="Edit"
                                       style="padding:12px; margin-right: 5px; border-radius: 5px"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('cars.delete',$banner->id) }}" id="delete" class="btn btn-danger" title="Delete"
                                       style="border-radius: 5px"><i class="fa fa-trash"></i></a>
                                </div>

                                <!-- dropdown //end -->
                            </td>
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
