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
                            <h3 class="card-title text-white"> Edit Product</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ url('/update_product/' . $product->id) }} method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name </label>
                                    <input type="text" class="form-control"
                                        name="product_name"value="{{ $product->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Code </label>
                                    <input type="text" class="form-control"
                                        name="product_code"value="{{ $product->product_code }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category </label>

                                    @php
                                        $cat = DB::table('categories')->get();
                                    @endphp
                                    <select name="category_id" class="form-control">
                                        @foreach ($cat as $row)
                                            <option value="{{ $row->id }}" <? $product->category_id==$row->id
                                                    {echo="selected";}?>>{{ $row->cat_name }}</option>
                                        @endforeach
                                    </select>

                                </div>


                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Supplier </label>
                                    @php
                                        $cat = DB::table('suppliers')->get();
                                    @endphp
                                    <select name="category_id" class="form-control">
                                        @foreach ($supplier as $row)
                                            <option value="{{ $row->id }}">{{ $row->cat_name }}</option>
                                        @endforeach

                                    </select>
                                </div> --}}

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Garage </label>
                                    <input type="text" class="form-control"
                                        name="product_garage"value="{{ $product->product_garage }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Buying Date </label>
                                    <input type="text" class="form-control"
                                        name="buy_date"value="{{ $product->buy_date }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Expire Date </label>
                                    <input type="text" class="form-control"
                                        name="expire_date"value="{{ $product->expire_date }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Buying Price </label>
                                    <input type="text" class="form-control"
                                        name="buying_price"value="{{ $product->buying_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Selling Price</label>
                                    <input type="text" class="form-control"
                                        name="selling_price"value="{{ $product->selling_price }}">
                                </div>
                                <div class="form-group">
                                    <img id="image" src="#" />
                                    <label for="exampleInputEmail1">Product Image</label>
                                    <input type="file" class="form-control" name="product_image" accept="image/*" on
                                        change="readURL(this);">
                                </div>
                                <input type="hidden" name="old_photo" value="{{ $product->product_image }}">
                                <div class="form-group">
                                    <img src="{{ url('/backend/uploads/' . $product->product_image) }}"
                                        style="height:80px; width70px;">
                                </div>
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
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
