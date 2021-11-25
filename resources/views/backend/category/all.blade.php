@extends('backend.include.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="clearfix"></div>
                <div class="text-right">
                    <a href="{{ url('admin/category/add') }}/{{ $type }}" class="btn btn-primary">Add Category</a>
                </div>
            </div><!-- /.col -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Categories</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($data))
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $d->category_name }}</td>
                                <td>
                                    <div class="button-group text-right">
                                        <a href="{{ url('admin/category/edit') }}?id={{$d->id }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        <a href="{{ url('admin/category/delete') }}?id={{$d->id }}" class="btn btn-danger">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $data->links() }}
        </div>
    </div>
</div>

@endsection