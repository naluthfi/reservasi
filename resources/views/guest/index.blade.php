@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('guest.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Ini dashboard
            <small>Yang ini subjudul</small>
        </h1>
    </section>
    <section class="content">
        Isi dashboardnya disini
    </section>
@endsection
