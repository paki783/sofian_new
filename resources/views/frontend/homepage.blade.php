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



    <!-- banner section start here -->
    <section class="banner-section style-1">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-10">
                        <div class="banner-content">

                            <h2 class="title"><span class="d-lg-block">Mathe-Prüfung?</span>

                            </h2>
                            <h3>Online lernen - und zwar genau das, was drankommt.</h3>

                            <div class="banner-catagory d-flex flex-wrap">

                                <ul class="lab-ul d-flex flex-wrap">
                                    <li style="width: 31%; text-align: center; padding:15px; border-radius: 5px; font-size: 11px; margin: 5px; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;"><a href=" #"><img src="{{url('public/assets/images/directions.png')}}" alt=""><br><br>Aufgaben<br>
                                            mit Lösungswegen</a></li>
                                    <li style="width: 31%; text-align: center; padding:15px; border-radius: 5px; font-size: 11px; margin: 5px; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;"><a href="#"> <img src="{{url('public/assets/images/play-button.png')}}" alt=""><br> <br>Erklärvideos
                                            <br>mit Beispielen</a></li>
                                    <li style="width: 31%;text-align: center; padding:15px;border-radius: 5px; font-size: 11px; margin: 5px; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;"><a href="#"> <img src="{{url('public/assets/images/loading.png')}}" alt=""><br> <br>Analyse<br>
                                            des Lernfortschritts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6">
                        <div class="banner-thumb">
                            <img src="{{ url('public/assets/images/banner/01.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- banner section ending here -->

    <!-- About Us Section Start Here -->
    <div class="about-section style-3 padding-tb section-bg">
        <div class="container">
            <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-center">
                <div class="col">
                    <div class="about-left">
                        <div class="about-thumb">
                            <img src="{{url('public/assets/images/about/01.jpg')}}" alt="about">
                        </div>
                        <div class="abs-thumb">
                            <img src="{{url('public/assets/images/about/02.jpg')}}" alt="about">
                        </div>
                        <div class="about-left-content">
                            <h3>30+</h3>
                            <p>Years Of Experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-right">
                        <div class="section-header">

                            <h2 class="title">Schluss mit stundenlangem Googeln, endloser Videosuche
                                und mühsamem Bücherwälzen!</h2>
                            <p><strong>Wir machen es möglich:
                                    Konzentrier dich nur auf das, was in DEINER Mathe-Prüfung wirklich zäh</strong></p>
                            <p>Wie machen wir das? Unsere Lernsoftware ist mit den Lehrplänen aller Schulen in Deutschland, Österreich und der Schweiz synchronisiert. Die Themen, aus denen deine Prüfung besteht, kennen wir schon jetzt. Deshalb können wir dir genau die passenden Themen und Lerninhalte zur Verfügung stellen. So lernst du effizient wie nie!</p>
                            <p><strong>Mathelist - Von unseren Mathematikern entwickelt, um dir das Leben leichter zu machen.</strong></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section Ending Here -->
    <section class="feature-section style-2 padding-tb">
        <div class="container">

            <div class="section-wrapper pb-0">
                <div class="row g-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-credit-card"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Übungsaufgaben
                                    </h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-credit-card"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Original Prüfungsaufgaben oder Übungsaufgaben auf Prüfungsniveau
                                    </h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-light-bulb"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Erklärvideos</h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-graduate"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Lösungswege</h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-paper-plane"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Lernfortschritts­anzeige
                                    </h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-site-map"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Spickzettel</h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-users-alt-3"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Insider-Infos und Tipps
                                    </h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-chart-line"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Expertenforum</h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-item">
                            <div class="feature-inner">
                                <div class="feature-icon">
                                    <i class="icofont-dollar"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Glossar</h5>
                                    <p>Proactive enhance rospect resource for next generation convergence dramatical myocardinate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="achievement-section style-3 padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="counter-part">
                    <span style="text-align: center;">
                        <H2>Mathelist kostet was. Warum?</H2>
                        <p> <strong>Ganz einfach: Weil hier viele Leute jeden Tag richtig Gas geben und für dich arbeiten.
                            </strong> </p>
                        <p>Nach Herzenslust reinschauen, ausprobieren und dir ein Profil anlegen bleibt natürlich kostenlos.<br>Die geballte Power mit allem Drum und Dran gibt's aber nur gegen eine kleine Spende an das fleißige Team. Deal?
                            <br>
                            <br>
                        </p>
                    </span>
                    <br>
                    <div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col price-col" style="padding: 32px; box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 1px 0px -2px;border-radius: 10px;">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-icon">
                                        <i class="icofont-medal"></i>
                                    </div>
                                    <div class="count-content">
                                        <p>Testwoche <br>(Code: 1WGRTS)
                                        </p>
                                        <h2><span></span><span>0 €</span></h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col price-col" style="padding: 32px; box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px,  rgb(60 64 67 / 15%) 0px 1px 0px -2px; border-radius: 10px;">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-icon">
                                        <i class="icofont-medal"></i>
                                    </div>
                                    <div class="count-content">
                                        <p>Auf geht's!<br>
                                            1 Monat
                                        </p>
                                        <h2><span></span><span>5,99 €</span></h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col price-col" style="padding: 32px;box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px,      rgb(60 64 67 / 15%) 0px 1px 0px -2px;border-radius: 10px;">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-icon">
                                        <i class="icofont-medal"></i>
                                    </div>
                                    <div class="count-content">
                                        <p>Jetzt aber los!<br>3 Monate
                                        </p>
                                        <h2><span></span><span>14,99 €</span></h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col price-col" style="padding: 32px; box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px,     rgb(60 64 67 / 15%) 0px 1px 0px -2px; border-radius: 10px;">
                            <div class="count-item">
                                <div class="count-inner">
                                    <div class="count-icon">
                                        <i class="icofont-medal"></i>
                                    </div>
                                    <div class="count-content">
                                        <p>Optimal
                                            <br>1 Jahr
                                        </p>
                                        <h2><span></span><span>49,99 €</span></h2>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <br>
                    <div style="text-align: center;">
                        <button type="submit" class="lab-btn"><span><a href="{{url('/')}}" style="color: white;">Schule auswählen und kaufen</span></a></button>
                        <br>
                        <br>
                        <h5>Kein Abo. Keine Kündigung notwendig. Keine Tricks. 100% Transparenz.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="workshop-section padding-tb">
        <div class="container">
            <div class="row row-cols-xl-2 row-cols-1">
                <div class="col">
                    <div class="section-header">
                        <h2 class="title fw-normal text-white">Deine Prüfungsprofis: Das Mathelist-Team.
                            <span class="fw-bold">Wir kümmern uns jeden Tag darum, dass du das beste Training und die neuesten Insider-Infos zu deiner Prüfung bekommst.</span>
                        </h2>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="padding-tb achievement-section">
        <div class="container">
            <div class="section-header text-center">

            </div>
            <div class="section-wrapper">
                <div class="clients-slider2 overflow-hidden">
                    <h3 style="text-align: center; width:70%; margin:0 auto;"> Individuell zugeschnittene Lerninhalte – für die
                        Abschlussprüfung und die letzten beiden Schuljahre</h3>
                    <p style="text-align: center; width:70%; margin:0 auto;"><br>
                        Wähle einfach hier dein Lernumfeld aus und wir filtern für dich die Themen heraus,
                        die in deinen Klausuren und Prüfungen gefragt sind. Denn wir wissen genau,
                        welche Themen für dich prüfungsrelevant sind.
                        <br>
                        100% synchron mit dem Lehrplan.
                    </p>
                    <div style="width: 50%; margin:0 auto;"><br>
                        <div class="row">
                            <div class="col-md-12">
                                <select class="form-select" id="catOne" aria-label="Default select example">
                                    @if(!empty($category))
                                        @foreach($category as $c)
                                            <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" id="subcat_two">
                                <select class="form-select" aria-label="Default select example">
                                    @if(!empty($sub_cat))
                                        @foreach($sub_cat as $c)
                                            <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6" id="subcat_three" style="display:none">
                                <select class="form-select"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    <!-- student feedbak section start here -->
    <div class="student-feedbak-section padding-tb shape-img">
        <div class="container">

            <div class="section-wrapper">
                <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="sf-left">
                            <div class="sfl-thumb">
                                <img src="{{url('public/assets/images/feedback/01.jpg')}}" alt="student feedback">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <p><strong>Kein Abo. Keine Kündigung notwendig. Keine Tricks. 100% Transparenz.</strong>
                            </p>
                            <h3><strong>Teste zuerst die kostenlose Version von Mathelist.
                                </strong>
                            </h3>
                            <P>Wenn du willst, kannst du dir dann auch ein kostenloses Profil anlegen, um weitere Features - wie die Fortschrittsanzeige - kennenzulernen. Wenn dir gefällt, was du siehst, kannst du dich für den Kauf der Vollversion entscheiden.</P>
                            <button type="submit" class="lab-btn"><span>Leistungsübersicht und Preise</span></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student feedbak section ending here -->




    <!-- Newsletters Section Start Here -->
    <div class="newsletters-section padding-tb">
        <div class="container">
            <div class="newsletter-area">
                <div class="news-mass">
                    <i class="icofont-email"></i>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="section-header">
                            <h2 class="title">Subscribe to Newsletter</h2>
                            <p>Subscribe free and get the notification and latest offers of our courses.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="section-wrapper">
                            <h5>Enter Your Name & Email Press to Submit Button</h5>
                            <form class="newsletter-form">
                                <input type="text" placeholder="Enter your name" required>
                                <input type="email" placeholder="Enter your email address" required>
                                <button type="submit" class="lab-btn"><span>Get Started Now</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletters Section Ending Here -->
</div>
<script>
    $(document).ready(function(){
        $("#catOne").change(function(){
            var cat_id = $(this).val();
            jQuery.ajax({
                url : "{{ url('ajax/getCategory') }}",
                method : "POST",
                data : {
                    _token : "{{ csrf_token() }}",
                    cat_id : cat_id
                },
                success : function(res){
                    //$('#subcat_two select').append($('<option>').val(optionValue).text(optionText))
                    $('#subcat_two select').html("");
                    for(var i = 0; i < res.data.length; i++){
                        $('#subcat_two select').append($('<option>').val(res.data[i].id).text(res.data[i].category_name))
                    }
                    if(res.sub_cat.length > 0){
                        $('#subcat_two').removeClass('col-md-12');
                        $('#subcat_two').addClass('col-md-6');
                        $('#subcat_three').show();
                        $('#subcat_three select').html("");

                        for(var i = 0; i < res.sub_cat.length; i++){
                            $('#subcat_three select').append($('<option>').val(res.sub_cat[i].id).text(res.sub_cat[i].category_name))
                        }
                    }else{
                        $('#subcat_two').removeClass('col-md-6');
                        $('#subcat_two').addClass('col-md-12');
                        $('#subcat_three').hide();
                        $('#subcat_three select').html("");
                    }
                    console.log(res);
                }
            });
        });
        $('#subcat_two select').change(function(){
            var cat_id = $(this).val();
            jQuery.ajax({
                url : "{{ url('ajax/getCategory') }}",
                method : "POST",
                data : {
                    _token : "{{ csrf_token() }}",
                    cat_id : cat_id
                },
                success : function(res){
                    if(res.sub_cat.length > 0){
                        $('#subcat_two').removeClass('col-md-12');
                        $('#subcat_two').addClass('col-md-6');
                        $('#subcat_three').show();
                        $('#subcat_three select').html("");

                        for(var i = 0; i < res.sub_cat.length; i++){
                            $('#subcat_three select').append($('<option>').val(res.sub_cat[i].id).text(res.sub_cat[i].category_name))
                        }
                    }else{

                    }
                }
            });
        });
    });
</script>
@include('frontend.footer')