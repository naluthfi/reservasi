<!-- Logo -->
<a href="{{ route('guest.dashboard.index') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>R</b>MB</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Reservasi</b> MB</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            @guest
                <li>
                    <a href="{{ route('auth.login') }}">Login</a>
                </li>
            @endguest
            @auth
            <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src={{asset('img/admin-logo.png')}} class="user-image" alt="User Image"/>
                        <span class="hidden-xs">{{ $auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src={{asset('img/admin-logo.png')}} class="img-circle" alt="User Image">
                            <p>
                                {{ $auth::user()->name }}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{ route('auth.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            @endauth
        </ul>
    </div>
</nav>