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
                    <li class="breadcrumb-item active"><a href="#">Add Category</a></li>
                </ol>
                <div class="clearfix"></div>
            </div><!-- /.col -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <form action="{{ url('admin/category/save') }}" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Categories</h3>
            </div>
            <div class="card-body">
                @include('backend.include.message')
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="category_name" />
                </div>
                <div class="form-group">
                    <label>Sub Category Name</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">Parent</option>
                        @if(!empty($cats))
                            @foreach($cats as $c)
                                <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" name="type" value="{{ $type }}" /> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="submit" class="btn btn-primary" value="Save Category" />
            </div>
        </div>
    </form>
</div>
@include('backend.category.catjs')
@endsection