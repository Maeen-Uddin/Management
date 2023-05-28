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
                            <a class="btn btn-sm btn-dark" href="{{ url('/all_employee') }}"><i class="fas fa-th"></i> All
                                Employee</a>
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
                                    <td>Customer Name</td>
                                    <td>:</td>
                                    <td>{{ $single->name }}</td>
                                </tr>
                                <tr>
                                    <td>Customer Email</td>
                                    <td>:</td>
                                    <td>{{ $single->email }}</td>
                                </tr>
                                <tr>
                                    <td>Customer Phone</td>
                                    <td>:</td>
                                    <td>{{ $single->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Account Holder</td>
                                    <td>:</td>
                                    <td>{{ $single->account_holder }}</td>
                                </tr>
                                <tr>
                                    <td>Account Number</td>
                                    <td>:</td>
                                    <td>{{ $single->account_number }}</td>
                                </tr>
                                <tr>
                                    <td>Bank Name</td>
                                    <td>:</td>
                                    <td>{{ $single->bank_name }}</td>
                                </tr>
                                <tr>
                                    <td>Branch Name</td>
                                    <td>:</td>
                                    <td>{{ $single->branch_name }}</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>:</td>
                                    <td>{{ $single->city }}</td>
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
