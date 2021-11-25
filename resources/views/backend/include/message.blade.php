
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled" style="margin:0px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('message'))     
    <div class="alert alert-{!! session('class') !!}"><em> {!! session('message') !!}</em>
    </div>
@endif 