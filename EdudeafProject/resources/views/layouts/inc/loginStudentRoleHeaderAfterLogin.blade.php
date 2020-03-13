<header>
    <div class="header">
        <nav class="nav-desktop col-md-12 nevbar navbar-expand-lg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <a class="navbar-brand" href="/">
                            <img src="/../img/logo_edudeaf.png" alt="">
                        </a>


                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown" style="display: none">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
