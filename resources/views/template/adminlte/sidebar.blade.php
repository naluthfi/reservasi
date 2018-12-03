<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
@auth
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src={{asset('img/admin-logo.png')}} class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ $auth::user()->name }}</p>
            <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
@endauth
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        @yield('menu')
    </ul>
</section>
<!-- /.sidebar -->
