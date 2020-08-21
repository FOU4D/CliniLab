<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-star"></i>Account Settings</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('edit-account-info') }}"><i class="la la-unlock"></i> My Account</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('logout') }}"><i class="la la-sign-out"></i> Logout</a></li>
        </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('specimen') }}'><i class='nav-icon la la-question'></i> Specimens</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('test') }}'><i class='nav-icon la la-question'></i> Tests</a></li>