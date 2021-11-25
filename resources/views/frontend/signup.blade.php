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
    <!-- preloader ending he`re -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->



    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Registrierung</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Lege dir jetzt innerhalb weniger Sekunden dein persönliches Lernprofil an.

                                    </a></li>
                            </ol>
                        </nav>
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
                <h3 class="title">Registrierung</h3>
                <form class="account-form" action="{{ url('user/registerUser') }}" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Benutzername" name="username">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="E-Mail-Adresse eingeben" name="email">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="E-Mail-Adresse wiederholen" name="emailagain">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Kennwort" name="pass">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="passagain" name="passagain">
                    </div>
                    <div class="form-group" style="display:none">
                        <input type="text" placeholder="Schule (optional)" name="password">
                    </div>
                    <div class="form-check" style="text-align: left;">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;&nbsp;
                            Ja, ich akzeptiere die <a href="#" style="color:#F1614D"> Allgemeinen Geschäftsbedingungen</a> und die <a href="#" style="color:#F1614D"> Datenschutzerklärung </a> dieser Seite
                        </label>
                    </div>
                    <br>
                    <div class="form-check" style="text-align: left;">
                        <input class=" form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;&nbsp;
                            Ich möchte ein Kundenkonto anlegen. Bitte speichern Sie meine Daten zu diesem Zweck. Ich kann das Einverständnis jederzeit widerrufen, z.B. per E-Mail.
                        </label>
                    </div>
                    <div class="form-group">
                        @csrf
                        <button type="submit" class="lab-btn"><span>Registrieren</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login">Login</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section Section Ends Here -->
    @include('frontend.footer')