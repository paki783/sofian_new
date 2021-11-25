@extends('backend.include.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Courses</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="clearfix"></div>
                <div class="text-right">
                    <a href="{{ url('admin/courses/add') }}" class="btn btn-primary">Add Courses</a>
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
                        <th>Title</th>
                        <th>Desc</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($data))
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $d->title }}</td>
                                <td>{!! $d->description !!}</td>
                                <td>{{ $d->price }}</td>
                                <td>{{ $d->getCategory->category_name }}</td>
                                <td>
                                    <div class="button-group text-right">
                                        <a href="{{ url('admin/courses/edit') }}?id={{$d->id }}" class="btn btn-warning">
                                            Edit
                                        </a>
                                        <a href="{{ url('admin/courses/delete') }}?id={{$d->id }}" class="btn btn-danger">
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