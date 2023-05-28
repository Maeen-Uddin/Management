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
                    <h3 class="card-title">Pay Salary / <span class="pull-right text-danger">{{ date('F Y') }} </span>
                    </h3>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Salary</th>
                                <th>Month</th>
                                {{-- <th>Year</th> --}}
                                <th>Advanced Salary</th>
                                <th>Manage</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($employee as $salary)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $salary->name }}</td>
                                    <td><img src="{{ 'backend/uploads/' . $salary->photo }}"
                                            style="heighth:50px;
                                            width:40px;">
                                    </td>
                                    <td>{{ $salary->salary }}</td>
                                    <td><sapn class="badge badge-success">{{ date('F', strtotime('-1 months')) }}</sapn></td>
                                    {{-- <td>{{ $salary->year }}</td> --}}
                                    <td style="width:50px;">{{ $salary->advanced_salary }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" style="padding-left:-30%;">
                                                <a href="{{ url('#' . $salary->id) }}" class="btn btn-sm btn-primary">Pay
                                                    Now</a>
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
            <form method="get" action="{{ url('delete_employee') }}">
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
