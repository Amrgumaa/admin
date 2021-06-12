<!-- LOGO -->
<div class="navbar-brand-box">
    <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="" height="20">
        </span>
    </a>

    <a href="index.html" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="" height="20">
        </span>
    </a>
</div>

<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
    <i class="fa fa-fw fa-bars"></i>
</button>

<div data-simplebar class="sidebar-menu-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fas fa-user"></i>
                    <span>User Management</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Users</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="{{ route('user.index') }}">All Users</a></li>
                            <li><a href="{{ route('user.create') }}">Create New User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Users activity</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="{{ route('activity.create') }}">Dashboard</a></li>
                            <li><a href="{{ route('activity.index') }}">Activity Log</a></li>
                            <li><a href="{{ route('activity.loginactivity') }}">Login Activity</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Apps</li>

            <li>
                <a href="calendar.html" class="waves-effect">
                    <i class="uil-calender"></i>
                    <span>Calendar</span>
                </a>
            </li>

            <li>
                <a href="chat.html" class=" waves-effect">
                    <i class="uil-comments-alt"></i>
                    <span class="badge rounded-pill bg-warning float-end">New</span>
                    <span>Chat</span>
                </a>
            </li>



        </ul>
    </div>
    <!-- Sidebar -->
</div>
