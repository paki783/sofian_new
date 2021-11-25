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
                    <li class="breadcrumb-item"><a href="#">Courses</a></li>
                    <li class="breadcrumb-item active"><a href="#">Add Courses</a></li>
                </ol>
                <div class="clearfix"></div>
            </div><!-- /.col -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <form action="{{ url('admin/courses/save') }}" enctype="multipart/form-data" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Courses</h3>
            </div>
            <div class="card-body">
                @include('backend.include.message')
                <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control" name="cat_id">
                        @if(!empty($categories))
                            @foreach($categories as $c)
                                <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="summernote" name="desc" class="form-control">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" />
                </div>
                <div class="form-group">
                    <h4>Courses Video URL</h4>
                    <input type="text" class="form-control" name="videoURL" />
                    <small>Please place the url seprated by url</small>
                </div>
                <div class="form-group">
                    <h4>Attachments</h4>
                    <input type="file" name="attachments[]" multiple />
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="submit" class="btn btn-primary" value="Save Course" />
            </div>
        </div>
    </form>
</div>

<script>
    $(function(){
        $("#summernote").summernote({
            height : 100,
        })
    })
</script>

@endsection