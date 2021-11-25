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
                        <h2>{{ $data->title }}
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
                            <div class="qa-q-view-content qa-post-content">
                                {!! $data->description !!}
                            </div>
                            @if(!empty($data->getComments))
                                @foreach($data->getComments as $comments)
                                    @include("frontend.forum.comments", ["data" => $comments])
                                @endforeach
                            @endif

                            <div class="container">
                                <h4>Your comment on this question:</h4>
                                <form action="{{ url('forum/addcomment') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="comments" id="summernote" class="form-control"></textarea>
                                    </div>
                                    <input type="hidden" name="forum_id" value="{{ $data->id }}" />
                                    <input type="submit" value="Add Comment" />
                                </form>
                            </div>
                            <script>
                                jQuery("document").ready(function() {
                                    jQuery('#summernote').summernote({
                                        height:300,
                                    });
                                });
                            </script>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.footer')