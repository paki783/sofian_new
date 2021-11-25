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
                        <h2>Kontakt
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- Map & address us Section Section Starts Here -->
    <div class="map-address-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title">Nehmen Sie Kontakt mit uns auf</h2>
            </div>
            <div class="section-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="contact-wrapper">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{url('public/assets/images/icon/01.png')}}" alt="">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Address</h6>
                                    <p>Kebap Haus Fantasia, Schwarzwaldstraße 8, 79379 Müllheim, Deutschland</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{url('public/assets/images/icon/03.png')}}" alt="">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Send email </h6>
                                    <a href="mailto:info@gmail.com">adminedukon@gmil.com</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="map-area">
                            <div class="maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d85740.96036494587!2d7.554963319513322!3d47.812368398524875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d47.812342199999996!2d7.6249432!5e0!3m2!1sde!2s!4v1637043816038!5m2!1sde!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map & address us Section Section Ends Here -->

    <!-- Contact us Section Section Starts Here -->
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Get in touch with Contact us</span>
                <h2 class="title">Fill The Form Below So We Can Get To Know You And Your Needs Better.</h2>
            </div>
            <div class="section-wrapper">
                <form class="contact-form" action="contact.php" id="contact-form" method="POST">
                    <div class="form-group">

                        <select id="salutation" name="">
                            <option value="salutation" disabled selected>salutation</option>
                            <option value="1">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Mrs</span>
                                </span>
                            </option>
                            <option value="2">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Mr</span>
                                </span>
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Vorname" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Nachname*" id="surname" name="surname" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Telefon" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="E-Mail" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Subject" id="subject" name="subject" required>
                    </div>

                    <div class="form-group w-100">
                        <textarea name="message" rows="8" id="message" placeholder="Nachricht*" required></textarea>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;
                            * I agree that my details from the contact form will be collected and processed to answer my request.
                            <br><br>The data will be deleted after your request has been processed.
                            Note: You can revoke your consent at any time for the future by sending an email to info @ the-mathelist.de.
                            <br>
                            <br>
                            You can find detailed information on handling user data in our data protection declaration .
                            <br>
                            * Pflichtfelder
                            <br>
                        </label>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="lab-btn"><span>Absenden</span></button>
                    </div>

                </form>
                <p class="form-message"></p>
            </div>
        </div>

    </div>
    <!-- Contact us Section Section Ends Here -->
    @include('frontend.footer')