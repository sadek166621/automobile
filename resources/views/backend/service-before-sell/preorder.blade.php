@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="row content-header">
{{--        <div class="">--}}
            <div class="col-md-9">
                <h2 class="content-title">Preorder  List</h2>
                <strong style="font-weight: bold; color: #365486"> {{ count($preorder) }} preorder Found</strong>
            </div>

{{--        </div>--}}
    </div>
    <div class="card mb-4">
        <!-- card-header end// -->
        <div class="card-body">
            <div class="table-responsive-sm">
                <table id="example" class="table table-bordered table-striped" width="100%">
                    <thead>
                      <tr>
                        <th>Sl</th>
                        <th>Manufacturer <br> Model <br> Year</th>
                        <th>Preferred Grade <br> Preferred Color <br> Preferred Mileager</th>
                        <th>Preferred Delivery Date
                        </th>
                        <th>Name <br> Contact <br> Email</th>
                        <th>Address</th>
                        <th class="text-end">Action</th>
                      </tr>
                    </thead>
                        <tbody>
                            @foreach($preorder as $key => $item)
                              <tr>
                                <td> {{ $key+1}} </td>
                                <td> {{ $item->preorder_manufacturer ?? 'NULL' }} <br>  {{ $item->preorder_model ?? 'NULL' }} <br> {{ $item->preorder_year ?? 'NULL' }} </td>
                                <td> {{ $item->preorder_grade ?? 'NULL' }} <br>  {{ $item->preorder_color ?? 'NULL' }} <br> {{ $item->preorder_mileage ?? 'NULL' }} </td>
                                <td> {{ $item->preorder_delivary_date ?? 'NULL' }} </td>
                                <td> {{ $item->name ?? 'NULL' }} <br>  {{ $item->phone ?? 'NULL' }} <br> {{ $item->email ?? 'NULL' }} </td>
                                <td> {{ $item->address ?? 'NULL' }} </td>
                                <td >
                                    <div class=" btn-group" style="margin: 50% 0">
                                        <a href="{{ route('service-before-sell.preorder.distroy',$item->id) }}" class="btn btn-danger" title="Delete"
                                           style="border-radius: 5px"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- card end// -->
</section>
@endsection
