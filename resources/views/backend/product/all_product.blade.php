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
                    <h3 class="card-title">All Category</h3>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product code</th>
                                <th>Selling Price</th>
                                <th>Garage </th>
                                <th>Route</th>
                                <th>Product Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($product as $products)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $products->product_name }}</td>
                                    <td>{{ $products->product_code }}</td>
                                    <td>{{ $products->selling_price }}</td>
                                    <td>{{ $products->product_garage }}</td>
                                    <td>{{ $products->product_route }}</td>
                                    <td><img style="height:60px; width=60px;"
                                            src="{{ url('backend/uploads/' . $products->product_image) }}"></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" style="padding-left:-30%;">
                                                <a href="{{ url('/edit_product/' . $products->id) }}"class="btn btn-sm btn-info"
                                                    id="edit">Edit
                                                </a>

                                                <a href="{{ url('/delete_product/' . $products->id) }}"
                                                    class="btn btn-sm btn-danger" id="delete">
                                                    delete
                                                </a>
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
