@extends('layouts.home')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="Col-12">
                    <div class="col-md-2">
                        <h4 class="pull-left page-title">Welcome</h4>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-2"></div>

                </div>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title text-white"> Add Product</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ url('/insert_product') }} method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name </label>
                                    <input type="text" class="form-control" name="product_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Code </label>
                                    <input type="text" class="form-control" name="product_code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category </label>
                                    @php
                                        $cat = DB::table('categories')->get();
                                    @endphp
                                    <select name="category_id" class="form-control">
                                        @foreach ($cat as $row)
                                            <option value="{{ $row->id }}">{{ $row->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Supplier </label>
                                    @php
                                        $sup = DB::table('suppliers')->get();
                                    @endphp
                                    <select name="name" class="form-control">
                                        @foreach ($sup as $row)
                                            <option value="{{ $sup->id }}">{{ $sup->cat_name }}</option>
                                        @endforeach

                                    </select>
                                </div> --}}

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Garage </label>
                                    <input type="text" class="form-control" name="product_garage">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Route </label>
                                    <input type="text" class="form-control" name="product_route">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Buying Date </label>
                                    <input type="text" class="form-control" name="buy_date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Expire Date </label>
                                    <input type="text" class="form-control" name="expire_date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Buying Price </label>
                                    <input type="text" class="form-control" name="buying_price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Selling Price</label>
                                    <input type="text" class="form-control" name="selling_price">
                                </div>
                                <div class="form-group">
                                    {{-- <img id="image" src="{{url('backend/uploads/'.$product->product_image)}}"> --}}
                                    <label for="exampleInputEmail1">Product Image</label>
                                    <input type="file" class="form-control" name="product_image">
                                </div>
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                            </form>
                        </div>
                        <!-- card-body -->
                    </div>
                    <!-- card -->
                </div>
            </div>
        </div>
    </div>
@endsection
