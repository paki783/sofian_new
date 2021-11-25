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
                        <h2>Zugangsdaten Und Kennwort Wiederherstellen


                        </h2>
                        <nav aria-label="breadcrumb">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-section padding-tb section-bg">
        <div class="container">
            <div class="account-wrapper">


                </h4>
                <p class="title">Bitte eine der folgenden Möglichkeiten auswählen:


                </p>
                <form class="account-form">
                    <div class="form-group">
                        <label for=""><a href="{{url('lostusername')}}">Ich habe meine Zugangsdaten vergessen<br> (zum Beispiel meinen Benutzernamen).</a></label>
                        <br>
                        <br>
                        <label for=""><a href="{{url('lostuserpass')}}">Ich habe mein Kennwort vergessen.</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->

    @include('frontend.footer')