<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <ul class="navbar-nav side-bar">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/account/managers') }}">
                <h6  class="cool-link @if(isset($menu) && $menu == 'managers') color-purple @else color-black @endif" >Mangers<i class="fa fa-gear mange fa-font-size">M</i> </h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/account/agents') }}">
                <h6 class="cool-link @if(isset($menu) && $menu == 'agents') color-purple @else color-black @endif">Agents <i class="fa  fa-gear mange fa-font-size">A</i></h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/account/teams') }}">
                <h6 class="cool-link @if(isset($menu) && $menu == 'teams') color-purple @else color-black @endif ">Teams  <i class="fa fa-users  mange fa-font-size"></i></h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <h6 class="cool-link color-black">Audio <i class="fa fa-angle-right margin-left-135"></i><i class="fa  fa-music mange fa-font-size"></i></h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <h6 class="cool-link color-black">Billing <i class="fa  fa-dollar mange fa-font-size"></i></h6></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/account/support') }}">
                <h6 class="cool-link @if(isset($menu) && $menu == 'support') color-purple @else color-black @endif">Support <i class="fa fa-headphones mange fa-font-size"></i></h6></a>
        </li>

    </ul>
</div>
