@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="row content-header">
{{--        <div class="">--}}
            <div class="col-md-9">
                <h2 class="content-title">Our Customer List</h2>
                {{-- <strong style="font-weight: bold; color: #365486"> {{ count($itemrs) }} itemrs Found</strong> --}}
            </div>
            <div class="col-md-3">
                <div>
                    <a href="{{ route('our-customer.create') }}" style="float: right; margin-right: 20px" class="btn btn-primary" title="Add itemr"><i class="material-icons md-plus"></i> </a>
                </div>
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
                        <th>Image</th>
                        <th>Product Code </th>
                        <th>Delivared To</th>
                        <th>Delivery Date:</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                      </tr>
                    </thead>
                        <tbody>
                            @foreach($customer as $key => $item)
                              <tr>
                                <td> {{ $key+1}} </td>
                                <td width="15%">
                                    <a href="#" class="itemside">
                                        <div class="left">
                                            <img src="{{ asset($item->image) }}" width="70px" height="70px;" class="img-sm img-avatar" alt="Userpic">
                                        </div>
                                    </a>
                                </td>
                                <td> {{ $item->product_code ?? 'NULL' }} </td>
                                <td> {{ $item->delivered ?? 'NULL' }} </td>
                                <td> {{$item->delivery_date ?? 'NULL'  }} </td>
                                  <td>
                                    <div>
                                        @if($item->status == 1)
                                            <span class="our-customer-status badge rounded-pill alert-success">Active</span>
                                        @else
                                           <span class="itemr-status badge rounded-pill alert-danger">Disable</span>
                                        @endif
                                    </div>
                                </td>
                                <td >
                                    <div class=" btn-group" style="margin: 50% 0">
                                        <a href="{{ route('our-customer.edit',$item->id) }}" class="btn btn-primary" title="Edit"
                                           style="padding:12px; margin-right: 5px; border-radius: 5px"><i class="fa fa-pencil"></i></a>
                                        <a href="{{ route('our-customer.destroy',$item->id) }}"onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-danger" title="Delete"
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
