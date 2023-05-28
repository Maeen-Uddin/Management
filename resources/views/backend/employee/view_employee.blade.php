@extends('layouts.home')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-header bg-secondary">
                    <div class="row">
                        <div class="col-md-8 card_header_title text-white">
                            <i class="fab fa-gg-circle"></i> View Employee Information
                        </div>
                        <div class="col-md-4 text-right card_header_btn">
                            <a class="btn btn-sm btn-dark" href="{{ url('/all_customer') }}"><i class="fas fa-th"></i> All
                                Customer</a>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-2"></div>
                        <div class="col-md-8 col-sm-8 col-8">
                            <table class="table table-bordered table-striped custom_view_table">
                                <tr>
                                    <td>Employee Name</td>
                                    <td>:</td>
                                    <td>{{ $single->name }}</td>
                                </tr>
                                <tr>
                                    <td>Employee Email</td>
                                    <td>:</td>
                                    <td>{{ $single->email }}</td>
                                </tr>
                                <tr>
                                    <td>Employee Phone</td>
                                    <td>:</td>
                                    <td>{{ $single->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Employee NID</td>
                                    <td>:</td>
                                    <td>{{ $single->nid_no }}</td>
                                </tr>
                                <tr>
                                    <td>Employee Salary</td>
                                    <td>:</td>
                                    <td>{{ $single->salary }}</td>
                                </tr>
                                <tr>
                                    <td>Employee Photo</td>
                                    <td>:</td>
                                    <td><img
                                            src="{{ asset('/backend/uploads/' . $single->photo) }}"style="height:50px; width:50px;">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2 col-sm-2 col-2"></div>
                    </div>
                </div>
                <div class="card-footer bg-secondary">
                    <div class="btn-group">
                        <button type="button" class="btn btn-purple waves-effect">Print</button>
                        <button type="button" class="btn btn-dark waves-effect">PDF</button>
                        <button type="button" class="btn btn-pink waves-effect">Excel</button>
                        <button type="button" class="btn btn-success waves-effect">CSV</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
