
    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="{{ Request::is('admin/dashboard') ? 'active':'' }}" ><a href="/admin/dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n="eCommerce Dashboard">Admin Dashboard</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Ecommerce">Dashboard</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Dashboard"></i>
                </li>
                <li class=" nav-item {{ Request::is('admin/users') ? 'active':'' }}"><a href="{{ route('users.index') }}"><i class="la la-users"></i><span class="menu-title" data-i18n="Invoice">Users</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('users.index') }}"><i></i><span data-i18n="users List"> Users List</span></a>
                        </li>
                        <li><a class="menu-item" href="{{ route('users.create') }}"><i></i><span data-i18n="users Addition">Add User</span></a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
