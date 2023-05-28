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
                            <h3 class="card-title text-white"> Advanced Salary Provide</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ url('/insert_advanced_salary') }} method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Employee </label>
                                    @php
                                        $emp = DB::table('employees')->get();
                                    @endphp
                                    <select name="emp_id" class="form-control">
                                        <option disabled=""class="form-control"></option>
                                        @foreach ($emp as $sal)
                                            <option value="{{ $sal->id }}">{{ $sal->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Salary </label>
                                    <input type="text" class="form-control" name="salary" placeholder="salary ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Month</label>
                                    <select name="month" class="form-control">
                                        {{-- <option disable="" selected=""></option> --}}
                                        <option value="january">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="july">july</option>
                                        <option value="August">August</option>
                                        <option value="Sepetember">Sepetembar</option>
                                        <option value="October">Octobor</option>
                                        <option value="November">Novembar</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Year </label>
                                    <input type="text" class="form-control" name="year" placeholder="Year ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Advanced Salary </label>
                                    <input type="number" class="form-control" name="advanced_salary"
                                        placeholder="Advanced Salary">
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
