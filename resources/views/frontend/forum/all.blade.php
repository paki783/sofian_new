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
                        <h2>Allgemeine Geschäftsbedingungen
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
                        <div class="text-right form-group">
                            <a href="{{ url('forum/add') }}" class="btn btn-default">Add Forum</a>
                        </div>
                        <div class="qa-main-heading">
                            <h1>
                                Neue Fragen und Antworten
                            </h1>
                        </div>
                        @if(!empty($data))
                            @foreach($data as $d)
                                @include("frontend.forum.forumlist", ["forum" => $d])
                            @endforeach
                        @endif
                    </article>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.footer')