@include('frontend.head')

<body>
@include('frontend.header')

<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
<!-- scrollToTop ending here -->

<!-- Page Header section start here -->
<div class="pageheader-section">
    <div class="blog-section blog-single padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="content-paragraph">
                                <div class="row">
                                    @if(!empty($data))
                                        @foreach($data as $d)
                                            <div class="col-md-4">
                                                <div class="box-title">
                                                    <h4>{{ ucwords($d->title) }}</h4>
                                                </div>
                                                <div class="box-content">
                                                    {!! Str::words($d->description, 150, ' ...') !!}
                                                </div>
                                                <div class="box-link">
                                                    <a href="{{ URL::to('courses/details') }}/{{ $d->id }}">Read More</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.footer')