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
                            <h3 class="card-title text-white"> Add Category</h3>
                        </div>
                        <div class="card-body">
                            <form action={{ url('/update_category/' . $category->id) }} method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category </label>
                                    <input type="text" class="form-control" name="cat_name"
                                        value="{{ $category->cat_name }}">
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
