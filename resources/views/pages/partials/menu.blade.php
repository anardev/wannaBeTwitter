<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                WannaBeTwitter
            </a>
        </div>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/login') }}">Prijava</a></li>
                    <li><a href="{{ url('/register') }}">Registracija</a></li>
                @else
                    @if (Auth::check())
                        <li><a href="{{ route('statuses') }}">Home</a>
                    @endif
                @endif
                @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->username }}
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('timeline' , Auth::user()->username ) }}">Profil</a>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Odjavi se</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            <!-- Search Form -->
            <div class="col-sm-3 col-md-3 pull-right">
                @include('pages.partials.search')
            </div>
        </div>
    </div>
</nav>