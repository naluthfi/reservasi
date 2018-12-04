@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Dashboard Admin
        </h1>
    </section>
    <section class="content">
        @if(!empty($message))
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Info!</h4>
                {{ $message }}
            </div>
        @endif

    </section>
@endsection
