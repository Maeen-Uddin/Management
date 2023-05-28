@extends('layouts.home')
@section('content')
    <div class="content-page">
        <div class="content">

            @if (session()->has('$message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"aria-hidden="true">x</button>
                    {{ session()->get('$message') }}
                </div>
            @endif

            <div class="row">
                <div class="Col-12">
                    <div class="col-md-2">
                        <h4 class="pull-left page-title">Welcome</h4>
                    </div>
                    <div class="col-md-8"></div>
                    <div class="col-md-2"></div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Employees</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/update_employee/' . $single->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputName">Name </label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name"
                                        value="{{ $single->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                        value="{{ $single->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhone">Phone </label>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter phone"
                                        value="{{ $single->phone }}" requied>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAddress">Address </label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Address"
                                        value="{{ $single->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNid">nid_no </label>
                                    <input type="number" class="form-control" name="nid_no" placeholder="Enter Nid No"
                                        value="{{ $single->nid_no }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSalary">salary </label>
                                    <input type="number" class="form-control" name="salary" placeholder="Enter Salary"
                                        value="{{ $single->salary }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPhoto">Photo </label>
                                    <input type="file" class="form-control" name="photo" placeholder="Enter Photo"
                                        value="{{ $single->photo }}">
                                    <img class="mt-3" src="{{ asset('backend/uploads/' . $single->photo) }}"
                                        style="heighth:50px; width:60px;">
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
