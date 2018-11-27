<!DOCTYPE html>
<html>
<head>
    @include('template.adminlte.head')
    @yield('style')
</head>
<body class="hold-transition sidebar-mini skin-green-light">
<div class="wrapper">
    @inject('auth', "Illuminate\Support\Facades\Auth")
    <div class="main-header">
        @include('template.adminlte.header')
    </div>
    <div class="main-sidebar">
        @include('template.adminlte.sidebar')
    </div>
    <div class="content-wrapper">
        @include('template.adminlte.status')
        @yield('content')
    </div>
    <div class="main-footer">
        @include('template.adminlte.footer')
    </div>
</div>
@include('template.adminlte.script')
@yield('script')
</body>
</html>
