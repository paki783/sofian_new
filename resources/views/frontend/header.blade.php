  <!-- header section start here -->
  <header class="header-section">
      <div class="header-top">
          <div class="container">
              <div class="header-top-area">
                  <ul class="lab-ul left">
                      <li>
                          <i class="icofont-ui-call"></i><a href="tel:+4976317931500"> <span>+49 7631 7931 500</span></a>
                      </li>
                      <li>
                          <i class="icofont-location-pin"></i> Schillerstraße 16a 79379 Müllheim
                      </li>
                  </ul>
                  <ul class="lab-ul social-icons d-flex align-items-center">
                      <li>
                          <p>Find us on : </p>
                      </li>

                      <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>

                      <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>

                  </ul>
              </div>
          </div>
      </div>
      <div class="header-bottom">
          <div class="container">
              <div class="header-wrapper">
                  <div class="logo">
                      <a href="{{url('/')}}"><img src="{{ url('public/assets/images/logo.png')}}" alt="logo"></a>
                  </div>
                  <div class="menu-area">
                      <div class="menu">
                          <ul class="lab-ul">
                              <li>
                                  <a href="{{ url('/') }}">Startseite</a>
                              </li>

                              <li>
                                  <a href="{{ url('leistungsuebersicht-und-preise') }}">Leistungsübersicht und Preise</a>

                              </li>
                              <li>
                                  <a href="{{ url('nachhilfe-vor-ort') }}">Nachhilfe vor Ort</a>

                              </li>
                              <li>
                                  <a href="{{ url('kontakt') }}">Kontakt</a>

                              </li>

                          </ul>
                      </div>
                        @if(Auth::check())
                            <a href="{{ URL::to('courses') }}">Courses</a>
                            <a class="login" href="{{ URL::to('dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ url('login') }}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        @endif
                      <!-- <a href="signup.html" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a> -->

                      <!-- toggle icons -->
                      <div class="header-bar d-lg-none">
                          <span></span>
                          <span></span>
                          <span></span>
                      </div>
                      <div class="ellepsis-bar d-lg-none">
                          <i class="icofont-info-square"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- header section ending here -->