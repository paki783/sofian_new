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
                        <h2>Anmeldung</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- Login Section Section Starts Here -->
    <div class="login-section padding-tb section-bg">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Anmeldung</h3>
                <form class="account-form" action="{{ url('user/loginAuth') }}" method="post">
                    @include('frontend.message')
                    <div class="form-group">
                        <input type="text" placeholder="User Name" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember"> Auf diesem Computer angemeldet bleiben
                                </label>
                            </div>
                        </div>
                        <br>
                        <a href="{{url('lost-account-details')}}"> Zugang sdaten oder Kennwort wiederherstellen?</a>&nbsp;&nbsp;&nbsp;
                        <br>
                        <a href="{{url('signup')}}"> Anmelden
                        </a>
                    </div>
                    <div class="form-group text-center">
                        @csrf
                        <button class="d-block lab-btn"><span>Anmelden</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->
    @include('frontend.footer')