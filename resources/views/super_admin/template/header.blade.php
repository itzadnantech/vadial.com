<nav class="navbar navbar-expand-md" style="position: sticky !important; top: 0; z-index: 1; width: 100%; background-color: white;">
    <a href="#"><img src="{{ url('/assets/images/logo.png') }}" class="logo-img1"></a>
    <ul class="navbar-nav ml-3 ml-auto">


        <li class="nav-item dropdown">
            <p><b>{{ session()->get('user_name') }}</b><br>
                VADial Properties</p>
        </li>
        <li class="nav-item margin-top-10 ">
            <i class="fa fa-user-circle color-grey font-size-25"></i>

        </li>
    </ul>



</nav>


<!-----<div class="side-bar1"></div>---------->

<div class="icon-bar">
    <a href="{{ url('/super/customer') }}" class="facebooke @if(isset($menu) && $menu == 'customer') iconbar-purple @endif"><i class="fa fa-user"></i><span>CUSTOMER</span></a>
    <a href="{{ url('/super/manage_account') }}" class="twitter @if(isset($menu) && $menu == 'manage') iconbar-purple @endif"><i class="fa fa-gears"> </i><span>MANGE ACCOUNT</span></a>
    <a href="{{ url('/logout') }}" class="google "><i class="fa fa-power-off"> </i><span>LOGOUT</span></a>
</div>
