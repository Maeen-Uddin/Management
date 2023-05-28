@extends('layouts.home')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Datatable</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Moltran</a></li>
                        <li class="breadcrumb-item"><a href="#">table</a></li>
                        <li class="breadcrumb-item active">Datatable</li>
                    </ol>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Customers</h3>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Shop Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($customer as $customers)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customers->name }}</td>
                                    <td>{{ Str::limit($customers->email, 20) }}</td>
                                    <td>{{ $customers->phone }}</td>
                                    <td>{{ Str::limit($customers->address, 20) }}</td>
                                    <td>{{ $customers->shop_name }}</td>
                                    <td><img style="height:50px;width:50px;"
                                            src="{{ asset('backend/uploads/' . $customers->photo) }}"
                                            alt="{{ $customers->photo }}">
                                    </td>

                                    <td width="25%">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" style="padding-left:-30%;">
                                                <a
                                                    href="{{ url('/view_customer/' . $customers->id) }}"class="btn btn-sm btn-danger "id="view">View</a>

                                                <a
                                                    href="{{ url('/edit_customer/' . $customers->id) }}"class="btn btn-sm btn-info"id="edit">
                                                    Edit</a>

                                                <a href="{{ url('/delete_customer/' . $customers->id) }}"
                                                    {{-- data-toggle="modal" data-target="#deleteModal" --}} class="btn btn-sm btn-danger"
                                                    id="delete">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

    <!--delete modal code start -->
    <!-- sample modal content -->
    {{-- <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form method="get" action="{{ url('delete_customer') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header modal_header">
                        <h5 class="modal-title" id="myModalLabel"><i class="fab fa-gg-circle"></i> Confirm Message</h5>
                    </div>
                    <div class="modal-body modal_body">
                        Are you want to sure delete Data?
                        <input type="hidden" name="modal_id" id="delete" value="" />
                    </div>
                    <div class="modal-footer modal_footer">
                        <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light">Yes</button>
                        <button type="button" class="btn btn-sm btn-success waves-effect" data-dismiss="modal">No</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
@endsection
