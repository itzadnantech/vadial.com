<nav class="navbar navbar-expand-md bg-white  navbar-height" style="position: sticky !important; top: 0; z-index: 1; width: 100%;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{ url('/assets/images/logo.png') }}" class="logo-img"></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"  aria-hidden="true" aria-expanded="collapsibleNavbar">
            <i class="fa" aria-hidden="true"></i>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/home') }}" id="navbardrop">
                        HOME
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/about_us') }}" id="navbardrop">
                        ABOUT US
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/home#FAQ') }}" id="navbardrop">
                        FAQ
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/home#PRICING') }}" id="navbardrop">
                        PRICING
                    </a>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/home#SERVICES') }}" id="navbardrop">
                        SERVICES
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/blog') }}" id="navbardrop"> BLOG </a>
                </li>

                @if(Session::has('role'))
                    @if(Session::get('role') == 'user')
                            <li class="nav-item dropdown">
                                <h6 class="nav-link margin-left-50" id="navbardrop"> WELCOME </h6>
                            </li>
                        <li class="nav-item">
                            <h6 style="color: #0090ff" class="nav-link" id="navbardrop"> {{ session()->get('user_name') }} </h6>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/logout') }}"><button class="btn btn-warning">SIGN OUT</button></a>
                        </li>
                    @endif
                @else
                    @if(isset($tab) && $tab == 'guest')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}"><button class="btn btn-warning margin-left-125">LOGIN</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}"><button class="btn btn-warning">SIGN UP</button></a>
                        </li>
                    @endif
                    @if(isset($tab) && $tab == 'register')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}"><button class="btn btn-warning margin-left-125">LOGIN</button></a>
                        </li>
                    @endif
                    @if(isset($tab) && $tab == 'login')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}"><button class="btn btn-warning margin-left-125">SIGN UP</button></a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>
