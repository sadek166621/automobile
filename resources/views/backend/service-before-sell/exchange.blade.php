@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="row content-header">
{{--        <div class="">--}}
            <div class="col-md-9">
                <h2 class="content-title">Exchange  List</h2>
                <strong style="font-weight: bold; color: #365486"> {{ count($exchange) }} exchange Found</strong>
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
                        <th>Name</th>
                        <th> Contact</th>
                        <th> Email</th>
                        <th>Address</th>
                        <th class="text-end">Action</th>
                      </tr>
                    </thead>
                        <tbody>
                            @foreach($exchange as $key => $item)
                              <tr>
                                <td> {{ $key+1}} </td>
                                <td> {{ $item->name ?? 'NULL' }}</td>
                                <td> {{ $item->phone ?? 'NULL' }}</td>
                                <td>{{ $item->email ?? 'NULL' }} </td>
                                <td> {{ $item->address ?? 'NULL' }} </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('service-before-sell.exchange.view',$item->id) }}" class="btn btn-info" title="view"
                                           style="border-radius: 5px"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('service-before-sell.exchange.distroy',$item->id) }}" class="btn btn-danger" title="Delete"
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
