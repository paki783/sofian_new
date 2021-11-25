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
                        <h2>Kennwortwiederherstellung

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
                <h4 class="title">Kennwortwiederherstellung

                </h4>
                <p class="title">Bitte entweder den Benutzernamen ODER die E-Mail Adresse eingeben und auf die 'Absenden'-Schaltfläche klicken. Danach wird ein Bestätigungscode per Mail zugestellt. Bitte den Maileingang überpüfen und die beschriebenen Anweisungen befolgen.


                </p>
                <form class="account-form">
                    <div class="form-group">
                        <input type="text" placeholder="Benutzername">
                    </div>
                    <p>oder</p>
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