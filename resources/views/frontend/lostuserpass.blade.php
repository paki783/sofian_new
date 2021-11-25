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
                        <h2>Zugangsdaten wiederherstellen
                        </h2>

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
                <h4 class="title">Zugangsdaten wiederherstellen
                </h4>
                <p class="title">Bitte die eigene E-Mail Adresse unten eingeben und mit der 'Absenden'-Schaltfläche bestätigen. Deine Zugangsdaten werden dann per E-Mail zugestellt.
                </p>
                <form class="account-form">
                    <div class="form-group">
                        <input type="email" placeholder="E-Mail-Adresse">
                    </div>

                    <div class="form-group text-center">
                        <button class="d-block lab-btn"><span>Absenden</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->

    @include('frontend.footer')