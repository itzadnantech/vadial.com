<nav class="navbar navbar-expand-md" style="position: sticky !important; top: 0; z-index: 1; width: 100%; background-color: white;">
    <a href="{{ url('/admin/home') }}"><img src="{{ url('/assets/images/logo.png') }}" class="logo-img1"></a>
    <ul class="navbar-nav ml-3 ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link color-grey margin-top-minus-5" href="#" id="navbardrop" data-toggle="dropdown">
                <p>
                    <b>{{ session()->get('user_name') }}</b><br>
                    VADial Properties
                </p>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/admin/manage_account') }}"><i class="fa   fa-user-o color-grey"> Manage Account</i></a>
                <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa   fa-sign-in color-grey"> Log Out</i></a>
            </div>
        </li>

        <li class="nav-item margin-top-10 ">
            <i class="fa fa-user-circle color-grey font-size-25"></i>
{{--            <img src="{{ url('/assets/uploads').'/'.'account/2021_04_18_06_59_15_blog--pic-1.png'}}" class="circle-img">--}}
        </li>
    </ul>
</nav>

<div class="icon-bar">
    <a href="{{ url('/admin/dashboard') }}" class="linkedin @if(isset($tab) && $tab == 'dashboard') iconbar-purple @endif"><i class="fa  fa-align-left"> </i><span>DASHBOARD</span></a>
    <a href="{{ url('/admin/calendar') }}" class="youtube @if(isset($tab) && $tab == 'calendar') iconbar-purple @endif"><i class="fa  fa-calendar"> </i><span>CALENDAR</span></a>
    <a href="{{ url('/admin/campaigns') }}" class="facebooke @if(isset($tab) && $tab == 'campaigns') iconbar-purple @endif"><i class="fa fa-bullhorn"> </i><span>COMPAIGNS</span></a>
    <a href="{{ url('/admin/crm') }}" class="twitter @if(isset($tab) && $tab == 'crm') iconbar-purple @endif"><i class="fa  fa-user"> </i><span>CRM</span></a>
    <a href="{{ url('/admin/pbx') }}" class="google @if(isset($tab) && $tab == 'pbx') iconbar-purple @endif"><i class="fa  fa-phone"> </i><span>PBX</span></a>
    <a href="{{ url('/admin/call_logs') }}" class="google @if(isset($tab) && $tab == 'call_logs') iconbar-purple @endif"><i class="fa  fa-line-chart"> </i><span>Reports</span></a>
    <a href="{{ url('/admin/account') }}" class="youtube @if(isset($tab) && $tab == 'account') iconbar-purple @endif"><i class="fa fa-gear"> </i><span>ACCOUNT</span></a>
</div>
