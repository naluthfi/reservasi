@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Detail permohonan peminjaman
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
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detail Peminjaman</h3>
                    </div>
                    <form role="form" method="POST"
                          action="{{ route('admin.reservation.action', ['id' => $request->id]) }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name"
                                       name="name" value="{{ $request->name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email"
                                       name="email" value="{{ $request->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="institution">Institusi</label>
                                <input type="text" class="form-control" id="institution"
                                       name="institution" value="{{ $request->institution }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="start_time">Waktu mulai peminjaman</label>
                                <input type="text" class="form-control" id="start_time"
                                       name="start_time" value="{{ $request->start_time }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="end_time">Waktu akhir peminjaman</label>
                                <input type="text" class="form-control" id="end_time"
                                       name="end_time" value="{{ $request->end_time }}" readonly>
                            </div>
                            <label>Daftar reservasi</label>
                            @foreach($request->items as $idx => $item)
                                <div class="form-group">
                                    @if($item->type == 'item')
                                        <input type="text" class="form-control" id="items-{{ $idx }}"
                                               value="{{ $item->pivot->quantity }} - {{ $item->name }}" readonly>
                                    @elseif($item->type == 'class')
                                        <input type="text" class="form-control" id="items-{{ $idx }}"
                                               value="{{ $item->name }}" readonly>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div class="box-footer">
                            @if($request->status == 'pending')
                                <button value="accept" name="action" type="submit" class="btn btn-primary">Terima
                                </button>
                                <button value="reject" name="action" type="submit" class="btn btn-danger">Tolak</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
