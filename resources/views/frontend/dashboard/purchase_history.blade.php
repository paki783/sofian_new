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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Dashboard
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <div class="blog-section blog-single padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="list-group">
                                        @include("frontend.dashboard.sidebar", ['active' => $active])
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    @if(empty($data))
                                        <div class="alert alert-warning" role="alert">No Courses Purchased</div>
                                    @else
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Course Title</th>
                                                    <th>Course Purchased On</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $d)
                                                    <tr>
                                                        <td>{{ $d->getCourse->title }}</td>
                                                        <td>{{ $d->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

@include('frontend.footer')