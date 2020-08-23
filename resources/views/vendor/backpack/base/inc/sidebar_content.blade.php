<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<!-- contacts -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-suitcase"></i> Contacts</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('individual') }}"><i class="nav-icon la la-user"></i> <span>Individuals</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('institution') }}"><i class="nav-icon la la-university"></i> <span>Institutions</span></a></li>
    </ul>
</li>


<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>


<!-- References Database -->
<li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-folder"></i>Lab References</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('test') }}"><i class="la la-pencil-square"></i> Tests</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('collection') }}"><i class="la la-reorder"></i> Test Collections</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('specimen') }}"><i class="la la-wrench"></i> Test Specimens</a></li>
        </ul>
</li>

<!-- Account and logout -->
<li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-star"></i>Account Settings</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('edit-account-info') }}"><i class="la la-unlock"></i> My Account</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('logout') }}"><i class="la la-sign-out"></i> Logout</a></li>
        </ul>
</li>




<li class='nav-item'><a class='nav-link' href='{{ backpack_url('visit') }}'><i class='nav-icon la la-question'></i> Visits</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('collect') }}'><i class='nav-icon la la-question'></i> Collects</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('request') }}'><i class='nav-icon la la-question'></i> Requests</a></li>