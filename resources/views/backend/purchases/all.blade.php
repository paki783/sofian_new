@extends('backend.include.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">All Purchases</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="clearfix"></div>
                <div class="text-right">
                    
                </div>
            </div><!-- /.col -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Purchases</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Title</th>
                        <th>Course Purchased By</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($data))
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $d->getCourse->title }}</td>
                                <td>{{ $d->getUser->email }}</td>
                                <td>{{ $d->getCourse->getCategory->category_name  }}</td>
                                <td>{{ $d->getCourse->price }}</td>
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