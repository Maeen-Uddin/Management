@extends('layouts.home')
@section('content')
    {{-- <div class="content-page"> --}}
    {{-- <div class="container"> --}}


    <div class="row">
        <div class="col-12">
            <div class="card pt-3">
                <div class="card-header bg-primary ">
                    <div>
                        <h4 class="text-white">POS(Point Of Sale)</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {{-- <div class="portfolioFilter">
                        @foreach ($category as $cat)
                            <a href="#" data-filter="*" class="current">{{ $cat->products->name }}</a>
                        @endforeach
                    </div> --}}
                </div>
            </div>
            <br>

            <div class="row ">
                <div class="col-lg-5">
                    <div class="card">
                        <h4 class="text-dark">Customer
                            <a href="#" class="btn btn-sm btn-primary waves-effect waves-light float-right"
                                data-toggle="modal" data-target="#con-close-modal">Add New</a>
                        </h4>

                        {{-- <select class="form-control">
                            <option disabled="" selected="">Select Customer</option>
                            @foreach ($customer as $cus)
                                <option>{{ $cus->name }}</option>
                            @endforeach
                        </select> --}}
                    </div>

                    <div class="price_card tex-center">
                        <ul class="price-features"style="text-align: center;">
                            <table class="table table-bordered table-striped table-hover"
                                style="width:100%; margin-left:-5%;">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Quantity</th>
                                        <th class="text-white">Unite Price</th>
                                        <th class="text-white">Sub Total</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $cartproduct = Cart::Content();
                                @endphp
                                <tbody>
                                    @foreach ($cartproduct as $prods)
                                        <tr>
                                            <th>{{ $prods->name }}</th>
                                            <th>
                                                <form action="{{ url('/cart-update/' . $prods->id) }}" method="POST">
                                                    @csrf
                                                    <input type="number" name="qty" min="1"
                                                        value="{{ $prods->qty }}" style="width:40px;">
                                                    <button type="submit" class="btn btn-sm btn-success"
                                                        style="margin-top:-2px;"><i class="fas fa-check"
                                                            style="width:20px;"></i>
                                                    </button>
                                                </form>
                                            </th>
                                            <th>{{ $prods->price }}</th>
                                            <th>{{ $prods->price * $prods->qty }}</th>
                                            <th><i class="btn btn-danger fas fa-trash-alt"></i></th>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </ul>
                        <div class="pricing-footer bg-primary" style="text-align: center;">
                            <p class="text-white pt-2">Quantity:00.00</p>
                            <p class="text-white">Quantity:00.00</p>
                            <hr>
                            <p>
                            <h1 class="text-white pb-3">Quantity:00.00</h1>
                            </p>

                        </div>
                        <button class="btn btn-success">Create
                            Invoice</button>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                            </div>
                        @endif

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Product Code</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($product as $row)
                                    <tr>
                                        <form action="{{ url('add_cart', $row->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $row->id }}">
                                            <input type="hidden" name="product_name" value="{{ $row->product_name }}">
                                            <input type="hidden" name="cat_name" value="{{ $row->category->cat_name }}">
                                            <input type="hidden" name="product_code" value="{{ $row->product_code }}">
                                            <input type="hidden" name="qty" value="1">
                                            <input type="hidden" name="price" value="{{ $row->price }}">


                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>
                                                {{-- <a href="" style="font-size:20px;"><i
                                                        class="btn btn-primary fa-solid fa-plus "style="width:20%;"></i></a> --}}
                                                <img style="height:70px; width:70px;"
                                                    src="{{ url('backend/uploads/' . $row->product_image) }}">
                                            </td>
                                            <td>{{ $row->product_name }}</td>
                                            <td>{{ $row->category->cat_name }}</td>
                                            <td>{{ $row->product_code }}</td>
                                            <td><button type="submit" class="btn btn-info btn-sm"><i
                                                        class="fas fa-plus-square"></i></button></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- </div> --}}
    {{-- modal start --}}
    <form class="" action={{ url('insert_customer') }} method="POST">
        @csrf
        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content bg-primary">
                    <div class="modal-header">
                        <h5 class="modal-title text-white">Add A New Customer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        </div>
                    @endif
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-4" class="control-label text-white">Name</label>
                                <input type="text" class="form-control" id="field-4" name="name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-4" class="control-label text-white">Email</label>
                                <input type="text" class="form-control" id="field-4" name="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-4" class="control-label text-white">Phone</label>
                                <input type="text" class="form-control" id="field-4" name="phone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-4" class="control-label text-white">Address</label>
                                <input type="text" class="form-control" id="field-4" name="address">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-5" class="control-label text-white">Shop Name</label>
                                <input type="text" class="form-control" id="field-5" name="shop_name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label text-white">Account Number</label>
                                <input type="text" class="form-control" id="field-6" name="account_number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label text-white">Account Holder</label>
                                <input type="text" class="form-control" id="field-6" name="account_holder">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label text-white">Bank Name</label>
                                <input type="text" class="form-control" id="field-6" name="bank_name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label text-white">Branch Name</label>
                                <input type="text" class="form-control" id="field-6" name="branch_name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <img id="image" src="#" />
                                <label class="text-white" for="exampleInputPassword">Photo</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-6" class="control-label text-white">Photo</label>
                                <input type="file" class="form-control" accept="image/*" id="field-6" required
                                    onchange="readURL(this);">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" style="margin:5%">
                                <label for="field-7" class="control-label text-white">Personal Info</label>
                                <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself"
                                    style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a type="button" class="btn btn-info waves-effect text-white" data-dismiss="modal">Close</a>
                        <a type="button" class="btn btn-info waves-effect waves-light text-white">Submit</a>
                    </div>
                </div>

            </div>
        </div>
    </form>

    {{-- <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FIleReader();
                reader.onload = function(e) {
                    $('#image')
                        .altr('src', e.target.result)
                        .width(80)
                        .hegith(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> --}}
@endsection
