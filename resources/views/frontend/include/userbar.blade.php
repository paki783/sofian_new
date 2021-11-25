<ul class="navbar navbar-default navbar-modulelinks navbar-modulelinks-main">
    <li class="">
        <a href="{{ URL::to('login') }}" style="display: inline-block;">
            <span class="fa fa-sign-in"></span> Anmelden
        </a>
    </li>
    <li class="dropdown">
        <a href="{{ URL::to('lost-account-details') }}" style="display: inline-block;">
            <span class="fa fa-key"></span> Zugang
            <span class="hidden-xs">sdaten oder Kennwort</span> 
            wiederherstellen
        </a>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration: none;">&nbsp;
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="benutzer/lost-username.html">Benutzernamen vergessen</a>
            </li>
            <li>
                <a href="benutzer/lost-password.html">Kennwort vergessen</a>
            </li>
        </ul>
    </li>
</ul>