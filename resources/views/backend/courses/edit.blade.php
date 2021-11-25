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
                    <li class="breadcrumb-item active"><a href="#">Edit Course</a></li>
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
                <h3 class="card-title">Edit Course</h3>
            </div>
            <div class="card-body">
                @include('backend.include.message')
                <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control" name="cat_id">
                        @if(!empty($categories))
                            @foreach($categories as $c)
                                <option value="{{ $c->id }}" @if($data->getCategory->category_id == $c->id) selected @endif>{{ $c->category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{ $data->title }}" class="form-control" name="title" />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="summernote" name="desc" class="form-control">
                        {!! $data->description !!}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" value="{{ $data->price }}" class="form-control" />
                </div>
                <div class="form-group">
                    <h4>Courses Video URL</h4>
                    <input type="text" class="form-control" value="{{ $videoURL }}" name="videoURL" />
                    <small>Please place the url seprated by url</small>
                </div>
                <div class="form-group">
                    <h4>Attachments</h4>
                    <input type="file" name="attachments[]" multiple />
                </div>
                @include('backend.include.media', ["data" => $data->getPictures])
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" value="{{ $data->id }}" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="submit" class="btn btn-primary" value="Update Course" />
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