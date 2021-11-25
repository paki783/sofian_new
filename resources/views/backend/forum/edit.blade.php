@extends('backend.include.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Forums</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Forum</a></li>
                    <li class="breadcrumb-item active"><a href="#">Forum Course</a></li>
                </ol>
                <div class="clearfix"></div>
            </div><!-- /.col -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <form action="{{ url('admin/courses/update') }}" enctype="multipart/form-data" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Fourm</h3>
            </div>
            <div class="card-body">
                @include('backend.include.message')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" disabled value="{{ $data->title }}" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <div class="well">
                        {!! $data->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(!empty($data->getComments))
    <h1>Comments</h1>
    @foreach($data->getComments as $comments)
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    {{ $comments->getUser->email }}
                    <br />
                    <small>{{ $comments->created_at }}</small>
                </div>
                <div class="card-body">
                    {!! $comments->comment !!}
                </div>
                <div class="card-footer">
                    <a href="{{ url('admin/forum/deleteComment') }}?id={{ $comments->id }}" class="btn btn-danger">Delete Comment</a>
                </div>
            </div>
        </div>
    @endforeach
@endif


<script>
    $(function(){
        $("#summernote").summernote({
            height : 100,
        })
    })
</script>

@endsection