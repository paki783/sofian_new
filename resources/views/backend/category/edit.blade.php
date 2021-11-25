@extends('backend.include.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item active"><a href="#">Edit Category</a></li>
                </ol>
                <div class="clearfix"></div>
            </div><!-- /.col -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <form action="{{ url('admin/category/update') }}" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Categories</h3>
            </div>
            <div class="card-body">
                @include('backend.include.message')
                <div class="form-group">
                    <label>Save Category</label>
                    <input type="text" class="form-control" value="{{ $data->category_name }}" name="category_name" />
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" value="{{ $data->id }}" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="submit" class="btn btn-primary" value="Update Category" />
            </div>
        </div>
    </form>
</div>

@endsection