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
                            <h3 class="card-title">Add Employees</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ url('/insert_employee') }} method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name </label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone </label>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address </label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">nid_no </label>
                                    <input type="number" class="form-control" name="nid_no" placeholder="Enter Nid No">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">salary </label>
                                    <input type="number" class="form-control" name="salary"
                                        placeholder="Enter Salary">
                                </div>
                                <div class="form-group">
                                    <img id="image" src="">
                                    <label for="exampleInputEmail1">Photo </label>
                                    <input type="file" class="form-control" name="photo" placeholder="Enter Photo">
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
