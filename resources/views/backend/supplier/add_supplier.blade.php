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
            @if (session()->has('$message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
                    {{ session()->get('$message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Supplier</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ url('/insert_supplier') }} method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputName">Name </label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhone">Phone </label>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAddress">Address </label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputShopName">Shop Name </label>
                                    <input type="text" class="form-control" name="shop_name"
                                        placeholder="Enter Shop Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAccountHolder">Account Holder </label>
                                    <input type="text" class="form-control" name="account_holder"
                                        placeholder="Enter Account Holder">
                                </div>
                                <div class="form-group">
                                    <label for="exampAccountNumber">Account Number </label>
                                    <input type="number" class="form-control" name="account_number"
                                        placeholder="Enter Account Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampBankName">Bank Name </label>
                                    <input type="text" class="form-control" name="bank_name"
                                        placeholder="Enter Bank Name">
                                </div>
                                <div class="form-group">
                                    <label for="BranchName">Branch Name </label>
                                    <input type="text" class="form-control" name="branch_name"
                                        placeholder="Enter Branch Name">
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
