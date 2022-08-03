<nav class="navbar navbar-expand-md" style="position: sticky !important; top: 0; z-index: 1; width: 100%; background-color: white;">
    <a href="{{ url('/admin/home') }}"><img src="{{ url('/assets/images/logo.png') }}" class="logo-img1"></a>
    <ul class="navbar-nav ml-3 ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link color-grey margin-top-minus-5" href="#" id="navbardrop" data-toggle="dropdown">
                <p><b>{{ session()->get('user_name') }}</b><br>
                    VADial Properties</p>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/agent/manage_account') }}"><i class="fa   fa-user-o color-grey"> Manage Account</i></a>
                <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa   fa-sign-in color-grey"> Log Out</i></a>
            </div>
        </li>

        <li class="nav-item margin-top-10 ">
            <i class="fa fa-user-circle color-grey font-size-25"></i>

        </li>
    </ul>
</nav>


<!-----<div class="side-bar1"></div>---------->

<div class="icon-bar1">
    <a href="{{ url('/agent/home') }}" class="linkedin @if(isset($tab) && $tab == 'home') iconbar-purple @endif"><i class="fa fa-home"> </i></a>
    <a href="Agent%20Panel%20person.html" class="facebook "><i class="fa  fa-user-plus"> </i></a>
    <a href="Agent%20Panel%20clock.html" class="twitter"><i class="fa  fa-rotate-left"> </i></a>
    <a href="Agent%20Panel%20call%20person.html" class="google"><i class="fa  fa-phone"> </i></a>
    <a href="Agent%20Panel%20envelope.html" class="youtube"><i class="fa  fa-envelope"> </i></a>
</div>
